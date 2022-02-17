<form method="POST" action="/FAQ/{{$faq->id}}">
    @csrf
    @method('PUT')
    <label for="question">question</label><br>
    <input type="text" name="question" value="{{$faq->question}}"><br>
    <label for="answer">answer:</label><br>
    <input type="text"  name="answer" value="{{$faq->answer}}"><br><br>
    <input type="submit" value="Submit">

</form>

</form>
<br><br><br><br>
<h1>DELETE BUTTON</h1>
<form method="POST" action="/FAQ/{{ $faq->id }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>

</form>
