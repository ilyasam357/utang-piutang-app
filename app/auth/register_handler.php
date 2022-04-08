<?php
if (isset($_POST['action'])) {
    if ($_POST['action'] === "register") {
        $name = htmlspecialchars($_POST['name']);
        $username = htmlspecialchars($_POST['username']);
        $wa_num = htmlspecialchars($_POST['wa_num']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $errors = [];
        if (empty($name)) {
            array_push($errors, "nama jangan kosong");
        }

        if (empty($username)) {
            array_push($errors, "Username jangan kosong ");
        }

        if (empty($wa_num)) {
            array_push($errors, "no jangan  kosong");
        }

        if (!empty($wa_num) && is_numeric($wa_num) === false) {
            array_push($errors, "no wa harus angka");
        }

        if (empty($email)) {
            array_push($errors, "E-Mail jangan kosong!");
        }

        if (!empty($email) && strpos($email, '@') === false) {
            array_push($errors, "E-Mail tidak falid");
        }

        if (empty($password)) {
            array_push($errors, "Password kosong");
        }

        if (!empty($password) && strlen($password) < 6) {
            array_push($errors, "Password kurang dari 6");
        }

        if (empty($errors)) {
            $cek_nama = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE username = '$username' OR email = '$username'"));
            if ($cek_nama > 0) {
                $alert = ['danger', ['nama atau email sudah ada gak bisa register']];
            } else {
                $insert = mysqli_query($con, "INSERT INTO  `users` (`name`, `username`, `wa_num`, `email`, `password`) VALUES ('$name', '$username', '$wa_num', '$email', '$password')");

                mysqli_close($con);

                if ($insert) {
                    $alert = ['success', ['Berhasil register ']];
                } else {
                    $alert = ['danger', ['Gagal menambahkan data ']];
                }

            }

        } else {
            $alert = ['danger', $errors];
        }
    }

}