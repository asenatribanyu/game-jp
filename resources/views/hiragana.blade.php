<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('assets/icon/icon1.ico') }}"> 
        <title>Game Jp</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
        <button type="button" class="alert alert-info" onclick="window.location.href='{{ route('hiragana') }}'">Hiragana</button>
        <button type="button" class="alert alert-danger" onclick="window.location.href='{{ route('katakana') }}'">Katakana</button>
    </div>
    
    
<div class="card-container">
   <div class="card-row">
     <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>あ</h2>
          <p>a</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>い</h2>
          <p>i</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>う</h2>
          <p>u</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>え</h2>
          <p>e</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>お</h2>
          <p>o</p>
        </div>
      </div>
</div>

   <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>か</h2>
          <p>ka</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>き</h2>
          <p>ki</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>く</h2>
          <p>ku</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>け</h2>
          <p>ke</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>こ</h2>
          <p>ko</p>
        </div>
      </div>
</div>

<div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>さ</h2>
          <p>sa</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>し</h2>
          <p>shi</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>す</h2>
          <p>su</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>せ</h2>
          <p>se</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>そ</h2>
          <p>so</p>
        </div>
      </div>
   </div>

      <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>た</h2>
          <p>ta</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ち</h2>
          <p>chi</p>
        </div>
      </div>
      
    <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
        <h2>つ</h2>
        <p>tsu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>て</h2>
          <p>te</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>と</h2>
          <p>to</p>
        </div>
      </div>
    </div>

      <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>な</h2>
          <p>na</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>に</h2>
          <p>ni</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ぬ</h2>
          <p>nu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ね</h2>
          <p>ne</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>の</h2>
          <p>no</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ま</h2>
          <p>ma</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ひ</h2>
          <p>hi</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ふ</h2>
          <p>fu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>へ</h2>
          <p>he</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ほ</h2>
          <p>ho</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ま</h2>
          <p>ma</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>み</h2>
          <p>mi</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>む</h2>
          <p>mu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>め</h2>
          <p>me</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>め</h2>
          <p>mo</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>や</h2>
          <p>ya</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>や</h2>
          <p>yu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>よ</h2>
          <p>yo</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ら</h2>
          <p>ra</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>り</h2>
          <p>ri</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>る</h2>
          <p>ru</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>れ</h2>
          <p>re</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ろ</h2>
          <p>ro</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>わ</h2>
          <p>wa</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>を</h2>
          <p>wo</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ん</h2>
          <p>n</p>
        </div>
      </div>
    </div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    </body>
</html>
