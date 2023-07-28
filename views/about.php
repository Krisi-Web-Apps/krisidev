<?php

global $db;
$params = array(":slug" => "about");
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
  <div class="bg-light-gray text-center p-5">
    <div class="container">
      <h1 class="h1"><?= $page["title"] ?></h1>
      <?= html_entity_decode($pageContents[0]["text"]) ?>
    </div>
  </div>
</header>

<main>
  <div class="container">
    <section>
      <div class="text-center">
        <button class="btn btn-primary mb-4 w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-section-1"
        aria-controls="offcanvas-section-1">Мoйте умения</button>
      </div>
      <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvas-section-1"
        aria-labelledby="offcanvas-section-1Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvas-section-1Label">Мoйте умения</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <?= html_entity_decode($pageContents[1]["text"]) ?>
        </div>
      </div>
    </section>
  </div>
</main>

<?php require "inc/footer.php" ?>