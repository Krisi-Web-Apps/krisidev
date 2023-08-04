<?php

$site_lang = "bg";
$page_title = "Табло";

global $db;
$total_pages = $db->select("SELECT COUNT(*) AS total_pages FROM `pages`;")[0]["total_pages"];
$total_users = $db->select("SELECT COUNT(*) AS total_users FROM `users`;")[0]["total_users"];
$total_layouts = $db->select("SELECT COUNT(*) AS total_layouts FROM `layouts`;")[0]["total_layouts"];
$total_email_messages = $db->select("SELECT COUNT(*) AS total_email_messages FROM `email_messages`;")[0]["total_email_messages"];
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

  <ul class="list-dict-none p-0 row">
    <li class="col-12 col-sm-6 col-md-4 col-lg-3">
      <a href="/admin/pages">
        <div class="bg-primary py-4 px-4 px-lg-5 rounded shadow mb-4">
          <h2 class="text-white text-center"><?= $total_pages ?></h2>
          <p class="text-white text-center mb-0">Страници</p>
        </div>
      </a>
    </li>
    <li class="col-12 col-sm-6 col-md-4 col-lg-3">
      <a href="/admin/users">
        <div class="bg-primary py-4 px-4 px-lg-5 rounded shadow mb-4">
          <h2 class="text-white text-center"><?= $total_users ?></h2>
          <p class="text-white text-center mb-0">Потребители</p>
        </div>
      </a>
    </li>
    <li class="col-12 col-sm-6 col-md-4 col-lg-3">
      <a href="/admin/layouts">
        <div class="bg-primary py-4 px-4 px-lg-5 rounded shadow mb-4">
          <h2 class="text-white text-center"><?= $total_layouts ?></h2>
          <p class="text-white text-center mb-0">Лейаути</p>
        </div>
      </a>
    </li>
    <li class="col-12 col-sm-6 col-md-4 col-lg-3">
      <a href="/admin/email_messages">
        <div class="bg-primary py-4 px-4 px-lg-5 rounded shadow">
          <h2 class="text-white text-center"><?= $total_email_messages ?></h2>
          <p class="text-white text-center mb-0">Имейл съобщения</p>
        </div>
      </a>
    </li>
  </ul>

</div>

<?php require "inc/footer.php" ?>

<style>
  .list-dict-none {
    list-style-type: none;
  }
</style>