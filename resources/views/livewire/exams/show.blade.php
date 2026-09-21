<div class="max-w-4xl mx-auto">
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <div class="flex items-center gap-3">
                <h1 class="text-3xl font-bold text-gray-800">
                    {{ $exam->name }}
                </h1>
                <span class="px-3 py-1 bg-slate-100 text-slate-700 rounded-full text-xs font-bold font-mono border border-slate-200">
                    {{ $exam->exam_code }}
                </span>
                @switch($exam->status)
                    @case('upcoming')
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-200">
                            Upcoming
                        </span>
                        @break
                    @case('ongoing')
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200">
                            Ongoing
                        </span>
                        @break
                    @case('completed')
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                            Completed
                        </span>
                        @break
                    @case('cancelled')
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-200">
                            Cancelled
                        </span>
                        @break
                @endswitch
            </div>
            <p class="text-gray-500 mt-1">
                Academic Year: <span class="font-medium text-slate-700">{{ $exam->academic_year }}</span>
            </p>
        </div>

        <div class="flex items-center gap-3">
            <a
                href="{{ route('exams.edit', $exam) }}"
                class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 font-medium text-sm transition-all"
            >
                Edit Exam
            </a>
            <a
                href="{{ route('exams.index') }}"
                class="px-4 py-2 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 font-medium text-sm transition-all"
            >
                ← Back to List
            </a>
        </div>
    </div>

    {{-- Content Card --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="p-6 sm:p-8 space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pb-6 border-b border-slate-100">
                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Exam Code
                    </span>
                    <span class="text-lg font-bold text-slate-800 font-mono">
                        {{ $exam->exam_code }}
                    </span>
                </div>

                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Exam Type
                    </span>
                    <span class="text-lg font-semibold text-slate-800 capitalize">
                        {{ $exam->exam_type }}
                    </span>
                </div>

                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Academic Year
                    </span>
                    <span class="text-lg font-semibold text-slate-800">
                        {{ $exam->academic_year }}
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pb-6 border-b border-slate-100">
                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Start Date
                    </span>
                    <span class="text-base font-semibold text-slate-800">
                        {{ $exam->start_date ? $exam->start_date->format('l, F j, Y') : '-' }}
                    </span>
                </div>

                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        End Date
                    </span>
                    <span class="text-base font-semibold text-slate-800">
                        {{ $exam->end_date ? $exam->end_date->format('l, F j, Y') : 'N/A' }}
                    </span>
                </div>
            </div>

            <div>
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-2">
                    Description & Guidelines
                </span>
                <div class="bg-slate-50 rounded-xl p-4 text-slate-700 text-sm leading-relaxed border border-slate-200/60">
                    {{ $exam->description ?: 'No detailed description or notes provided for this exam.' }}
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                <span>Created: {{ $exam->created_at ? $exam->created_at->format('M d, Y h:i A') : 'N/A' }}</span>
                <span>Last Updated: {{ $exam->updated_at ? $exam->updated_at->format('M d, Y h:i A') : 'N/A' }}</span>
            </div>

        </div>
    </div>
</div>
