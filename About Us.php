<?php include 'header.php'; ?>

<html>
<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="css/font-awesome.css"/>
  <link href="css/custom.css" rel="stylesheet">
  <script src="js/validator.js" type="text/javascript"></script>
  <script src="js/contact.js" type="text/javascript"></script>

  <link href="images/toy-universe-logo.png" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">
  <script src="js/jquery-3.1.1.js"/></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">

    <div class="row">

      <div class="col-lg-8 col-lg-offset-2">

        <h1 align="center"> Contact Us Form </h1>

         <form id="contact-form" method="post" action="contact.php" >

          <div class="messages"></div>

          <div class="controls">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_name">Firstname *</label>
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_lastname">Lastname *</label>
                  <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_email">Email *</label>
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_phone">Phone</label>
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="form_message">Message *</label>
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Send message">
              </div>
            </div>
            
          </div>

        </form>

      </div><!-- /.8 -->

    </div> <!-- /.row-->

  </div> <!-- /.container-->
<div class="copyright">
    <div class="container">
        <p role="contentinfo" class="text-center">&copy; 2016 Toys Universe. All Rights Reserved.
    </div>
</div>
</p>
</div>
</div>


  
  
</body>
</html>
