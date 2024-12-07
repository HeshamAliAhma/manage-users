<?php
include_once('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $user_sql = "SELECT * FROM `user` WHERE id = $id";
    $result = mysqli_query($conn, $user_sql);
    $user = mysqli_fetch_assoc($result);
    
    if (!$user) {
        die('User Not Fount');
    }
} else {
    die("المعرف غير موجود");
}

if (isset($_POST['update'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $update_sql = "UPDATE `user` SET `username` = '$name', `email` = '$email', `mobile` = '$mobile', `password` = '$password' WHERE id = $id";
    $res_update = mysqli_query($conn, $update_sql);

    if (!$res_update) {
        die("Error: " . mysqli_error($conn));
    } else {
        header("Location: index.php?action=update");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update User</title>
</head>
<body>

<div class="container">
    <div class="wrapper p-5 m-5">
        <div class="d-flex p-2 justify-content-between align-items-center">
            <h1>تحديث المستخدم</h1>
            <div>
                <a href="index.php">
                    <i data-feather='corner-down-left'></i>
                </a>
            </div>
        </div>
        <form action="" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username *</label>
                <input type="text" name="username" value="<?php echo $user['username']; ?>" id="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email *</label>
                <input type="email" name="email" value="<?php echo $user['email']; ?>" id="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" value="<?php echo $user['mobile']; ?>" id="mobile" class="form-control">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password *</label>
                <input type="password" name="password" value="<?php echo $user['password']; ?>" id="password" class="form-control" required>
              </div>
              <div class="mb-3">
                <input type="submit" name="update" class="btn btn-primary" value="Update">
              </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    feather.replace();
</script>
</body>
</html>
