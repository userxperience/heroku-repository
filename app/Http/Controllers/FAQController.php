<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FAQController
{
    public function show()
    {

        return view('faq', ['faq'=>Faq::all()]);

//        $faq = Faq::all();
//        return view('FAQ', $faq);
    }
}

