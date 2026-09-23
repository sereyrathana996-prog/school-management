<div>
    {{-- Welcome Header --}}
    <div class="mb-6">
        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
            Dashboard
        </h1>
        <p class="text-slate-500 text-sm font-medium mt-1">
            Welcome back, {{ auth()->user()->name }}!
        </p>
    </div>

    {{-- Top 4 Summary Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        
        {{-- Card 1: Total Students --}}
        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-500 text-white flex items-center justify-center flex-shrink-0 shadow-md shadow-blue-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Total Students</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-0.5">{{ $totalStudents }}</h3>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                <a href="{{ route('students.index') }}" class="text-blue-600 hover:text-blue-700 font-semibold flex items-center gap-1">
                    View Details <span>→</span>
                </a>
            </div>
        </div>

        {{-- Card 2: Total Teachers --}}
        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500 text-white flex items-center justify-center flex-shrink-0 shadow-md shadow-emerald-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Total Teachers</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-0.5">{{ $totalTeachers }}</h3>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                <a href="{{ route('teachers.index') }}" class="text-emerald-600 hover:text-emerald-700 font-semibold flex items-center gap-1">
                    View Details <span>→</span>
                </a>
            </div>
        </div>

        {{-- Card 3: Total Classes --}}
        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-purple-600 text-white flex items-center justify-center flex-shrink-0 shadow-md shadow-purple-600/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h5m-5 0V11m0 0h5m-5 0H7"/>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Total Classes</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-0.5">{{ $totalClasses }}</h3>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                <a href="{{ route('classes.index') }}" class="text-purple-600 hover:text-purple-700 font-semibold flex items-center gap-1">
                    View Details <span>→</span>
                </a>
            </div>
        </div>

        {{-- Card 4: Total Subjects --}}
        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-amber-500 text-white flex items-center justify-center flex-shrink-0 shadow-md shadow-amber-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Total Subjects</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-0.5">{{ $totalSubjects }}</h3>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                <a href="{{ route('subjects.index') }}" class="text-amber-600 hover:text-amber-700 font-semibold flex items-center gap-1">
                    View Details <span>→</span>
                </a>
            </div>
        </div>

    </div>

    {{-- Bottom Grid: Chart & Recent Activities --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        {{-- Chart Section --}}
        <div class="lg:col-span-2 bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
            <h3 class="text-base font-bold text-slate-900 mb-6">Students by Grade Level</h3>
            
            <div class="h-64 flex items-end justify-between gap-3 pt-6 px-4 border-b border-l border-slate-200">
                <div class="w-full flex flex-col items-center gap-2 group">
                    <div class="w-full bg-blue-400 rounded-t-lg transition-all group-hover:bg-blue-500" style="height: 45%;"></div>
                    <span class="text-xs text-slate-500 font-medium">Grade 7</span>
                </div>
                <div class="w-full flex flex-col items-center gap-2 group">
                    <div class="w-full bg-blue-500 rounded-t-lg transition-all group-hover:bg-blue-600" style="height: 70%;"></div>
                    <span class="text-xs text-slate-500 font-medium">Grade 8</span>
                </div>
                <div class="w-full flex flex-col items-center gap-2 group">
                    <div class="w-full bg-blue-500 rounded-t-lg transition-all group-hover:bg-blue-600" style="height: 60%;"></div>
                    <span class="text-xs text-slate-500 font-medium">Grade 9</span>
                </div>
                <div class="w-full flex flex-col items-center gap-2 group">
                    <div class="w-full bg-blue-600 rounded-t-lg transition-all group-hover:bg-blue-700" style="height: 85%;"></div>
                    <span class="text-xs text-slate-500 font-medium">Grade 10</span>
                </div>
                <div class="w-full flex flex-col items-center gap-2 group">
                    <div class="w-full bg-blue-500 rounded-t-lg transition-all group-hover:bg-blue-600" style="height: 65%;"></div>
                    <span class="text-xs text-slate-500 font-medium">Grade 11</span>
                </div>
                <div class="w-full flex flex-col items-center gap-2 group">
                    <div class="w-full bg-blue-600 rounded-t-lg transition-all group-hover:bg-blue-700" style="height: 85%;"></div>
                    <span class="text-xs text-slate-500 font-medium">Grade 12</span>
                </div>
            </div>
        </div>

        {{-- Recent Activities --}}
        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
            <h3 class="text-base font-bold text-slate-900 mb-6">Recent Activities</h3>

            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                        👨‍🎓
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-slate-800">New student registered</p>
                        <span class="text-[11px] text-slate-400">2 hours ago</span>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                        👨‍🏫
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-slate-800">Teacher profile updated</p>
                        <span class="text-[11px] text-slate-400">3 hours ago</span>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                        🏫
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-slate-800">New class created</p>
                        <span class="text-[11px] text-slate-400">5 hours ago</span>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                        📝
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-slate-800">Exam schedule posted</p>
                        <span class="text-[11px] text-slate-400">1 day ago</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>