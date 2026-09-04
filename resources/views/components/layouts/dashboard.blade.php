<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'School Management System' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex">

        {{-- Sidebar --}}
        <aside class="w-64 bg-slate-900 text-white min-h-screen">

            <div class="p-6 border-b border-slate-700">
                <h1 class="text-xl font-bold">
                    🏫 EduManage
                </h1>

                <p class="text-sm text-gray-400 mt-1">
                    Management System
                </p>
            </div>

            {{-- Navigation --}}
            <nav class="p-4 space-y-1">

                <a
                    href="{{ Route::has(auth()->user()->role . '.dashboard') ? route(auth()->user()->role . '.dashboard') : url('/dashboard') }}"
                    class="block px-4 py-3 rounded-lg hover:bg-slate-800 font-medium"
                >
                    📊 Dashboard
                </a>

                @if(auth()->user()->role === 'admin')

                    <a
                        href="{{ Route::has('students.index') ? route('students.index') : '#' }}"
                        class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white"
                    >
                        👨‍🎓 Students
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        👨‍🏫 Teachers
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        🏫 Classes
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        📚 Subjects
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        📅 Attendance
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        📝 Exams
                    </a>

                @elseif(auth()->user()->role === 'teacher')

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        👨‍🏫 My Classes
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        📅 Attendance
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        📝 Results
                    </a>

                @elseif(auth()->user()->role === 'student')

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        👤 My Profile
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        📅 My Attendance
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        📝 My Results
                    </a>

                @elseif(auth()->user()->role === 'parent')

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        👨‍👩‍👧 My Children
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        📅 Attendance
                    </a>

                    <a href="#" class="block px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white">
                        📝 Results
                    </a>

                @endif

            </nav>

        </aside>

        {{-- Main Content --}}
        <div class="flex-1">

            {{-- Top Navbar --}}
            <header class="bg-white shadow-sm">

                <div class="flex items-center justify-between px-8 py-4">

                    <h2 class="text-lg font-semibold text-gray-800">
                        {{ $title ?? 'Dashboard' }}
                    </h2>

                    <div class="flex items-center gap-4">

                        <div class="text-right">

                            <p class="font-medium text-gray-800">
                                {{ auth()->user()->name }}
                            </p>

                            <p class="text-sm text-gray-500">
                                {{ ucfirst(auth()->user()->role) }}
                            </p>

                        </div>

                        <form method="POST" action="{{ route('logout') }}">

                            @csrf

                            <button
                                type="submit"
                                class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 text-sm font-medium transition-colors"
                            >
                                Logout
                            </button>

                        </form>

                    </div>

                </div>

            </header>

            {{-- Page Content --}}
            <main class="p-8">

                {{ $slot }}

            </main>

        </div>

    </div>

</body>
</html>