<div>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            Welcome, {{ auth()->user()->name }} 👋
        </h1>

        <p class="text-gray-500 mt-2">
            Welcome to the parent portal. View your children's attendance, reports, and notices.
        </p>
    </div>

    {{-- Statistics Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Registered Children</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">0</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Overall Attendance</p>
            <h3 class="text-3xl font-bold text-emerald-600 mt-2">100%</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <p class="text-gray-500 text-sm font-medium">Pending Fees</p>
            <h3 class="text-3xl font-bold text-slate-900 mt-2">$0.00</h3>
        </div>
    </div>

    {{-- Info Card --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-2">
            Children Overview
        </h2>
        <p class="text-sm text-slate-600">
            No children accounts linked yet. Contact your school administrator to link student profiles to your parent portal.
        </p>
    </div>
</div>
