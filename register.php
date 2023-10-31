<?php
include_once "#"; // file connect
if (isset($_POST['Register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password2 = $_POST['password2'];
    if ($password == $password2) {
        $sql_register = "INSERT INTO `taikhoan` (`username`, `password`, `sdt`, `email`, `admin`) VALUES ('$username', '$password', '$phone', '$email', '0');";
        $result_register = mysqli_query($conn, $sql_register);
        if ($result_register) {
        echo '<script>alert("Tạo tài khoản thành công")</script>';
        $_SESSION['dangky'] = $username;
        $_SESSION['id_khachhang'] = mysqli_insert_id($conn);
        echo '<script>window.open("#","_self")</script>';
    }else{
        echo '<script>alert("Tên đăng nhập đã được sử dụng hãy sử dụng tên khác")</script>';
        echo '<script>window.open("#","_self")</script>';
    }
    } else{ 
        echo '<script>alert("Mật khẩu nhập lại không đúng")</script>';
        echo '<script>window.open("#","_self")</script>';
    }
}
?>

<div class="wrapper-register">
    <div class="form-box register">
        <h3 class="text-center">Register</h3>
        <form action="#" method="POST">
            <div class="input-box">
                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                <input type="text" name="username" required>
                <label>User</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                <input type="text" name="phone" required>
                <label>Phone</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" name="password2" required>
                <label>Confirm Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">I agree to the terms & condition</label>
            </div>
            <button type="submit" class="btn" name="Register">Register</button>
            <div class="login-register">
                <p>Already have an account?
                    <a href="#" class="login-link">Login</a>
                </p>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</div>