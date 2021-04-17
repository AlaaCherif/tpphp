<?php
if (isset($_SESSION['user'])) {
    header('location:home.php');
}
$pageTitle = 'login';
include_once 'fragments/header.php';
?>
<div class="container">
    <?php
        if (isset($_SESSION['errorMessage'])) {

    ?>
            <div class="alert alert-danger">
                <?= $_SESSION['errorMessage'] ?>
            </div>
    <?php
            unset($_SESSION['errorMessage']);
        }
    ?>
    <form action="processLogin.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input
                type="text"
                name="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input
                name="pwd"
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
</body>
</html>
