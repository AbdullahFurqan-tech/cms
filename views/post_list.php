<?php
if (!$post || count($post) === 0) {
    echo "<p>No posts found.</p>";
} else {
    foreach ($post as $posts) {
        echo "<h2>" . htmlspecialchars($posts['title']) . "</h2>";
        echo "<p>" . nl2br(htmlspecialchars($posts['content'])) . "</p>";
        echo "<small>Created: " . $posts['created_at'] . "</small><br>";
        echo '<a href="post_edit.php?id=' . $posts['id'] . '">Edit</a> | ';
        echo '<a href="post_delete.php?id=' . $posts['id'] . '" onclick="return confirm(\'Delete this post?\');">Delete</a>';
        echo "<hr>";
    }
}
?>
