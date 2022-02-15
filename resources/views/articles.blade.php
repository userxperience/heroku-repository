<!DOCTYPE html>
<html lang="en">

<head>
    <title>feed</title>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body id=body>

@extends ('layout')
@section('content')

<main>
    <div class="blogpost">
        <h1 id="blogtitel">
            my blog
            <hr>
        </h1>


@foreach ($articles as $article)

        <p1>{{$article->created_at}}</p1>
        <h2>{{$article->title}}</h2>
        <p>{{$article->excerpt}}<a
                href="/articles/{{$article->id}}">link</a>.</p>
    </div>
    <div class="blogpost"><br>

    @endforeach

{{--        <p1>09/09/2021 14:29</p1>--}}
{{--        <h2>SWOT-analysis</h2>--}}
{{--        <p>I've created a SWOT-analysis about myself, click <a href="blogposts\blogpost-swot.html">here</a> to view it.--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <br>--}}

{{--    <div class="blogpost">--}}
{{--        <p1>09/09/2021 14:34</p1>--}}
{{--        <h2>Programming experience</h2>--}}
{{--        <p>I didn't dive into this course cluelessly, a brief explanation about my past programming endeavours can be--}}
{{--            found <a href="">here</a></p>--}}
{{--    </div>--}}
{{--    <br>--}}

{{--    <div class="blogpost">--}}
{{--        <p1>09/09/2021 14:44</p1>--}}
{{--        <h2>My feedback</h2>--}}
{{--        <p>To read about the feedback i've received about my SKC assignment, visit <a--}}
{{--                href="blogposts\blogpost-feedback.html">here</a>.</p>--}}
{{--    </div>--}}
{{--    <br>--}}

{{--    <div class="blogpost">--}}
{{--        <p1>09/09/2021 14:49</p1>--}}
{{--        <h2>The ICT field of work</h2>--}}
{{--        <p>There is a lot of potential work in the ICT field, more information about this can be found <a--}}
{{--                href="blogposts\blogpost-workfield.html">here</a>.</p>--}}
{{--    </div>--}}


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
