<div class="container">
    <h1>edit <?=$title?></h1>
    <div class="row">
        <div class="col-6 mb-4">
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
                <div class="mb-3">
                    <label for="use_for" class="form-label">Kegunaan</label>
                    <input type="text" class="form-control" id="use_for" name="use_for"
                        value="<?=$transaction['use_for'] ?? ''?>">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Orang</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="<?=$transaction['name'] ?? ''?>">
                </div>
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="text" class="form-control" id="nominal" name="nominal"
                        value="<?=$transaction['nominal'] ?? ''?>">
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
                <input type="hidden" name="action" value="edit_trx">
                <button class="btn btn-primary">edit <?=$title?></button>
            </form>
        </div>
        <div class="col-6 mb-4"></div>
        <div class="col-6 mb-4"></div>
    </div>
</div>