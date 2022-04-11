<div class="container">
    <h1>create -<?=$where === 'debt' ? 'Hutang' : 'Piutang'?></h1>

    <div class="row">
        <div class="col-6">
            <form action=" <?php $_SERVER['REQUEST_URI']?>" method="POST">
                <div class="mb-3">
                    <label for="use_for" class="form-label">Kegunaan</label>
                    <input type="text" class="form-control" id="use_for" name="use_for" value="">
                </div>
                <div class="mb-3">
                    <label for="person" class="form-label">Orang</label>
                    <input type="text" class="form-control" id="person" name="person" value="">
                </div>
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="text" class="form-control" id="nominal" name="nominal" value="">
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
                <button class="btn btn-primary">Buat <?=$title?></button>
                <a class="btn btn-danger" href="/app/index.php?page=transactions&view=<?=$where?>">Cencel</a>
            </form>
        </div>
        <div class="col-6"></div>
        <div class="col-6"></div>
    </div>
</div>