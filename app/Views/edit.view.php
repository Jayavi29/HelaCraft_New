<!-- views/edit.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Edit Page</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h1 { color: #333; }
        form { margin-top: 20px; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 10px; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>

    <h1>Edit Page</h1>

    <p>This is the edit view page. You can put your form or content here.</p>

    <form action="/home/update" method="post">
        <label for="username">Username:</label><br />
        <input type="text" id="username" name="username" placeholder="Enter username" required /><br />

        <label for="email">Email:</label><br />
        <input type="email" id="email" name="email" placeholder="Enter email" required /><br />

        <label for="bio">Bio:</label><br />
        <textarea id="bio" name="bio" rows="4" placeholder="Write something about yourself..."></textarea><br />

        <button type="submit">Update</button>
    </form>

</body>
</html>
