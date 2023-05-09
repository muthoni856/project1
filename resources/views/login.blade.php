<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fitness Fusion</title>


    <link href="trial.css" rel="stylesheet">


</head>

<body>
    <section>
        <div class="form-box">
        <div class="form-value">
            <form action="">
                <h2>Login</h2>

                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email"required>
                    <label for="">Email</label>
                </div>


                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password"required>
                    <label for="">Password</label>
                </div>

                <div class="inputbox">

                        <ion-icon name="lock-open-outline"></ion-icon>
                        <input type="password"required>
                        <label for="">Confirm Password</label>

                </div>

                <div class="forget">
                    <p><label for=""><input type="checkbox">Remeber Me </label></p>
                </div>

                <button>Log in </button>

                <div class="register">
                    <p>Don't have an account?<a href="register.php">Register here</a></p>
                </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
