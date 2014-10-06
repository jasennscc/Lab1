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
    $name = Jasen;
    echo $name;
?>

<p>
</p>

<?php
    $last = Stubbington;
    echo "My name is " . $name . " " . $last;
?>

<p>
</p>

<?php
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


