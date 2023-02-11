<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing Data MusicOnline</title>

    <link href="./css/styles.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>


<body class="showcase-music">
          <div class="showcase-top">
            <div>
                <a href="./allMusicOnline.php" class="btn btn-danger btn-rounded">All Music</a>
                <a href="#" class="btn btn-danger btn-rounded">Premium</a>
            </div>
            <div><a href="./musicOnline.php"><img class="logo" src="./img/logo.png" alt="Logo"></a></div>
            <div>
                <a href="#" class="btn btn-danger btn-rounded">Sign In</a>
                <a href="#" class="btn btn-danger btn-rounded">Log In</a>
            </div>     
        </div>
        <div class="shocase-music">
            <?php
             echo "<link rel='stylesheet' type='text/css' href='./css/styles.css'>";
            require('includes/dbconx.php');
            $sql = mysqli_query($con, "SELECT * FROM punkRockMusic");

            echo '<table class="table-select-display"><tr><th class="col-artist">artist</th><th class="col-album">album</th><th class="col-song">song</th><th class="col-year">year</th><th class="col-genre">genre</th></tr>';

            while($row = mysqli_fetch_array($sql)) { // Created a variable named row which contained all the row af  our table in mysql
            echo '<tr>';
            echo '<td>'.$row['artist'].'</td>';
            echo '<td>'.$row['album'].'</td>';
            echo '<td>'.$row['song'].'</td>';
            echo '<td>'.$row['year'].'</td>';
            echo '<td>'.$row['genre'].'</td>';
            echo '<td>';
            echo"<img class='recordLabel' src=".'"'.$row['recordLabel'].'"'.">";
            echo "</td>";
            echo '<td>';
            echo"<a target='_blanket' href=".'"'.$row['play'].'"'."><img class='btn-play' src='./img/btn-play.png'></a>";
            echo "</td>";
            echo '</tr>';
            } //end of while loop
            echo '</table>';
            echo ("<p><a class='btn btn-search btn-danger btn-rounded' href='musicOnline.php'>Search again</a></p>");
            mysqli_close($con);
            ?>
        </div>

<!-- Footer -->
<footer class="text-center text-white">
    <section class="">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">About US</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Contact Us</a>
            </li>
            <li>
              <a href="#!" class="text-white">Careers</a>
            </li>
            <li>
              <a href="#!" class="text-white">Location</a>
            </li>
            <li>
              <a href="#!" class="text-white">News</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Account</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">My Account</a>
            </li>
            <li>
              <a href="#!" class="text-white">Create Account</a>
            </li>
            <li>
              <a href="#!" class="text-white">Chage Account</a>
            </li>
            <li>
              <a href="#!" class="text-white">Community</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Legal</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Terms</a>
            </li>
            <li>
              <a href="#!" class="text-white">Privacy</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Media</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Facebook</a>
            </li>
            <li>
              <a href="#!" class="text-white">Instagram</a>
            </li>
            <li>
              <a href="#!" class="text-white">Twiter</a>
            </li>
            <li>
              <a href="#!" class="text-white">Youtube</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>


  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022
    <a class="text-white" href="./musicOnline.php">musicOnline.com</a>
  </div>
</footer>
<!-- Footer -->

</body>
</html>


