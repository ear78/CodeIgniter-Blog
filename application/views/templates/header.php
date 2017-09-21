<html>
    <head>
        <title>CI Blog</title>

        <!-- BOOTSTRAP STYLESHEET -->
        <link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">

        <!-- MAIN STYLESHEET CSS -->
        <link rel="stylesheet" href="<? echo base_url(); ?>assets/css/styles.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>">CI Blog</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<? echo base_url(); ?>about">About</a></li>
                <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                <li><a href="<?php echo base_url();?>posts">Blog</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
      </nav>

      <div class="container">
