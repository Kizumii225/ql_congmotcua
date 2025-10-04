<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Account24;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class Login1Controller extends Controller
{
    /**
     * Hiển thị form đăng nhập
     */
    public function showLoginForm()
    {
        return view('dongphuc.form.sign_in');
    }

    /**
     * Chuyển hướng sang trang đăng nhập Google
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Xử lý callback Google trả về
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Kiểm tra tồn tại user trong DB
            $user = Account24::where('google_id', $googleUser->getId())
                ->orWhere('email', $googleUser->getEmail())
                ->first();

            if (!$user) {
                // Không tồn tại => quay lại login form kèm thông báo
                Auth::logout();
                return redirect()->route('login.form')
                    ->with('error', 'Tài khoản Google này chưa được đăng ký trong hệ thống!');
            }

            // Nếu user tồn tại => cập nhật google_id (nếu cần)
            if (!$user->google_id) {
                $user->google_id = $googleUser->getId();
                $user->save();
            }

            // Đăng nhập vào hệ thống Laravel
            Auth::login($user);

            // dd(Auth::user());

            // Lưu vào session
            session(['google_id' => $googleUser->getId()]);

            return redirect()->route('home.index')->with('success', 'Đăng nhập thành công!');
        } catch (Exception $e) {
            Auth::logout();
            return redirect()->route('login.form')
                ->with('error', 'Lỗi đăng nhập Google: ' . $e->getMessage());
        }
    }

    /**
     * Đăng xuất
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Xóa session google_id
        $request->session()->forget('google_id');

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form')->with('success', 'Đã đăng xuất!');
    }
}
