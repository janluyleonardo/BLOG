<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="@yield('title')" type="image/x-icon">
    {{-- <link rel="shortcut icon" href="{{ asset('/IMAGES/AVENGERS/Herois Marvel (123).png') }}" type="image/x-icon"> --}}
    <!-- styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- header -->
                <header>
                    este es el header
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- nav -->
                <nav>esta es la navbar</nav>
                <!--content-->
                <h1>@yield('content')</h1>
            </div>
        </div>
        <div class="row">
            <!-- footer -->
            <footer>
                este es el footer
            </footer>
        </div>
    </div>

    <!-- script -->
</body>

</html>
