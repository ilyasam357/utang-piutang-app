<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1 class="ms-5">Profil</h1>
            <div class="card shadow rounded border border-success  " style="width:15rem;">
                <img src="<?=$user['avatar'] ? '/public/avatar/' . $user['avatar'] : '/public/profil.png'?>"
                    class="rounded-circle mx-5 mt-3 "
                    style=" width: 142px;   height: 142px;   object-fit: cover;   object-position: center; " alt="...">

                <div class="card-body  bg-secondary mt-3">
                    <h3 class="border-top  border-2 border-success  text-white">Nama lengkap</h3>
                    <p class="fst-italic  text-white"> <?=$user['name']?> </p>
                    <h3 class="border-top  border-2 border-success  text-white">Username </h3>
                    <p class="fst-italic  text-white"><?=$user['username']?></p>
                    <h3 class="border-top  border-2 border-success  text-white">No Wa</h3>
                    <p class="fst-italic  text-white"><?=$user['wa_num']?></p>
                    <h3 class="border-top  border-2 border-success  text-white">Email</h3>
                    <p class="fst-italic  text-white"><?=$user['email']?></p>
                </div>
                <a class="btn btn-success" href="/app/index.php?page=profile&action=edit"> edit </a>
            </div>

        </div>
        <div class="col-md-4"></div>


    </div>