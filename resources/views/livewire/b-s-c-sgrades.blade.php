<div>
    <div id="1st-year-tables">
        <h1>1st Year 1st Semester</h1>
        <div class="card">
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table" style="background-color: white">
                    <thead style="background-color: #f8f8f8">
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Pre(Co)-Requisites</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody11">
                        @foreach ($bscs_grades->where('year_lvl', 1)->where('sem', 1) as $bscs_grade)
                            <tr id="row_{{ $bscs_grade->id }}">
                                <td>{{ $bscs_grade->course_code }}</td>
                                <td>{{ $bscs_grade->course_name }}</td>
                                <td>{{ $bscs_grade->units }}</td>
                                <td>{{ $bscs_grade->pre_requisites }}</td>
                                <td>{{ $bscs_grade->grades }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td> <!-- Empty columns to reach the 3rd column -->
                            <td><strong>Total Units: {{ $totalUnits11 }}</strong></td>
                            <td></td> <!-- Empty column to reach the 5th column -->
                            <td><strong>GWA: {{ $totalGrades11 }}</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>


        <h1>1st Year 2nd Semester</h1>

        <div class="card">
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table" style="background-color: white">
                    <thead style="background-color: #f8f8f8">
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Pre(Co)-Requisites</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody22">
                        @foreach ($bscs_grades->where('year_lvl', 1)->where('sem', 2) as $bscs_grade)
                            <tr id="row_{{ $bscs_grade->id }}">
                                <td>{{ $bscs_grade->course_code }}</td>
                                <td>{{ $bscs_grade->course_name }}</td>
                                <td>{{ $bscs_grade->units }}</td>
                                <td>{{ $bscs_grade->pre_requisites }}</td>
                                <td>{{ $bscs_grade->grades }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td> <!-- Empty columns to reach the 3rd column -->
                            <td><strong>Total Units: {{ $totalUnits12 }}</strong></td>
                            <td></td> <!-- Empty column to reach the 5th column -->
                            <td ><strong>GWA: {{ $totalGrades12 }}</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div id="2nd-year-tables">
        <h1>2nd Year 1st Semester</h1>
        <div class="card">
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table" style="background-color: white">
                    <thead style="background-color: #f8f8f8">
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Pre(Co)-Requisites</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody21">
                        @foreach ($bscs_grades->where('year_lvl', 2)->where('sem', 1) as $bscs_grade)
                            <tr id="row_{{ $bscs_grade->id }}">
                                <td>{{ $bscs_grade->course_code }}</td>
                                <td>{{ $bscs_grade->course_name }}</td>
                                <td>{{ $bscs_grade->units }}</td>
                                <td>{{ $bscs_grade->pre_requisites }}</td>
                                <td>{{ $bscs_grade->grades }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td> <!-- Empty columns to reach the 3rd column -->
                            <td><strong>Total Units: {{ $totalUnits21 }}</strong></td>
                            <td></td> <!-- Empty column to reach the 5th column -->
                            <td><strong>GWA: {{ $totalGrades21 }}</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>


        <h1>2nd Year 2nd Semester</h1>

        <div class="card">
            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                <table class="table" style="background-color: white">
                    <thead style="background-color: #f8f8f8">
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Pre(Co)-Requisites</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody22">
                        @foreach ($bscs_grades->where('year_lvl', 2)->where('sem', 2) as $bscs_grade)
                            <tr id="row_{{ $bscs_grade->id }}">
                                <td>{{ $bscs_grade->course_code }}</td>
                                <td>{{ $bscs_grade->course_name }}</td>
                                <td>{{ $bscs_grade->units }}</td>
                                <td>{{ $bscs_grade->pre_requisites }}</td>
                                <td>{{ $bscs_grade->grades }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td> <!-- Empty columns to reach the 3rd column -->
                            <td><strong>Total Units: {{ $totalUnits22 }}</strong></td>
                            <td></td> <!-- Empty column to reach the 5th column -->
                            <td ><strong>GWA: {{ $totalGrades22 }}</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    
    
</div>