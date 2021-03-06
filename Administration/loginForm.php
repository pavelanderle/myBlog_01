<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Administration login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="loginProcess.php" method="post">
            <div class="form-group">
                <label for="nameArticle">User name</label>
                <input type="text" class="form-control" placeholder="Enter User name" name="userName" id="userName">
            </div>

            <div class="form-group">
                <label for="author">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>