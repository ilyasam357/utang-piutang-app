<div class="container">
    <div class="row">
        <div class="col-6">
            <?php
if (isset($alert)):
?>
            <div class="alert alert-<?=$alert[0]?> alert-dismissible fade show" role="alert">
                <ul>
                    <?php

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
            <form action="" method="post">
                <div class="mb-3 ">
                    <label for="name" class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=$user['name'] ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                        value="<?=$user['username'] ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="wa_num" class="form-label">No Wa</label>
                    <input type="text" class="form-control" id="wa_num" name="wa_num"
                        value="<?=$user['wa_num'] ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?=$user['email'] ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="">
                </div>
                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar</label>
                    <input class="form-control" type="file" id="avatar" name="avatar">
                </div>

                <input type="hidden" name="action" value="edit_profile">
                <button type="submit" class="btn btn-primary" value="edit">simpan</button>
            </form>

        </div>
        <div class="col-6"></div>
        <div class="col-6"></div>
    </div>
</div>