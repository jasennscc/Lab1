<?php
    echo "<body>";
    echo "<h1> Greetings from lab 1! </h1>";
    echo "</body>";
?>

<p>Add an html tag and some text after the close of the php block above.
   You could add a simple paragraph in html.
</p>

<h3> <?php echo "Greeting from lab 1!" ?> </h3>

<?php
    $name = "Jasen";
    echo $name;
?>

<p>
</p>

<?php
    $last = "Stubbington";
    echo "My name is " . $name . " " . $last;
?>

<p>
</p>

<?php

    echo "Arithmetic <br><br>";

    $a1 = 32;   $a2 = 14;   $a3 = 83;

    echo ($a1 * $a2) + $a3;
    echo "<p>
    </p>";

    $b1 = 1024; $b2 = 128;  $b3 = 7;

    echo ($b1 / $b2) - $b3;
    echo "<p>
    </p>";

    $c1 = 769;  $c2 = 6;

    echo $c1%$c2;
    echo "<p>
    </p>"
?>

<?php

    echo "Countdown <br><br>";

    for ($x = 10; $x >= 0; $x--)
    {
        if ($x == 0)
            echo "Blast Off";
        else
            echo $x . "... ";
    }

    echo "<br><br>";
?>

<?php
    $cArr = array("Red", "Orange", "Yellow", "White", "Green", "Blue", "Black");
    $cLength = count($cArr);

    echo "For Loop <br><br>";
    for ($x = 0; $x < $cLength; $x++)
    {
        echo $cArr[$x] . "<br>";
    }

    echo "<br>";

    echo "Foreach Loop <br><br>";
    foreach ($cArr as $color)
    {
        echo $color . "<br>";
    }

    echo "<br>";

    echo "Do While Loop <br><br>";

    $counter = 0;

    do{
        echo $cArr[$counter] . "<br>";
        $counter++;
    }
    while ($counter < $cLength);
?>


