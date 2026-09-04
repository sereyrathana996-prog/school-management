<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduManage - Smart School Management System</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-[#F8FAFC] font-sans text-slate-800 antialiased selection:bg-blue-600 selection:text-white">

    <!-- Top Navigation Bar -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- Logo & Brand -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white flex items-center justify-center shadow-md shadow-blue-500/20 group-hover:scale-105 transition-transform duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                    </svg>
                </div>
                <div>
                    <span class="text-xl font-bold tracking-tight text-slate-900 block leading-tight">EduManage</span>
                    <span class="text-[11px] text-slate-500 font-medium block">School Management System</span>
                </div>
            </a>

            <!-- Center Navigation Links -->
            <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="/" class="text-blue-600 font-semibold border-b-2 border-blue-600 py-6 -mb-[1px]">Home</a>
                <a href="#about" class="hover:text-blue-600 transition-colors py-6">About Us</a>
                <a href="#features" class="hover:text-blue-600 transition-colors py-6">Features</a>
                <a href="#modules" class="hover:text-blue-600 transition-colors py-6">Modules</a>
                <a href="#pricing" class="hover:text-blue-600 transition-colors py-6">Pricing</a>
                <a href="#contact" class="hover:text-blue-600 transition-colors py-6">Contact Us</a>
            </nav>

            <!-- Action Buttons -->
            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-4 py-2.5 rounded-lg text-sm font-semibold bg-blue-600 hover:bg-blue-700 text-white transition-all shadow-sm shadow-blue-500/20">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2.5 rounded-lg text-sm font-semibold text-slate-700 border border-slate-300 hover:bg-slate-50 transition-all cursor-pointer">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="px-5 py-2.5 rounded-lg text-sm font-semibold text-slate-700 border border-slate-300 hover:bg-slate-50 hover:border-slate-400 transition-all">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-lg text-sm font-semibold bg-blue-600 hover:bg-blue-700 text-white transition-all shadow-sm shadow-blue-500/20">
                        Get Started
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="relative overflow-hidden pt-12 pb-20 lg:pt-16 lg:pb-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- Left Hero Content -->
                    <div class="lg:col-span-6 z-10">
                        
                        <!-- Pill Badge -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-blue-600 text-xs font-semibold mb-6">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356.257l4 4a1 1 0 001.388 0l4-4a1 1 0 01.356-.257l2.644-1.131a1 1 0 000-1.84l-7-3z"/>
                                <path d="M4.31 10.382l-1.922.824a1 1 0 000 1.84l7 3a1 1 0 000 0l7-3a1 1 0 000-1.84l-1.922-.824a.999.999 0 00-.83 0L10 13.882l-4.858-2.08a.999.999 0 00-.832 0z"/>
                            </svg>
                            Welcome to EduManage
                        </div>

                        <!-- Main Title -->
                        <h1 class="text-4xl sm:text-5xl lg:text-[56px] font-extrabold text-slate-900 tracking-tight leading-[1.12]">
                            Smart School<br>Management <span class="text-blue-600">System</span>
                        </h1>

                        <!-- Subtitle Paragraph -->
                        <p class="mt-6 text-base sm:text-lg text-slate-600 leading-relaxed max-w-xl font-normal">
                            EduManage helps schools and colleges automate their daily operations, manage data efficiently, and improve communication between students, teachers, parents, and staff.
                        </p>

                        <!-- Action Buttons -->
                        <div class="mt-8 flex flex-wrap items-center gap-4">
                            @guest
                                <a href="{{ route('register') }}" class="px-6 py-3.5 rounded-xl text-sm font-semibold bg-blue-600 hover:bg-blue-700 text-white transition-all shadow-md shadow-blue-600/25 inline-flex items-center gap-2 group">
                                    Get Started
                                    <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </a>
                            @else
                                <a href="{{ url('/dashboard') }}" class="px-6 py-3.5 rounded-xl text-sm font-semibold bg-blue-600 hover:bg-blue-700 text-white transition-all shadow-md shadow-blue-600/25 inline-flex items-center gap-2 group">
                                    Go to Dashboard
                                    <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </a>
                            @endguest
                            <a href="#features" class="px-6 py-3.5 rounded-xl text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:border-blue-300 hover:text-blue-600 transition-all inline-flex items-center gap-2 group">
                                Learn More
                                <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform text-slate-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>

                        <!-- Stats Bar Component -->
                        <div class="mt-12 p-4 bg-white rounded-2xl border border-slate-200/80 shadow-xl shadow-slate-200/40 max-w-xl">
                            <div class="grid grid-cols-4 gap-2 sm:gap-4 divide-x divide-slate-100">
                                
                                <!-- Stat 1 -->
                                <div class="flex items-center gap-3 px-2 sm:px-3 first:pl-1">
                                    <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm sm:text-base font-extrabold text-slate-900 leading-none">1,250+</div>
                                        <div class="text-[11px] font-medium text-slate-500 mt-0.5">Students</div>
                                    </div>
                                </div>

                                <!-- Stat 2 -->
                                <div class="flex items-center gap-3 px-2 sm:px-3">
                                    <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm sm:text-base font-extrabold text-slate-900 leading-none">120+</div>
                                        <div class="text-[11px] font-medium text-slate-500 mt-0.5">Teachers</div>
                                    </div>
                                </div>

                                <!-- Stat 3 -->
                                <div class="flex items-center gap-3 px-2 sm:px-3">
                                    <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 0H7m3 0h4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm sm:text-base font-extrabold text-slate-900 leading-none">45+</div>
                                        <div class="text-[11px] font-medium text-slate-500 mt-0.5">Classes</div>
                                    </div>
                                </div>

                                <!-- Stat 4 -->
                                <div class="flex items-center gap-3 px-2 sm:px-3">
                                    <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm sm:text-base font-extrabold text-slate-900 leading-none">25+</div>
                                        <div class="text-[11px] font-medium text-slate-500 mt-0.5">Subjects</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Right Hero Image with Arched Cutout & Blue Swoosh Base -->
                    <div class="lg:col-span-6 relative flex justify-center lg:justify-end">
                        
                        <!-- Decorative Blue Accent Curve Background -->
                        <div class="absolute -bottom-6 -right-6 w-[90%] h-[75%] bg-blue-600 rounded-b-[180px] rounded-tl-[120px] -z-0 transform rotate-[-4deg] opacity-95 shadow-xl shadow-blue-600/30"></div>
                        
                        <!-- Arch Image Container -->
                        <div class="relative z-10 w-full max-w-lg lg:max-w-md xl:max-w-lg aspect-[4/3] rounded-t-[180px] lg:rounded-t-[220px] overflow-hidden border-4 border-white shadow-2xl bg-white">
                            @if(file_exists(public_path('images/hero_students.jpg')))
                                <img 
                                    src="{{ asset('images/hero_students.jpg') }}" 
                                    alt="EduManage High School Students" 
                                    class="w-full h-full object-cover object-center"
                                >
                            @else
                                <div class="w-full h-full bg-slate-200 flex items-center justify-center text-slate-400 font-medium">
                                    Hero Students Image
                                </div>
                            @endif
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 bg-white border-t border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto">
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-600 block mb-2">FEATURES</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Everything You Need to Manage Your School</h2>
                    <p class="mt-3 text-slate-500 text-base font-normal">Powerful modules to simplify your school operations</p>
                </div>

                <!-- 6 Feature Cards Grid -->
                <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5">
                    
                    <!-- Card 1: Student Management -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-1 transition-all duration-300 group flex flex-col text-center lg:text-left">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-5 mx-auto lg:mx-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base mb-2">Student Management</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Manage student information, admissions, attendance, and records easily.</p>
                    </div>

                    <!-- Card 2: Teacher Management -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-1 transition-all duration-300 group flex flex-col text-center lg:text-left">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-5 mx-auto lg:mx-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>
                            </svg>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base mb-2">Teacher Management</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Manage teacher profiles, subjects, schedules, and performance.</p>
                    </div>

                    <!-- Card 3: Class & Subject -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-1 transition-all duration-300 group flex flex-col text-center lg:text-left">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-5 mx-auto lg:mx-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base mb-2">Class & Subject</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Organize classes, sections, and subjects in a structured way.</p>
                    </div>

                    <!-- Card 4: Fees Management -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-1 transition-all duration-300 group flex flex-col text-center lg:text-left">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-5 mx-auto lg:mx-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 14l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base mb-2">Fees Management</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Automate fee collection, invoices, discounts, and reports.</p>
                    </div>

                    <!-- Card 5: Reports & Analytics -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-1 transition-all duration-300 group flex flex-col text-center lg:text-left">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-5 mx-auto lg:mx-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base mb-2">Reports & Analytics</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Get real-time reports and analytics to make better decisions.</p>
                    </div>

                    <!-- Card 6: Communication -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-1 transition-all duration-300 group flex flex-col text-center lg:text-left">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-5 mx-auto lg:mx-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base mb-2">Communication</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Send notices, messages, and updates to parents, students, and staff.</p>
                    </div>

                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-10 text-xs border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <span class="font-bold text-white text-sm">EduManage</span>
                <span>&copy; {{ date('Y') }} All rights reserved.</span>
            </div>
            <div class="flex items-center gap-6">
                <a href="#about" class="hover:text-white transition-colors">About Us</a>
                <a href="#features" class="hover:text-white transition-colors">Features</a>
                <a href="#contact" class="hover:text-white transition-colors">Contact Us</a>
            </div>
        </div>
    </footer>

</body>
</html>
