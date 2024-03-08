<?php
    include 'connect.php';
    include 'includes/header.php';
    include 'includes/footer.php'; //much better if naa jud ni sa taas
?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleRegister.css">
    <title>TeknoEvents Contact Page</title>
</head>

<body>
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>For inquiries about our price ranges: </p>
  </div>
  <div class="row">

    <div class="column">
      <form>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="philippines">Philippines</option>
          <option value="nicaragua">Nicaragua</option>

        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
</body>
