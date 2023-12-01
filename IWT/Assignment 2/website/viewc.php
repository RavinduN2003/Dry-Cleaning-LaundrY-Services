<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
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
    
    width: 50%;
    height: 100px;

    text-align: center;
    margin: 20px 0;
    color: white;
    margin-left: 350px;
    border-radius: 8px;
    font-size: 40px;
    
  color: black;
}

table {
    width: 70%;
    
    border-collapse: collapse;
    margin: 20px 0;
    margin-left: 200px;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

th {
    background-color: #333;
    color: #fff;
}

a {
    display: inline-block;
    padding: 8px 16px;
    margin: 5px;
    background-color: red;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    
}


a:hover {
    text-decoration: underline;
}

/* Optional: Add a background image or texture */
body {
    background-image: url('4.jpg') !important;
    background-size: cover;
    background-repeat: no-repeat;
}

    </style>
</head>

<body>
    
    <h1>Contact Details</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        <?php
        // Include your database connection script (e.g., dbh.php)
        include './include/dbh.php';
        $conn;
        // Fetch data from the database
        $query = "SELECT * FROM contact";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {


            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['message'] . '</td>';
            echo '<td>
                    <a href="updatec.php?id=' . $row['id'] . '">Update</a> |
                    <a href="deletec.php?id=' . $row['id'] . '">Delete</a>
                  </td>';
            echo '</tr>';
        }

        ?>
    </table>
</body>
</html>
