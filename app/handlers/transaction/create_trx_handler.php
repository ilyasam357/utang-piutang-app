<?php
if (isset($_POST['action'])) {
    if ($_POST['action'] === "create_trx") {
        $use_for = htmlspecialchars($_POST['use_for']);
        $fav_person = htmlspecialchars($_POST['fav_person']);
        $new_person = htmlspecialchars($_POST['new_person']);
        $nominal = htmlspecialchars($_POST['nominal']);
        $transaction_at = htmlspecialchars($_POST['transaction_at']);
        $due_date = htmlspecialchars($_POST['due_date']);
        $type = htmlspecialchars($_POST['type']);

        echo "<pre>" . print_r([
            "create_trx_handler.php - 3",
            $_POST,
        ], 1) . "</pre>";
    }
}