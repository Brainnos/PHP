<?php $countrys = get_country(5); 
$first_line = $countrys[0];
?>

<table class="table table-hover">
  <thead>
    <tr>
      <?php foreach($first_line as $key => $value) : ?>
      <th><?php echo $key; ?></th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
  <?php foreach($countrys as $country) : ?>
      <tr>
        <td><?php echo $country["Name"]?></td>
        <td><?php echo $country["Continent"]?></td>
        <td><?php echo $country["Population"]?></td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>
