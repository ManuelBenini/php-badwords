<?php

  $testo = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis laudantium expedita, vitae ipsum assumenda quo sit doloribus iure beatae quasi laboriosam pariatur tempora fugiat earum repellat hic eos similique sint unde ipsa eius ea repellendus. Laboriosam nemo totam voluptas rerum, eius quasi architecto eveniet nesciunt nisi quam aliquam officia excepturi, velit eaque! Modi, totam? Architecto quam recusandae facilis eius reiciendis. Molestiae recusandae quisquam suscipit laudantium tempore amet aliquid magnam quo obcaecati distinctio quibusdam placeat perspiciatis, nesciunt esse dignissimos inventore. Quod itaque reprehenderit cumque id reiciendis repudiandae voluptatum, animi dignissimos deserunt corporis quia, quisquam, voluptatem esse repellendus. Sunt, iure itaque autem nam sapiente adipisci consequatur quam cupiditate dolor veniam rem ex vel modi error inventore omnis quaerat quia earum labore necessitatibus commodi exercitationem quas repellat! Consequuntur earum facilis exercitationem qui, placeat laborum, esse molestiae ea assumenda dolorum, hic doloremque repudiandae maiores optio. Dolor omnis aperiam temporibus impedit iure consequatur accusantium minima quam incidunt unde quo, quia aspernatur, perspiciatis reprehenderit veniam qui exercitationem. Natus dolorem quae sequi officia incidunt placeat molestiae asperiores fuga repellendus magnam, ipsam vel qui iure et modi facere voluptatem non veritatis illum facilis, ipsa fugit earum omnis! Ex fugit dignissimos facilis nostrum obcaecati repellendus eaque. Exercitationem, debitis autem.';
  
  
  $parola_da_censurare = $_GET["censurare"];
  $testo_censurato = str_ireplace($parola_da_censurare, '***', $testo);

  //Censurare il testo ma non rimpiazzandolo, metodo 1
  $testo_censurato_non_rimpiazzato = str_ireplace($parola_da_censurare, '', $testo);

  //Metodo 2
  $array_testo_censurato = explode('***', $testo_censurato);
  $str_testo_censurato = implode('', $array_testo_censurato);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

  <h2>Paragrafo:</h5>
  <p> <?php echo $testo; ?> </p>
  <h2>Lunghezza paragrafo: <?php echo strlen($testo); ?></h2>

  <hr>

  <h2>Paragrafo censurato:</h5>
  <p> <?php echo $testo_censurato; ?> </p>
  <h2>Lunghezza paragrafo censurato: <?php echo strlen($testo_censurato); ?></h2>

  <hr>

  <h2>Paragrafo con parola censurata non rimpiazzata:</h5>
  <p> <?php echo $testo_censurato_non_rimpiazzato; ?> </p>
  <h2>Lunghezza paragrafo censurato: <?php echo strlen($testo_censurato_non_rimpiazzato); ?></h2>

  <hr>

  <h2>Paragrafo con explode ed implode:</h5>
  <p> <?php echo $str_testo_censurato; ?> </p>
  <h2>Lunghezza paragrafo: <?php echo strlen($str_testo_censurato); ?></h2>

  <hr>

  <h2>Paragrafo censurato:</h5>
  <p> <?php echo $testo_censurato; ?> </p>
  <h2>Lunghezza paragrafo censurato con sottrazione: <?php echo strlen($testo_censurato) - (substr_count($testo, $parola_da_censurare) * 3); ?></h2>
  
</body>
</html>