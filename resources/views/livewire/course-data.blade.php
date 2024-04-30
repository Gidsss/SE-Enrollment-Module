<div>
<div>
    <button wire:click="pushCourseCodes">Push Course Codes</button>
            @if (session()->has('courseCodesNotification'))
                <div class="alert alert-success">
                    {{ session('courseCodesNotification') }}
                </div>
            @endif

            @if (isset($displayedCourseCodes))
                <pre>Compiled Course Codes: {{ json_encode($displayedCourseCodes) }}</pre>
            @endif

            @if (isset($studentName))
                <p>Student Name: {{ $studentName }}</p>
                <p>Student Year: {{ $yearlvl }}</p>
            @endif

            @if ($hasYear2)
        <div id="2nd-year-tables" >
            <h1>2nd Year 1st Semester</h1>
            <body>
            <div class="dropdown" style="left: 85%">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton2_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="
                    width:15% ;
                    position:auto;
                "
                >
                <span>Add Class</span>
        
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent2_1">
                <!-- Dropdown options will be dynamically added here -->
                </div>
            </div>
            </body>
        
            <div class="card">
            <!-- /.card-header -->
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table " style="background-color: white">
        
                <thead style="background-color: #f8f8f8">
                    <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Units</th>
                    <th>Pre(Co)-Requisites</th>
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody">
                </tbody>
                </table>
            </div>
            </div>
            <span id="totalUnits"></span>
        
            <h1>2nd Year 2nd Semester</h1>
            <body>
            <div class="dropdown" style="left: 85%">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton2_2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="
                    width:15% ;
                    position:auto;
                "
                >
                <span>Add Class</span>
        
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent2_2">
                @foreach($dropdownContent2_2 as $course)
                    @if(is_object($course))
                        <a wire:click.prevent="moveRowFromDropdownToTable('{{ $course->course_code }}', 'tableBody22')" class="dropdown-item" href="#">{{ $course->course_code }} - {{ $course->course_name }}</a>
                    @endif
                @endforeach
                </div>
            </div>
            </body>
        
            <div class="card">
            <!-- /.card-header -->
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table " style="background-color: white">
        
                <thead style="background-color: #f8f8f8">
                    <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Units</th>
                    <th>Pre(Co)-Requisites</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody22">
                @foreach ($courses->where('year_lvl', 2)->where('sem', 2)->where('grades', '!=', 5) as $course)
                    <tr id="row_{{ $course->id }}">
                        <td>{{ $course->course_code }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->units }}</td>
                        <td>{{ $course->pre_requisites }}</td>
                        <td></td>
                        <td>
                            <!-- Pass course ID to the moveRowToDropdown method -->
                            <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody22', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
            <span id="totalUnits22">
                {{ $totalUnits22 }}
                @if ($totalUnits22 < 10)
                    <span class="badge badge-success">Underload</span>
                @elseif ($totalUnits22 >= 10 && $totalUnits22 <= 13)
                    <span class="badge badge-primary">Normal Load</span>
                @else
                    <span class="badge badge-danger">Overload</span>
                @endif
            </span>
        </div>
        @endif
        
        @if ($hasYear3)
        <div id="3rd-year-tables" >
            <h1>3rd Year 1st Semester</h1>
            <body>
            <div class="dropdown" style="left: 85%">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton3_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="
                    width:15% ;
                    position:auto;
                "
                >
                <span>Add Class</span>
        
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent3_1">
                @foreach($dropdownContent3_1 as $course)
                    @if(is_object($course))
                        <a wire:click.prevent="moveRowFromDropdownToTable('{{ $course->course_code }}', 'tableBody32')" class="dropdown-item" href="#">{{ $course->course_code }} - {{ $course->course_name }}</a>
                    @endif
                @endforeach

                </div>
            </div>
            </body>
        
            <div class="card">
            <!-- /.card-header -->
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table " style="background-color: white">
        
                <thead style="background-color: #f8f8f8">
                    <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Units</th>
                    <th>Pre(Co)-Requisites</th>
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody32">
                @foreach ($courses as $course)
                    @php
                        $preRequisiteGrade = $this->getPrerequisiteGrade($course->pre_requisites);
                    @endphp
                    @if (($course->year_lvl === 3 && $course->sem === 1) ||
                        ($course->year_lvl === 2 && $course->sem === 1 && $course->grades === 5))
                        @if ($preRequisiteGrade !== 5)
                            <tr id="row_{{ $course->id }}">
                                <td>{{ $course->course_code }}</td>
                                <td>{{ $course->course_name }}</td>
                                <td>{{ $course->units }}</td>
                                <td>{{ $course->pre_requisites }}</td>
                                <td>
                                    <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody32', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                        @endif
                    @endif
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
            <span id="totalUnits32">
                {{ $totalUnits32 }}
                @if ($totalUnits32 < 10)
                    <span class="badge badge-success">Underload</span>
                @elseif ($totalUnits32 >= 10 && $totalUnits32 <= 13)
                    <span class="badge badge-primary">Normal Load</span>
                @else
                    <span class="badge badge-danger">Overload</span>
                @endif
            </span>
                    
            <h1>3rd Year 2nd Semester</h1>
            
            <body>
            <div class="dropdown" style="left: 85%">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton3_2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="
                    width:15% ;
                    position:auto;
                "
                >
                <span>Add Class</span>
        
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent3_2">
                @foreach($dropdownContent3_2 as $course)
                    @if(is_object($course))
                    <a wire:click.prevent="moveRowFromDropdownToTable('{{ $course->course_code }}', 'tableBody42')" class="dropdown-item" href="#">
                        {{ $course->course_code }} - {{ $course->course_name }}
                    </a>
                    @endif
                @endforeach
                </div>
            </div>
        
            </body>
        
            <div class="card">
            <!-- /.card-header -->
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table " style="background-color: white">
                <thead style="background-color: #f8f8f8">
                    <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Units</th>
                    <th>Pre(Co)-Requisites</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody42">
                @foreach ($courses as $course)
                    @if (($course->year_lvl === 3 && $course->sem === 2) ||
                        ($course->year_lvl === 2 && $course->sem === 2 && $course->grades === 5))
                        <tr id="row_{{ $course->id }}">
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->units }}</td>
                            <td>{{ $course->pre_requisites }}</td>
                            <td></td>
                            <td>
                                <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody42', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
            <span id="totalUnits42">
                {{ $totalUnits42 }}
                @if ($totalUnits42 < 10)
                    <span class="badge badge-success">Underload</span>
                @elseif ($totalUnits42 >= 10 && $totalUnits42 <= 13)
                    <span class="badge badge-primary">Normal Load</span>
                @else
                    <span class="badge badge-danger">Overload</span>
                @endif
            </span>
        </div>
        @endif

        @if ($hasYear4)
        <div id="4th-year-tables" >
            <h1>4th Year 1st Semester</h1>
            
            <body>
                <div class="dropdown" style="left: 85%">
                    <button type="button" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="
                            width:15% ;
                            position:auto;
                        "
                    >
                        <span>Add Class</span>
        
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent4_1">
                    @foreach($dropdownContent4_1 as $course)
                        @if(is_object($course))
                        <a wire:click.prevent="moveRowFromDropdownToTable('{{ $course->course_code }}', 'tableBody72')" class="dropdown-item" href="#">{{ $course->course_code }} - {{ $course->course_name }}</a>
                        @endif
                    @endforeach
                    </div>
                </div>
        
            </body>
        
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                    <table class="table " style="background-color: white">
                        <thead style="background-color: #f8f8f8">
                            <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Units</th>
                                <th>Pre(Co)-Requisites</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>  
                        <tbody id="tableBody72">
                        @foreach ($courses as $course)
                            @if (($course->year_lvl === 4 && $course->sem === 1) ||
                                ($course->year_lvl === 3 && $course->sem === 1 && $course->grades === 5))
                                <tr id="row_{{ $course->id }}">
                                    <td>{{ $course->course_code }}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->units }}</td>
                                    <td>{{ $course->pre_requisites }}</td>
                                    <td></td>
                                    <td>
                                        <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody72', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <span id="totalUnits72">
                {{ $totalUnits72 }}
                @if ($totalUnits72 < 10)
                    <span class="badge badge-success">Underload</span>
                @elseif ($totalUnits72 >= 10 && $totalUnits72 <= 13)
                    <span class="badge badge-primary">Normal Load</span>
                @else
                    <span class="badge badge-danger">Overload</span>
                @endif
            </span>
        

            <h1>4th Year 2nd Semester</h1>
            
            <body>
                <div class="dropdown" style="left: 85%">
                    <button type="button" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="
                            width:15% ;
                            position:auto;
                        "
                    >
                        <span>Add Class</span>
        
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent4_2">
                    @foreach($dropdownContent4_2 as $course)
                        @if(is_object($course))
                        <a wire:click.prevent="moveRowFromDropdownToTable('{{ $course->course_code }}', 'tableBody62')" class="dropdown-item" href="#">{{ $course->course_code }} - {{ $course->course_name }}</a>
                        @endif
                    @endforeach

                    </div>
                </div>
            </body>
        
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                    <table class="table " style="background-color: white">
                        <thead style="background-color: #f8f8f8">
                            <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Units</th>
                                <th>Pre(Co)-Requisites</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>  
                        <tbody id="tableBody62">
                        @foreach ($courses as $course)
                            @if (($course->year_lvl === 4 && $course->sem === 2) ||
                                ($course->year_lvl === 2 && $course->sem === 2 && $course->grades === 5))
                                <tr id="row_{{ $course->id }}">
                                    <td>{{ $course->course_code }}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->units }}</td>
                                    <td>{{ $course->pre_requisites }}</td>
                                    <td></td>
                                    <td>
                                        <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody62', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <span id="totalUnits62">
                {{ $totalUnits62 }}
                @if ($totalUnits62 < 10)
                    <span class="badge badge-success">Underload</span>
                @elseif ($totalUnits62 >= 10 && $totalUnits62 <= 13)
                    <span class="badge badge-primary">Normal Load</span>
                @else
                    <span class="badge badge-danger">Overload</span>
                @endif
            </span>
        </div>
        @endif
</div>
