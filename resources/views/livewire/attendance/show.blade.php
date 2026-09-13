<div class="max-w-3xl mx-auto">
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <div class="flex items-center gap-3">
                <h1 class="text-3xl font-bold text-gray-800">
                    Attendance Record
                </h1>
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
                @endswitch
            </div>
            <p class="text-gray-500 mt-1">
                Details for {{ $attendance->date ? $attendance->date->format('F d, Y') : '' }}
            </p>
        </div>

        <div class="flex items-center gap-3">
            <a
                href="{{ route('attendance.edit', $attendance) }}"
                class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 font-medium text-sm transition-all"
            >
                Edit
            </a>
            <a
                href="{{ route('attendance.index') }}"
                class="px-4 py-2 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 font-medium text-sm transition-all"
            >
                ← Back to List
            </a>
        </div>
    </div>

    {{-- Details Card --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="p-6 sm:p-8 space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pb-6 border-b border-slate-100">
                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Student Name
                    </span>
                    <span class="text-lg font-bold text-slate-900">
                        @if($attendance->student)
                            {{ $attendance->student->first_name }} {{ $attendance->student->last_name }}
                        @else
                            <span class="text-slate-400 italic">Unknown Student</span>
                        @endif
                    </span>
                </div>

                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Student ID
                    </span>
                    <span class="text-lg font-mono font-bold text-slate-700">
                        {{ $attendance->student->student_id ?? '-' }}
                    </span>
                </div>

                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Attendance Date
                    </span>
                    <span class="text-lg font-semibold text-slate-800">
                        {{ $attendance->date ? $attendance->date->format('l, F j, Y') : '-' }}
                    </span>
                </div>

                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Status
                    </span>
                    <span class="text-lg font-semibold text-slate-800 capitalize">
                        {{ $attendance->status }}
                    </span>
                </div>
            </div>

            <div>
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-2">
                    Note / Remarks
                </span>
                <div class="bg-slate-50 rounded-xl p-4 text-slate-700 text-sm leading-relaxed border border-slate-200/60">
                    {{ $attendance->note ?: 'No notes or remarks attached to this record.' }}
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                <span>Recorded: {{ $attendance->created_at ? $attendance->created_at->format('M d, Y h:i A') : 'N/A' }}</span>
                <span>Last Modified: {{ $attendance->updated_at ? $attendance->updated_at->format('M d, Y h:i A') : 'N/A' }}</span>
            </div>

        </div>
    </div>
</div>
