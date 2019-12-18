<?php

$notif = isset($url[1]) ? $url[1] : false;
if(isset($_SESSION['jabatan'])){
echo "<script>
            document.location.href='" . BASE_URL . "beranda';
        </script>";
}

?>

    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?= BASE_URL."images/icon/garut.png" ?>">
                            </a>
                        </div>
                <?php
                    if($notif){
                ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal Login!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                <?php
                    }
                ?>
                        <div class="login-form">
                            <form action="<?= BASE_URL."app/function/proses_login.php" ?>" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>