<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-white dark:bg-gray-900 shadow-2xl rounded-2xl p-8 w-full max-w-md transition-all transform hover:scale-105"
        style="font-family: 'Amiri', serif;">

        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 text-center mb-6">🔐 مرحباً بك من جديد</h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- البريد الإلكتروني -->
            <div>
                <x-input-label for="email" value="البريد الإلكتروني" class="text-right" dir="rtl"
                    style="font-family: 'Amiri', serif;" />

                <x-text-input id="email" class="w-full" type="email" name="email" required autofocus
                    autocomplete="username" dir="rtl" style="font-family: 'Amiri', serif;" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- كلمة المرور -->
            <div>
                <x-input-label for="password" value="كلمة المرور" class="text-right" dir="rtl"
                    style="font-family: 'Amiri', serif;" />
                <x-text-input id="password" class="w-full" type="password" name="password" required
                    autocomplete="current-password" dir="rtl" style="font-family: 'Amiri', serif;" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- زر تسجيل الدخول -->
            <div>
                <x-primary-button
                    class="w-full bg-gradient-to-r from-indigo-600 to-purple-500 hover:from-purple-600 hover:to-indigo-700 transition-all duration-300 text-center flex justify-center items-center"
                    dir="rtl" style="font-family: 'Amiri', serif;">
                    تسجيل الدخول
                </x-primary-button>

            </div>

            <!-- رابط التسجيل -->
            <div class="text-center mt-4">
                <p class="text-gray-600 dark:text-gray-400" style="font-family: 'Amiri', serif;">ليس لديك حساب؟
                    <a href="{{ route('register') }}"
                        class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline transition duration-300">
                        إنشاء حساب جديد
                    </a>
                </p>
            </div>
        </form>
    </div>
</x-guest-layout>
