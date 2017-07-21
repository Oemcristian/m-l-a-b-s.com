<!--
Desenvolvido Por: mLabs
-->
<?php
$url = "http://m-l-a-b-s.com/";
$title = "mLabs";

$var = array(
        "1" => array(
                  "titulo" => "Filipe",
                  "image" => "https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/13912896_159472041154462_5560874146251098900_n.jpg?oh=3a6c35356bf39c7365401d7997fad4dc&oe=59F8549B"
                  ),
        "2" => array(
                  "titulo" => "Gizelly",
                  "image" => "https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/18010523_1012983425498197_5338880774815176557_n.jpg?oh=e6ec90379f59fb16e9e338fc35de1272&oe=59FF013B"
                  ),
        "3" => array(
                  "titulo" => "Cristian",
                  "image" => "https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/18222212_598878743650726_3536867533783783844_n.jpg?oh=b3385f2e92d8d8cdb18d61db2c902da9&oe=5A01C9E7"
                  ),
        );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://www.mlabs.com.br/';
  },100);
</script>
