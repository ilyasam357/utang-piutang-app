<div class="container">
    <h1>Dashboard</h1>

    <div class="row mt-4">

        <div class="col-md-3">
            <div class="card text-dark bg-success mb-3 text-white" style=" height: 170px;">
                <div class="card-header text-center">Jumlah Hutang</div>
                <div class="card-body">
                    <h1 class=" text-center fs-4"><?=to_rupiah($resultDebt['nominal'])?></h1>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-dark bg-success mb-3 text-white" style=" height: 170px;">
                <div class="card-header text-center">Jumlah Piutang</div>
                <div class="card-body">
                    <h1 class=" text-center fs-4"><?=to_rupiah($resultReceivable['nominal'])?></h1>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-dark bg-success mb-3 text-white" style="height: 170px;">
                <div class="card-header text-center">Jumlah Trx Hutang</div>
                <div class="card-body">
                    <h1 class=" text-center fs-4"><?=$resultCountDebt?></h1>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-dark bg-success mb-3 text-white" style=" height: 170px;">
                <div class="card-header text-center">Jumlah Trx Piutang</div>
                <div class="card-body">
                    <h1 class=" text-center fs-4"><?=$resultCountReceivable?></h1>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-dark bg-info mb-3 text-white" style=" height: 170px;">
                <div class="card-header">Paling Sering Hutang</div>
                <div class="card-body">

                    <ol>
                        <li><?=ucwords($namesValueDebt[0])?></li>
                    </ol>
                    <a href="" class="btn btn-link">More...</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-dark bg-info mb-3 text-white" style=" height: 170px;">
                <div class="card-header">Paling Sering Piutang</div>
                <div class="card-body">

                    <ol>
                        <li><?=ucwords($namesValueReceivable[0])?></li>
                    </ol>
                    <a href="" class="btn btn-link">More...</a>
                </div>
            </div>
        </div>

    </div>