<?php
// require_once "../templates/home/header.php";
?>

<h3>Login</h3>

<?php
if (isset($msg)) {
    echo "<br> $msg </p>";
}
if (isset($error)) {
    echo "<br> $error </p>";
}
?>

<?php
if ($_SESSION['userinfo'] ?? '') {
    echo ("<br/> <a href='/logout'> Đăng xuất </a>");
} else {


?>

    <p></p>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Form đăng nhập </h3>
        </div>

        <form action="" method="post" class="form-horizontal">


            <!-- Tài khoản<input type="text" name="username" placeholder="Nhập email hoặc tên tài khoản">
    <p></p>
    Mật khẩu: <input type="password" name="password" placeholder="Nhập mật khẩu">
    <p></p>
    <input type="submit" value="Đăng Nhập">
    <a href="/registration"> Đăng kí </a> -->

            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" id="inputEmail3" name="username" placeholder="Nhập email hoặc tên tài khoản">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Remember me</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Đăng nhập</button>
                <button class="btn btn-info"><a href="/registration"> Đăng kí </a></button>

                <button type="submit" class="btn btn-default float-right">Cancel</button>
            </div>
        </form>
    </div>



        <?php
    }
        ?>
        <?php
        // require_once "../templates/home/footer.php";
        ?>