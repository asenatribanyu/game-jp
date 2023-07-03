<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

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
    if ($request->answer == $question->Answer) {
        $success = 1; // Set to true if the answer is correct
        $selected = $request->answer;
        return redirect()->back()->with(compact('selected','success'));
        
    }
    else{
        $success = 2;
        $selected = $request->answer;
        return redirect()->back()->with(compact('selected','success'));
        
    }
    
    }

}
