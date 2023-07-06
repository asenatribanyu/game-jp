@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="../css/char-design.css">
@endpush

@section('content')

    <div class="button-container">
        <button type="button" class="alert alert-info" onclick="window.location.href='{{ route('hiragana') }}'">Hiragana</button>
        <button type="button" class="alert alert-danger" onclick="window.location.href='{{ route('katakana') }}'">Katakana</button>
    </div>
    
<div class="main_char">
      
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
</div>
    
@endsection
