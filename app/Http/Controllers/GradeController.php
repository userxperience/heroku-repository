<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GradeController extends Controller
{
    public function addResult($grade)
    {
$this->refresh();

if ($this->best_grade >= $grade) {
    return;
}

$this->best_grade = $grade;

if ($this->best_grade >= $this->lowest_passing_grade) {
    $this->passed_at = now();
}

$this->save();

    }
}
