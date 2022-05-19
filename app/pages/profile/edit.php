<div class="container">
    <div class="row">
        <div class="col-6">

            <form action="" method="post">
                <div class="mb-3 ">
                    <label for="name" class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=$name ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?=$username ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="wa_num" class="form-label">No Wa</label>
                    <input type="text" class="form-control" id="wa_num" name="wa_num" value="<?=$username ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?=$username ?? ''?>">
                </div>
                <input type="hidden" name="action" value="register">
                <button type="submit" class="btn btn-primary" value="register">simpan</button>
            </form>

        </div>
        <div class="col-6"></div>
        <div class="col-6"></div>
    </div>
</div>