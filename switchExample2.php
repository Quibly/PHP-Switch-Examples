<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Student Example of PHP Switch Control Structure">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Variables</title>
</head>
<body>
    <?php
    // If-Elseif-Else Statement
    $number = 3;

    if($number == 3)
        echo nl2br ("If-Elseif-Else 3 \n");
    elseif($number == 2)
        echo nl2br ("If-Elseif-Else 2 \n");
    elseif($number == 1)
        echo nl2br ("If-Elseif-Else 1 \n");
    else
        echo nl2br ("If-Elseif-Else Default \n");

    // Switch Statement -- This does the same thing as the If-Elseif-Else Statement
    //                     Notice the difference in output though.
    $number = 2;

    switch ($number) {
        case 3:
            echo nl2br ("Switch 3 \n");
            break;
        case 2:
            echo nl2br ("Switch 2 \n");
            break;
        case 1:
            echo nl2br ("Switch 1 \n");
            break;
        default:
            echo nl2br ("Switch Default \n");
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
