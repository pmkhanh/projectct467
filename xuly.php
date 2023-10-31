<?php
session_start();

if (isset($_POST['login'])) {
    include_once('#');
   // session_destroy();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_login = "SELECT * FROM taikhoan WHERE username='$username' AND password='$password'";
    $row = mysqli_query($conn, $sql_login);
    $result_login = mysqli_fetch_array($row);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $row_data = $result_login;
        $_SESSION['dangnhap'] = $row_data['username'];
        if ($row_data['admin'] > 0) {
            echo '<script>alert("Đăng nhập thành công tài khoản Admin")</script>';
            echo '<script>window.open("#","_self")</script>';
        } elseif ($row_data['admin'] == 0)
            echo '<script>alert("Đăng nhập thành công")</script>';
                echo '<script>window.open("#","_self")</script>';
    } else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không đúng")</script>';
        echo '<script>window.open("#","_self")</script>';
    }
}

