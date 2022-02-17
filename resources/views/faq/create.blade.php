<form method="POST" action="/FAQ">
    @csrf
    <label for="question">question:</label><br>
    <input type="text" name="question"><br>
    <label for="answer">answer</label><br>
    <input type="text"  name="answer"><br><br>
    <input type="submit" value="Submit">

</form>
