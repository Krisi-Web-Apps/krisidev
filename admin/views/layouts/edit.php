<?php

require "../middlewares/is-admin.php";

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
  require "code.php";
}

$id = $_SESSION["params"]["id"];

global $db;
$params = array(":id" => $id);
$layout = $db->select("SELECT * FROM `layouts` WHERE id = :id;", $params);

if ($layout) {
  $layout = $layout[0];
} else {
  $_SESSION["error_message"] = "Invalid layout id.";
  header("Location: /admin/layouts");
  exit;
}

$site_lang = "bg";
$page_title = "Редактиране на лейаут";
?>

<?php require "inc/header.php" ?>
<?php require "inc/offcanvas.php" ?>

<div class="container mx-auto">
  <h1 class="text-center my-4"><?= $page_title ?></h1>
  <div class="bg-white mx-4 mb-4 p-4 p-sm-5 border shadow rounded">
    <?php require "../messages/success.php" ?>
    <?php require "../messages/error.php" ?>

    <form method="post">
      <div class="mb-3">
        <label for="title" class="form-label">Заглавие</label>
        <input type="text" class="form-control" name="title" id="title" value="<?= $layout["title"] ?>" autofocus required>
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Слъг</label>
        <input type="text" class="form-control" name="slug" id="slug" value="<?= $layout["slug"] ?>">
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Място</label>
        <select name="location" id="location" class="form-control">
          <option value="header" <?= $layout["location"] == "header" ? "selected" : null ?>>Header</option>
          <option value="footer" <?= $layout["location"] == "footer" ? "selected" : null ?>>Footer</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Съдържание</label>
        <textarea class="form-control" name="content" id="content" rows="10"><?= $layout["content"] ?></textarea>
      </div>
      <input type="hidden" name="id" value="<?= $layout["id"] ?>">
      <div class="d-flex align-items-center gap-4 mt-4">
        <div class="text-center">
          <button name="type-form" value="edit" type="submit" class="btn btn-primary"><?= $page_title ?></button>
          <a href="/admin/layouts" class="btn btn-warning">Преглед на всички</a>
        </div>
      </div>
    </form>

  </div>
</div>

<?php require "inc/footer.php" ?>
