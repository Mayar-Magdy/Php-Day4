<?php 
    include_once("Mysql.php"); 
    $query = "SELECT * FROM users";
    $data = mysqli_query($conn, $query); 
?>
<!DOCTYPE html>
<html >
<head>
    <style>
   a {
    text-decoration: none;
}

button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
</head>
<body>
    <h1>Users List</h1>
    <center> 
        <table border="1" >
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Room</th>
                <th>Ext</th>
                <th>Profile Picture</th>
                <th>Delete User</th>
                <th>Edit User</th>
            </tr>
                <?php 
            for(;$info = mysqli_fetch_assoc($data);)
{                       echo "<tr>";
                       echo "<td>".$info["name"]."</td>";
                       echo "<td>".$info["email"]."</td>"; 
                       echo "<td>".$info["password"]."</td>";
                       echo "<td>".$info["room"]."</td>";
                       echo "<td>".$info["ext"]."</td>";
                       echo "<td><img src='".$info["profile_picture"]."' width='60' height='50'></td>";
                       echo "<td><a href='delete.php?uid=$info[id]'>Delete</a></td>";
                       echo "<td><a href='edit.php?uid=$info[id]'>Edit</a></td>";
                       echo "</tr>";
                    }
                ?>
        </table>

    <a href="createForm.php">
    <button>Add Users</button>
     </a>
</center>
</body>
</html>

