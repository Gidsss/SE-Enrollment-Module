<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLM Chairperson | Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Livewire styles -->
    @livewireStyles

    <style>
        html {
            background-color: #F6F6F6;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('backend/dist/img/plmlogo.png') }}" alt="AdminLTELogo" height="180" width="180">
        </div>
        <!-- Content Wrapper. Page content -->
        {{ $slot }}
    </div>

    <!--  Important Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="{{ url('backend/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('js/yearFirst.js') }}"></script>
    <script src="{{ asset('js/yearSecond.js') }}"></script>
    <script src="{{ asset('js/yearThird.js') }}"></script>
    <script src="{{ asset('js/yearFourth.js') }}"></script>

    
    <script>
    let previousYearLevel = null;

    function loadYearLevelScripts(year) {
        // Remove scripts for the previously clicked year level
        if (previousYearLevel !== null) {
            removeYearLevelScripts(previousYearLevel);
        }

        // Load scripts for the selected year level
        const script = document.createElement('script');
        script.src = `/js/year${year}.js`; // Assuming your script files are named yearFirst.js etc.
        script.setAttribute('data-year-level', year); // Set a custom attribute to identify the script by year level
        document.body.appendChild(script);

        // Update the previousYearLevel variable
        previousYearLevel = year;
    }

    function removeYearLevelScripts(year) {
        // Select all scripts with data-year-level attribute equal to the year level
        const scripts = document.querySelectorAll(`script[data-year-level="${year}"]`);

        // Remove each script
        scripts.forEach(script => {
            console.log('Removing script:', script.src);
            script.parentNode.removeChild(script);
        });
    }

    // Attach the loadYearLevelScripts function to the click event of accordion buttons
    const accordionButtons = document.querySelectorAll('.accordion-button');
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const year = this.textContent.trim().split(' ')[0]; // Extract the year level from the button text
            loadYearLevelScripts(year);
        });
    });
        </script>
@stack('scripts')
    @livewireScripts
</body>
</html>
