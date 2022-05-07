<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Student Example of PHP Switch Control Structure">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero Comments</title>
</head>
<body>
    <form method="post" id="heroForm">
        <label for="heroInput">Please enter the name of a comic book Superhero: 
            <input type="text" id="heroInput" name="superHero" value="">
        </label>
    </form>
    <button type="submit" form="heroForm">Send Request</button>
    <?php
    $superHero = $_POST["superHero"] ?? "";
    
    switch ($superHero) {
        case 'Batman':
            echo '<p id="style2">Without that necklace, Batman would get destroyed by Superman.</p>';
            break;
        case 'Superman':
            echo '<p id="style3">Superman is boring.<br>He could use some flame decals or something on his cape.<br>Maybe racing stripes?</p>';
            break;
        case 'Green Lantern':
            echo '<p id="style4">The world needs more Green Lantern movies.<br>There is a whole universe of opportunity there. Just saying.</p>';
            break;
        default:
            echo '<p id="style">There are too many Superheroes to comment on.<br>Try entering a Superhero from the DC universe.</p>';
            // Notice there is NO 'break;' statement on 'default'
    }
    ?>
    <style>
        body {width:95%; margin:auto; margin-top: 20px;}
        body, form, label {display: flex; flex-direction: column; font-size: 1.5rem;}
        input, button {width:10%; min-width: 200px; margin-bottom: 20px;}
        #style {color:grey;}
        #style2 {color:black;}
        #style3 {color:red}
        #style4 {color:green;}
    </style>
</body>
</html>
