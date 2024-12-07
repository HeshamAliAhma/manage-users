
<?php
include_once('db.php');
$action = false;
if(isset($_POST['save'])){

    $name = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $add_sql = "INSERT INTO `user` (`username`, `email`, `mobile`, `password`) 
                VALUES ('$name', '$email', '$mobile', '$password')";

    $res_add = mysqli_query($conn, $add_sql);


    if (!$res_add) {
        die("Error: " . mysqli_error($conn)); 
    } else {
        $action = 'add';
    }

    
}
if(isset($_GET['action']) && $_GET['action'] == 'del'){
    $id=$_GET['id'];
    $del_sql="DELETE FROM user WHERE id = $id";
    $res_del = mysqli_query($conn, $del_sql);


    if (!$res_del) {
        die("Error: " . mysqli_error($conn)); 
    } else {
        $action = 'del';
    }
}
$users_sql = "SELECT * FROM `user`";
$all_users = mysqli_query($conn, $users_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Users App</title>
    
</head>
<body>




   <div class="container">
    <div class="wrapper p-5 m-5">
        <div class="d-flex p-2 justify-content-between align-items-center mb-2">
            <h1>All Users</h1>
            <div> <a href="add-user.php"><i data-feather='user-plus'></i> </a> </div>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Mobile</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($user = $all_users->fetch_assoc()){?>
                    <tr>
                        <td><?php echo $user['id']?></td>
                        <td><?php echo $user['username']?></td>
                        <td><?php echo $user['email']?></td>
                        <td><?php echo $user['mobile']?></td>
                        <td><div class='d-flex p-2 justify-content-evenly align-items-center mb-2'>
                            <i onclick="confirm_delete(<?php echo $user['id']?>)" class='text-danger' data-feather='trash-2'></i>
                            <i onclick="location.href='update-user.php?id=<?php echo $user['id']; ?>'" class='text-success' data-feather='edit'></i>
                        </div></td>
                    </tr>

                    <?php }
                ?>
            </tbody>
        </table>
    </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src='js/main.js'></script>
    <script>
        feather.replace();
    </script>
</body>
</html>