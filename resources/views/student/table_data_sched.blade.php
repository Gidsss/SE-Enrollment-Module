<!-- Dito sa blade na to yung magiging laman ng pdf  -->



    <style>
        .custom-bg-color {
            background-color: #5074bc;
        }
        .custom-table-container {
            position: absolute;
            top: 230px; /* Change this value to adjust the top position */
            left: 13%; /* Change this value to adjust the left position */
            width: 85%; /* Adjust the width of the container */
            background-color: white !important;
            border-radius: 10px; /* Adjust the radius for rounded edges */
            border: 1px solid #ccc; /* Adjust the border color and thickness */
        }

      
    </style>
                <!-- Main content -->
                <section class="content">
               
                    <div id="myDiv" class="card custom-table-container">
                    
                        <div class="card-body">
               
                            <table class="table custom-table">
                                <thead>
                                    <tr id="table-headers">
                                        <!-- Header content and background color will be dynamically added here using JavaScript -->
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    @foreach($tableData as $data)
                                        <tr>
                                            <td>{{ $data['classCode'] }}</td>
                                            <td>{{ $data['section'] }}</td>
                                            <td>{{ $data['subjectTitle'] }}</td>
                                            <td>{{ $data['units'] }}</td>
                                            <td>{{ $data['schedule'] }}</td>
                                            <td>{{ $data['room'] }}</td>
                                        </tr>
                                    @endforeach
                            </table>
                            
                        </div>
                        
                    </div>
                   
                </section>

                
        </div>
    
        
    </div>
     
        <script>
        function handleClick(event) {
            // Handle the click event here
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            window.location.href = '{{ route("regular_assessment") }}';
        }
        document.addEventListener('DOMContentLoaded', function () 
        {
            // Replace the following array with your custom headers, background colors, and text colors
            var customHeaders = [
                { text: 'Class Code', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Section', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Subject Title', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Units', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Schedule', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Room', bgColor: '#f0f4fc', textColor: 'black' }
            ];

            var tableHeaders = document.getElementById('table-headers');
            var tableBody = document.getElementById('table-body');

            // Create and add th elements for each header with custom background color and text color
            customHeaders.forEach(function (header) {
                var th = document.createElement('th');
                th.textContent = header.text;
                th.style.backgroundColor = header.bgColor;
                th.style.color = header.textColor;
                tableHeaders.appendChild(th);
            });
        });
        </script>
