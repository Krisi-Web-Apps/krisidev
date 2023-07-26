<?php

global $db;
$params = array(":slug" => "about");
$page = $db->select("SELECT * FROM `pages` WHERE slug = :slug", $params)[0];

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
      <h1>За мен</h1>
      <p>
        Аз съм опитен уеб програмист и разработчик с фокус върху създаването на уеб сайтове и уеб приложения. През
        годините
        придобих богат опит в разработката на функционални, интуитивни и съвременни уеб решения, които отговарят на
        нуждите и изискванията на клиентите.
      </p>
      <p>
        Моите умения включват владеене на различни програмни езици и технологии, включително HTML, CSS, JavaScript, PHP
        и
        други. Съчетавам тези знания със съвременни рамки за уеб разработка, като например React или Vue.js за да
        осигуря максимална ефективност и възможности за персонализация.
      </p>
      <p>
        Проектирам и разработвам уеб сайтове, които са отзивчиви и съвместими с различни устройства, осигурявайки
        отлично потребителско изживяване както на настолни компютри, така и на мобилни устройства. Също така, се стремя
        да осигурявам сигурност и оптимизация на уеб сайтовете, за да гарантирам бързо зареждане и защита от потенциални
        заплахи.
      </p>
      <p>
        Моята страст към уеб разработката ме поддържа винаги в крак с последните тенденции и иновации в индустрията.
        Готов съм да сътруднича с клиенти и екипи за създаването на уеб решения, които не само изглеждат впечатляващо,
        но и предоставят високофункционални възможности.
      </p>
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
          <ul>
            <li>
              <span class="text-bold">JavaScript</span>
              <p>
                Професионален опит в работата с JavaScript, използвайки съвременни стандарти и популярни библиотеки като
                React и Vue.js. Владея познания за асинхронно програмиране и взаимодействие с API.
              </p>
            </li>
            <li>
              <span class="text-bold">Frontend разработка</span>
              <p>
                Експерт в създаването на динамични и отзивчиви уеб интерфейси с HTML, CSS и JavaScript. Придържам се към
                най-добрите практики в дизайн и разработка, за да осигуря потребителско изживяване от високо качество.
              </p>
            </li>
            <li>
              <span class="text-bold">Backend разработка</span>
              <p>
                Знам PHP и познавам разработката на уеб сървъри с използването на Node.js и Express.js. Проектирам и
                имплементирам структурирани API за обмен на данни между фронтенд и бекенд.
              </p>
            </li>
            <li>
              <span class="text-bold">Бази данни</span>
              <p>
                Опит в работата с релационни бази данни като MySQL и MongoDB, както и с NoSQL бази данни като
                MongoDB. Умея да проектирам и оптимизирам бази данни спрямо нуждите на проекта.
              </p>
            </li>
            <li>
              <span class="text-bold">Сигурност и Защита</span>
              <p>
                Придавам голямо значение на сигурността на уеб сайтовете и приложенията. Знам защитни мерки и практики,
                за да предпазя от потенциални атаки и заплахи.
              </p>
            </li>
            <li>
              <span class="text-bold">Контрол на версии (Git)</span>
              <p>
                Опитен с използването на системи за контрол на версиите като Git. Работя ефективно в екип и сътруднича
                активно с други разработчици.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</main>

<?php require "inc/footer.php" ?>