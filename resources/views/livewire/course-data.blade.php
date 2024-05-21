
<div>
<div>
    <button wire:click="pushCourseCodesFinal">Push Final</button>

        @if ($hasYear2)
        <div id="2nd-year-tables" >
            <h1 style="color: black;">2nd Year 1st Semester</h1>
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
                @foreach($dropdownContent2_1 as $course)
                    @if(is_object($course))
                        <a wire:click.prevent="moveRowFromDropdownToTable('{{ $course->course_code }}', 'tableBody')" class="dropdown-item" href="#">{{ $course->course_code }} - {{ $course->course_name }}</a>
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
                    <th style="color: black;">Course Code</th>
                    <th style="color: black;">Course Name</th>
                    <th style="color: black;">Units</th>
                    <th style="color: black;">Pre(Co)-Requisites</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody">
                @foreach ($courses as $course)
                    @php
                        $preRequisiteGrade = $this->getPrerequisiteGrade($course->pre_requisites);

                        $preRequisites = explode(',', $course->pre_requisites);
                        $preReqCheck = '';
                        foreach ($preRequisites as $preReq) {
 
                        // Check if the prerequisite is "Standing" or if the grade is not 5
                        if (strpos($preReq, 'Standing') !== false || $preRequisiteGrade === 5 || $preReq === '') {
                            // If either condition is met, skip to the next prerequisite
                            continue;
                        }

                        // Check if the prerequisite is not in the displayed course codes
                        if (!in_array(trim($preReq), $displayedCourseCodes)) {
                            $preReqCheck = 'Pre-requisite not found';
                            break;
                        }

                        }
                    @endphp
                    @if (($course->year_lvl === 2 && $course->sem === 1) ||
                        ($course->year_lvl === 1 && $course->sem === 1 && $course->grades === 5))
                        @if ($preRequisiteGrade !== 5)
                            <tr id="row_{{ $course->id }}">
                                <td style="color: black;">{{ $course->course_code }}</td>
                                <td style="color: black;">{{ $course->course_name }}</td>
                                <td style="color: black;">{{ $course->units }}</td>
                                <td style="color: black;">{{ $course->pre_requisites }}</td>
                                <td style="color: red;">{{ $preReqCheck }}</td>
                                <td>
                                    <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                        @endif
                    @endif
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
            <span id="totalUnits21">
                {{ $totalUnits21 }}
                @if ($totalUnits21 < 10)
                    <span class="badge badge-success">Underload</span>
                @elseif ($totalUnits21 >= 10 && $totalUnits21 <= 13)
                    <span class="badge badge-primary">Normal Load</span>
                @else
                    <span class="badge badge-danger">Overload</span>
                @endif
            </span>
        
            <h1 style="color: black;">2nd Year 2nd Semester</h1>
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
                    <th style="color: black;">Course Code</th>
                    <th style="color: black;">Course Name</th>
                    <th style="color: black;">Units</th>
                    <th style="color: black;">Pre(Co)-Requisites</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody22">
                @foreach ($courses as $course)
                    @php
                        $preRequisiteGrade = $this->getPrerequisiteGrade($course->pre_requisites);

                        $preRequisites = explode(',', $course->pre_requisites);
                        $preReqCheck = '';
                        foreach ($preRequisites as $preReq) {
 
                        // Check if the prerequisite is "Standing" or if the grade is not 5
                        if (strpos($preReq, 'Standing') !== false || $preRequisiteGrade === 5 || $preReq === '') {
                            // If either condition is met, skip to the next prerequisite
                            continue;
                        }

                        // Check if the prerequisite is not in the displayed course codes
                        if (!in_array(trim($preReq), $displayedCourseCodes)) {
                            $preReqCheck = 'Pre-requisite not found';
                            break;
                        }

                        }
                    @endphp
                    @if (($course->year_lvl === 2 && $course->sem === 2) ||
                        ($course->year_lvl === 1 && $course->sem === 2 && $course->grades === 5))
                        @if ($preRequisiteGrade !== 5)
                            <tr id="row_{{ $course->id }}">
                                <td style="color: black;">{{ $course->course_code }}</td>
                                <td style="color: black;">{{ $course->course_name }}</td>
                                <td style="color: black;">{{ $course->units }}</td>
                                <td style="color: black;">{{ $course->pre_requisites }}</td>
                                <td style="color: red;">{{ $preReqCheck }}</td>
                                <td>
                                    <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody22', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                        @endif
                    @endif
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
            <h1 style="color: black;">3rd Year 1st Semester</h1>
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
                    <th style="color: black;">Course Code</th>
                    <th style="color: black;">Course Name</th>
                    <th style="color: black;">Units</th>
                    <th style="color: black;">Pre(Co)-Requisites</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody32">
                @foreach ($courses as $course)
                @php
                    $preRequisiteGrade = $this->getPrerequisiteGrade($course->pre_requisites);
                    $preRequisites = explode(',', $course->pre_requisites);
                    $preReqCheck = '';

                    foreach ($preRequisites as $preReq) {
                        if (strpos($preReq, 'Standing') !== false || $preReq === '') {
                            continue;
                        }

                        if ($preRequisiteGrade === 5 || !in_array(trim($preReq), $displayedCourseCodes)) {
                            $preReqCheck = 'Pre-requisite not found';
                            break;
                        }
                    }
                @endphp
                    @if (($course->year_lvl === 3 && $course->sem === 1) ||
                        ($course->year_lvl === 2 && $course->sem === 1 && $course->grades === 5))
                        @if ($preRequisiteGrade !== 5)
                            <tr id="row_{{ $course->id }}">
                                <td style="color: black;">{{ $course->course_code }}</td>
                                <td style="color: black;">{{ $course->course_name }}</td>
                                <td style="color: black;">{{ $course->units }}</td>
                                <td style="color: black;">{{ $course->pre_requisites }}</td>
                                <td style="color: red;">{{ $preReqCheck }}</td>
                                <td>
                                    <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody32', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                        @else
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
                    
            <h1 style="color: black;">3rd Year 2nd Semester</h1>
            
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
                    <th style="color: black;">Course Code</th>
                    <th style="color: black;">Course Name</th>
                    <th style="color: black;">Units</th>
                    <th style="color: black;">Pre(Co)-Requisites</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody42">
                @foreach ($courses as $course)
                    @php
                        $preRequisiteGrade = $this->getPrerequisiteGrade($course->pre_requisites);

                        $preRequisites = explode(',', $course->pre_requisites);
                        $preReqCheck = '';
                        foreach ($preRequisites as $preReq) {
 
                        // Check if the prerequisite is "Standing" or if the grade is not 5
                        if (strpos($preReq, 'Standing') !== false || $preRequisiteGrade === 5 || $preReq === '') {
                            // If either condition is met, skip to the next prerequisite
                            continue;
                        }

                        // Check if the prerequisite is not in the displayed course codes
                        if (!in_array(trim($preReq), $displayedCourseCodes)) {
                            $preReqCheck = 'Pre-requisite not found';
                            break;
                        }

                        }
                    @endphp
                    @if (($course->year_lvl === 3 && $course->sem === 2) ||
                        ($course->year_lvl === 2 && $course->sem === 2 && $course->grades === 5))
                        @if ($preRequisiteGrade !== 5 || !$this->isInDropdownContent('dropdownContent3_2', $course->id))
                        <tr id="row_{{ $course->id }}">
                            <td style="color: black;">{{ $course->course_code }}</td>
                            <td style="color: black;">{{ $course->course_name }}</td>
                            <td style="color: black;">{{ $course->units }}</td>
                            <td style="color: black;">{{ $course->pre_requisites }}</td>
                            <td style="color: red;">{{ $preReqCheck }}</td>
                            <td></td>
                            <td>
                                <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody42', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                            </td>
                        </tr>
                        @endif
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
            <h1 style="color: black;">4th Year 1st Semester</h1>
            
        <body>
            <div class="dropdown" style="left: 85%">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="width:15%; position:auto;">
                    <span>Add Class</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent4_1">
                @foreach($dropdownContent4_1 as $course)
                    @if(is_object($course))
                    <a wire:click.prevent="moveRowFromDropdownToTable('{{ $course->course_code }}', 'tableBody72')" class="dropdown-item" href="#">
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
                <table class="table" style="background-color: white">
                    <thead style="background-color: #f8f8f8">
                        <tr>
                            <th style="color: black;">Course Code</th>
                            <th style="color: black;">Course Name</th>
                            <th style="color: black;">Units</th>
                            <th style="color: black;">Pre(Co)-Requisites</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>  
                    <tbody id="tableBody72">
                    @foreach ($courses as $course)
                    @php
                        $preRequisiteGrade = $this->getPrerequisiteGrade($course->pre_requisites);

                        $preRequisites = explode(',', $course->pre_requisites);
                        $preReqCheck = '';
                        foreach ($preRequisites as $preReq) {
 
                        // Check if the prerequisite is "Standing" or if the grade is not 5
                        if (strpos($preReq, 'Standing') !== false || $preRequisiteGrade === 5 || $preReq === '') {
                            // If either condition is met, skip to the next prerequisite
                            continue;
                        }

                        // Check if the prerequisite is not in the displayed course codes
                        if (!in_array(trim($preReq), $displayedCourseCodes)) {
                            $preReqCheck = 'Pre-requisite not found';
                            break;
                        }

                        }
                    @endphp
                    @if (($course->year_lvl === 4 && $course->sem === 1) ||
                            ($course->year_lvl === 3 && $course->sem === 1 && $preRequisiteGrade === 5))
                            @if ($preRequisiteGrade !== 5 || $preRequisiteGrade === 5)
                                    <tr id="row_{{ $course->id }}">
                                        <td style="color: black;">{{ $course->course_code }}</td>
                                        <td style="color: black;">{{ $course->course_name }}</td>
                                        <td style="color: black;">{{ $course->units }}</td>
                                        <td style="color: black;">{{ $course->pre_requisites }}</td>
                                        <td style="color: red;">{{ $preReqCheck }}</td>
                                        <td></td>
                                        <td>
                                            <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody72', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                                        </td>
                                    </tr>

                                @endif
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

            <h1 style="color: black;">4th Year 2nd Semester</h1>
            
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
                                <th style="color: black;">Course Code</th>
                                <th style="color: black;">Course Name</th>
                                <th style="color: black;">Units</th>
                                <th style="color: black;">Pre(Co)-Requisites</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>  
                        <tbody id="tableBody62">
                        @foreach ($courses as $course)
                        @php
                            $preRequisiteGrade = $this->getPrerequisiteGrade($course->pre_requisites);

                            $preRequisites = explode(',', $course->pre_requisites);
                            $preReqCheck = '';
                            foreach ($preRequisites as $preReq) {
    
                            // Check if the prerequisite is "Standing" or if the grade is not 5
                            if (strpos($preReq, 'Standing') !== false || $preRequisiteGrade === 5 || $preReq === '') {
                                // If either condition is met, skip to the next prerequisite
                                continue;
                            }

                            // Check if the prerequisite is not in the displayed course codes
                            if (!in_array(trim($preReq), $displayedCourseCodes)) {
                                $preReqCheck = 'Pre-requisite not found';
                                break;
                            }

                            }
                        @endphp
                        @if (!$this->isCourseInAnyDropdown($course->id) &&
                            (($course->year_lvl === 4 && $course->sem === 2) ||
                            ($course->year_lvl === 3 && $course->sem === 2 && $preRequisiteGrade === 5) ||
                            ($course->year_lvl === 3 && $course->sem === 2 && $course->grades === 5) ||
                            ($course->year_lvl === 2 && $course->sem === 2 && $course->grades === 5)))
                                @if ($preRequisiteGrade !== 5 || $preRequisiteGrade === 5)
                                <tr id="row_{{ $course->id }}">
                                    <td style="color: black;">{{ $course->course_code }}</td>
                                    <td style="color: black;">{{ $course->course_name }}</td>
                                    <td style="color: black;">{{ $course->units }}</td>
                                    <td style="color: black;">{{ $course->pre_requisites }}</td>
                                    <td style="color: red;">{{ $preReqCheck }}</td>
                                    <td></td>
                                    <td>
                                        <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody62', '{{ $tableBodyId }}')" class="btn btn-danger btn-sm">X</button>
                                    </td>
                                </tr>
                                @endif
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
        <br>
        <button type="button" class="btn btn-primary" wire:click="pushCourseCodes">Save changes</button>
</div>