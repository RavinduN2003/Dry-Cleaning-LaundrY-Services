<!DOCTYPE html>
<html>
<head>
    <title>Update Contact</title>
    <style>
        /* Reset default browser styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin: 20px 0;
    color: #333;
}

form {
    width: 70%;
    max-width: 600px;
    margin: 0 auto;
    backdrop-filter: blur(10px);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 60, 5);
}

.form-group {
    margin: 10px 0;
}

label {
    display: block;
    font-weight: bold;
    color: #333;
}

input[type="text"],
input[type="email"],
select,
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

textarea {
    resize: vertical;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Optional: Add a background image or texture */
body {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    background-image: url('555.jpg');
    background-position: center;
}

    </style>
</head>
<body>
    <h1>Update Contact</h1>

    <?php
    // Include your database connection script (e.g., dbh.php)
    include './include/dbh.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch the specific feedback entry from the database
        $query = "SELECT * FROM contact WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            echo '<form action="updatec.php" method="post">
                <input type="hidden" name="contact_id" value="' . $row['id'] . '">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="' . $row['name'] . '" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="' . $row['email'] . '" required>
                </div>

                

                <div class="form-group">
                    <label for="comments">Message:</label>
                    <textarea id="comments" name="message" rows="4" required>' . $row['message'] . '</textarea>
                </div>

                <button type="submit" name ="submit">Update </button>
            </form>';
        } else {
            echo 'Feedback entry not found.';
        }
    }
    ?>
</body>
</html>

<?php
include './include/dbh.php';
if (isset($_POST['submit'])) {
    $id = $_POST['contact_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    

    $sql = "UPDATE contact SET name='$name', email='$email', message='$msg' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script type="text/javascript">
        window.onload = function () { alert("Data Updated !"); 
            window.location.href = "viewc.php";}
        </script>';
    } else {
        echo "Failed";
    }
}
?>
