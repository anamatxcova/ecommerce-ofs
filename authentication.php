
<html>
  <head>
    <title> Processing File</title>
  </head>
  <body>
    <h1> Processing</h1>
    <?php
    session_start();
    //register
    if(isset($_POST['registration'])){
      if (isset($_POST["email"])&&isset($_POST["password"])&&isset($_POST["streetname"])&&isset($_POST["city"])){
        if($_POST["email"] && $_POST["password"]){
          $firstname = $_POST["firstname"];
          $lastname = $_POST["lastname"];
          //$userid = $_POST["userid"];
          //$userType = $_POST["userType"];
          $password = $_POST["password"];
          $email = $_POST["email"];
          $streetname = $_POST["streetname"];
          $city = $_POST["city"];
          $state = $_POST["state"];
          $zipcode = $_POST["zipcode"];

          // create connection
          $conn = mysqli_connect("localhost", "root", "", "web");
          // check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // register user
          $sql = "INSERT INTO users (firstname, lastname, password, email, streetname, city, state, zipcode)
          VALUES ('$firstname', '$lastname', '$password','$email','$streetname','$city','$state','$zipcode')";

          $results = mysqli_query($conn, $sql);
          if ($results) {
            //echo "The user has been added.";
            echo "  <script>
                        alert('Register successful!');
                        window.location.href='login.php';
                    </script>";
          } else {
             echo mysqli_error($conn);
           }

           mysqli_close($conn); // close connection


        }
        else{
          echo "Something is empty";
        }
    } else{
      echo "Form was not submitted";
    }
  }

    //Login
    if(isset($_POST['login'])){
    if (isset($_POST["email"])&&isset($_POST["password"])){
      if($_POST["email"] && $_POST["password"]){
        $email = $_POST["email"];
        $password = $_POST["password"];

        // create connection
        $conn = mysqli_connect("localhost", "root", "", "users");
        // check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // register user
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        $results = mysqli_query($conn, $sql);
        if ($results->num_rows>0) {
          //echo "Successful Login";
          echo "  <script>
                      alert('Login successful!');
                      window.location.href='index.php';
                  </script>";
        } else {
           echo "Invalid e-mail or Password";
         }

         mysqli_close($conn); // close connection
      }
      else{
        echo "E-Mail or password is empty";
      }
    } else{
      echo "Form was not submitted";
    }
  }
    ?>

  </body>
</html>
