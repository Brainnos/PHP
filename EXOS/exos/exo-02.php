<?php
$continents = [
  'Europe',
  'North America',
  'Asia',
  'Africa',
  'South America',
  'Oceania',
  'Antartica'
];
$continent = get_continent_pop($_GET["continent"]);

?>
<form method="get">
  <div class="form-row align-items-center">
    <div class="col-3">
      <div class="form-group">
        <label for="continent">Continent</label>
        <select class="form-control" id="continent" name="continent">
          <?php foreach ($continents as $key => $value) : ?>
            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
          <?php endforeach; ?>
        </select>
        <input type="submit" value="Valider">
      </div>
    </div>
    <div class="col">
      <p class="text-center">La population totale de <?php switch($_GET["continent"])
      {
        case "Europe":
          echo "L'Europe";
        break;
        case "North America":
          echo "L'amérique du Nord";
        break;
        case "Asia":
          echo "L'asie";
        break;
        case "Africa":
          echo "L'afrique";
        break;
        case "South America":
          echo "L'amérique du sud";
        break;
        case "Oceania":
          echo "L'océanie";
        break;
        case "Antartica":
          echo "L'antarctique";
        break;
      }
      ?> est de <?php echo number_format($continent["Population"], 2, ",", " ")  ?>  millions d'habitants. </p>
    </div>
  </div>
</form>
