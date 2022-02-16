<!DOCTYPE html>
<html lang="en">

<head>
    <title>dashboard</title>
    <script type="text/javascript" src="program.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>


<body id=body>

@extends ('layout')
@section('content')

<main>
    <h1>
        my study progress
        <hr>
    </h1>
    <table>

        @foreach($grades as $grade)

        @endforeach

        <!--quartile 1 below-->
        <tr>
            <th>quartile</th>
            <th>course</th>
            <th>EC</th>
            <th>exam</th>
            <th>grade</th>
        </tr>
        <tr>
            <td rowspan="3">1</td>
            <td>Programme and Career
                Orientation
            </td>
            <td>2,5</td>
            <td>Assessment</td>
            <td>{{$grades[0]->best_grade}}</td>
            <!--grade here-->

        </tr>
        <tr>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written exam</td>
            <td>{{$grades[2]->best_grade}}</td>
            <!--grade here-->

        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case study</td>
            <td>{{$grades[1]->best_grade}}</td>
            <!--grade here-->
        </tr>

        <!--quartile 2 below-->
        <tr>
            <td rowspan="2">2</td>
            <td rowspan="2">Object Oriented Programming</td>
            <td>5</td>
            <td>case study</td>
            <td>{{$grades[3]->best_grade}}</td>
            <!--grade here-->
        </tr>
        <tr>
            <td>5</td>
            <td>Project</td>
            <td>{{$grades[4]->best_grade}}</td>
            <!--grade here-->
        </tr>

        <!--quartile 3 below-->
        <tr>
            <td rowspan="4">3</td>
            <td>Framework Development I</td>
            <td>5</td>
            <td>Case study</td>
            <td></td>
            <!--grade here-->
        </tr>

        <tr>
            <td rowspan="3">Framework Project I</td>
            <td>2,5</td>
            <td>Project</td>
            <td></td>
            <!--grade here-->

        <tr>
            <td>2,5</td>
            <td>Assessment</td>
            <td></td>
            <!--grade here-->
        </tr>
        <tr>
            <td>2,5</td>
            <td>Report</td>
            <td></td>
            <!--grade here-->
        </tr>
        </tr>

        <!--quartile 4 below-->
        <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Framework project II</td>
            <td> 3.33*</td>
            <td>Portfolio</td>
            <td></td>
            <!--grade here-->
        </tr>
        <tr>
            <td>3.33*</td>
            <td>Project</td>
            <td></td>
            <!--grade here-->
        </tr>
        <tr>
            <td>3.33*</td>
            <td>Assessment</td>
            <td></td>
        <tr></tr>
        <!--grade here-->
        </tr>
        <tr>
            <td>Entire year</td>
            <td>Personal Professional Development</td>
            <td>12,5</td>
            <!--grade here-->
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2">Project week</td>
            <td>ICT Personality I</td>
            <td>2,5</td>
            <td>Portfolio</td>
            <td></td>
            <!--grade here-->
        </tr>
        <tr>
            <td>ICT Personality II</td>
            <td>2,5</td>
            <td>Portfolio</td>
            <td></td>
            <!--grade here-->
        </tr>
    </table>
    <p id="tablenote">*note: EC values are subject to change</p>
    <br>
    <label>Study progress:</label>
    <progress id="progressbar" value="5" max="62.5"></progress>
    <p><br>A minimum of 45 EC's is required to pass.</p>
    <br>
    <br>
</main>
<footer id="footer" class="grid-container">
    <div id="allcontactinfo">
        <a id="contactinfo"><a target="_blank"
                               href="https://teams.microsoft.com/l/channel/19%3aca826369e55e492aa1efd2016b2fcbbe%40thread.skype/International?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
                               id="footerlink">the HZ teams group</a><br>
            <a target="_blank" href="https://apps.hz.nl/angular/studievoortgang/studiestatus" id="footerlink">
                study progress </a> <br> <a id="footerlink" target="_blank" href="https://learn.hz.nl">our learn
                environment</a>
    </div>
    <div id="tweedecontactinfo">
        <a id="contactinfo"><a target="_blank"
                               href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf"
                               id="footerlink">examination regulations</a>
            <br>
            <a target="_blank"
               href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
               id="footerlink">implementation regulations</a>
            <br> <a target="_blank" href="https://github.com/HZ-HBO-ICT" id="footerlink">ICT github page
            </a>
        </a>
    </div>
</footer>
</body>
@endsection
