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
    <div class="big_div">
    <nav class="nav">
            <a href="index.html" class="primary-text primary">FirePage</a>
            <a class="btn btn-primary" id="upper_login" href="index.html">home</a>
</nav>
    <div class="main">
        <form action=""  method = "POST" class = "form" data-aos="flip-left">
            <section>
                 <ion-icon name="log-in-outline"></ion-icon>
            </section>
            <input type="text" name = "name" placeholder = "enter user name">
            <input type="password" name = "password" placeholder = "password">
            <p class = "p">Dont have an account?<a href = "signup.php">signup</a></p>
            <button type = "submit" class = "btn btn-primary">login</button>
        </form>
        <p class= "animated-text motivational"><b>Thank you</b> for trusting FirePage with your exams</p>
    </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>