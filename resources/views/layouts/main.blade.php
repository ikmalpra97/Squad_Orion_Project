<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Second-Watch</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    // spacing:{
                    //     13: '3.25rem',
                    //  },
                    //  fontFamily: {
                    //     inter:['Inter']
                    //  },
                     colors: {
                        oren: '#e35f21'
                        
                     }
                }
            }
        }
    </script>

</head>
<body>
    @include('partials.navbar')

    <div class="container mt-20">
        @yield('container')
      </div>

    @include('partials.footer')
</body>
</html>