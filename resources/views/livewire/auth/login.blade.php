<<<<<<< Updated upstream
<div>
    <h1>Login</h1>

    <form wire:submit="login">

        <div>
            <label>Email</label>

            <input
                type="email"
                wire:model="email"
            >

            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <label>Password</label>

            <input
                type="password"
                wire:model="password"
            >

            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button type="submit">
            Login
        </button>

    </form>

    <br>

    <p>
        Don't have an account?
        <a href="/register" wire:navigate>
            Register
        </a>
    </p>
=======
<div class="w-full flex items-center justify-center">
    <div class="w-full max-w-4xl bg-[#EBF3FE] rounded-3xl overflow-hidden flex flex-col md:flex-row items-stretch gap-6 lg:gap-8">
        
        <!-- Left Column: Branding & Illustration -->
        <div class="w-full md:w-1/2 flex flex-col items-center justify-between p-6 sm:p-8 text-center min-h-[420px]">
            <!-- Logo & Title Header -->
            <div class="flex flex-col items-center pt-2">
                <!-- Graduation Cap Icon -->
                <div class="w-16 h-16 rounded-2xl bg-transparent text-[#0F2942] flex items-center justify-center mb-3">
                    <svg class="w-16 h-16 text-[#0F2942]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4.13C5 19.46 8.14 21 12 21s7-1.54 7-3.69v-4.13l-7 3.82-7-3.82z"/>
                    </svg>
                </div>
                
                <h1 class="text-2xl sm:text-3xl font-extrabold text-[#0F2942] tracking-tight">
                    School Management
                </h1>
                <p class="text-slate-500 text-xs sm:text-sm font-medium mt-1">
                    Login to your account
                </p>
            </div>

            <!-- Illustration -->
            <div class="my-auto py-4 w-full flex justify-center">
                <img 
                    src="{{ asset('images/login_illustration.jpg') }}" 
                    alt="School Management Illustration" 
                    class="w-60 sm:w-72 max-h-64 object-contain mx-auto transition-transform hover:scale-105 duration-300"
                >
            </div>
        </div>

        <!-- Right Column: Login Card Form -->
        <div class="w-full md:w-1/2 bg-white rounded-3xl p-6 sm:p-10 shadow-xl shadow-blue-900/5 border border-slate-100 flex flex-col justify-center">
            
            <div class="mb-6">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0F2942] tracking-tight">
                    Welcome Back!
                </h2>
                <p class="text-slate-400 text-xs sm:text-sm font-medium mt-1">
                    Please login to your account
                </p>
            </div>

            <form wire:submit="login" class="space-y-4">
                
                <!-- Email Address Field -->
                <div>
                    <label for="email" class="block text-xs font-bold text-slate-700 mb-1.5">
                        Email Address
                    </label>
                    <div class="relative rounded-xl border border-slate-200 focus-within:border-blue-600 focus-within:ring-2 focus-within:ring-blue-600/20 transition-all flex items-center bg-white">
                        <div class="pl-3.5 text-slate-400 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <input
                            id="email"
                            type="email"
                            wire:model="email"
                            required
                            autofocus
                            class="w-full py-2.5 sm:py-3 pl-3 pr-4 text-sm text-slate-800 placeholder-slate-400 focus:outline-none bg-transparent"
                            placeholder="Enter your email address"
                        >
                    </div>
                    @error('email')
                        <span class="text-red-500 text-xs mt-1 block font-semibold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-xs font-bold text-slate-700 mb-1.5">
                        Password
                    </label>
                    <div class="relative rounded-xl border border-slate-200 focus-within:border-blue-600 focus-within:ring-2 focus-within:ring-blue-600/20 transition-all flex items-center bg-white">
                        <div class="pl-3.5 text-slate-400 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input
                            id="password"
                            type="password"
                            wire:model="password"
                            required
                            class="w-full py-2.5 sm:py-3 pl-3 pr-4 text-sm text-slate-800 placeholder-slate-400 focus:outline-none bg-transparent"
                            placeholder="Enter your password"
                        >
                    </div>
                    @error('password')
                        <span class="text-red-500 text-xs mt-1 block font-semibold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password Row -->
                <div class="flex items-center justify-between pt-1">
                    <label for="remember" class="flex items-center cursor-pointer select-none">
                        <input
                            id="remember"
                            type="checkbox"
                            wire:model="remember"
                            class="w-4 h-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500 cursor-pointer"
                        >
                        <span class="ml-2 text-xs font-semibold text-slate-600">Remember me</span>
                    </label>

                    <a href="#" class="text-xs font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full mt-2 py-3.5 px-4 bg-[#0066FF] hover:bg-blue-700 text-white font-bold text-sm rounded-xl shadow-lg shadow-blue-500/25 transition-all duration-200 cursor-pointer text-center"
                >
                    Login
                </button>
            </form>

            <!-- Footer Link -->
            <div class="mt-8 text-center text-xs text-slate-500 font-medium">
                Don't have an account?
                <a href="#" class="text-blue-600 font-bold hover:underline ml-1">
                    Contact administrator
                </a>
            </div>

        </div>

    </div>
>>>>>>> Stashed changes
</div>