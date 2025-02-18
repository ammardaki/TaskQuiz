<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * عرض صفحة تسجيل الدخول.
     */
    public function create(): View
    {
        return view('auth.login'); // تأكد من أن صفحة 'auth.login' موجودة
    }

    /**
     * معالجة طلب تسجيل الدخول.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // توجيه المستخدم إلى صفحة home بعد تسجيل الدخول
        return redirect()->route('surahs.index');
    }

    /**
     * تدمير الجلسة المسجلة.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // توجيه المستخدم إلى صفحة home بعد الخروج
        return redirect()->route('login');
    }
}
