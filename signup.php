<!DOCTYPE html>
<html lang='en'>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Muli:900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesX.css">
        <link rel="stylesheet" href="signup.css">
        <script src="project.js"></script>
        <title>Signup | PG</title>
    </head>
    <body>

      <?php
        
      ?>

        <header>
          <div class="container">
              <h1><span class="high">PETER</span> GRIFFIN'S Aeronautical Museum</h1>
              <div id="brand">
                  <nav>
                      <ul>
                          <li><a href="index.php">Home</a></li>
                          <li><a href="History.php">History</a></li>
                          <li><a href="Events.php">Events</a></li>
                      </ul>
                  </nav>
              </div>
          </div>
        </header>
        
        <div class="head">
          <h1>Donation</h1>
        </div>

        <div class="split-screen" >
          <div class="left">
            <section class="copy">
              <h1>Join the family</h1>
              <p>Get exclusive regular updates</p>
            </section>
          </div>
          <div class="right">
            <form method="POST">
              
              <section class="copy">
                <h2>Sign Up</h2>

                <?php
                  if(isset($_GET["error"])) {

                    if($_GET['error'] == "passwoedcheck") {
                      echo "<p class='signuperror'>Re-type the same password in both fields</p>";
                    }

                    else if($_GET['error'] == "emailtaken") {
                      echo "<p class='signuperror'>This Email ID already has an account. Enter a new email.</p>";
                    }
                  }

                  else if($_GET['sign-up'] == "success") {
                    echo "<p class='signupsuccess'>Signup successful</p>";
                  }
                ?>

                <div class="login">
                  <p>Already have an account? <a href="login.php">
                    <b>Log In</b>
                  </a></p>
                </div>
              </section>

              <div class="input-container">
                  <label id="fname">First Name</label>
                  <input id="fname" name="fname" type="text">
                  <label id="lname">Last Name</label>
                  <input id="lname" name="lname" type="text">
                  <label id="email">Email</label>
                  <input id="email" name="email" type="email">
                  <label id="pwd">Password</label>
                  <input id="pwd" name="password" type="password" placeholder="Must be atleat 6 characters">
                  <label id="pwd-rpt">Confirm Password</label>
                  <input id="pwd-rpt" name="password-rpt" type="password" placeholder="Type the same password here">
                  <button type="submit" class="signup-btn" value="submit" name="signup-submit">Sign Up</button>
                <section class="legal">
                  <p><span class="small">
                    By continuing, you agree to accept our <b>Terms and conditions</b>
                  </span></p>
                </section>
              </div>
            </form>
          </div>
        </div>

        <footer>
          <p>PETER GRIFFIN Aeronautical Museum, copyright &copy;2021</p>
        </footer>
    </body>
</html