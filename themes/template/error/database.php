<html>
<head>
<meta charset="UTF-8">
  <title><?php echo $title;?> - Ocorreu um erro</title>
  <meta name="description" content="<?php echo $title;?>">
  <meta name="keywords" content="<?php echo $keywords;?>">
  <meta name="author" content="kaway404">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/assets/css/style.css?version=1" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
</head>

<body>

<div class="background"></div>
<div class="overlay">
    <div class="error_get">
        <h1>Ocorreu um erro ao conectar ao banco de dados</h1>
        <h2><?php echo $e->getMessage();?></h2>
    </div>
</div>


</body>

</html>