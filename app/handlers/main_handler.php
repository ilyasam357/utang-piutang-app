<?php
$session_user_id = $_SESSION['user']['id'];

$query = mysqli_query($con, "SELECT * FROM users WHERE id ='$session_user_id'");

$user = mysqli_fetch_assoc($query);

$page_now = isset($_GET['page']) ? $_GET['page'] : 'home';

global $session_user_id;