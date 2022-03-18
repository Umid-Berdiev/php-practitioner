<?php require 'partials/head.php';?>

<ul>
  <?php foreach ($tasks as $key => $task): ?>
    <li>
      <?php if ($task->completed): ?>
        <strike><?=$task->description;?></strike>
      <?php else: ?>
        <?=$task->description;?>
      <?php endif;?>
    </li>
  <?php endforeach;?>
</ul>

<?php require 'partials/footer.php';?>
