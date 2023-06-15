<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Choice;



class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $questions = Question::withTrashed()->paginate(5);
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
            $file->storeAs('public',$fileName);
        }
        $question = new Question();
        $validatedData = $request->validate([
            'content' => 'required|max:255',
            'image' => 'required|image',
            'supplement' => 'required|max:255',
        ]);
        $question->content = $request->input('content');
        $question->image = $fileName;
        $question->supplement = $request->input('supplement');
        $question->save();

        for($i=1; $i<=3; $i++){
            $choice = new Choice();
            $choice->question_id = $question->id;
            $validate = $request->validate([
                'choice'.$i => 'required|max:255',
            ]);
            $choice->name = $request->input('choice'.$i);
            $choice->valid = (int)$request->input('correctChoice') === $i ? 1 : 0;
            $choice->save();
        }


        session()->flash('message', '問題作成に成功しました');
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

        $choice = Choice::where('question_id', $id)->get();
        for($i = 0; $i < 3; $i++) {
            $choice[$i]->name = $request->input('choice')[$i];
            $choice[$i]->valid = (int)$request->input('correctChoice') === $i + 1 ? 1 : 0;
            $choice[$i]->save();
        }

        session()->flash('message', '更新されました');
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

        session()->flash('message', '削除されました');
        return redirect()->route('questions.index');
    }

    public function restore(string $id)
    {
        //
        $question = Question::withTrashed()->find($id);
        $question->restore();

        session()->flash('message', '復元されました');
        return redirect()->route('questions.index');
    }
}
