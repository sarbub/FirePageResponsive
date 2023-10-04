<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<nav class="nav">
            <a href="index.html" class="primary-text primary">FirePage</a>
            <a class="btn btn-primary" id="upper_login" href="index.html">home</a>
        </nav>
    <div class="main">
        <form action=""  method = "POST" class = "form" data-aos="flip-left">
            <section>
                 <ion-icon name="log-in-outline"></ion-icon>
            </section>
            <input type="text" name = "name" placeholder = "user name" class = "main_input_text">
            <input type="password" name = "password" placeholder = "password" class = "main_input_text">
            <input type="password" name = "password_confirm" placeholder = "confirm password" class = "main_input_text">
            <p class = "p">Already have an account?<a href = "login.php">login</a></p>
            <button type = "submit" class = "btn btn-primary">signup</button>
        </form>
        <p class="animated-text motivational"><b>FirePage</b> is here to help, let's get started</p>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


</html>