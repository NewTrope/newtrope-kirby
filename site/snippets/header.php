  <!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="<?php echo $site->description()->html() ?>">
      <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

      <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

      <!-- Bootstrap core CSS -->
      <?php echo css('assets/css/bootstrap.min.css') ?>
      <?php echo css('assets/css/main.css') ?>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <script type="text/javascript">
      var jumboHeight = $('.jumbotron').outerHeight();
      function parallax(){
          var scrolled = $(window).scrollTop();
          $('.bg').css('height', (jumboHeight-scrolled) + 'px');
      }

      $(window).scroll(function(e){
          parallax();
      });
      </script>

    </head>
    <body>
