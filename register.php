<?php

session_start();

if (($_SESSION['user'])) {
    header('Location: /app/index.php');
}

$page = "Register";

include_once __DIR__ . '/app/templates/header.php';

include_once __DIR__ . '/configs/db.php';

include_once __DIR__ . '/app/auth/register_handler.php';

?>

<div class="container">
    <div class="row">

        <div class="col-md-4 mb-5">
            <h1 class="pt-5 pb-5">Register</h1>

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
                    <form action=" <?php $_SERVER['PHP_SELF']?>" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Ful name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?=$name ?? ''?>">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="<?=$username ?? ''?>">
                        </div>
                        <div class=" mb-3">
                            <label for="wa_num" class="form-label">No wa</label>
                            <input type="text" class="form-control" id="wa_num" name="wa_num"
                                value="<?=$wa_num ?? ''?>">
                        </div>
                        <div class=" mb-3">
                            <label for="email" class="form-label">E-Mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?=$email ?? ''?>">
                        </div>
                        <div class=" mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <input type="hidden" name="action" value="register">
                        <button type="submit" class="btn btn-primary" value="register">Daftar</button>
                    </form>
                    <p class="mt-3">
                        <small> sudah punya akun ? <a href="/login.php">login</a></small>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php

include_once __DIR__ . '/app/templates/footer.php';