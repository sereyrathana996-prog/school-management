<div>
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Subjects
            </h1>
            <p class="text-gray-500 mt-1">
                Manage curriculum subjects, course codes, and credit hours.
            </p>
        </div>

        <a
            href="{{ route('subjects.create') }}"
            class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium text-sm transition-all shadow-sm flex items-center gap-2"
        >
            <span>+</span> Add Subject
        </a>
    </div>

    {{-- Search Bar --}}
    <div class="mb-6">
        <input
            type="text"
            wire:model.live="search"
            placeholder="Search by Subject Code, Name, Grade Level, or Description..."
            class="w-full md:w-96 border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
        >
    </div>

    {{-- Success Flash Message --}}
    @if (session()->has('success'))
        <div class="mb-6 rounded-lg bg-emerald-50 border border-emerald-200 px-4 py-3 text-emerald-700 text-sm font-medium">
            {{ session('success') }}
        </div>
    @endif

    {{-- Subjects Table --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-gray-200 bg-gray-50 text-slate-700 font-semibold">
                    <th class="text-left px-6 py-4">Subject Code</th>
                    <th class="text-left px-6 py-4">Name</th>
                    <th class="text-left px-6 py-4">Grade Level</th>
                    <th class="text-left px-6 py-4">Credit Hours</th>
                    <th class="text-left px-6 py-4">Status</th>
                    <th class="text-left px-6 py-4">Action</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @forelse ($subjects as $subject)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-6 py-4 font-mono text-slate-800 font-medium">
                            <span class="px-2.5 py-1 bg-slate-100 rounded text-slate-700 text-xs font-semibold">
                                {{ $subject->subject_code }}
                            </span>
                        </td>
                        <td class="px-6 py-4 font-semibold text-slate-900">
                            {{ $subject->name }}
                        </td>
                        <td class="px-6 py-4 text-slate-600">
                            {{ $subject->grade_level ?? '-' }}
                        </td>
                        <td class="px-6 py-4 text-slate-600">
                            {{ $subject->credit_hours }} hr{{ $subject->credit_hours > 1 ? 's' : '' }}
                        </td>
                        <td class="px-6 py-4">
                            @if($subject->status === 'active')
                                <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-200">
                                    Active
                                </span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                                    Inactive
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-medium">
                            <a href="{{ route('subjects.show', $subject) }}" class="text-blue-600 hover:text-blue-800 mr-3">
                                View
                            </a>
                            <a href="{{ route('subjects.edit', $subject) }}" class="text-amber-600 hover:text-amber-800 mr-3">
                                Edit
                            </a>
                            <button
                                wire:click="delete({{ $subject->id }})"
                                wire:confirm="Are you sure you want to delete this subject?"
                                class="text-red-600 hover:text-red-800 cursor-pointer"
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-10 text-gray-500">
                            No subjects found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $subjects->links() }}
    </div>
</div>
