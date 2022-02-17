<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FAQController
{

    public function index()
    {

        return view('faq', ['faq'=>Faq::all()]);

//        $faq = Faq::all();
//        return view('FAQ', $faq);
    }

    public function create() {
        return view('faq.create');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faq.edit', compact('faq'));
    }

    public function store()
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/FAQ');
    }

    public function view()
    {

        return view('faq', ['faq'=>Faq::all()]);

//        $faq = Faq::all();
//        return view('FAQ', $faq);
    }

    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/FAQ');
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect('/FAQ');

    }

}

