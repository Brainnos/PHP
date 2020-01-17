<?php $articles = get_articles(5); 
$first_line = $articles[0];
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
    <?php foreach ($articles as $article) : ?>
      <tr>
        <td><?php echo $article['id']; ?></td>
        <td><?php echo $article['titre']; ?></td>
        <td><?php echo substr($article['corps'], 0, 120); ?></td>
        <td><?php echo $article['date'];?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
