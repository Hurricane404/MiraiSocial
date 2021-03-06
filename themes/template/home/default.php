<html>
<head>
<meta charset="UTF-8">
  <title><?php echo $title;?></title>
  <meta name="description" content="<?php echo $title;?>">
  <meta name="keywords" content="<?php echo $keywords;?>">
  <meta name="author" content="kaway404">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/assets/css/style.css?version=1" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <script src="/assets/js/pace.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

<div class="center" style="height: 100%;">

<div class="friends" style="color: var(--white);overflow-x: hidden; overflow-y: auto;top: 0px; height: 100%; background-image: url('https://i.imgur.com/XXI3y4g.jpg');">
<div class="opacity" style="position: fixed;background: linear-gradient(0deg, rgba(0,0,0,0) 0%, rgb(49, 58, 135) 100%); transform: scale(1.4); "></div>
<div class="opacitybottom" style="position: fixed; background: linear-gradient(0deg, rgb(49, 58, 135) 0%, rgba(0,0,0,0) 100%); transform: scale(1.4); "></div>
<div style="padding: 50px; position: relative; z-index: 10;">
<h1 class="logo" style="position: fixed; z-index: 100000;"><?php echo $title;?></h1>

<?php
for($i = 1; $i <= 4; $i++){
echo '<br>';
}
?>

<h2 style="position: relative;"><?php echo $title;?> é uma rede social tão facil de usar, que se torna dificil de se explicar!</h2>

<div style="position: relative; white-space: nowrap; overflow-x: auto;">
<?php for($i = 1; $i <= 20; $i++){?>
<div class="post_preview">
    <div class="overlay"></div>
    <img src="https://images.unsplash.com/photo-1496284045406-d3e0b918d7ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
    <h1 style="font-size: 16px; position: absolute; bottom: 10px; z-index: 10; left: 10px;">Publicado por <span style="color: var(--yellow);">@kaway404</span></h1>
</div>
<?php } ?>
</div>

<?php
for($i = 1; $i <= 5; $i++){
echo '<br>';
}
?>

<div class="controle">
<h2 style="z-index: 5; background: rgba(0,0,0,.90); padding-left: 40px;">É você no controle, controle seu feed de nóticias de acordo com seus gostos</h2>

<a href="/login"><button>Fazer o login ou faça o cadastro</button></a>

</div>

<div class="footer"></div>

</div>



</div>

</div>

<script src="/assets/js/default.js?v=1"></script>

</body>

</html>