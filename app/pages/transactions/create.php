<div class="container">
    <h1>create -<?=$where === 'debt' ? 'Hutang' : 'Piutang'?></h1>

    <div class="row">
        <div class="col-6 mb-4">
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
            <form action=" <?php $_SERVER['REQUEST_URI']?>" method="POST">
                <div class="mb-3">
                    <label for="use_for" class="form-label">Kegunaan</label>
                    <input type="text" class="form-control" id="use_for" name="use_for" value="<?=$use_for ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="fav_person" class="form-label">Orang Favorit</label>
                    <select class="form-select" name="fav_person">
                        <option selected value="-">Pilih orang favorit</option>
                        <option value="budi">Budi </option>
                        <option value="joko">Joko</option>

                    </select>

                </div>
                <div class="mb-3">
                    <label for="new_person" class="form-label">Orang Baru</label>
                    <input type="text" class="form-control" id="new_person" name="new_person"
                        value="<?=$new_person ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="text" class="form-control" id="nominal" name="nominal" value="<?=$nominal ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="transaction_at" class="form-label">Waktu <?=$title?> </label>
                    <input type="datetime-local" class="form-control" id="transaction_at" name="transaction_at"
                        value="">
                </div>
                <div class="mb-3">
                    <label for="due_date" class="form-label">kapan Bayar</label>
                    <input type="datetime-local" class="form-control" id="due_date" name="due_date" value="">
                </div>
                <input type="hidden" name="type" value="<?=$where?>">
                <input type="hidden" name="action" value="create_trx">
                <button class="btn btn-primary">Buat <?=$title?></button>
                <a class="btn btn-danger" href="/app/index.php?page=transactions&view=<?=$where?>">Cencel</a>
            </form>
        </div>
        <div class="col-6"></div>
        <div class="col-6"></div>
    </div>
</div>