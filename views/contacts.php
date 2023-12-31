<?php

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
  require "code.php";
}

global $db;
$params = array(":slug" => "contacts");
$page = $db->select("SELECT * FROM `pages` WHERE slug = :slug", $params)[0];

$params = array(":page_id" => $page["id"]);
$pageContents = $db->select("SELECT * FROM `manage_page_content` WHERE page_id = :page_id", $params);

$site_lang = $page["lang"];
$page_title = $page["meta_title"];
$page_desc = $page["meta_description"];
$meta_keywords = $page["meta_keywords"];
?>
<?php require "inc/header.php" ?>

<header>
  <?php require "inc/navbar.php" ?>
  <div class="container">
    <div class="bg-light-gray text-center p-lg-5 p-md-4 p-sm-3 p-2">
      <h1 class="h1 mb-0">
        <?= $page["title"] ?>
      </h1>
    </div>
    <div class="text-center">
      <?= html_entity_decode($pageContents[0]["text"]) ?>
    </div>
  </div>
</header>

<main>
  <div class="bg-light-gray p-lg-5 p-md-4 p-sm-3 p-2">
    <div class="container">
      <div>
        <div class="py-4">
          <?= html_entity_decode($pageContents[1]["text"]) ?>
        </div>
        <ul class="row p-0">
          <li class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded text-center">
              <i class="fa-solid fa-phone h1 text-dark"></i>
              <div>
                <a class="text-decoration-none" href="tel:0899718824">0899 718 824</a>
              </div>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded text-center">
              <i class="fa-solid fa-envelope h1 text-dark"></i>
              <div>
                <a class="text-decoration-none" href="mailto:krisi.199898@gmail.com">krisi.199898@gmail.com</a>
              </div>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded text-center">
              <i class="fa-brands fa-viber h1 text-dark"></i>
              <div>
                <a class="text-decoration-none" href="viber:0899718824">0899 718 824</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="mt-4">
        <?php require "messages/success.php" ?>
        <?php require "messages/error.php" ?>
      </div>
      <form method="post" class="p-lg-5 p-md-4 p-3 bg-white rounded">
        <div class="form-group mb-4">
          <label class="form-label" for="fullname">Име и фамилия</label>
          <input type="text" class="form-control" id="fullname" name="fullname"
            placeholder="Пример: Кристиан Костадинов">
        </div>
        <div class="form-group mb-4">
          <label class="form-label" for="city">Град</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Пример: Дупница">
        </div>
        <div class="form-group mb-4">
          <label class="form-label" for="phone">Телефон</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="Пример: 0899 718 824">
        </div>
        <div class="form-group mb-4">
          <label class="form-label" for="email">E-mail</label>
          <input type="email" class="form-control" id="email" name="email"
            placeholder="Пример: mail@krisidev.com / krisi.199898@gmail.com">
        </div>
        <div class="form-group mb-4">
          <label class="form-label" for="subject">Тема</label>
          <input type="text" class="form-control" id="subject" name="subject"
            placeholder="Пример: Изработка на уеб сайт">
        </div>
        <div class="form-group mb-4">
          <label class="form-label" for="body">Съобщение</label>
          <textarea class="form-control" id="body" name="body" rows="10"
            placeholder="Опишете вашата идея тук..."></textarea>
        </div>
        <div class="text-center">
          <button type="submit" name="type-form" value="send_email" title="Изпращане на съобщението"
            class="btn btn-primary">Изпращане на съобщението</button>
        </div>
      </form>
    </div>
  </div>
</main>

<?php require "inc/footer.php" ?>
