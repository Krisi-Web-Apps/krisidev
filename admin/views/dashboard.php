<?php

$site_lang = "bg";
$page_title = "Табло";
?>

<?php require "inc/header.php" ?>
<?php require "inc/offcanvas.php" ?>

<div class="container mx-auto">
  <div class="d-flex justify-content-between align-items-center py-4">
    <h1>
      <span>
        <?= $page_title ?>
      </span>
    </h1>
  </div>
</div>
<div class="container mx-auto">
  <?php require "../messages/success.php" ?>
  <?php require "../messages/error.php" ?>
</div>

<?php require "inc/footer.php" ?>