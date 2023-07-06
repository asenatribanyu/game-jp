<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../css/main-design.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    @stack('style')

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Side Navbar Logos -->
    <script src="https://kit.fontawesome.com/1d9af05b36.js"></script>

    <title>Japan Quiz | {{ $title }}</title>
</head>

<body>
   
    {{-- @dd($item->id); --}}
   
   
    <!-- Navigation Bar -->
    <nav>
        <!-- Mobile Navbar -->
        <div class="navbar">
            <ul>
                <li><a href="/" ><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="/quiz" ><i class="fa-solid fa-book"></i>Quiz</a></li>
                <li><a href="/dictionary" ><i class="fa-solid fa-language"></i>Dictionary</a></li>
            </ul>

            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="logo">
                <h1>LOGO</h1>
            </div>
            <div></div> <!--untuk membuat Logo berada diposisi tengah!-->
        </div>
        
        <!-- Side Navigation Bar -->
        <div class="sidebar">
            <div class="logo-toggle">
                <h1>LOGO</h1>
            </div>
            <hr class="new1">

            <ul>
                @foreach ($questions as $question)
                <li><a href="/" ><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="/{{ $question->id }}" ><i class="fa-solid fa-book"></i>Quiz</a></li>
                <li><a href="/dictionary" ><i class="fa-solid fa-language"></i>Dictionary</a></li>
                @endforeach
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    
    <!-- Link JavaScript -->
    @stack('script')
    <script src="../js/main-script.js"></script>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script> -->

</body>
</html>