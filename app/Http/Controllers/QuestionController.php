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
        return view('quiz/quiz', [
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
        $counter = session('score', 0); // Session score counter

        if ($request->answer == $question->Answer) {
            $success = 1; // Set to true if the answer is correct
            $selected = $request->answer;
            $counter++; // Increment the score
            $request->session()->put('score', $counter); // Store the updated score
            return redirect()->back()->with(compact('selected', 'success', 'counter'));
        } else {
            $success = 2;
            $selected = $request->answer;
            return redirect()->back()->with(compact('selected', 'success', 'counter'));
        }
    }
    
        
    
    public function showScore()
    {
        $totalquestion = count(Question::all());
        $total_correct = session('score');
        $total_incorrect = $totalquestion - $total_correct;
        $total_score_percentage = number_format(($total_correct / $totalquestion) * 100,2);
        return view('score/score', [
            'total_correct' => $total_correct,
            'total_incorect' => $total_incorrect,
            'total_score_percentage' => $total_score_percentage,
        ]);
    }


}
