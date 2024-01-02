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
            <h5 class="card-title">Vertical Form <a class="btn btn-primary btn-sm " href="index.php" role="button">< </a></h5>
            


            <?php

            if (isset($_GET['id'])) {
              $id = $_GET['id'];

              $select = "SELECT *FROM users WHERE id=$id";
              $select_result =  mysqli_query($con, $select);
              $data = mysqli_fetch_assoc($select_result);
            }

            mysqli_close($con);

            ?>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
              <div class="col-6">
                <label for="inputNanme4" class="form-label">Your Name</label>
                <input type="text" name="name" readonly value="<?php echo $data['name']; ?>" class="form-control" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">Phone</label>
                <input type="tel" name="phone" readonly value="<?php echo $data['phone']; ?>" class="form-control" id="inputEmail4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email"  readonly value="<?php echo $data['email']; ?>" class="form-control" id="inputEmail4">
              </div>
            
            </form><!-- Vertical Form -->

          </div>
        </div>



      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php require("../include/footer.php"); ?>