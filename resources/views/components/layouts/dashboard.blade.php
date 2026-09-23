<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Dashboard - School Management System' }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#F0F5FE] font-sans antialiased text-slate-800 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#0B1E36] text-white flex-shrink-0 flex flex-col justify-between min-h-screen p-4 select-none">
        
        <div>
            <!-- Logo Header -->
            <div class="flex items-center gap-3 px-3 py-3.5 mb-4">
                <div class="w-9 h-9 rounded-xl bg-blue-600/20 text-sky-400 flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4.13C5 19.46 8.14 21 12 21s7-1.54 7-3.69v-4.13l-7 3.82-7-3.82z"/>
                    </svg>
                </div>
                <span class="text-base font-bold text-white tracking-tight">
                    School Management
                </span>
            </div>

            <!-- Navigation Links -->
            <nav class="space-y-1">

                <!-- Dashboard -->
                @php $isActive = request()->routeIs('*.dashboard') || request()->routeIs('dashboard'); @endphp
                <a
                    href="{{ Route::has(auth()->user()->role . '.dashboard') ? route(auth()->user()->role . '.dashboard') : url('/dashboard') }}"
                    class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-sm transition-all duration-150 {{ $isActive ? 'bg-[#0066FF] text-white font-semibold shadow-md shadow-blue-600/30' : 'text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium' }}"
                >
                    <svg class="w-5 h-5 {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span>Dashboard</span>
                </a>

                @if(auth()->user()->role === 'admin')

                    <!-- Students -->
                    @php $isActive = request()->routeIs('students.*'); @endphp
                    <a
                        href="{{ Route::has('students.index') ? route('students.index') : '#' }}"
                        class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-sm transition-all duration-150 {{ $isActive ? 'bg-[#0066FF] text-white font-semibold shadow-md shadow-blue-600/30' : 'text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium' }}"
                    >
                        <svg class="w-5 h-5 {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <span>Students</span>
                    </a>

                    <!-- Teachers -->
                    @php $isActive = request()->routeIs('teachers.*'); @endphp
                    <a
                        href="{{ Route::has('teachers.index') ? route('teachers.index') : '#' }}"
                        class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-sm transition-all duration-150 {{ $isActive ? 'bg-[#0066FF] text-white font-semibold shadow-md shadow-blue-600/30' : 'text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium' }}"
                    >
                        <svg class="w-5 h-5 {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span>Teachers</span>
                    </a>

                    <!-- Classes -->
                    @php $isActive = request()->routeIs('classes.*'); @endphp
                    <a
                        href="{{ Route::has('classes.index') ? route('classes.index') : '#' }}"
                        class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-sm transition-all duration-150 {{ $isActive ? 'bg-[#0066FF] text-white font-semibold shadow-md shadow-blue-600/30' : 'text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium' }}"
                    >
                        <svg class="w-5 h-5 {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h5m-5 0V11m0 0h5m-5 0H7"/>
                        </svg>
                        <span>Classes</span>
                    </a>

                    <!-- Subjects -->
                    @php $isActive = request()->routeIs('subjects.*'); @endphp
                    <a
                        href="{{ Route::has('subjects.index') ? route('subjects.index') : '#' }}"
                        class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-sm transition-all duration-150 {{ $isActive ? 'bg-[#0066FF] text-white font-semibold shadow-md shadow-blue-600/30' : 'text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium' }}"
                    >
                        <svg class="w-5 h-5 {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <span>Subjects</span>
                    </a>

                    <!-- Attendance -->
                    @php $isActive = request()->routeIs('attendance.*'); @endphp
                    <a
                        href="{{ Route::has('attendance.index') ? route('attendance.index') : '#' }}"
                        class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-sm transition-all duration-150 {{ $isActive ? 'bg-[#0066FF] text-white font-semibold shadow-md shadow-blue-600/30' : 'text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium' }}"
                    >
                        <svg class="w-5 h-5 {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Attendance</span>
                    </a>

                    <!-- Exams -->
                    @php $isActive = request()->routeIs('exams.*'); @endphp
                    <a
                        href="{{ Route::has('exams.index') ? route('exams.index') : '#' }}"
                        class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-sm transition-all duration-150 {{ $isActive ? 'bg-[#0066FF] text-white font-semibold shadow-md shadow-blue-600/30' : 'text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium' }}"
                    >
                        <svg class="w-5 h-5 {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01m-.01 4h.01"/>
                        </svg>
                        <span>Exams</span>
                    </a>

                    <!-- Fees -->
                    @php $isActive = request()->routeIs('fees.*'); @endphp
                    <a
                        href="{{ Route::has('fees.index') ? route('fees.index') : '#' }}"
                        class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-sm transition-all duration-150 {{ $isActive ? 'bg-[#0066FF] text-white font-semibold shadow-md shadow-blue-600/30' : 'text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium' }}"
                    >
                        <svg class="w-5 h-5 {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>Fees</span>
                    </a>

                    <!-- Reports -->
                    @php $isActive = request()->routeIs('reports.*'); @endphp
                    <a
                        href="{{ Route::has('reports.index') ? route('reports.index') : '#' }}"
                        class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-sm transition-all duration-150 {{ $isActive ? 'bg-[#0066FF] text-white font-semibold shadow-md shadow-blue-600/30' : 'text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium' }}"
                    >
                        <svg class="w-5 h-5 {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v16a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <span>Reports</span>
                    </a>

                @elseif(auth()->user()->role === 'teacher')

                    <a href="#" class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium text-sm">
                        <span>My Classes</span>
                    </a>

                @elseif(auth()->user()->role === 'student')

                    <a href="#" class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium text-sm">
                        <span>My Profile</span>
                    </a>

                @endif

            </nav>
        </div>

        <!-- Bottom Actions (Settings & Logout) -->
        <div class="pt-4 border-t border-slate-800/60 space-y-1">
            <!-- Settings -->
            <a href="#" class="flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium text-sm transition-colors">
                <svg class="w-5 h-5 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span>Settings</span>
            </a>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    type="submit"
                    class="w-full flex items-center gap-3.5 px-4 py-2.5 rounded-xl text-[#94A3B8] hover:text-white hover:bg-slate-800/40 font-medium text-sm transition-colors cursor-pointer text-left"
                >
                    <svg class="w-5 h-5 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    <span>Logout</span>
                </button>
            </form>
        </div>

    </aside>

    <!-- Main Workspace -->
    <div class="flex-1 flex flex-col min-w-0">

        <!-- Top Header Navbar -->
        <header class="bg-white px-6 py-3.5 border-b border-slate-200/70 flex items-center justify-between shadow-xs">
            <div class="flex items-center gap-4">
                <!-- Hamburger Menu Icon -->
                <button class="text-slate-500 hover:text-slate-700 p-1 rounded-lg focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Profile Dropdown -->
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-[#1E3A8A] text-white flex items-center justify-center font-bold text-xs shadow-sm">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-slate-800">
                    {{ ucfirst(auth()->user()->role) }}
                </span>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
        </header>

        <!-- Main Content Slot -->
        <main class="p-6 sm:p-8 flex-1 min-w-0">
            {{ $slot }}
        </main>

    </div>

</body>
</html>