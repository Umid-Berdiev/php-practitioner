<?php require 'partials/head.php'; ?>

<h1>Submit your name</h1>

<form action="/names" method="post">
  <input type="text" name="username" />
  <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php'; ?>