<?php
if (isset($_POST['action'])) {
    if ($_POST['action'] === "create_trx") {
        $use_for = htmlspecialchars($_POST['use_for']);
        $fav_person = 1;
        $new_person = htmlspecialchars($_POST['new_person']);
        $nominal = htmlspecialchars($_POST['nominal']);
        $transaction_at = htmlspecialchars($_POST['transaction_at']);
        $due_date = htmlspecialchars($_POST['due_date']);
        $type = htmlspecialchars($_POST['type']);

        $errors = [];

        foreach ($_POST as $key => $val) {
            if (empty($val)) {
                $new_key = ucfirst($key);

                array_push($errors, str_replace("_", " ", $new_key) . " kosong");
            }
        }

        $tgl = str_replace("T", " ", $transaction_at);

        $tgl2 = str_replace("T", " ", $due_date);

        if (!empty($nominal) && strlen($nominal) > 11) {
            array_push($errors, "gak boleh dari sebelas");
        }

        if (empty($errors)) {

            $insert = mysqli_query($con, "INSERT INTO  `transactions` (`type`, `use_for`, `person_id`, `nominal`, `transaction_at`, `due_date`) VALUES ('$type' ,'$use_for', '$fav_person', '$nominal', '$transaction_at', '$due_date' )");

            mysqli_close($con);

            if ($insert) {
                $alert = ['success', ['Berhasil di tambah  kan  ']];
            } else {
                $alert = ['danger', ['Gagal di tambahkan  ']];
            }

        } else {
            $alert = ['danger', $errors];
        }
    }
}