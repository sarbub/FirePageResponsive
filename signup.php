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
    <div class="image_container">

    </div>
<nav class="nav">
            <a href="index.html" class="logo_text">FirePage</a>
            <a class="btn" id="upper_login" href="index.html">home</a>
        </nav>
    <div class="main">
    <p class="animated-text motivational"><b>FirePage</b> is here to help, let's get started</p>
        <form action=""  method = "POST" class = "form" data-aos="flip-left">
            <section>
                 <ion-icon name="log-in-outline"></ion-icon>
            </section>
            <input type="text" name = "name" placeholder = "user name" class = "main_input_text">
            <input type="password" name = "password" placeholder = "password" class = "main_input_text">
            <input type="password" name = "password_confirm" placeholder = "confirm password" class = "main_input_text">
            <p class = "already_have_account_p">Already have an account?<a class = "a" href = "login.php">login</a></p>
            <section>
            <button type = "submit" class = "btn blue_btn">Signup</button>
            <a  href ="index.html" class = "btn red_btn">Home</a>
            </section>
        </form>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>

const nav = document.querySelector(".nav");
const text = document.querySelector(".logo_text");
const header = document.querySelector(".image_container");

window.addEventListener("scroll", () => {
  if (window.scrollY > 20) {
    nav.style.background = "white";
    text.style.color = "red"; // Change the background color of the nav bar on scroll
  } else {
    nav.style.background = "transparent";
    text.style.color = "white"; // Reset the background color when scrolling back to the top
  }

  header.style.filter = `blur(${window.scrollY / 100}px)`;

  // Function to disable screen rotation
function disableRotation() {
  if (window.orientation !== 0) {
    alert("Please rotate your device back to the default orientation.");
  }
}

// Attach an event listener to detect orientation changes
window.addEventListener("orientationchange", disableRotation);

// Call the function initially to check the orientation on page load
disableRotation();

});

  AOS.init();
</script>


</html>