
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="./css/style-login.css">

</head>
<style>
    * {
        font-family: "Poppins";
    }

    body {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        overflow-y: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #dde5f4;
        height: 100vh;
    }

    .screen-1 {
        background: #f1f7fe;
        padding: 2em;
        display: flex;
        flex-direction: column;
        border-radius: 30px;
        box-shadow: 0 0 2em #e6e9f9;
        gap: 2em;
    }

    .screen-1 .logo {
        margin-top: -3em;
    }

    .screen-1 .email {
        background: white;
        box-shadow: 0 0 2em #e6e9f9;
        padding: 1em;
        display: flex;
        flex-direction: column;
        gap: 0.5em;
        border-radius: 20px;
        color: #4d4d4d;
        margin-top: -3em;
    }

    .screen-1 .email input {
        outline: none;
        border: none;
    }

    .screen-1 .email input::-moz-placeholder {
        color: black;
        font-size: 0.9em;
    }

    .screen-1 .email input:-ms-input-placeholder {
        color: black;
        font-size: 0.9em;
    }

    .screen-1 .email input::placeholder {
        color: black;
        font-size: 0.9em;
    }

    .screen-1 .email ion-icon {
        color: #4d4d4d;
        margin-bottom: -0.2em;
    }

    .screen-1 .password {
        background: white;
        box-shadow: 0 0 2em #e6e9f9;
        padding: 1em;
        display: flex;
        flex-direction: column;
        gap: 0.5em;
        border-radius: 20px;
        color: #4d4d4d;
    }

    .screen-1 .password input {
        outline: none;
        border: none;
    }

    .screen-1 .password input::-moz-placeholder {
        color: black;
        font-size: 0.9em;
    }

    .screen-1 .password input:-ms-input-placeholder {
        color: black;
        font-size: 0.9em;
    }

    .screen-1 .password input::placeholder {
        color: black;
        font-size: 0.9em;
    }

    .screen-1 .password ion-icon {
        color: #4d4d4d;
        margin-bottom: -0.2em;
    }

    .screen-1 .password .show-hide {
        margin-right: -5em;
    }

    .screen-1 .login {
        padding: 1em;
        background: #3e4684;
        color: white;
        border: none;
        border-radius: 30px;
        font-weight: 600;
    }

    .screen-1 .footer {
        display: flex;
        font-size: 0.7em;
        color: #5e5e5e;
        gap: 14em;
        padding-bottom: 10em;
    }

    .screen-1 .footer span {
        cursor: pointer;
    }

    button {
        cursor: pointer;
    }
</style>

<body>
    <form action="login.php" method="post">
        <!-- partial:index.partial.html -->
        <div class="screen-1">
            <img class="logo" src="./images/logo.png" alt="">
            <div class="email">
                <label for="email">Tài khoản</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Username" value="" name="username" required />
                </div>
            </div>
            <div class="password">
                <label for="password">Mật khẩu</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input class="pas" type="password" name="password" placeholder="············" />
                    <!-- <ion-icon class="show-hide" name="eye-outline"></ion-icon> -->
                </div>
            </div>
            <button class="login" type="submit" value="login">Đăng nhập </button>
            <!-- <div class="footer"><span><a href="register.php">Đăng ký</a></span></div> -->
        </div>
        <!-- partial -->
    </form>
</body>

</html>