<?php

session_start();

if (isset($_SESSION['user'])) {
    header('Location: /app/index.php');
}

$page = "Login";

include_once __DIR__ . '/app/templates/header.php';

include_once __DIR__ . '/configs/db.php';

include_once __DIR__ . '/app/auth/login_handler.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1 class="pt-5 pb-5">Login</h1>
            <div class="card">
                <div class="card-body">
                    <?php
if (isset($alert)):
?>
                    <div class="alert alert-<?=$alert[0]?> alert-dismissible fade show" role="alert">
                        <ul>
                            <?php
// echo "<pre>". print_r([
//     "register.php - 63",
//     $alert
// ], 1) ."</pre>";
foreach ($alert[1] as $alert_msg) {
    echo '<li><strong>' . $alert_msg . '</strong></li>';
}
?>
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                    </div>
                    <?php
endif;
?>

                    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">username / E-mail</label>
                            <input type="text" class="form-control" id="username" name="username"
                                aria-describedby="usernameHelp" value="<?=$username ?? ''?>">
                            <div id="usernameHelp" class="form-text">masukan username / E-mail</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                aria-describedby="userHelp">
                            <div id="passwordHelp" class="form-text">masukan password</div>
                        </div>
                        <input type="hidden" name="action" value="login">
                        <button type="submit" class="btn btn-primary">Login</button><br>


                    </form>
                    <p class="mt-3">
                        <small> belum punya akun ? <a href="register.php">Daftar</a></small>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>


<?php
include_once __DIR__ . '/app/templates/footer.php';