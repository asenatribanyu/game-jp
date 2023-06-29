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

    <div class="row-top">
        <i class="fa-solid fa-circle-xmark" style="font-size:35px;"></i>
        <span class="header-score"> 1 / 3</span>
    </div>

    <div class="row-mid">
        <section class="quiz-section">
            <div class="quiz-box">
                <div class="quiz-header">
                    <span class="question-text">1 Bulan dalam bahasa jepang </span>
                    <span class="question-text">adalah?…</span>
                </div>
                <div class="option-list">
                    <div class="option">
                        <span>Sankagetsu.</span>
                    </div>
                    <div class="option">
                        <span>Yonkagetsu.</span>
                    </div>
                    <div class="option">
                        <span>Ikkagetsu.</span> {{-- jawaban --}}
                    </div>
                    <div class="option">
                        <span>Futsuka.</span>
                    </div>
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
