<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['target']) && isset($_POST['guess']))
    { // Check if target and guess are set
        // Retrieve target and guess, storing in variables
        $numberTarget = $_POST['target'];
        $numberGuessed = $_POST['guess'];

        if ($numberGuessed < $numberTarget)
        { // If the guess is less than the target
            $message = "Guess Higher";
        } elseif ($numberGuessed > $numberTarget)
        { // If the guess is more than the target
            $message = "Guess Lower";
        } elseif ($numberGuessed == $numberTarget)
        { // If the guess correctly matches the target
            $message = "You got it!";
        }
    }
    else
    { // Default message
        $message = "Welcome to my guessing game!";
        $numberTarget = rand(1,100); // Sets target number between 1 and 100
    }
?>
<html>
    <head>
        <title>A PHP number guessing script</title>
    </head>
    <body>
        <h1>
            <?php print $message ?>
        </h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="guessinggame">
            <p>Number:
                <input name="guess" type="text">
            </p>
            <p>
                <input type="hidden" name="target" value="<?php echo $numberTarget ?>">
            </p>
            <p>
                <input name="submit" type="submit">
            </p>
        </form>
    </body>
</html>


