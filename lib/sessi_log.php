<?php 
if (isset($_SESSION['user'])) {
    $check_user = $konek->query("SELECT * FROM pengguna WHERE username = '".$_SESSION['user']['username']."'");
    $data_user = $check_user->fetch_assoc();
    $check_username = $check_user->num_rows;
    if ($check_username == 0) {
        exit(header("Location: ".$web['base']['url']."adm/logout"));
    } else if ($data_user['status'] == "Tidak Aktif") {
        exit(header("Location: ".$web['base']['url']."adm/logout"));
    }
	$sess_username = $_SESSION['user']['username'];
}