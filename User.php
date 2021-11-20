<?php 
session_start();

	include("connection.php");
	include("functions.php");

  $query = "select * from users ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($con, $query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row["user_name"];
        $email = $row["email"];
    }
  } else {
      //echo "0 results";
  }
?>
<!DOCTYPE HTML>
<?php include 'Navbar.php';?>
<html>
    <head>
       <meta charset="utf-8">
       <title>PhotoBooth | Profile</title>      
        <link rel="stylesheet" href="assets/User.css">
       </head>
    <body>
        <div class="container">
          <div class="Parent">
            <div class="child1">
              <div class="head"><i class='fas fa-user-circle' style='font-size:60px;color:purple'></i></div>
            </div>
            <div class="child2">
              <h1>User Profile</h1>
              <form action="#">
                <br><input type="text" value="<?php echo $name; ?>" disabled/><br><br>
                <input type="email" value="<?php echo $email; ?>" disabled/>
              </form>
            </div>
          </div>
        </div>
        <script>
          
        </script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </body>
</html>