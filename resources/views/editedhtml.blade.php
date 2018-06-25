<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/editor.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/narrow-jumbotron.css" rel="stylesheet">
  </head>

  <body>
  </body>

  <script src="js/jquery.min.js"></script>

  <script type="text/javascript">
    var html = {!! json_encode($html) !!};

    $(function(){
      $('body').html(html.html);
    });
    // console.log(html.html);

  </script>
</html>
