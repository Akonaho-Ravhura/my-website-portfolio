<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://kit.fontawesome.com/18a759759d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="contact.css">
    <title>Hire Me</title>
</head>
<body>
  <section>
  <input type="checkbox" id="check">
<header>
    <h2> <a class="logo" href="index.php">Portfolio</a></h2>
<nav>
    <div class="navigation">
    <a class="active" href="">Home</a>
    <a  href="about.php">about</a>
    <a  href="portfolio.php">Portfolio</a>
    <a  href="contact.php">contact</a>
    </div>
  </nav>
  <label id="menu" for="check">
    <i class="fas fa-bars menu-btn"></i>
    <i class="fas fa-times close-btn"></i>
  </label>
  </header>
</section>
<section id="contact">
<div class="container">
  <h1 class="contact">contact me</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Id consectetur dolore unde eligendi quas omnis deleniti nostrum ipsa praesentium?</p>
    <form action="server.php" method="POST">
      <label for="firstname">Name:</label>
      <input type="text" name="name" id="firstname">
      <label for="email">Email:</label>
      <input type="email" name="Email" id="email">
      <label for="subject">Subject:</label>
      <input type="text" name="subject" id="subject">
      <label for="message">Message:</label>
      <textarea name="message" id="message" cols="30" rows="10"></textarea>

      <input type="submit" value="Hire Me">

    </form>
</div>
</section>


    
</body>
</html>

