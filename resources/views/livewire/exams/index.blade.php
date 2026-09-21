<div>
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Exams
            </h1>
            <p class="text-gray-500 mt-1">
                Manage examination schedules, types, and academic terms.
            </p>
        </div>

        <a
            href="{{ route('exams.create') }}"
            class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium text-sm transition-all shadow-sm flex items-center gap-2"
        >
            <span>+</span> Add Exam
        </a>
    </div>

    {{-- Filters Card --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-4 mb-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 items-end">
            {{-- Search Input --}}
            <div class="md:col-span-2">
                <label class="block text-xs font-semibold text-slate-600 mb-1">Search Exam</label>
                <input
                    type="text"
                    wire:model.live="search"
                    placeholder="Search by Code, Name, Year, or Description..."
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            {{-- Filter by Type --}}
            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-1">Exam Type</label>
                <select
                    wire:model.live="type_filter"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                >
                    <option value="all">All Types</option>
                    <option value="midterm">Midterm</option>
                    <option value="final">Final</option>
                    <option value="quiz">Quiz</option>
                    <option value="other">Other</option>
                </select>
            </div>

            {{-- Filter by Status --}}
            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-1">Status</label>
                <select
                    wire:model.live="status_filter"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                >
                    <option value="all">All Statuses</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="ongoing">Ongoing</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
        </div>

        @if($search || $status_filter !== 'all' || $type_filter !== 'all')
            <div class="mt-3 flex justify-end">
                <button
                    wire:click="clearFilters"
                    class="py-1 px-3 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-medium rounded-md transition-colors"
                >
                    Clear Filters
                </button>
            </div>
        @endif
    </div>

    {{-- Success Flash Message --}}
    @if (session()->has('success'))
        <div class="mb-6 rounded-lg bg-emerald-50 border border-emerald-200 px-4 py-3 text-emerald-700 text-sm font-medium">
            {{ session('success') }}
        </div>
    @endif

    {{-- Exams Table --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-gray-200 bg-gray-50 text-slate-700 font-semibold">
                    <th class="text-left px-6 py-4">Code</th>
                    <th class="text-left px-6 py-4">Exam Name</th>
                    <th class="text-left px-6 py-4">Type</th>
                    <th class="text-left px-6 py-4">Academic Year</th>
                    <th class="text-left px-6 py-4">Schedule</th>
                    <th class="text-left px-6 py-4">Status</th>
                    <th class="text-left px-6 py-4">Action</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @forelse ($exams as $exam)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-6 py-4 font-mono text-slate-800 font-medium">
                            <span class="px-2 py-1 bg-slate-100 rounded text-xs font-semibold text-slate-700">
                                {{ $exam->exam_code }}
                            </span>
                        </td>
                        <td class="px-6 py-4 font-semibold text-slate-900">
                            {{ $exam->name }}
                        </td>
                        <td class="px-6 py-4 capitalize text-slate-600 font-medium">
                            <span class="px-2.5 py-1 bg-blue-50 text-blue-700 rounded text-xs font-semibold">
                                {{ ucfirst($exam->exam_type) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-slate-600 font-medium">
                            {{ $exam->academic_year }}
                        </td>
                        <td class="px-6 py-4 text-slate-600 text-xs">
                            <div class="font-medium text-slate-700">
                                {{ $exam->start_date ? $exam->start_date->format('M d, Y') : '-' }}
                            </div>
                            @if($exam->end_date)
                                <div class="text-slate-400">
                                    to {{ $exam->end_date->format('M d, Y') }}
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @switch($exam->status)
                                @case('upcoming')
                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-200">
                                        Upcoming
                                    </span>
                                    @break
                                @case('ongoing')
                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200">
                                        Ongoing
                                    </span>
                                    @break
                                @case('completed')
                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                        Completed
                                    </span>
                                    @break
                                @case('cancelled')
                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-200">
                                        Cancelled
                                    </span>
                                    @break
                            @endswitch
                        </td>
                        <td class="px-6 py-4 font-medium">
                            <a href="{{ route('exams.show', $exam) }}" class="text-blue-600 hover:text-blue-800 mr-3">
                                View
                            </a>
                            <a href="{{ route('exams.edit', $exam) }}" class="text-amber-600 hover:text-amber-800 mr-3">
                                Edit
                            </a>
                            <button
                                wire:click="delete({{ $exam->id }})"
                                wire:confirm="Are you sure you want to delete this exam?"
                                class="text-red-600 hover:text-red-800 cursor-pointer"
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-10 text-gray-500">
                            No exams found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $exams->links() }}
    </div>
</div>
