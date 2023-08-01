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
  <div class="container text-center">
    <div class="bg-light-gray p-lg-5 p-md-4 p-sm-3 p-2">
      <h1 class="h1 mb-0">
        <?= $page["title"] ?>
      </h1>
    </div>
    <?= html_entity_decode($pageContents[0]["text"]) ?>
  </div>
</header>

<main>
  <div class="container">
    <section>
      <div class="text-center p-lg-5 p-md-4 p-sm-3 p-2">
        <button class="btn btn-primary mb-4 w-100" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvas-section-1" aria-controls="offcanvas-section-1">Мoите умения</button>
      </div>
      <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvas-section-1"
        aria-labelledby="offcanvas-section-1Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvas-section-1Label">Мoите умения</h5>
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