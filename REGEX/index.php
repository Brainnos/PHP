<?php

$str = "http://www.siteduzero.com/images/super_image2.jpg";
$regex = '#http://[a-z0-9._/-]+#i';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Expressions régulières</title>
</head>

<body>
  <div class="container vh-100 d-flex flex-column justify-content-center">
    <p class="display-3 text-center py-5"><?php echo preg_replace($regex, '<a href="$0">$0</a>', $str);
; ?></p>
    <span class="text-center d-block py-5">preg_match('<?php echo $regex;?>')</span>
    <?php if ($match): ?>
      <h2 class="display-4 text-success text-center py-5">It's a match!</h2>
      <?php else: ?>
        <h2 class="display-4 text-danger text-center py-5">Non.</h2>
    <?php endif; ?>


  </div>
</body>

</html>
