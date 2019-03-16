<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="You have access to a plenty of contact form, contact information and Google map styles.">
    <meta name="keywords" content="contact, map, address, phone, fax, block, html code">

    <title>TheSaaS — Contact blocks</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body class="demo-section">


    <!-- Navbar -->
    <?php include 'nav.php';?>


    <!-- Header -->
    <header class="header p-0">
    </header><!-- /.header -->


    <!-- Main Content -->
    <main class="main-content">

      <section class="section">
        <div class="container">

          <h2 class="text-center">Contact Us</h2>

          <div class="row gap-y mt-8">
            <form class="col-lg-6" action="assets/php/sendmail.php" method="POST" data-form="mailer">

              <div class="alert alert-success d-on-success">We received your message and will contact you back soon.</div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="firstname" placeholder="First Name">
                </div>

                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="lastname" placeholder="Last Name">
                </div>

                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="Email">
                </div>

                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="phone" placeholder="Phone">
                </div>
              </div>

              <div class="form-group">
                <textarea class="form-control form-control-lg" rows="4" placeholder="What do you have in mind?" name="message"></textarea>
              </div>

              <button class="btn btn-lg btn-primary" type="submit">Send message</button>

            </form>


            <div class="col-lg-5 ml-auto text-center text-lg-left">
              <hr class="d-lg-none">
              <h5>Seattle, WA</h5>
              <p>2651 Main Street, Suit 124<br>Seattle, WA, 98101</p>
              <p>+1 (321) 654 9870<br>+1 (987) 123 6548</p>
              <p>hello@thetheme.io</p>
              <div class="fw-400">Follow Us</div>
              <div class="social social-sm social-inline">
                <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                <a class="social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
              </div>
            </div>
          </div>

        </div>

      </section>

    </main><!-- /.main-content -->


    <!-- Footer -->
    <?php include 'footer.php';?>


    <!-- Scripts -->
    <script src="assets/js/page.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script type="text/javascript">

      // Callback functions for Block #1
      //
      function onSuccessCallback() {
        console.log('The email sent successfully.');
      }

      function onErrorCallback(err) {
        console.log('An error occured while sending the email. The error message is: ' + err);
      }

    </script>

  </body>
</html>
