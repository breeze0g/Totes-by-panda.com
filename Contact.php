<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Totes by panda</title>
  <link rel="icon" type="image/png" href="images/logoooooo.jpg">

      <nav class="nav">
         <a href="Home.html" class="bab">Home</a>
      <a href="bags.html" class="bab">Bags</a>
      <a href="About.html" class="bab">About</a>
      <a href="Shop.html" class="bab">Shop</a>
      <a href="Offers.html" class="bab">Offers</a>
      <a href="Totes.html" class="bab">Totes</a>
      <a href="Contact.php"class="bab">Contact</a>

      <link rel="stylesheet" href="style.css">
    </nav>
</head>
<body>
  <h1>Contact us</h1>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body{font-family:sans-serif;background:#fafafa;margin:0;padding:20px}
    .card{max-width:700px;margin:30px auto;background:#fff;padding:22px;
          border-radius:12px;box-shadow:0 6px 20px rgba(0,0,0,.06)}
    h1{text-align:center;font-variant:small-caps;margin-top:0}
    label{display:block;margin-top:12px;font-weight:600}
    input,textarea,select{
      width:100%;padding:10px 12px;margin-top:6px;
      border-radius:8px;border:1px solid #ddd;box-sizing:border-box
    }
    button{
      margin-top:16px;width:100%;padding:12px;border-radius:8px;
      background:#111;color:#fff;border:0;cursor:pointer;font-weight:600
    }
    .honeypot{position:absolute;left:-10000px;top:auto;width:1px;height:1px;overflow:hidden}
  </style>
</head>
<body>
  <div class="card">
    <p>We value your feedback. Fill in and send.</p>

    <form action="process_contact.php" method="post">
      <label for="name">Full name</label>
      <input id="name" name="name" required minlength="2">

      <label for="email">Email</label>
      <input id="email" name="email" type="email" required>

      <label for="type">Type</label>
      <select name="type" id="type">
        <option value="review">Review</option>
        <option value="complaint">Complaint</option>
      </select>

      <label for="rating">Rating (optional)</label>
      <select name="rating" id="rating">
        <option value="">—</option>
        <option value="5">5 – Excellent</option>
        <option value="4">4 – Good</option>
        <option value="3">3 – Okay</option>
        <option value="2">2 – Poor</option>
        <option value="1">1 – Terrible</option>
      </select>

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="6" required minlength="10"></textarea>

    
      <div class="honeypot">
        <label for="website">Leave this empty</label>
        <input id="website" name="website" type="text" autocomplete="off">
      </div>

      <button type="submit" name="Send message">Send Message</button>
    </form>
  </div>
   

<?php
// connect to database
$connect = mysqli_connect("localhost", "root", "", "contacts");

// check connection
if (!$connect) {
    die("db connection failed: " . mysqli_connect_error());
}

// only run if form submitted
if(isset($_POST['Send message'])) {

    // read values from form
    $name    = mysqli_real_escape_string($connect, $_POST['name'] ?? '');
    $email   = mysqli_real_escape_string($connect, $_POST['email'] ?? '');
    $type    = mysqli_real_escape_string($connect, $_POST['type'] ?? '');
    $rating  = mysqli_real_escape_string($connect, $_POST['rating'] ?? '');
    $message = mysqli_real_escape_string($connect, $_POST['message'] ?? '');
    $ip      = $_SERVER['REMOTE_ADDR'];
}
    // build sql (use the vars above, not literal strings)
    $insert = "
        INSERT INTO talk (name, email, type, rating, message, ip)
        VALUES ('$name', '$email', '$type', '$rating', '$message', '$ip')";

    if (mysqli_query($connect, $insert))
        

// optional: view all rows
$result = mysqli_query($connect, "SELECT * FROM talk");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<pre>" . print_r($row, true) . "</pre>";
}

mysqli_close($connect);
?>

  
  
    <!-- end -->
    <div class="power">
  <footer class="footer">
    <h1 class="end">Thank you for visiting our page</h1>
    <p class="end1">
      Thank you for choosing Totes by Panda &hearts; 
      we’re so happy you’re loving your bag! 
      every tote is made with care so you can 
      carry in style. we truly appreciate your 
      support and can’t wait to serve you.
    </p>
    

    <a href="#top">
      <img src="images/logoooooo.jpg" alt="back to top" height="90" class="not">
    </a>
      
    <h3 class="done">2025, @Totes by Panda official</h3>

    </p>
  </footer>
 </div> 
</body>
</html>