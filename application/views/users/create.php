<!DOCTYPE html>
<html>
<head>
    <title>Add New User</title>
</head>
<body>
    <h2>Add New User</h2>
    <form action="<?php echo site_url('users/store'); ?>" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
