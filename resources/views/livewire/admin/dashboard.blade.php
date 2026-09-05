<div>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            Welcome, {{ auth()->user()->name }} 👋
        </h1>

        <p class="text-gray-500 mt-2">
            Here's what's happening in your school today.
        </p>
    </div>

    {{-- Statistics Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Total Students</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">{{ $totalStudents }}</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Total Teachers</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">0</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Total Classes</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">0</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Total Subjects</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">0</h3>
        </div>

    </div>

    {{-- Quick Actions --}}
    <div class="mt-8 bg-white rounded-xl shadow-sm border border-slate-100 p-6">
        <h2 class="text-xl font-bold text-gray-800">
            Quick Actions
        </h2>

        <div class="mt-4 flex flex-wrap gap-4">
            <a
                href="{{ Route::has('students.create') ? route('students.create') : '#' }}"
                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-sm transition-all"
            >
                Add Student
            </a>

            <button class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg text-sm transition-all cursor-pointer">
                Add Teacher
            </button>

            <button class="px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg text-sm transition-all cursor-pointer">
                Create Class
            </button>
        </div>
    </div>
</div>