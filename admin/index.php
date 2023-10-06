<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Radius - Signin/Signup</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/loginform.css">
</head>

<body>
    <div class="container" id="container">

        <div class="form-container sign-in-container">
            <form action="checklogin.php" method="post" enctype="multipart/form-data">
                <h1>Log in</h1>
                <input type="email" placeholder="Admin Id" name="usid" />
                <input type="password" placeholder="Password" name="password" />
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Welcom Dear Admin!</h1>
                    <p>Enter your Login Details and Go Forwad to Your Admin Panel..!💪</p>

                </div>
            </div>
        </div>
    </div>
    <script src="./js/loginform.js"></script>
</body>

</html>