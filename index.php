<?php
    if( !empty($_GET['firstname'] && !empty($_GET['lastname']) && !empty($_GET['age'])) )
    {
        $firstname = htmlspecialchars($_GET['firstname']);
        $lastname = htmlspecialchars($_GET['lastname']);
        $age = htmlspecialchars($_GET['age']);
    }
    else{
        exit("A parameter is empty.");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Hello my name is <?php echo $firstname ?> <?php echo $lastname ?>.</div>
    <div>I am <?php echo $age ?> year old and
        <?php if($age >= 18) { ?>old enough to vote.
        <?php } else { ?>not old enough to vote.
        <?php } ?>
    </div>
    <div>
        <?php echo "$age years is " . $age*365 . " days." ?>
        Today is <?php echo date("m-d-Y") ?>.
    </div>
</body>
</html>