<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/quiz.css">
</head>
<body>
    {{-- @dd($question->Question); --}}
    <div class="row-top">
        <i class="fa-solid fa-circle-xmark" style="font-size:35px;"></i>
        <span class="header-score"> 1 / 3</span>
    </div>

    <div class="row-mid">
        <section class="quiz-section">
            <div class="quiz-box">
                <div class="quiz-header">
                    <span class="question-text">{{ $question->Question }} </span>
                </div>
                <div class="option-list">
                    <form action="/submit" method="post">
                        @csrf <input type="hidden" name="id" value="{{ $question->id}}">
                        <button class="option" type="submit" name="answer" value="{{ $question->Options_1 }}">
                            
                            <span>{{ $question->Options_1 }}</span>
                        </button>
                        <button class="option" type="submit" name="answer" value="{{ $question->Options_2 }}">
                            
                           <span> {{ $question->Options_2 }}</span>
                        </button>
                        <button class="option" type="submit" name="answer" value="{{ $question->Options_3 }}">
                            
                            <span> {{ $question->Options_3 }}</span>
                        </button>
                        <button class="option" type="submit" name="answer" value="{{ $question->Options_4 }}">
                            
                            <span>{{ $question->Options_4 }}</span>
                        </button>
                    </form>
                    
                </div>
                {{-- <span class="info">2. Lorem ipsu sit amet.</span>
                <span class="info">3. Lorem, ipsum.</span>
                <span class="info">4. Lorem amet.</span> --}}
            </div>
        </section>
    </div>

    <div class="row-bot">
        <div class="btn-group">
            <i class="fa-regular fa-circle-check"><span>Correct Answer!</span></i>
            <a href="#" class="info-btn continue-btn">Continue</a>
        </div>
    </div>

    <script src="question.js"></script>
    <script src="quiz.js"></script>
</body>
</html>
