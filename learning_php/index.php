<?php
    $name = "New Student";
    echo "<h1>Hello $name! Welcome to PHP </h1>";
    echo "<p> The time now is: >" .date("H:i:s") . "</p>";
?>

<?php
    $posts = ['wordpress is the life', 'whatsup bro how r u?', 'tomorrow is friday!!!'];

    echo "<ul>";
    foreach ($posts as $post) {
        echo "<li>$post</li>";
    }
    echo "</ul>"
?>
