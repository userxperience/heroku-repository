<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>food generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<body id=body>
<navbar id="navbar">
    <a class="navbarbutton" href="#" onclick="history.go(-1)">Go back</a>
</navbar>

<h1>filling: <span id=randomvulling></span></h1>
<h1>vegetables: <span id=randomgroente></span></h1>
<h1>meat: <span id=randomvlees></span></h1>
<button onClick="window.location.reload();">new meal</button>
<script>

    const vulling = ["potato", "rice", "pasta", "couscous",];

    const random = Math.floor(Math.random() * vulling.length);
    let randomvulling = (vulling[random]);

    document.getElementById("randomvulling").innerHTML = randomvulling;


    const groente = ["salad", "spinach", "cauliflower", "broccoli", "carrot", "tomato",];

    const random2 = Math.floor(Math.random() * groente.length);
    let randomgroente = (groente[random2]);

    document.getElementById("randomgroente").innerHTML = randomgroente;


    const vlees = ["sausage", "steak", "hamburger", "schintzel", "meatballs",];

    const random3 = Math.floor(Math.random() * vlees.length);
    let randomvlees = (vlees[random3]);

    document.getElementById("randomvlees").innerHTML = randomvlees;
</script>
</body>
</html>
