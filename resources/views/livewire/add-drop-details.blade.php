<div>
<div>
    <div>
        <h1 style="color: black;">Add/Drop Classes</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reason" id="changeClassSchedule" value="The class schedule was changed by the college." wire:model="reason">
                    <label class="form-check-label" for="changeClassSchedule" style="color: black;">
                        The class schedule was changed by the college.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reason" id="subjectsNotIncluded" value="The following subject(s) was not included in my SER." wire:model="reason">
                    <label class="form-check-label" for="subjectsNotIncluded" style="color: black;">
                        The following subject(s) was not included in my SER.
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reason" id="changeStudentSchedule" value="I want to change my schedule." wire:model="reason">
                    <label class="form-check-label" for="changeStudentSchedule" style="color: black;">
                        I want to change my schedule.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reason" id="notProperlyAdvised" value="I was not advised properly by the college adviser." wire:model="reason">
                    <label class="form-check-label" for="notProperlyAdvised" style="color: black;">
                        I was not advised properly by the college adviser.
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="reason" id="others" value="others" wire:model="reason">
                <label class="form-check-label" for="others" style="color: black;">
                    Others:
                </label>
                <input type="text" class="form-control mt-2" wire:model="otherReasons" id="otherReasons" placeholder="Please specify" @if($reason !== 'others') disabled @endif>
                @error('otherReasons') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        @error('reason') <span class="text-danger">{{ $message }}</span> @enderror
        
        <!-- Add Class Dropdown -->
        <div class="dropdown" style="left: 85%">
            <button type="button" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:15%; position:auto;">
                <span>Add Class</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="max-height: 300px; overflow-y: auto;">
                @foreach($dropdownContent as $class)
                    <a wire:click.prevent="addClass('{{ $class['subject_code'] }}')" class="dropdown-item" href="#">
                        {{ $class['subject_code'] }} - {{ $class['course_name'] }}
                    </a>
                @endforeach
            </div>
        </div>
        
        <!-- Added Classes Table -->
        <div class="card" style="margin-top: 20px;">
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <h2>Added Classes</h2>
                <table class="table" style="background-color: white">
                    <thead style="background-color: #f8f8f8">
                        <tr>
                            <th style="color: black;">Subject Code</th>
                            <th style="color: black;">Course Name</th>
                            <th style="color: black;">Units</th>
                            <th style="color: black;">Days/Time</th>
                            <th style="color: black;">Room</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($addedClasses as $class)
                            <tr>
                                <td style="color: black;">{{ $class['subject_code'] }}</td>
                                <td style="color: black;">{{ $class['course_name'] }}</td>
                                <td style="color: black;">{{ $class['units'] }}</td>
                                <td style="color: black;">{{ $class['days_time'] }}</td>
                                <td style="color: black;">{{ $class['room'] }}</td>
                                <td>
                                    <button wire:click="removeClass('{{ $class['subject_code'] }}', 'added')" class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Drop Class Dropdown -->
        <div class="dropdown" style="left: 85%; margin-top: 10px;">
            <button type="button" class="dropdown-toggle" id="dropdownMenuButtonDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:15%; position:auto;">
                <span>Drop Class</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonDrop" style="max-height: 300px; overflow-y: auto;">
                @foreach($dropdownContent as $class)
                    <a wire:click.prevent="dropClass('{{ $class['subject_code'] }}')" class="dropdown-item" href="#">
                        {{ $class['subject_code'] }} - {{ $class['course_name'] }}
                    </a>
                @endforeach
            </div>
        </div>
        <!-- Dropped Classes Table -->
        <div class="card" style="margin-top: 20px;">
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <h2>Dropped Classes</h2>
                <table class="table" style="background-color: white">
                    <thead style="background-color: #f8f8f8">
                        <tr>
                            <th style="color: black;">Subject Code</th>
                            <th style="color: black;">Course Name</th>
                            <th style="color: black;">Units</th>
                            <th style="color: black;">Days/Time</th>
                            <th style="color: black;">Room</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($droppedClasses as $class)
                            <tr>
                                <td style="color: black;">{{ $class['subject_code'] }}</td>
                                <td style="color: black;">{{ $class['course_name'] }}</td>
                                <td style="color: black;">{{ $class['units'] }}</td>
                                <td style="color: black;">{{ $class['days_time'] }}</td>
                                <td style="color: black;">{{ $class['room'] }}</td>
                                <td>
                                    <button wire:click="removeClass('{{ $class['subject_code'] }}', 'dropped')" class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Save Changes Button -->
        <button type="button" class="btn btn-primary" style="margin-top: 20px;" data-toggle="modal" data-target="#confirmationModal1">Save Changes</button>

        @if (session()->has('message'))
            <div class="alert alert-success" style="margin-top: 20px;">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal1" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel1">Confirm Changes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to save these changes?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" wire:click="saveChanges">Yes, Save Changes</button>
            </div>
        </div>
    </div>
</div>
</div>