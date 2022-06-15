<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class PortfolioDashboardController
{
    public function show() {

        $grades = Grade::all();


        return view('portfoliodashboard', [
            'grades'=>$grades
        ]);

    }
}
