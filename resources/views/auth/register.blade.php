<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-800 to-indigo-600 p-6">
        <div class="bg-white dark:bg-gray-900 shadow-2xl rounded-3xl p-8 w-full max-w-lg transition-all transform hover:scale-105"
            style="font-family: 'Amiri', serif;">

            <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-100 text-center mb-6">✨ إنشاء حساب جديد</h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- الاسم -->
                <div>
                    <x-input-label for="name" value="👤 الاسم الكامل" class="text-right text-lg" dir="rtl" />
                    <x-text-input id="name"
                        class="w-full p-3 border-2 border-gray-300 dark:border-gray-700 rounded-lg text-right text-lg shadow-md focus:ring-4 focus:ring-indigo-500"
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" dir="rtl"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                </div>

                <!-- البريد الإلكتروني -->
                <div>
                    <x-input-label for="email" value="📧 البريد الإلكتروني" class="text-right text-lg"
                        dir="rtl" />
                    <x-text-input id="email"
                        class="w-full p-3 border-2 border-gray-300 dark:border-gray-700 rounded-lg text-right text-lg shadow-md focus:ring-4 focus:ring-indigo-500"
                        type="email" name="email" :value="old('email')" required autocomplete="username" dir="rtl"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- كلمة المرور -->
                <div>
                    <x-input-label for="password" value="🔑 كلمة المرور" class="text-right text-lg" dir="rtl" />
                    <x-text-input id="password"
                        class="w-full p-3 border-2 border-gray-300 dark:border-gray-700 rounded-lg text-right text-lg shadow-md focus:ring-4 focus:ring-indigo-500"
                        type="password" name="password" required autocomplete="new-password" dir="rtl"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- تأكيد كلمة المرور -->
                <div>
                    <x-input-label for="password_confirmation" value="✅ تأكيد كلمة المرور" class="text-right text-lg"
                        dir="rtl" />
                    <x-text-input id="password_confirmation"
                        class="w-full p-3 border-2 border-gray-300 dark:border-gray-700 rounded-lg text-right text-lg shadow-md focus:ring-4 focus:ring-indigo-500"
                        type="password" name="password_confirmation" required autocomplete="new-password" dir="rtl"/>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                </div>

                <!-- زر التسجيل -->
                <div>
                    <x-primary-button
                        class="w-full py-3 text-xl bg-gradient-to-r from-indigo-600 to-purple-500 hover:from-purple-600 hover:to-indigo-700 text-white rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg text-center flex justify-center">
                        🚀 إنشاء حساب
                    </x-primary-button>

                </div>

                <!-- تسجيل الدخول -->
                <div class="text-center mt-4">
                    <p class="text-gray-600 dark:text-gray-400 text-lg">
                        لديك حساب بالفعل؟
                        <a href="{{ route('login') }}"
                            class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline transition duration-300">
                            تسجيل الدخول الآن
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
