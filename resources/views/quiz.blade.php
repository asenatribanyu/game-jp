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
        <a href="/home"><i class="fa-solid fa-circle-xmark" style="font-size:35px;"></i></a>
        <span class="header-score"> {{ $question->id }} / {{ $totalquestion }}</span>
    </div>

    <div class="row-mid">
        <section class="quiz-section">
            <div class="quiz-box">
                <div class="quiz-header">
                    <span class="question-text">{{ $question->Question }} </span>
                </div>
                
                
                <div class="option-list">
                    <form action="/submit" method="post" >
                        @csrf 
                        <input type="hidden" name="id" value="{{ $question->id}}">

                        <button class="option {{ session('selected') == $question->Options_1 && $question->Answer == $question->Options_1 ? ' correct' : (session('selected') == $question->Options_1 && $question->Answer !== $question->Options_1 ? ' incorrect' :(session('selected') !== null && $question->Answer == $question->Options_1 ? ' correct' : ' '))  }}" type="submit" name="answer" value="{{ $question->Options_1 }}">
                            
                            <span>{{ $question->Options_1 }}</span>
                        </button>
                        <button class="option {{ session('selected') == $question->Options_2 && $question->Answer == $question->Options_2 ? ' correct' : (session('selected') == $question->Options_2 && $question->Answer !== $question->Options_2 ? ' incorrect' :(session('selected') !== null && $question->Answer == $question->Options_2 ? ' correct' : ' '))  }}" type="submit" name="answer" value="{{ $question->Options_2 }}">
                            
                           <span> {{ $question->Options_2 }}</span>
                        </button>
                        <button class="option {{ session('selected') == $question->Options_3 && $question->Answer == $question->Options_3 ? ' correct' : (session('selected') == $question->Options_3 && $question->Answer !== $question->Options_3 ? ' incorrect' :(session('selected') !== null && $question->Answer == $question->Options_3 ? ' correct' : ' '))  }}" type="submit" name="answer" value="{{ $question->Options_3 }}">
                            
                            <span> {{ $question->Options_3 }}</span>
                        </button>
                        <button class="option {{ session('selected') == $question->Options_4 && $question->Answer == $question->Options_4 ? ' correct' : (session('selected') == $question->Options_4 && $question->Answer !== $question->Options_4 ? ' incorrect' :(session('selected') !== null && $question->Answer == $question->Options_4 ? ' correct' : ' '))  }}" type="submit" name="answer" value="{{ $question->Options_4 }}">
                            
                            <span>{{ $question->Options_4 }}</span>
                        </button>
                    </form>
                </div>
                
                
            </div>
        </section>
    </div>

    <div class="row-bot">
        @if (session('success') == 1)
        <div class="btn-group">
            <i class="fa-regular fa-circle-check"><span>Correct Answer!</span></i>
            @if ($question->id +1 > $totalquestion)
            <a href="/score" class="info-btn ">Continue</a>
            @else
            <a href="/{{ $question->id +1 }}" class="info-btn ">Continue</a>
            @endif
            
        </div>
        @endif

        @if ( session('success') === 2)
        <div class="btn-group-wr">
            <i class="fa-regular fa-circle-xmark"><span>Wrong Answer!</span></i>
            @if ($question->id +1 > $totalquestion)
            <a href="/score" class="info-btn ">Continue</a>
            @else
            <a href="/{{ $question->id +1 }}" class="info-btn ">Continue</a>
            @endif
        </div>
        @endif
    </div>

    <script src="question.js"></script>
    <script src="quiz.js"></script>

    <script>

        
    </script>
    <script>
    function disableButtons() {
        var buttons = document.getElementsByClassName('option');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].disabled = true;
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        
        var isSuccess = @json(session('success', false));

        if (isSuccess === 1) {
            document.body.style.backgroundColor = 'rgba(126, 207, 56, 0.25)';
            disableButtons();
        } else if (isSuccess === 2) {
            document.body.style.backgroundColor = 'rgba(255, 0, 0, 0.25)';
            var selectedAnswer = @json(session('selected_answer', ''));
            var buttons = document.getElementsByClassName('option');
            for (var i = 0; i < buttons.length; i++) {
                if (buttons[i].value === selectedAnswer) {
                    buttons[i].classList.add('selected-wrong');
                }
                buttons[i].disabled = true;
            }
        }
        
    });
    
    </script>
    
</body>
</html>
