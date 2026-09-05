<div>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            Welcome, {{ auth()->user()->name }} 👋
        </h1>

        <p class="text-gray-500 mt-2">
            Welcome to your student portal. Here is your academic summary.
        </p>
    </div>

    {{-- Statistics Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Enrolled Subjects</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">0</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Attendance Rate</p>
            <h3 class="text-3xl font-bold text-emerald-600 mt-2">100%</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">GPA / Grade Average</p>
            <h3 class="text-3xl font-bold text-indigo-600 mt-2">N/A</h3>
        </div>
    </div>

    {{-- Info Card --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-2">
            Academic Status
        </h2>
        <p class="text-sm text-slate-600">
            Your profile is active. Check back for class schedules and exam results once assigned by your administrator.
        </p>
    </div>
</div>
