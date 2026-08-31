<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduPulse - Smart School Management System</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-slate-950 font-sans text-slate-100 antialiased selection:bg-indigo-500 selection:text-white">

    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 backdrop-blur-md bg-slate-950/80 border-b border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-indigo-600 to-violet-500 flex items-center justify-center text-white shadow-lg shadow-indigo-500/25 group-hover:scale-105 transition-transform duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                    </svg>
                </div>
                <div>
                    <span class="text-xl font-bold tracking-tight text-white block">EduPulse</span>
                    <span class="text-xs text-indigo-400 font-medium block">School Management</span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#features" class="hover:text-indigo-400 transition-colors">Features</a>
                <a href="#modules" class="hover:text-indigo-400 transition-colors">Modules</a>
                <a href="#portals" class="hover:text-indigo-400 transition-colors">Portals</a>
            </nav>

            <!-- Actions -->
            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 rounded-lg text-sm font-semibold bg-indigo-600 hover:bg-indigo-500 text-white transition-all shadow-md shadow-indigo-600/20">
                            Go to Dashboard
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-lg text-sm font-semibold bg-indigo-600 hover:bg-indigo-500 text-white transition-all shadow-md shadow-indigo-600/20">
                            Register Account
                        </a>
                    @endauth
                @else
                    <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-lg text-sm font-semibold bg-indigo-600 hover:bg-indigo-500 text-white transition-all shadow-md shadow-indigo-600/20">
                        Get Started
                    </a>
                @endif
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="relative overflow-hidden pt-20 pb-24 lg:pt-28 lg:pb-36">
            <!-- Background Glow -->
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-600/15 blur-[140px] rounded-full pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-900 border border-indigo-500/30 text-indigo-300 text-xs font-semibold uppercase tracking-wider mb-8 shadow-inner">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Next-Generation School ERP System
                </div>

                <!-- Main Title -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-white tracking-tight leading-tight max-w-5xl mx-auto">
                    Smart Education Management for Modern Schools
                </h1>

                <!-- Subtitle -->
                <p class="mt-6 text-lg sm:text-xl text-slate-400 max-w-3xl mx-auto font-light leading-relaxed">
                    Streamline academics, attendance, examinations, fee collection, timetables, and communication into one unified, powerful platform.
                </p>

                <!-- Hero Buttons -->
                <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ route('register') }}" class="px-8 py-4 rounded-xl text-base font-bold bg-indigo-600 hover:bg-indigo-500 text-white transition-all shadow-lg shadow-indigo-600/30 hover:scale-[1.02]">
                        Join Portal / Register
                    </a>
                    <a href="#features" class="px-8 py-4 rounded-xl text-base font-bold bg-slate-900 hover:bg-slate-800 text-slate-200 border border-slate-800 transition-all hover:scale-[1.02]">
                        Explore Modules
                    </a>
                </div>

                <!-- Stats Grid -->
                <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                    <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm">
                        <div class="text-3xl lg:text-4xl font-extrabold text-indigo-400">12+</div>
                        <div class="text-xs sm:text-sm font-medium text-slate-400 mt-1">Core Modules</div>
                    </div>
                    <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm">
                        <div class="text-3xl lg:text-4xl font-extrabold text-indigo-400">4 Roles</div>
                        <div class="text-xs sm:text-sm font-medium text-slate-400 mt-1">Admin, Teacher, Student, Parent</div>
                    </div>
                    <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm">
                        <div class="text-3xl lg:text-4xl font-extrabold text-indigo-400">99.9%</div>
                        <div class="text-xs sm:text-sm font-medium text-slate-400 mt-1">Attendance Accuracy</div>
                    </div>
                    <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm">
                        <div class="text-3xl lg:text-4xl font-extrabold text-indigo-400">Livewire 4</div>
                        <div class="text-xs sm:text-sm font-medium text-slate-400 mt-1">Real-time Reactivity</div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Core Features Section -->
        <section id="features" class="py-20 bg-slate-900/40 border-t border-b border-slate-800/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight">Everything your school needs in one place</h2>
                    <p class="mt-4 text-slate-400 text-base">Designed for administrators, teachers, students, and parents with dedicated workflows.</p>
                </div>

                <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Feature 1 -->
                    <div class="p-8 rounded-2xl bg-slate-900 border border-slate-800 hover:border-indigo-500/50 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white">Multi-Role Security</h3>
                        <p class="mt-3 text-sm text-slate-400 leading-relaxed">Role-based permission middleware safeguarding access for Admin, Teacher, Student, and Parent accounts.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="p-8 rounded-2xl bg-slate-900 border border-slate-800 hover:border-indigo-500/50 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white">Attendance & Schedules</h3>
                        <p class="mt-3 text-sm text-slate-400 leading-relaxed">Track daily attendance, manage automated class timetables, and send instant parent alerts.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="p-8 rounded-2xl bg-slate-900 border border-slate-800 hover:border-indigo-500/50 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white">Exams & Gradebooks</h3>
                        <p class="mt-3 text-sm text-slate-400 leading-relaxed">Seamless score entry for teachers, grade calculation, and report card generation.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Portals Section -->
        <section id="portals" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="flex flex-col md:flex-row items-center justify-between gap-12 bg-gradient-to-r from-indigo-900/30 to-violet-900/30 p-8 sm:p-12 rounded-3xl border border-indigo-500/20">
                    <div>
                        <span class="text-xs font-bold text-indigo-400 uppercase tracking-widest block mb-2">Get Started Today</span>
                        <h2 class="text-3xl font-extrabold text-white">Ready to explore the portal?</h2>
                        <p class="text-slate-300 mt-2 max-w-xl">Create your account or log in to manage your school profile and academic records.</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="{{ route('register') }}" class="px-6 py-3.5 rounded-xl font-bold bg-indigo-600 hover:bg-indigo-500 text-white transition-all shadow-lg shadow-indigo-600/30">
                            Create Account
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800 bg-slate-950 py-12 text-slate-500 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <span class="font-bold text-slate-300">EduPulse</span>
                <span>&copy; {{ date('Y') }} All rights reserved.</span>
            </div>
            <div class="flex items-center gap-6">
                <span>Built with Laravel 13 & Livewire 4</span>
            </div>
        </div>
    </footer>

</body>
</html>
