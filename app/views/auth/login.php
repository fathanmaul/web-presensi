<!DOCTYPE html>
<html>

<head>
    <title>Admin | Login</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url ?>/assets/login/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url ?>/assets/login/assets/img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <img class="wave" src="<?= base_url ?>/assets/login/assets/img/wave_left 1.png">
    <div class="q-container">
        <div class="m-img">
            <img src="<?= base_url ?>/assets/login/assets/img/logo-nama.png">
        </div>
        <div class="m-login-content">
            <form action="<?= base_url; ?>/auth/authLogin" method="post">
                <h2 class="m-title">Selamat Datang!</h2>
                <h6 class="m-subtitle">Silahkan Isi Username dan Password dengan benar</h6>
                <div class="m-input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="m-div">
                        <input type="text" class="input" placeholder="Username" required name="username">
                    </div>
                </div>
                <div class="m-input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="m-div">
                        <input type="password" class="input input-pass" placeholder="Password" name="password">
                    </div>
                </div>
                <input type="submit" class="m-btn" value="Login" name="submit">
                <!-- <div class="alert alert-danger" role="alert">
                    A simple danger alert check it out!
                  </div> -->
                  <?php Message::flash(); ?>
            </form>
        </div>
    </div>
    <script src="<?= base_url ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url ?>/assets/js/bootstrap.bundle.min.js"></script>
    <!-- <script type="text/javascript" src="js/main.js"></script>
    <script src="js/script.js"></script> -->
</body>

</html>