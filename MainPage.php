<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "ritika09", "Cosmic_Voyager");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $emailID = mysqli_real_escape_string($link, $_REQUEST['email']);
    if (empty($emailID)) {
        $msg = "Enter your email id.";
        echo"<script type='text/javascript'></script>alert('$msg');</script>";
    } 
        else 
    {
        if (!filter_var($emailID, FILTER_VALIDATE_EMAIL)) {
            $msg = "Invalid email format";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        else{
            $sql = "INSERT  INTO Newsletter_List (Email) VALUES ('$emailID')";
            if(mysqli_query($link, $sql)){
                $msg="Signed up successfully. Stay tuned for updates";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            } 
            else{
                $msg="You are already one of the elite cosmic voyagers. Stay tuned for updates";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        }
    }
    // Close connection
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title >Cosmic Voyager </title>
  <link rel="Shorcut icon" href="Images/icon.ico" type="image/x-icon">
  <link rel = "stylesheet" type = "text/css" href="MainStyle.CSS">
  <script type="text/javascript" src="Handling.js"></script>
</head>
<body>
  <p>
    <h1>
      COSMIC VOYAGER
      <img src="Images/astronaut-in-space2s.gif" height="100px" width="100px">
    </h1>
  </p>
  <div>
    <p>
      <h2>Welcome onboard fellow galactic explorer,</h2>
      <h3>Gear up to go on an exhilarating journey to unravel the deepest and darkest mysteries of our cosmos.</h3>
      <label>
        <p>The universe is a crazy place. Infact, it's probably the craziest place you've ever been to.</p>
        <p>It's full of exploding stars and immortal jellyfish and it's been kicking around for almost 14 billion years.</p>
        <div2>
          <p><h3>Here are 5 awesome facts to put things in perspective:</h3></p>
          <ul>
            <p>
              <li>
                Many of the atoms you're made of,
                the calcium in your bones to the iron in your blood,
                were brewed up in the heart of an exploding star billions of years ago.
              </li>
            </p>
            <p>
              <li>
                Your body contains cosmic relics from the creation of the universe.
                Almost all of your hydrogen atoms were formed in the Big Bang, 
                about 13.7 billion years ago.
              </li>
            </p>
            <p>
              <li>
                Light from some stars takes so long to travel to our eyes that 
                when you look at the star-speckled night sky 
                you're actually peering deep into the past. 
                NASA's Hubble Telescope can look as far back as 100 million years ago.
              </li>
            </p>
            <p>
              <li>
                Outer space is silent. Eerily silent.
                That's because sound waves need some sort of medium to travel
                through. And space is a vacuum. A dark, silent vacuum.
              </li>
            </p>
            <p>
              <li>
                There might be as many as three sextillion stars in the universe. 
                That's 3 followed by 23 zeros, or 300,000,000,000,000,000,000,000. 
                That's more than all of the grains of sand on Earth.
              </li>
            </p>
          </ul>
        </div2>
        <div3>
          <h2>Where would you like to venture on today ?<img src="Images/rocket.gif" height="100px" width="100px"></h2>
          <form>
            <input class="BH" id="OBH" type = "button" onclick = "openBH('Blackholes.html')"></input>
            <input class="P" id="OP" type = "button" onclick = "openP('Planets.html')"></input>
            <input class="G" id="OG" type = "button" onclick = "openG('Galaxies.html')"></input>
          </form>
        </div3>
        <div4>
          <h2>Think you can conquer the universe?</h2>
          <h3>Take the Cosmos Voyager Quiz by clicking the quiz portal below.</h3>
          <form>
            <input class="quiz" type="button" onclick = "openBH('index.html')"></input>
          </form>
        </div4>
      </label>
  </div>
  <div5>
    <label>
      <h2>
        Sign up to our newsletter for weekly cosmos updates <img src="Images/newsletter.gif" width="60px" height="60px">
      </h2>
      <form>
        <input type="text" class="mail" name="email" placeholder="Enter your email id"></input>
        <input type="submit" class="submit" value="Submit"></input>
      </form>
    </label>
  </div5>
</body>
</html>