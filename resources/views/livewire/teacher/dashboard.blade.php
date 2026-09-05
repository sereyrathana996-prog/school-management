<div>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            Welcome, {{ auth()->user()->name }} 👋
        </h1>

        <p class="text-gray-500 mt-2">
            Here is an overview of your classes, attendance, and upcoming schedules.
        </p>
    </div>

    {{-- Statistics Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Assigned Classes</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">0</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Total Students</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">0</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Today's Lectures</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">0</h3>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">
            Quick Actions
        </h2>

        <div class="flex flex-wrap gap-4">
            <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-sm transition-all cursor-pointer">
                📅 Mark Attendance
            </button>

            <button class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg text-sm transition-all cursor-pointer">
                📝 Enter Exam Marks
            </button>
        </div>
    </div>
</div>
