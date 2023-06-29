<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('assets/icon/icon1.ico') }}"> 
        <title>Game Jp</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        
        <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    </head>


    <body>
    <nav class="navbar">
        <!-- <h3>Logo</h3> -->
        <div class="navbar-nav">
            <h3>Logo</h3>
            <a class="nav-link" href="#">
              <img src="assets/icon/home.png" alt="Logo" class="navbar-logo">
              Home
            </a>
            <a class="nav-link" href="#">
              <img src="assets/icon/quiz-1.png" alt="Logo" class="navbar-logo">
              Quiz
            </a>
            <a class="nav-link" href="/dictionary">
              <img src="assets/icon/dict.png" alt="Logo" class="navbar-logo">
              Dictionary
            </a>
        </div>
    </nav>
    
    <body>

    
      <div class="button-container">
        <button type="button" class="alert alert-info" onclick="window.location.href='{{ route('hiragana') }}'">
          <img src="assets/icon/hiragana.png" alt="Hiragana" class="icon">
            Hiragana
        </button>

        <button type="button" class="alert alert-danger" onclick="window.location.href='{{ route('katakana') }}'">
          <img src="assets/icon/katakana.png" alt="Katakana" class="icon">    
            Katakana
        </button>

      </div>
      


    <!-- <div class="button-container">
        <a hreff="{{ route('hiragana') }}" class="alert alert-info no-underline" type="button">Hiragana</a>
        <a hreff="{{ route('katakana') }}" class="alert alert-danger no-underline" type="button">Katakana</a>

        <button type="button" class="alert alert-info">Hiragana</button>  
        <button type="button" class="alert alert-danger">Katakana</button>  
    </div> --> 
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    </body>
</html>
