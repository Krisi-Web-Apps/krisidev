<?php

global $db;
$params = array(":slug" => "faq");
$page = $db->select("SELECT * FROM `pages` WHERE slug = :slug", $params)[0];

$site_lang = $page["lang"];
$page_title = $page["meta_title"];
$page_desc = $page["meta_description"];
$meta_keywords = $page["meta_keywords"];
?>
<?php require "inc/header.php" ?>

<header>
  <?php require "inc/navbar.php" ?>
  <div class="bg-light-gray text-center p-lg-5 p-md-4 p-sm-3 p-2">
    <div class="container">
      <h1 class="h1">
        <?= $page["title"] ?>
      </h1>
    </div>
  </div>
</header>

<main>
  <div class="container mb-4">
    <div class="accordion accordion-flush" id="accordion">
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-1" aria-expanded="false" aria-controls="flush-collapse-1">
            Какво предлагате?
          </button>
        </h3>
        <div id="flush-collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Ние предоставям услуги по уеб дизайн, програмиране и разработка на уеб сайтове за клиенти от различни
            индустрии.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-2" aria-expanded="false" aria-controls="flush-collapse-2">
            Каква е процедурата за започване на проект с вас?
          </button>
        </h3>
        <div id="flush-collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            За да започнем проект с вас, първо ще проведем среща или разговор, за да разберем вашите изисквания и нужди.
            След това ще предоставим предложение и след одобрение ще започнем работа по проекта.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-3" aria-expanded="false" aria-controls="flush-collapse-3">
            Какви са цените на вашите услуги?
          </button>
        </h3>
        <div id="flush-collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Цените на услугите варират в зависимост от сложността на проекта и специфичните изисквания на клиента.
            Моля, свържете се с мен за персонализирано предложение.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-4" aria-expanded="false" aria-controls="flush-collapse-4">
            Колко време е необходимо за завършване на проект?
          </button>
        </h3>
        <div id="flush-collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Времето за завършване на проект зависи от обема и сложността му. Обикновено предоставям приблизително време
            за изпълнение при предоставянето на оферта.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-5" aria-expanded="false" aria-controls="flush-collapse-5">
            Предлагате ли поддръжка след завършване на проекта?
          </button>
        </h3>
        <div id="flush-collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Да, предлагаме поддръжка и поддръжки пакети след завършване на проекта. Така можем да осигурим непрекъсната
            функционалност и сигурност на вашия уебсайт.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-6" aria-expanded="false" aria-controls="flush-collapse-6">
            Какви са начините на плащане, които приемате?
          </button>
        </h3>
        <div id="flush-collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Приемам плащания чрез банков превод, кредитни карти, наложен платеж, Revolut и EasyPay.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-7" aria-expanded="false" aria-controls="flush-collapse-7">
            Имате ли опит с работа с клиенти от определена индустрия?
          </button>
        </h3>
        <div id="flush-collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Да, имам опит с клиенти от различни индустрии, включително технологии, строителство, туризъм, електронна
            търговия и други.
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require "inc/footer.php" ?>