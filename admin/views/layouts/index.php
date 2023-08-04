<?php

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
  require "code.php";
}

$site_lang = "bg";
$page_title = "Лейаути";

global $db;
$layouts = $db->select("SELECT * FROM `layouts`;");
?>
<?php require "inc/header.php" ?>
<?php require "inc/offcanvas.php" ?>

<div class="container mx-auto">
  <div class="d-flex justify-content-between align-items-center py-4">
    <h1>
      <span>
        <?= $page_title ?>
      </span>
      <?php if (count($layouts)): ?>
        <span>(
          <?= count($layouts) ?>)
        </span>
      <?php endif; ?>
    </h1>
    <a href="layouts/create" class="btn btn-primary">Създаване на нов</a>
  </div>

  <?php require "../messages/success.php" ?>
  <?php require "../messages/error.php" ?>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Заглавие</th>
        <th scope="col">Слъг</th>
        <th scope="col">Място</th>
        <th scope="col">Действия</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($layouts)): ?>
        <?php foreach ($layouts as $layout): ?>
          <tr>
            <th scope="row">
              <?= $layout["title"] ?>
            </th>
            <td>
              <?= $layout["slug"] ?>
            </td>
            <td>
              <?= $layout["location"] ?>
            </td>
            <td>
              <div class="dropdown">
                <button class="border rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-ellipsis"></i>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <ul class="p-0">
                      <?php if ($_SESSION["role_as"] == "admin"): ?>
                        <li class="dropdown-item">
                          <a href="/admin/layouts/edit/<?= $layout["id"] ?>" class="dropdown-item">Редактиране</a>
                        </li>
                      <?php endif; ?>
                      <?php if ($_SESSION["role_as"] == "admin"): ?>
                        <li class="dropdown-item">
                          <form method="post">
                            <input type="hidden" name="id" value="<?= $layout["id"] ?>">
                            <button type="submit" name="type-form" value="delete"
                              class="dropdown-item text-danger">Изтриване</button>
                          </form>
                        </li>
                      <?php endif; ?>
                    </ul>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td class="text-center" colspan="7">Все още няма създадени записи.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>

</div>

<?php require "inc/footer.php" ?>
