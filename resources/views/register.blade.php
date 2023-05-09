<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="register.css" rel="stylesheet"/>
    <script src="register.js" defer></script>
    <title>Fitness Fusion</title>

</head>

<body>
    <section>
        <div class="form-box">
        <div class="form-value">
            <form action="">

                <h2 class="text-center">Sign up</h2>
                <!--ProgressBar-->
<div class="progressbar">
<div class="progress" id="progress"></div>

    <div class="progress-step progress-step-active" data-title="Intro"></div>
    <div class="progress-step"data-title="Personal Info"></div>
    <div class="progress-step"data-title="Goal"></div>
</div>
                <!--Progress bar1-->
                <div class="form-step form-step-active">

                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email"required>
                    <label for="">E-mail</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="body-outline"></ion-icon>
                    <input type="Name"required>
                    <label for="">Name</label>
                </div>

                <div class="inputbox">
                    <ion-icon name="body-outline"></ion-icon>
                    <input type="username"required>
                    <label for="">Username</label>
                </div>

                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password"required>
                    <label for="">Create Your Password</label>
                </div>

                <div class="inputbox">

                        <ion-icon name="lock-open-outline"></ion-icon>
                        <input type="password"required>
                        <label for="">Confirm Password</label>

                </div>

                <div class="">
                    <a href="#" class="btn btn-next width-20 ml-auto">NEXT</a>
                </div>


            <div class="register">
                    <p>Already have an account?<a href="login.php">Log in</a></p>
                </div>

                <!--Progress Bar2-->
                <div class="form-step ">
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email"required>
                    <label for="">Please input your Age</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="body-outline"></ion-icon>
                    <input type="Date Of Birth"required>
                    <label for="dob">Date of Birth</label>
                    <input type="date"id="dob"name="dob">
                </div>

                <div class="inputbox">
                    <ion-icon name="body-outline"></ion-icon>
                    <input type="height"required>
                    <label for="height">Height in centimeters</label>
                    <input type="number"id="height"name="height"min="0"max="1000">
                </div>
                <div class="inputbox">
                    <ion-icon name="body-outline"></ion-icon>
                    <input type="Weight"required>
                    <label for="weight">Weight in centimeters</label>
                    <input type="number"id="weight"name="weight"min="0"max="1000">
                </div>
<div class="btns-group">
    <a href="#"class="btn btn-prev">Previous</a>
    <a href="#" class="btn btn-next">Next</a>
                <!--progressBar 3-->

                <div class="form-step ">
                    <div class="inputbox">
                    <ion-icon name="body-outline"></ion-icon>
                    <input type="Fitness goal"required>
                    <label for="goal"> Choose your Fitness Goal</label>
                    <select id="goal" name="goal">
                        <option value="Weightloss">Weight Loss</option>
                        <option value="Weightgain">Weight Gain</option>
                        <option value="Musclegain">Muscle Gain</option>
                        <option value="pregnancy">Pregnancy Journey</option>
                </div>
<div class="inputbox">

                        <ion-icon name="lock-open-outline"></ion-icon>
                        <input type="medical"required>
                        <label for="">Fill in any of your Medical History </label>
</div>
<div class="inputbox">

    <ion-icon name="lock-open-outline"></ion-icon>
    <input type="name"required>
    <label for="">What is your approximate workout period per week?</label>

</div>
<div class="inputbox">

    <ion-icon name="lock-open-outline"></ion-icon>
    <input type="name"required>
    <label for="">Do you have any dietary restrictions?Fill here </label>

</div>
<div class="btns-group">
    <a href="#"class="btn btn-prev">Previous</a>
    <a href="#" class="btn btn-next">Submit</a>

    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
