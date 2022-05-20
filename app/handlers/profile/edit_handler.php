<?php
if (isset($_POST['action'])) {
    if ($_POST['action'] === "edit_profile") {
        $fullname = htmlspecialchars($_POST['name']);
        $username = htmlspecialchars($_POST['username']);
        $wa_num = htmlspecialchars($_POST['wa_num']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $errors = [];
        unset($_POST['password']);
        unset($_POST['avatar']);

        foreach ($_POST as $key => $val) {
            if (empty($val)) {
                $new_key = ucfirst($key);

                array_push($errors, str_replace("_", " ", $new_key) . " kosong");
            }
        }

        if (!empty($email) && strpos($email, '@') === false) {
            array_push($errors, "E-Mail tidak falid");
        }

        if (!empty($password) && strlen($password) < 6) {
            array_push($errors, "password kurang dari 6");
        }

        if (empty($errors)) {
            $query = "UPDATE users SET name='$fullname', username='$username', wa_num='$wa_num', email='$email'";

            if (!empty($password)) {
                $query .= ", password='$password'";
            }
            $query .= " WHERE id ='$session_user_id'";

            $update = mysqli_query($con, $query);
            if ($update) {
                $alert = ['success', ['Berhasil di edit  ']];
            } else {
                $alert = ['danger', ['Gagal di edit  ']];
            }

        } else {
            $alert = ['danger', $errors];
        }

    }

}