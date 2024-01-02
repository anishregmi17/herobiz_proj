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

            if (isset($_GET['id'])) {
              $id = $_GET['id'];

              $select = "SELECT *FROM users WHERE id=$id";
              $select_result =  mysqli_query($con, $select);
              $data = mysqli_fetch_assoc($select_result);
            }

            if (isset($_POST['submit'])) {
              $name = $_POST['name'];
              $phone = $_POST['phone'];
              $email = $_POST['email'];

              if ($name != "" && $phone != "" && $email != "") {
                $update = "UPDATE users SET name='$name', phone='$phone', email='$email' WHERE id=$id";
                $result =  mysqli_query($con, $update);
                if ($result) {
            ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data is Updated</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
                } else {
                ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data is not Updated</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  echo Header("Refresh:2");
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
                <input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">Phone</label>
                <input type="tel" name="phone" value="<?php echo $data['phone']; ?>" class="form-control" id="inputEmail4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control" id="inputEmail4">
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