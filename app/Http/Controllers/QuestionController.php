<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Question $question)
    {
        $selectedOption = 1;
        return view('quiz', [
            'question'=>$question,
            'selectedOption'=>$selectedOption,
        ]);
    }

    public function submit(Request $request)
    {
        // dd($request->answer);
        $question = Question::findOrFail($request->id);
        // $question=Question::where('id',$request->id)->get();
    
        if ($request->answer==$question->Answer){
           return redirect()->back();
    }
    dd("fail");
}
}
