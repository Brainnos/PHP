<?php $cities = get_cities(5); 
$first_line = $cities[0];
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
    <?php foreach ($cities as $city) : ?>
      <tr>
        <?php foreach($city as $value) : ?>
        <td><?php echo $value; ?></td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
