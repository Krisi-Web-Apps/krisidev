<?php

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
  require "code.php";
}

$site_lang = "bg";
$page_title = "Имейл съобщения";

global $db;

$email_messages = $db->select("SELECT * FROM `email_messages`;");
?>
<?php require "inc/header.php" ?>
<?php require "inc/offcanvas.php" ?>

<div class="container mx-auto">
  <div class="d-flex justify-content-between align-items-center py-4">
    <h1>
      <span>
        <?= $page_title ?>
      </span>
      <?php if (count($email_messages)): ?>
        <span>(
          <?= count($email_messages) ?>)
        </span>
      <?php endif; ?>
    </h1>
  </div>

  <?php require "../messages/success.php" ?>
  <?php require "../messages/error.php" ?>

  <div class="accordion" id="email-templates">
    <?php if (count($email_messages)): ?>
      <?php foreach ($email_messages as $email_message): ?>
        <div class="accordion-item mb-4">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#email-template-collapse-<?= $email_message["id"] ?>" aria-expanded="false"
              aria-controls="email-template-collapse-<?= $email_message["id"] ?>">
              <?= $email_message["subject"] ?>
            </button>
          </h2>
          <div id="email-template-collapse-<?= $email_message["id"] ?>" class="accordion-collapse collapse">
            <div class="accordion-body">
              <?= $email_message["body"] ?>
              <ul class="mt-4">
                <li>
                  <span class="fw-bold">Телефон:</span>
                  <span>
                    <?= $email_message["phone"] ?>
                  </span>
                </li>
                <li>
                  <span class="fw-bold">E-mail:</span>
                  <span>
                    <?= $email_message["email"] ?>
                  </span>
                </li>
                <li>
                  <span class="fw-bold">Име и фамилия:</span>
                  <span>
                    <?= $email_message["fullname"] ?>
                  </span>
                </li>
                <li>
                  <span class="fw-bold">Град:</span>
                  <span>
                    <?= $email_message["city"] ?>
                  </span>
                </li>
              </ul>
              <div>
                <span class="fw-bold">Изпратено на:</span>
                <span>
                  <?= formatCreatedAt($email_message["created_at"]) ?>
                </span>
              </div>
              <div>
                <?= getTimeElapsed($email_message["created_at"]) ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

</div>

<?php require "inc/footer.php" ?>