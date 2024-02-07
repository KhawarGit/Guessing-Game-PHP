<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khawar Khan 2b6696e9</title>
</head>
<body>
    <h1>Khawar Khan</h1>
    <h1>Welcome TO My Guessing Game.</h1>
    <h3>
        <?php
            $ans = 57;
            if(!$_GET){
                echo "Missing guess parameter";
            } else{
                if(!$_GET['guess']){
                    echo "Your guess is too short";
                } else{
                    if(is_numeric($_GET['guess'])){
                        $check = $_GET['guess'];
                        if (abs($check - $ans) <= 5 && $check!=$ans) {
                            echo "You are close";
                        }else if($check > $ans){
                            echo "Your guess is too high";
                        }else if ($check < $ans) {
                            echo "Your guess is too low";
                        }else{
                            echo "Congratulations - You are right";
                        }

                    } else{
                        echo "Your guess is not a number";
                    }
                }
                
            }

        ?>
    </h3>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
        <input type="text" name="guess" size=40>
        <button>Guess Number</button>
    </form>
</body>
</html>