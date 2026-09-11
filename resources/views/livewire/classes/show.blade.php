<div>
    <div class="max-w-4xl mx-auto">

        <div class="mb-6 flex items-center justify-between">
            <div>
                <a
                    href="{{ route('classes.index') }}"
                    class="text-purple-600 hover:underline text-sm font-medium"
                >
                    ← Back to Classes
                </a>

                <h1 class="text-3xl font-bold text-gray-800 mt-3">
                    {{ $schoolClass->name }}
                </h1>

                <p class="text-gray-500 mt-1 font-mono text-sm">
                    Class Code: {{ $schoolClass->class_code }}
                </p>
            </div>

            <div class="flex items-center gap-3">
                <a
                    href="{{ route('classes.edit', $schoolClass) }}"
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-medium transition-all"
                >
                    Edit Class
                </a>
            </div>
        </div>

        {{-- Class Overview Card --}}
        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 mb-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-3">
                Class Details
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div>
                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wider block mb-1">Class Code</span>
                    <span class="text-base font-mono font-bold text-slate-900">{{ $schoolClass->class_code }}</span>
                </div>

                <div>
                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wider block mb-1">Grade Level</span>
                    <span class="text-base font-semibold text-slate-900">{{ $schoolClass->grade_level }}</span>
                </div>

                <div>
                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wider block mb-1">Section</span>
                    <span class="text-base font-semibold text-slate-900">{{ $schoolClass->section ?? '-' }}</span>
                </div>

                <div>
                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wider block mb-1">Academic Year</span>
                    <span class="text-base font-semibold text-slate-900">{{ $schoolClass->academic_year }}</span>
                </div>

                <div>
                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wider block mb-1">Room / Location</span>
                    <span class="text-base font-semibold text-slate-900">{{ $schoolClass->room ?? '-' }}</span>
                </div>

                <div>
                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wider block mb-1">Capacity</span>
                    <span class="text-base font-semibold text-slate-900">{{ $schoolClass->capacity }} Students</span>
                </div>

                <div>
                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wider block mb-1">Status</span>
                    @if($schoolClass->status === 'active')
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-200 inline-block">
                            Active
                        </span>
                    @else
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-600 border border-slate-200 inline-block">
                            Inactive
                        </span>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
