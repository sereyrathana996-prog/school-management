<div class="max-w-4xl mx-auto">
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <div class="flex items-center gap-3">
                <h1 class="text-3xl font-bold text-gray-800">
                    {{ $subject->name }}
                </h1>
                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-bold font-mono">
                    {{ $subject->subject_code }}
                </span>
                @if($subject->status === 'active')
                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-200">
                        Active
                    </span>
                @else
                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                        Inactive
                    </span>
                @endif
            </div>
            <p class="text-gray-500 mt-1">
                Subject details and course description.
            </p>
        </div>

        <div class="flex items-center gap-3">
            <a
                href="{{ route('subjects.edit', $subject) }}"
                class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 font-medium text-sm transition-all"
            >
                Edit Subject
            </a>
            <a
                href="{{ route('subjects.index') }}"
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
                        Subject Code
                    </span>
                    <span class="text-lg font-bold text-slate-800 font-mono">
                        {{ $subject->subject_code }}
                    </span>
                </div>

                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Grade Level
                    </span>
                    <span class="text-lg font-semibold text-slate-800">
                        {{ $subject->grade_level ?? 'N/A' }}
                    </span>
                </div>

                <div>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">
                        Credit Hours
                    </span>
                    <span class="text-lg font-semibold text-slate-800">
                        {{ $subject->credit_hours }} Hour{{ $subject->credit_hours > 1 ? 's' : '' }}
                    </span>
                </div>
            </div>

            <div>
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-2">
                    Description
                </span>
                <div class="bg-slate-50 rounded-xl p-4 text-slate-700 text-sm leading-relaxed border border-slate-200/60">
                    {{ $subject->description ?: 'No description provided for this subject.' }}
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                <span>Created: {{ $subject->created_at ? $subject->created_at->format('M d, Y h:i A') : 'N/A' }}</span>
                <span>Last Updated: {{ $subject->updated_at ? $subject->updated_at->format('M d, Y h:i A') : 'N/A' }}</span>
            </div>

        </div>
    </div>
</div>
