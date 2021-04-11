<?php
include_once("./includes/logic.php");
/*if (!isset($_SESSION['userId']) && !isset($_SESSION['userName'])) {
  header("Location: login.php");
}*/
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!--    google font-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- font awesomoe -->
  <script src="./js/all.min.js"></script>
  <!-- main css -->
  <link rel="stylesheet" href="./css/main.css">

  <title>Swopno somobai</title>
</head>

<body>
  <div class="container">
    <div class="row m-3 p-3">
      <form action="./includes/logic.php" method="post">
        <input type="hidden" name="logOutReq" value="<?php echo $_SESSION['userId'] ?>">
        <button class="btn btn-danger" name="logOut" type="submit">Log Out</button>
      </form>
    </div>
    <div >
      <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ9pa5f3TrA6pnZP8ZmPMTERpa9rx-bUePLs7TOHcM4xdWktQ8bip5AOOWmxXaVsCb_J4xOiqrAkXc9/pubhtml?widget=false&amp;headers=false"></iframe>
    </div>
  </div>



  <footer class="footer text-center">
    <h6 class="text-dark font-weight-bold text-capitalize">&copy; 2019 - <?php echo date('Y') ?> all copyrights reaserve</h6>
  </footer>


  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
  <!-- jquery -->
  <script src="./js/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>
