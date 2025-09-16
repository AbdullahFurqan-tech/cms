<form method="POST">
    <label>Title:</label><br>
    <input type="text" name="title" value="<?php echo $title ?? ''; ?>" required><br><br>
    
    <label>Content:</label><br>
    <textarea name="content" rows="5" required><?php echo $content ?? ''; ?></textarea><br><br>
    
    <button type="submit">Save</button>
</form>
