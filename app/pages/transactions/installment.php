<div class="container">
    <h1>Installment</h1>
    <div class="row">
        <div class="col-md-4">
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
                    <label for="temp_nominal" class="form-label">Installment nominal</label>
                    <input type="number" class="form-control" id="temp_nominal" name="temp_nominal"
                        value="<?=$transaction['temp_nominal']?>">
                </div>
                <div class="card p-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="col">First</th>

                                <th scope="col">Handle</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <input type="hidden" name="action" value="change_trx_installment">
                <input type="hidden" name="id" value="<?=$transaction['id']?>">
                <button class="btn btn-primary mt-3">Save</button>
                <a class="btn btn-danger mt-3" href="/app/index.php?page=transactions&view=<?=$where?>">Cencel</a>

            </form>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
</div>