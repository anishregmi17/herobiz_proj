<?php require("../include/header.php"); ?>
<?php require("../include/navbar.php"); ?>
<?php require("../include/sidebar.php"); ?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Vertical Form</h5>

            <?php

            if (isset($_POST['submit'])) {
              $name = $_POST['name'];
              $phone = $_POST['phone'];
              $email = $_POST['email'];
              $password = md5($_POST['password']);

              if ($name != "" && $phone != "" && $email != "" && $password != "") {

                $query = "SELECT * FROM users WHERE email='$email'";

                // Execute the query
                $result = mysqli_query($con, $query);

                // Check if the query returned any rows
                if (mysqli_num_rows($result) > 0) {
                  // User with the same username already exists, display an error message
                  echo "<p>Email already taken.</p>";
                  echo "<meta http-equiv=\"refresh\" content=\"1;URL=create.php\">";
                } else {
                  $insert = "INSERT INTO users (name, phone, email, password) 
VALUES ('$name','$phone', '$email', '$password')";
                  $result =  mysqli_query($con, $insert);
                  if ($result) {
            ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Data is added</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php
                    // echo Header("Refresh:2; URL=index.php");
                    echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
                  } else {
                  ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Data is not added</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    echo Header("Refresh:2");
                  }
                }
              } else {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>All fields are required</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                echo Header("Refresh:2");
              }
            }
            mysqli_close($con);

            ?>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
              <div class="col-6">
                <label for="inputNanme4" class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">Phone</label>
                <input type="tel" name="phone" class="form-control" id="inputEmail4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4">
              </div>
              <div class="col-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword4">
              </div>
              <div class="col-6 ">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>



      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php require("../include/footer.php"); ?>