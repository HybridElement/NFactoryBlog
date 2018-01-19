<?php
session_start();
include_once ("./functions/callPage.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="./assets/css/screen.css" type="text/css" rel="stylesheet" />
  <title>Blog</title>

  <!-- Bootstrap CSS -->
  <link href="./assets/css/bootstrap.css" rel="stylesheet">
  <script type="text/javascript" src="./assets/js/functions.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
  rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript" src="./assets/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: 'textarea#article'
    });
  </script>
</head>

<body>
<div id="container">
<?php include_once("./include/header.php");?>
<main>
<?php
callPage();
?>
</main>
<?php include_once("./include/footer.php");?>
</div>
</body>
</html>