<div class="max-w-3xl mx-auto">
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Edit Attendance
            </h1>
            <p class="text-gray-500 mt-1">
                Update attendance record for {{ $attendance->student->first_name ?? '' }} {{ $attendance->student->last_name ?? '' }}.
            </p>
        </div>

        <a
            href="{{ route('attendance.index') }}"
            class="px-4 py-2 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 font-medium text-sm transition-all"
        >
            ← Back to Attendance
        </a>
    </div>

    {{-- Card Form --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 sm:p-8">
        <form wire:submit="update" class="space-y-6">
            
            {{-- Student Select --}}
            <div>
                <label for="student_id" class="block text-sm font-semibold text-slate-700 mb-1">
                    Select Student <span class="text-red-500">*</span>
                </label>
                <select
                    id="student_id"
                    wire:model="student_id"
                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                >
                    <option value="">-- Choose a Student --</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">
                            {{ $student->student_id }} - {{ $student->first_name }} {{ $student->last_name }}
                        </option>
                    @endforeach
                </select>
                @error('student_id')
                    <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Date --}}
                <div>
                    <label for="date" class="block text-sm font-semibold text-slate-700 mb-1">
                        Date <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="date"
                        id="date"
                        wire:model="date"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    >
                    @error('date')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Status --}}
                <div>
                    <label for="status" class="block text-sm font-semibold text-slate-700 mb-1">
                        Status <span class="text-red-500">*</span>
                    </label>
                    <select
                        id="status"
                        wire:model="status"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    >
                        <option value="present">✓ Present</option>
                        <option value="absent">✗ Absent</option>
                        <option value="late">⏱ Late</option>
                        <option value="excused">✉ Excused</option>
                    </select>
                    @error('status')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            {{-- Note --}}
            <div>
                <label for="note" class="block text-sm font-semibold text-slate-700 mb-1">
                    Note / Remark
                </label>
                <textarea
                    id="note"
                    wire:model="note"
                    rows="3"
                    placeholder="Optional details or reason..."
                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                ></textarea>
                @error('note')
                    <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                @enderror
            </div>

            {{-- Actions --}}
            <div class="flex items-center justify-end gap-3 border-t border-slate-100 pt-6">
                <a
                    href="{{ route('attendance.index') }}"
                    class="px-5 py-2.5 border border-slate-300 text-slate-700 rounded-lg hover:bg-slate-50 font-medium text-sm transition-all"
                >
                    Cancel
                </a>
                <button
                    type="submit"
                    class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold text-sm transition-all shadow-sm cursor-pointer"
                >
                    Update Attendance
                </button>
            </div>

        </form>
    </div>
</div>
