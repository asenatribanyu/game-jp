<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Score;

class QuestionController extends Controller
{
    public function index(Question $question)
    {
        $totalquestion = count(Question::all());
        $selectedOption = 1;
        return view('quiz', [
            'question'=>$question,
            'selectedOption'=>$selectedOption,
            'totalquestion' => $totalquestion,
        ]);
    }

    public function submit(Request $request)
    {
    $success = null; // Default value is set to false
    $question = Question::findOrFail($request->id);
    $selected = null;
    $ipAddress = $this->getUserIpAddress();
    $maxQuizAttempt = Score::where('ip_address', $ipAddress)->max('quiz_attempt');
    $countMaxAttempts = Score::where('ip_address', $ipAddress)->where('quiz_attempt', $maxQuizAttempt)->count();
    

    if ($request->answer == $question->Answer) {
        $success = 1; // Set to true if the answer is correct
        $selected = $request->answer;
        
        if(Score::where('ip_address', $ipAddress)->max('quiz_attempt') == null){
            $attempt_number = 1;
            $score = new Score();
            $score->ip_address = $ipAddress;
            $score->quiz_attempt = $attempt_number;
            $score->question_id = $question->id;
            $score->is_correct = true;
            $score->save();
        }
        elseif ($countMaxAttempts == count(Question::all())) {
            $attempt_number = Score::where('ip_address', $ipAddress)->max('quiz_attempt')+1;
            $score = new Score();
            $score->ip_address = $ipAddress;
            $score->quiz_attempt = $attempt_number;
            $score->question_id = $question->id;
            $score->is_correct = true;
            $score->save();
        } else {
            $attempt_number = Score::where('ip_address', $ipAddress)->max('quiz_attempt');
            $score = new Score();
            $score->ip_address = $ipAddress;
            $score->quiz_attempt = $attempt_number;
            $score->question_id = $question->id;
            $score->is_correct = true;
            $score->save();
        }
        
        
        return redirect()->back()->with(compact('selected','success'));
        
    }
    else{
        $success = 2;
        $selected = $request->answer;
        if(Score::where('ip_address', $ipAddress)->max('quiz_attempt') == null){
            $attempt_number = 1;
            $score = new Score();
            $score->ip_address = $ipAddress;
            $score->quiz_attempt = $attempt_number;
            $score->question_id = $question->id;
            $score->is_correct = true;
            $score->save();
        }
        elseif ($countMaxAttempts == count(Question::all())) {
            $attempt_number = Score::where('ip_address', $ipAddress)->max('quiz_attempt')+1;
            $score = new Score();
            $score->ip_address = $ipAddress;
            $score->quiz_attempt = $attempt_number;
            $score->question_id = $question->id;
            $score->is_correct = false;
            $score->save();
        } else {
            $attempt_number = Score::where('ip_address', $ipAddress)->max('quiz_attempt');
            $score = new Score();
            $score->ip_address = $ipAddress;
            $score->quiz_attempt = $attempt_number;
            $score->question_id = $question->id;
            $score->is_correct = false;
            $score->save();
        }
        return redirect()->back()->with(compact('selected','success'));
        
    }
    
    }

    public function showScore()
{
    // Get the guest's IP address
    $ipAddress = $this->getUserIpAddress();

    // Fetch all the quiz attempts for the guest
    $guest_attempts = Score::where('ip_address', $ipAddress)->get();
    $maxQuizAttempt = Score::where('ip_address', $ipAddress)->max('quiz_attempt');
    $countMaxAttempts = Score::where('ip_address', $ipAddress)
                         ->where('quiz_attempt', $maxQuizAttempt)
                         ->count();

    // Calculate the total correct and total attempted questions for the guest
    $total_correct = Score::where('ip_address', $ipAddress)->where('quiz_attempt', $maxQuizAttempt)->where('is_correct', true)->count();
    $total_attempted = $countMaxAttempts;
    $total_incorrect = Score::where('ip_address', $ipAddress)->where('quiz_attempt', $maxQuizAttempt)->where('is_correct', false)->count();

    // Calculate the total score percentage for the guest
    $total_score_percentage = number_format(($total_correct / $total_attempted) * 100, 2);

    return view('score', [
        'total_correct' => $total_correct,
        'total_incorect' => $total_incorrect,
        'total_attempted' => $total_attempted,
        'total_score_percentage' => $total_score_percentage,
    ]);
}

private function getUserIpAddress()
{
    return request()->ip();
}

}
