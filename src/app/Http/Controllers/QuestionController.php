<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;


class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $questions = Question::all();
        return view('admin.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if($file = $request->file('image')) {
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/img',$fileName);
        }
        $question = new Question();
        $question->content = $request->input('content');
        $question->image = $fileName;
        $question->supplement = $request->input('supplement');
        $question->save();
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $question = Question::find($id);
        return view('admin.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $question = Question::find($id);
        $file = $request->file('image');
        if($file) {
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/img',$fileName);
            $question->image = $fileName;
        }
        $question->content = $request->input('content');
        $question->supplement = $request->input('supplement');
        $question->save();
        return redirect()->route('questions.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $question = Question::find($id);
        $question->delete();
        return redirect()->route('questions.index');
    }
}
