<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/terms.css">
  <link rel="icon" href="img/pnhs.png">
  <title>Sign Up</title>
</head>

<?php
include("php/display.php");
?>

<body>
  <div class="header">
    PARAÑAQUE NATIONAL HIGH SCHOOL - MAIN - Home of the Gentle Warriors
  </div>
  <div class="navbar">
    <img src="img/navigation.png" class="nav-icon nav">
    <img src="img/close.png" class="nav-icon close hide">
    <img src="img/pnhs.png" class="nav-pnhs">

    <div class="showNavbar">
      <div class="tab"></div>

      <!-- FOR STUDENT -->
      <a href="index.php" class="tab <?php echo $stud_visibility; ?>">Home</a>
      <a href="signin.php" class="tab <?php echo $stud_visibility; ?>">Login</a>
      <a href="signup.php" class="tab <?php echo $stud_visibility; ?>">Sign up</a>
      <a href="terms.php" class="tab <?php echo $stud_visibility; ?>">Terms and Conditions</a>
      <!-- END OF STUDENT -->

      <!-- FOR STAFF -->
      <a href="staff-admin.php" class="tab <?php echo $staff_visibility; ?>">Home</a>
      <a href="pending-orders.php" class="tab <?php echo $staff_visibility; ?>">Pending Orders</a>
      <a href="ready-orders.php" class="tab <?php echo $staff_visibility; ?>">Ready Orders</a>
      <a href="completed-orders.php" class="tab <?php echo $staff_visibility; ?>">Completed Orders</a>
      <a href="add-item.php" class="tab <?php echo $staff_visibility; ?>">Add Item</a>
      <a href="terms.php" class="tab <?php echo $staff_visibility; ?>">Terms and Conditions</a>
      <!-- END OF STAFF -->

    </div>
  </div>

  <div class="content">
    <div class="content">
      <div class="title">
        <h1>Terms and Conditions</h1>
        <p>Published: Day, Month, 2022</p>
      </div>

      <div class="tnc">
        <p>By accessing and using this website, you agree that you have read, understood and accepted the Terms including any additional terms and conditions and any policies referenced herein, available on the Platforms. If you do not agree to or fall within the Terms, please do not access or use this website, or the Services.
        </p>

        <p> This website may be used by (i) grade 11 and 12 students of Paranaque National Highschool - Main (PNHS - MAIN) and (ii) senior high school teachers and (iii) school canteen staffs.
        </p>

        <p>Users, accepting these Terms shall agree to take responsibility for your actions and right to change or modify these Terms (including our policies which are incorporated into these Terms) at any time.
        </p>

        <p>
          You are strongly recommended to read any charges associated with your use of the website and/or purchase of Goods.
        </p>

        <p>
          If you are part of the junior high school community, you must stop using/accessing the website immediately.
        </p>

        <p>
          Our research group reserves the these Terms regularly. You will be deemed to have agreed to the amended Terms by your continued use of the website following the date on which the amended Terms are posted.
        </p>

      </div>
      <div class="button">
        <button>I agree</button>
      </div>
    </div>

  </div>
</body>

<script type="text/javascript">
  let nav = document.querySelector('.nav');
  let close = document.querySelector('.close')
  let navbar = document.querySelector('.showNavbar')

  nav.onclick = function() {
    nav.classList.add('hide')
    navbar.classList.add('show')
    close.classList.remove('hide')
  }

  close.onclick = function() {
    close.classList.add('hide')
    navbar.classList.remove('show')
    nav.classList.remove('hide')
  }
</script>

</html>