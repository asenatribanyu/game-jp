@extends('layouts.main')

@push('style')    
  <link rel="stylesheet" href="../css/dictionary-design.css">
@endpush

@section('content')

  <div class="content">
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
  </div>

@endsection