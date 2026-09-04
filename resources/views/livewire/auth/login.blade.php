<div class="min-h-[80vh] flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <!-- Logo -->
        <a href="/" class="flex items-center justify-center gap-3 mb-6 group">
            <div class="w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center shadow-lg shadow-blue-500/20 group-hover:scale-105 transition-transform duration-200">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                </svg>
            </div>
            <div>
                <span class="text-2xl font-bold tracking-tight text-slate-900 block leading-tight">EduManage</span>
                <span class="text-xs text-slate-500 font-medium block">School Management System</span>
            </div>
        </a>

        <h2 class="text-center text-2xl font-extrabold text-slate-900 tracking-tight">
            Sign in to your account
        </h2>
        <p class="mt-2 text-center text-xs text-slate-500">
            Enter your credentials to access your dashboard portal
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-6 shadow-xl shadow-slate-200/50 rounded-2xl border border-slate-100 sm:px-10">
            <form wire:submit="login" class="space-y-5">
                <div>
                    <label for="email" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-1">
                        Email Address
                    </label>
                    <input
                        id="email"
                        type="email"
                        wire:model="email"
                        required
                        autofocus
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all placeholder:text-slate-400"
                        placeholder="you@example.com"
                    >
                    @error('email')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-1">
                        Password
                    </label>
                    <input
                        id="password"
                        type="password"
                        wire:model="password"
                        required
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                        placeholder="••••••••"
                    >
                    @error('password')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input
                            id="remember_me"
                            type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-slate-300 rounded"
                        >
                        <label for="remember_me" class="ml-2 block text-xs text-slate-600">
                            Remember me
                        </label>
                    </div>
                </div>

                <button
                    type="submit"
                    class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl shadow-md shadow-blue-500/20 transition-all text-sm cursor-pointer"
                >
                    Sign In
                </button>
            </form>

            <div class="mt-6 text-center border-t border-slate-100 pt-6">
                <p class="text-xs text-slate-500">
                    Don't have an account yet?
                    <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:text-blue-700 ml-1">
                        Create an account
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>