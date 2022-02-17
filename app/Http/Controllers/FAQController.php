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
}

