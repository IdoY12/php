<?php
    // Logic
    $name = "New Student";
    $posts = ['wordpress is the life', 'whatsup bro how r u?', 'tomorrow is friday!!!'];
    echo "<p> The time now is: >" .date("H:i:s") . "</p>";
?>

<h1>Hello <?php echo $name; ?>!</h1>

<?php if (!empty($posts)): ?>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li style="color: blue;">
                <?php echo $post?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
<p>no posts in array</p>
<?php endif; ?>