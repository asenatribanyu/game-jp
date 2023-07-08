<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/score-design.css"> 
    <title>Japan Quiz | Score</title>
</head>
<body>
    <div class ="container">
        {{-- @dd($total_correct) --}}
        <div class="main-container">
            <div class ="text">
                <img src="./img/icon.png" alt="pic.png" style="width: 125px">
                <h1>QUIZ COMPLETE!</h1>
            </div>

            <div class ="row">
                <div class ="cardCorrect"> Correct
                    <div class="child">
                        <div class="correct">{{ $total_correct }}</div>
                    </div>
                </div>

                <div class ="cardScore"> Total Score
                    <div class="childd">
                        <div class="score">{{ $total_score_percentage }}% </div>
                    </div>
                </div>

                <div class ="cardIncorrect"> Incorrect
                    <div class="childdd">
                        <div class="incorrect">{{ $total_incorect }}</div>
                    </div>
                </div>
            </div>
            
            <div class="button-container">
                <div>
                    <a href="/home"><button>Continue</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>