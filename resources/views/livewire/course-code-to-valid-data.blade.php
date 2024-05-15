<div>
        @if ($hasYear2)
        <div id="2nd-year-tables" >
            <h1>2nd Year 1st Semester</h1>
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
                    </tr>
                </thead>  
                <tbody id="tableBody">
                </tbody>
                </table>
            </div>
            </div>
            <span id="totalUnits"></span>
        
            <h1>2nd Year 2nd Semester</h1>
        
            <div class="card">
            <!-- /.card-header -->
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table " style="background-color: white">
        
                <thead style="background-color: #f8f8f8">
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Units</th>
                    <th>Pre(Co)-Requisites</th>
                    </tr>
                </thead>  
                <tbody id="tableBody22">
                    @foreach ($courses->where('year_lvl', 2)->where('sem', 2)->whereIn('course_code', $allowedCourseCodes) as $course)
                        <tr id="row_{{ $course->id }}">
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->units }}</td>
                            <td>{{ $course->pre_requisites }}</td>
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
            <div class="card">
            <!-- /.card-header -->
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table " style="background-color: white">
        
                <thead style="background-color: #f8f8f8">
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Units</th>
                    <th>Pre(Co)-Requisites</th>
                    </tr>
                </thead> 
                @foreach ($courses->where('year_lvl', 3)->where('sem', 1)->whereIn('course_code', $allowedCourseCodes) as $course)
                        <tr id="row_{{ $course->id }}">
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->units }}</td>
                            <td>{{ $course->pre_requisites }}</td>
                        </tr>
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
                    </tr>
                </thead>  
                <tbody id="tableBody42">
                @foreach ($courses->where('year_lvl', 3)->where('sem', 2)->whereIn('course_code', $allowedCourseCodes) as $course)
                        <tr id="row_{{ $course->id }}">
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->units }}</td>
                            <td>{{ $course->pre_requisites }}</td>
                        </tr>
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
                            </tr>
                        </thead>  
                        <tbody id="tableBody72">
                        @foreach ($courses->where('year_lvl', 4)->where('sem', 1)->whereIn('course_code', $allowedCourseCodes) as $course)
                        <tr id="row_{{ $course->id }}">
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->units }}</td>
                            <td>{{ $course->pre_requisites }}</td>
                        </tr>
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
                            </tr>
                        </thead>  
                        <tbody id="tableBody62">
                        @foreach ($courses->where('year_lvl', 4)->where('sem', 2)->whereIn('course_code', $allowedCourseCodes) as $course)
                        <tr id="row_{{ $course->id }}">
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->units }}</td>
                            <td>{{ $course->pre_requisites }}</td>
                        </tr>
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
        <button wire:click="pushApprove"  class="btn btn-success" data-dismiss="modal">Approve</button>
        <button wire:click="pushReject" type="button" class="btn btn-danger" data-dismiss="modal">Reject</button>
        <br>
</div>
