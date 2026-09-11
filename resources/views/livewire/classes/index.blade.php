<div>
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Classes
            </h1>
            <p class="text-gray-500 mt-1">
                Manage all classes, grade levels, and sections.
            </p>
        </div>

        <a
            href="{{ Route::has('classes.create') ? route('classes.create') : '#' }}"
            class="px-5 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 font-medium text-sm transition-all"
        >
            + Add Class
        </a>
    </div>

    {{-- Search --}}
    <div class="mb-6">
        <input
            type="text"
            wire:model.live="search"
            placeholder="Search by Class Code, Name, Grade, Section, Room, or Year..."
            class="w-full md:w-96 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
        >
    </div>

    {{-- Success Flash Message --}}
    @if (session()->has('success'))
        <div class="mb-6 rounded-lg bg-purple-100 border border-purple-200 px-4 py-3 text-purple-700 text-sm font-medium">
            {{ session('success') }}
        </div>
    @endif

    {{-- Classes Table --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-gray-200 bg-gray-50 text-slate-700 font-semibold">
                    <th class="text-left px-6 py-4">Class Code</th>
                    <th class="text-left px-6 py-4">Name</th>
                    <th class="text-left px-6 py-4">Grade & Section</th>
                    <th class="text-left px-6 py-4">Academic Year</th>
                    <th class="text-left px-6 py-4">Room</th>
                    <th class="text-left px-6 py-4">Capacity</th>
                    <th class="text-left px-6 py-4">Status</th>
                    <th class="text-left px-6 py-4">Action</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @forelse ($classes as $class)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-6 py-4 font-mono text-slate-800 font-medium">
                            {{ $class->class_code }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-slate-900">
                            {{ $class->name }}
                        </td>
                        <td class="px-6 py-4 text-slate-600">
                            {{ $class->grade_level }} @if($class->section)- Section {{ $class->section }}@endif
                        </td>
                        <td class="px-6 py-4 text-slate-600">
                            {{ $class->academic_year }}
                        </td>
                        <td class="px-6 py-4 text-slate-600">
                            {{ $class->room ?? '-' }}
                        </td>
                        <td class="px-6 py-4 text-slate-600">
                            {{ $class->capacity }}
                        </td>
                        <td class="px-6 py-4">
                            @if($class->status === 'active')
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
                            @if(Route::has('classes.show'))
                                <a href="{{ route('classes.show', $class) }}" class="text-purple-600 hover:text-purple-800 mr-3">
                                    View
                                </a>
                            @endif
                            @if(Route::has('classes.edit'))
                                <a href="{{ route('classes.edit', $class) }}" class="text-blue-600 hover:text-blue-800 mr-3">
                                    Edit
                                </a>
                            @endif
                            <button
                                wire:click="delete({{ $class->id }})"
                                wire:confirm="Are you sure you want to delete this class?"
                                class="text-red-600 hover:text-red-800 cursor-pointer"
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-10 text-gray-500">
                            No classes found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $classes->links() }}
    </div>
</div>
