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
          <h2>ア</h2>
          <p>a</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>イ</h2>
          <p>i</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ウ</h2>
          <p>u</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>エ</h2>
          <p>e</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>オ`</h2>
          <p>o</p>
        </div>
      </div>
</div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>カ</h2>
          <p>ka</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>キ</h2>
          <p>ki</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ク</h2>
          <p>ku</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ケ</h2>
          <p>ke</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>コ</h2>
          <p>ko</p>
        </div>
      </div>
</div>

<div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>サ</h2>
          <p>sa</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>シ</h2>
          <p>shi</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ス</h2>
          <p>su</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>セ</h2>
          <p>se</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ソ</h2>
          <p>so</p>
        </div>
      </div>
   </div>

      <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>タ</h2>
          <p>ta</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>チ</h2>
          <p>chi</p>
        </div>
      </div>
      
    <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
        <h2>ツ</h2>
        <p>tsu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>テ</h2>
          <p>te</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ト</h2>
          <p>to</p>
        </div>
      </div>
    </div>

      <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ナ</h2>
          <p>na</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ニ</h2>
          <p>ni</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ヌ</h2>
          <p>nu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ネ</h2>
          <p>ne</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ノ</h2>
          <p>no</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ハ</h2>
          <p>ha</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ヒ</h2>
          <p>hi</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>フ</h2>
          <p>fu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ヘ</h2>
          <p>he</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ホ</h2>
          <p>ho</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>マ</h2>
          <p>ma</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ミ</h2>
          <p>mi</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ム</h2>
          <p>mu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>メ</h2>
          <p>me</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>モ</h2>
          <p>mo</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ヤ</h2>
          <p>ya</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ユ</h2>
          <p>yu</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ヨ</h2>
          <p>yo</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ラ</h2>
          <p>ra</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>リ</h2>
          <p>ri</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ル</h2>
          <p>ru</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>レ</h2>
          <p>re</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ロ</h2>
          <p>ro</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ワ</h2>
          <p>wa</p>
        </div>
      </div>

      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ヲ</h2>
          <p>wo</p>
        </div>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
      <!-- <img src="gambar.jpg" alt="Gambar" /> -->
        <div class="card-content">
          <h2>ン</h2>
          <p>n</p>
        </div>
      </div>
    </div>

</div>

   

    <!-- <table class="table table-secondary table-striped small-table">
    <thead>
    <tr>
      <th scope="col">Romaji</th>
      <th scope="col">Hiragana</th>
      <th scope="col">Katakana</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>a</td>
      <td>あ</td>
      <td>ア</td>
    </tr>
    <tr>
      <td>i</td>
      <td>い</td>
      <td>イ</td>
    </tr>
    <tr> 
      <td>u</td>
      <td>う</td>
      <td>ウ</td>
    </tr>
    <tr> 
      <td>e</td>
      <td>え</td>
      <td>エ</td>
    </tr>
    <tr> 
      <td>o</td>
      <td>お</td>
      <td>オ</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
    <tr> 
      <td>ki</td>
      <td>き</td>
      <td>キ</td>
    </tr>
    <tr> 
      <td>ku</td>
      <td>く</td>
      <td>ク</td>
    </tr>
    <tr> 
      <td>ke</td>
      <td>け</td>
      <td>ケ</td>
    </tr>
    <tr> 
      <td>ko</td>
      <td>こ</td>
      <td>コ</td>
    </tr>
    <tr> 
      <td>sa</td>
      <td>さ</td>
      <td>サ</td>
    </tr>
    <tr> 
      <td>shi</td>
      <td>し</td>
      <td>シ</td>
    </tr>
    <tr> 
      <td>su</td>
      <td>す</td>
      <td>ス</td>
    </tr>
    <tr> 
      <td>se</td>
      <td>せ</td>
      <td>セ</td>
    </tr>
    <tr> 
      <td>so</td>
      <td>そ</td>
      <td>ソ </td>
    </tr>
    <tr> 
      <td>ta</td>
      <td>た</td>
      <td>o</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
    <tr> 
      <td>ka</td>
      <td>か</td>
      <td>カ</td>
    </tr>
  </tbody>
    </table> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    </body>
</html>
