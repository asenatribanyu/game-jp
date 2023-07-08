<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Style (CSS) -->
    <link rel="stylesheet" href="../css/preload-design.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">

    <title>Japan Quiz | Start to Quiz</title>
</head>
<body>

    <div class="container">
        <div class="main-content">
            <h1 class="vertical" lang=ja>クイズ</h1>
            <div class="pre-text">
                <h3>Let's find out your skill!</h3>
                <p>Try a quiz that engages students, generates leads</p>
            </div>
        </div>
        @foreach ($questions as $question)
        <div class="button">
           <a href="{{ $question->id }}"> <button>Start Quiz</button></a>
        </div>
        @endforeach
    </div>
    
</body>
</html>