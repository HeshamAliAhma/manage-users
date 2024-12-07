<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add User</title>
</head>
<body>

   <div class="container">
    <div class="wrapper p-5 m-5">
        <div class="d-flex p-2 justify-content-between align-items-center">
            <h1>Add User</h1>
            <div>
                <a href="index.php">
                    <i data-feather='corner-down-left'></i>
                </a>
            </div>
        </div>
        <form action="index.php" method='POST'>
              <div class="mb-3">
                <label for="username" class="form-label">Username *</label>
                <input type="text" name="username" placeholder='Enter Your Username' autocomplete='false' id="name" class="form-control" require>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email *</label>
                <input type="email" name="email" placeholder='Enter Your Email' autocomplete='false' id="email" class="form-control"require>
              </div>
              <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" placeholder='Enter Your Mobile' autocomplete='false' id="mobile" class="form-control">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Password *</label>
                <input type="password" name="password" placeholder='Enter Your Password' autocomplete='false' id="password" class="form-control" require>
              </div>
              <div class="mb-3">
                <input type="submit" name="save" class='btn btn-primary' value='Add User'>
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