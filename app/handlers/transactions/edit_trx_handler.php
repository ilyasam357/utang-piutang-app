<?php
// function fmt_to_timestamp($date)
// {
//     $date = str_replace("T", " ", $date);
//     $date = $date . ":00";

//     return $date;
// }

// if (isset($_POST['action'])) {
//     if ($_POST['action'] === "edit_trx") {
//         $use_for = htmlspecialchars($_POST['use_for']);
//         $person = htmlspecialchars($_POST['name']);
//         $nominal = htmlspecialchars($_POST['nominal']);
//         $transaction_at = htmlspecialchars($_POST['transaction_at']);
//         $transaction_at = fmt_to_timestamp($transaction_at);
//         $due_date = htmlspecialchars($_POST['due_date']);
//         $due_date = fmt_to_timestamp($due_date);
//         $type = htmlspecialchars($_POST['type']);

//         $errors = [];

//         foreach ($_POST as $key => $val) {
//             if (empty($val)) {
//                 $new_key = ucfirst($key);

//                 array_push($errors, str_replace("_", " ", $new_key) . " kosong");
//             }
//         }

//         if (!empty($nominal) && strlen($nominal) > 11) {
//             array_push($errors, "gak boleh dari sebelas");
//         }

//         $insert = mysqli_query($con, "UPDATE `transactions` SET `use_for`='$use_for',`person_id`='$person',`nominal`='$nominal',`transaction_at`='  $transaction_at',`due_date`=' $due_date' WHERE id ='$session_user_id'");

//         if ($insert) {
//             $alert = ['success', ['Berhasil di tambah  kan  ']];
//         } else {
//             $alert = ['danger', ['Gagal di tambahkan  ']];
//         }

//     } else {
//         $alert = ['danger', $errors];
//     }
// }