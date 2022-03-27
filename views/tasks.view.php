<?php require 'partials/head.php'; ?>

<h1>Create new task</h1>

<form action="/tasks" method="post">
  <input type="text" name='description' />
  <button type="submit">create</button>
</form>

<ul>
  <?php foreach ($tasks as $key => $task) : ?>
    <li>
      <?php if ($task->completed) : ?>
        <strike><?= $task->description; ?></strike>
      <?php else : ?>
        <?= $task->description; ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>

<?php require 'partials/footer.php'; ?>