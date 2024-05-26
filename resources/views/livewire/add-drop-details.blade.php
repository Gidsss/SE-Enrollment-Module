<div>
    <div>
        <h1 style="color: black;">Add/Drop Classes</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reason" id="changeClassSchedule" value="The class schedule was changed by the college." wire:model="reason">
                    <label class="form-check-label" for="changeClassSchedule">
                        The class schedule was changed by the college.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reason" id="subjectsNotIncluded" value="The following subject(s) was not included in my SER." wire:model="reason">
                    <label class="form-check-label" for="subjectsNotIncluded">
                        The following subject(s) was not included in my SER.
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reason" id="changeStudentSchedule" value="I want to change my schedule." wire:model="reason">
                    <label class="form-check-label" for="changeStudentSchedule">
                        I want to change my schedule.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reason" id="notProperlyAdvised" value="I was not advised properly by the college adviser." wire:model="reason">
                    <label class="form-check-label" for="notProperlyAdvised">
                        I was not advised properly by the college adviser.
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="reason" id="others" value="others" wire:model="reason">
                <label class="form-check-label" for="others">
                    Others:
                </label>
                <input type="text" class="form-control mt-2" wire:model="otherReasons" id="otherReasons" placeholder="Please specify" @if($reason !== 'others') @endif>
            </div>
        </div>
        <div class="dropdown" style="left: 85%">
            <button type="button" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:15%; position:auto;">
                <span>Add Class</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                @foreach($dropdownContent as $class)
                    <a wire:click.prevent="addClass('{{ $class['subject_code'] }}')" class="dropdown-item" href="#">
                        {{ $class['subject_code'] }} - {{ $class['course_name'] }}
                    </a>
                @endforeach
            </div>
        </div>
        

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

        <div class="dropdown" style="left: 85%; margin-top: 10px;">
            <button type="button" class="dropdown-toggle" id="dropdownMenuButtonDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:15%; position:auto;">
                <span>Drop Class</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonDrop">
                @foreach($dropdownContent as $class)
                    <a wire:click.prevent="dropClass('{{ $class['subject_code'] }}')" class="dropdown-item" href="#">
                        {{ $class['subject_code'] }} - {{ $class['course_name'] }}
                    </a>
                @endforeach
            </div>
        </div>
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

        <button wire:click="saveChanges" class="btn btn-primary" style="margin-top: 20px;">Save Changes</button>

        @if (session()->has('message'))
            <div class="alert alert-success" style="margin-top: 20px;">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>