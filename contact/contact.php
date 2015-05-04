<!DOCTYPE html>
<html>
  <head>
    <title>Apparatus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default margin-bottom-none" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span></span></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://www.designapparat.us">Home</a></li>
        <li><a href="http://www.designapparat.us/work.html">Work</a></li>
        <li><a href="http://designapparat.us/blog/">Blog</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
    </nav>  
    <div class="jumbotron max-height">
      <div class="container">        
        <h1 class="text-center">Thank You</h1><br />
        <p class="text-center">we will be in touch as soon and we look forward to working with you</p>
      </div>  
    </div>


    <?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $formcontent = "
    Name: $name \n
    Email: $email \n
    Message: $message \n";


    mail('Mike@designapparat.us', 'New Contact Message', $formcontent);

?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

