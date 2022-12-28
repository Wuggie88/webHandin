<h1>Upload images</h1>

<?php
    /**
     * Anything included in the $viewbag, passed from the controller
     * is available here.
     */
?>
<form method="post" action="/home/upload" enctype="multipart/form-data">
    <div>
        <label for="Title">Title:</label>
        <br>
        <input id="title" name="title" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <br>
        <input id="description" name="description" type="textarea" required>
    </div>

    <div>
        <label for="image">Image:</label>
        <br>
        <input id="image" name="image" type="file" accept="image/jpg, image/jpeg, image/png, image/gif, image/bmp" required>
    </div>

    <button type="submit">Submit</button>
</form>
