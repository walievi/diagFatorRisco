<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index() {
        return view('question.index');
    }

    public function save(Request $request, Question $question) {
        // Save the answer
        // Get the next question
        // return redirect()->route('question.index', ['question' => $question->nextQuestionID]);
    }
}
