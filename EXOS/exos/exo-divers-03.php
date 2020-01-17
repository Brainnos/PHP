<?php
function calcul_temps($distance, $vitesse)
{
  if (intval($distance) && intval($vitesse))
  {
  $temps = ($distance/$vitesse)*60;
  $heures = floor($temps/60);
  $minutes = $temps % 60;

  if ($heures > 1){
    $h = $heures . " heures";
  } elseif($heures == 0){
    $h = '';
  } else {
    $h = $heures . " heure";
  }

  if($minutes > 1) {
    $m = $minutes . " minutes";
  } elseif($minutes == 0){
    $m = '';
  } else {
    $m = $minutes . " minute";
  }

  if ($h !== '' && $m !== ''){
    return $h.' et '.$m;
  }
  return $h.' '.$m;
  }
}
?>


<form method="get">
  <div class="form-row align-items-center">
    <div class="col-2">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="vitesse" id="vitesse" name="vitesse">
      </div>
    </div>
    <div class="col-2">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="distance" id="distance" name="distance">
      </div>
    </div>
    <div class="col-2">
      <button type="submit" class="btn btn-primary mb-3">Calculer</button>
    </div>
    <div class="col">
      <p class="text-center"><?php echo calcul_temps($_GET["distance"], $_GET["vitesse"]);?></p>
    </div>
  </div>
</form>