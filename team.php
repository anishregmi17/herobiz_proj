<!-- yeha kehi testo aru bujnu parne xaina matra header,navbar ra 
footer include garna ani team ko xuttai frontend page ko lagi ho -->


<?php require("include/header.php"); ?>

<!-- ======= Header ======= -->

<?php require("include/navbar.php"); ?>
<!-- End Header -->


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Team</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Teams</li>
        </ol>
      </div>

    </div>
  </div>
  <!-- End Breadcrumbs -->


  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Team</h2>
        <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
              <h4>William Anderson</h4>
              <span>CTO</span>
            </div>
          </div>
        </div><!-- End Team Member -->
      </div>
    </div>
  </section>
  <!-- End Team Section -->
</main>
<!-- End #main -->

<?php require("include/footer.php"); ?>