<?php
    include_once("Mysql.php"); 
    $query = "SELECT * FROM users";
    $data = mysqli_query($conn, $query); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Admin Page</h1>
    <h2>Our Pages</h2>
    <ul>
        <li><a href="createForm.php">Add Users</a></li>
        <li><a href="view.php">Show Users Information</a></li>
        <li><a href="viewbyoop.php">Show Users Information Using Oop</a></li>
        
        
        <li>
            <a href="#">Edit User</a>
            <form action="edit.php" method="get">
                <label >Choose an ID to edit:</label>
                <select name="uid" id="uid">
          <?php 
                 while($info = mysqli_fetch_assoc($data)){
                   echo "<option value=\"{$info['id']}\">{$info['id']}</option>";
                }
                ?>
                </select>
                <input type="submit" value="Edit">
            </form>
        </li>


      <li>
            <a href="#">Delete User</a>
            <form action="delete.php" method="get">
                <label >Choose an ID to delete:</label>
                <select name="uid" id="uid">
                <?php 
                  $data = mysqli_query($conn, $query); 
                  for(;$info = mysqli_fetch_assoc($data);)
                        echo "<option value=\"{$info['id']}\">{$info['id']}</option>";
                ?>
                </select>
                <input type="submit" value="Delete">
            </form>
        </li>
    </ul>
</body>
</html>