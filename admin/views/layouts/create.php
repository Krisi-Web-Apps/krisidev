<?php

require "../middlewares/is-admin.php";

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
  require "code.php";
}

$site_lang = "bg";
$page_title = "Създаване на лейаут";
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
        <input type="text" class="form-control" name="title" id="title" value="<?= isset($title) ? $title : null ?>" autofocus required>
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Слъг</label>
        <input type="text" class="form-control" name="slug" id="slug" value="<?= isset($title) ? $title : null ?>">
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Място</label>
        <select name="location" id="location" class="form-control">
          <option value="header" selected>Header</option>
          <option value="footer">Footer</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Съдържание</label>
        <textarea class="form-control" name="content" rows="10" id="content"><?= isset($content) ? $content : null ?></textarea>
      </div>
      <div class="d-flex align-items-center gap-4 mt-4">
        <div class="text-center">
          <button name="type-form" value="create" type="submit" class="btn btn-primary"><?= $page_title ?></button>
          <a href="/admin/layouts" class="btn btn-warning">Преглед на всички</a>
        </div>
      </div>
    </form>

  </div>
</div>

<?php require "inc/footer.php" ?>
