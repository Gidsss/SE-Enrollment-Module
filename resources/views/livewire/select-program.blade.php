<div>
    <div>
        <p style="color: red;">Once you've chosen a program, you cannot change it!</p>
    </div>
    <form wire:submit.prevent="saveNewProgram">
        <div class="form-group">
            <label for="selectProgram">Choose a Program:</label>
            <select wire:model="selectedProgram" class="form-control" id="selectProgram" name="selectedProgram" {{ $isDisabled ? 'disabled' : '' }}>
                <option value="">Select a Program</option>
                @foreach($programs as $program)
                    <option value="{{ $program->program_code }}">{{ $program->program_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" {{ $isDisabled ? 'disabled' : '' }}>Save changes</button>
        </div>
        @if ($message)
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
    </form>
</div>