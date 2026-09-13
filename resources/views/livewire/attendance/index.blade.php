<div>
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Attendance Management
            </h1>
            <p class="text-gray-500 mt-1">
                Track, filter, and record student daily attendance.
            </p>
        </div>

        <a
            href="{{ route('attendance.create') }}"
            class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium text-sm transition-all shadow-sm flex items-center gap-2"
        >
            <span>+</span> Mark Attendance
        </a>
    </div>

    {{-- Filters Card --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-4 mb-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 items-end">
            {{-- Search Input --}}
            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-1">Search Student</label>
                <input
                    type="text"
                    wire:model.live="search"
                    placeholder="Student name or ID..."
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            {{-- Filter by Date --}}
            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-1">Filter by Date</label>
                <input
                    type="date"
                    wire:model.live="date_filter"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                >
            </div>

            {{-- Filter by Status --}}
            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-1">Status</label>
                <select
                    wire:model.live="status_filter"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                >
                    <option value="all">All Statuses</option>
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                    <option value="late">Late</option>
                    <option value="excused">Excused</option>
                </select>
            </div>

            {{-- Clear Filters --}}
            <div>
                @if($search || $date_filter || $status_filter !== 'all')
                    <button
                        wire:click="clearFilters"
                        class="w-full py-2 px-3 bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-medium rounded-lg transition-colors"
                    >
                        Clear Filters
                    </button>
                @endif
            </div>
        </div>
    </div>

    {{-- Success Flash Message --}}
    @if (session()->has('success'))
        <div class="mb-6 rounded-lg bg-emerald-50 border border-emerald-200 px-4 py-3 text-emerald-700 text-sm font-medium">
            {{ session('success') }}
        </div>
    @endif

    {{-- Attendance Table --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-gray-200 bg-gray-50 text-slate-700 font-semibold">
                    <th class="text-left px-6 py-4">Student ID</th>
                    <th class="text-left px-6 py-4">Student Name</th>
                    <th class="text-left px-6 py-4">Date</th>
                    <th class="text-left px-6 py-4">Status</th>
                    <th class="text-left px-6 py-4">Note</th>
                    <th class="text-left px-6 py-4">Action</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @forelse ($attendances as $attendance)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-6 py-4 font-mono text-slate-800 font-medium">
                            <span class="px-2 py-1 bg-slate-100 rounded text-xs font-semibold text-slate-700">
                                {{ $attendance->student->student_id ?? '-' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 font-semibold text-slate-900">
                            @if($attendance->student)
                                {{ $attendance->student->first_name }} {{ $attendance->student->last_name }}
                            @else
                                <span class="text-slate-400 italic">Unknown Student</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-slate-600 font-medium">
                            {{ $attendance->date ? $attendance->date->format('M d, Y') : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            @switch($attendance->status)
                                @case('present')
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                        ✓ Present
                                    </span>
                                    @break
                                @case('absent')
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-200">
                                        ✗ Absent
                                    </span>
                                    @break
                                @case('late')
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-200">
                                        ⏱ Late
                                    </span>
                                    @break
                                @case('excused')
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200">
                                        ✉ Excused
                                    </span>
                                    @break
                                @default
                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-600">
                                        {{ ucfirst($attendance->status) }}
                                    </span>
                            @endswitch
                        </td>
                        <td class="px-6 py-4 text-slate-600 max-w-xs truncate">
                            {{ $attendance->note ?: '-' }}
                        </td>
                        <td class="px-6 py-4 font-medium">
                            <a href="{{ route('attendance.show', $attendance) }}" class="text-blue-600 hover:text-blue-800 mr-3">
                                View
                            </a>
                            <a href="{{ route('attendance.edit', $attendance) }}" class="text-amber-600 hover:text-amber-800 mr-3">
                                Edit
                            </a>
                            <button
                                wire:click="delete({{ $attendance->id }})"
                                wire:confirm="Are you sure you want to delete this attendance record?"
                                class="text-red-600 hover:text-red-800 cursor-pointer"
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-10 text-gray-500">
                            No attendance records found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $attendances->links() }}
    </div>
</div>
