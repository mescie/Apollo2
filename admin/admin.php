<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">

    <form action="login.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="name" class="sr-only">Email address</label>
        <input type="text" id="name" class="form-control" placeholder="Username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

    <?php
        // COMMENT ik zou zetten if(!empty($msg) && is_string($msg)){
        // Dan check je namelijk of hij niet leeg is en een string.
        if ($msg) {
            echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
        }
    ?>

</div> <!-- /container -->

</body>
</html>
