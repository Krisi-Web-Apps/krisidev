<?php

global $db;
$params = array("slug" => "/");
$page = $db->select("SELECT * FROM `pages` WHERE slug = :slug;", $params)[0];

$site_lang = "bg";
$page_title = $page["meta_title"];
$page_desc = $page["meta_description"];
$meta_keywords = $page["meta_keywords"];
?>
<?php require "inc/header.php" ?>

<header class="bg-dark">
  <?php require "inc/navbar.php" ?>
  <div class="home hero container mx-auto">
    <div class="d-flex flex-column align-items-center">
      <h1 class="text-white text-center my-4">
        <?= $page["title"]; ?>
      </h1>
      <img src="/assets/images/Kristian Kostadinov.png" alt="Кристиан Костадинов">
      <div class="text-center mt-4 bg-white p-4">
        <p>Здравейте! Аз съм професионален <strong>уеб програмист</strong>, специализиран в изработка на иновативни
          <strong>уеб сайтове и приложения</strong>.
          Съчетавам техническо майсторство с креативен подход, за да предоставям на клиентите си уникални дигитални
          решения. С многогодишен опит и страст към програмирането, стремя се да надминавам очакванията и да създавам
          ефективни, потребителски приятни и мощни онлайн платформи. От прости персонални уеб сайтове до сложни бизнес
          приложения - моят опит и отдаденост дават живот на визиите на моите клиенти. Представете вашата идея, и аз ще
          я превърна в реалност, създавайки уеб бъдеще за вашия уеб сайт и биснес.
        <div class="text-center mt-4">
          <a title="Контакти" class="btn btn-primary" href="/contacts">Свържете се с мен</a>
        </div>
      </div>
    </div>
  </div>
</header>
<main>
  <section class="container mx-auto my-4">
    <h2 class="text-center mt-5 mb-4">Предимства</h2>
    <div class="accordion accordion-flush" id="accordion">
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-1" aria-expanded="false" aria-controls="flush-collapse-1">
            Индивидуален подход
          </button>
        </h3>
        <div id="flush-collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Като уеб програмист с опит в сферата, предлагам индивидуално проектиране и разработка на уеб сайтове и
            приложения, съобразени точно със специфичните нужди и цели на всеки клиент. Моят фокус е винаги върху
            персонализирани решения, които се адаптират към уникалните изисквания на бизнеса на клиента.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-2" aria-expanded="false" aria-controls="#flush-collapse-2">
            Техническа експертиза
          </button>
        </h3>
        <div id="flush-collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Моите широки знания и умения в областта на програмирането и разработката на уеб
            системи гарантират високо качество и професионализъм във всеки проект. Винаги съм в крак с последните
            тенденции и иновации в сферата, за да предоставям на клиентите си съвременни и функционални решения.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-3" aria-expanded="false" aria-controls="#flush-collapse-3">
            Приятно потребилски преживяване
          </button>
        </h2>
        <div id="flush-collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Моята цел е да създавам уеб сайтове и приложения, които са лесни за навигация и приятни за потребителите.
            Фокусирам се върху интерфейса и потребителското изживяване, за да осигуря съвременни и интуитивни решения,
            които привличат и задържат посетителите.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-4" aria-expanded="false" aria-controls="#flush-collapse-4">
            Срокове и бюджети
          </button>
        </h3>
        <div id="flush-collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Като професионален и отговорен уеб програмист, съм загрижен да спазвам сроковете и бюджетите на проектите.
            Работя ефективно и ефикасно, за да предоставям качествени резултати в установените рамки, без да
            компрометирам качеството.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-5" aria-expanded="false" aria-controls="#flush-collapse-5">
            Поддръжка и подкрепа
          </button>
        </h3>
        <div id="flush-collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Предоставям редовна техническа поддръжка, оптимизация за производителност, 24/7 техническа поддръжка,
            актуализации и разширения, сигурност и персонализирана поддръжка за вашите уеб сайтове и приложения, за да
            осигурим успешното им функциониране и спокойствие за вас.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-6" aria-expanded="false" aria-controls="#flush-collapse-6">
            Безопасност и надеждност
          </button>
        </h3>
        <div id="flush-collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Гарантирам сигурността на данните и информацията на клиентите си, като следя и прилагам съвременни стандарти
            за безопасност и защита на данните.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-7" aria-expanded="false" aria-controls="#flush-collapse-7">
            Адапривен дизайн (Responsive design)
          </button>
        </h3>
        <div id="flush-collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            Адаптивният уеб дизайн е съвременен подход при проектирането на уеб страници, който цели да осигури
            оптимално потребителско изживяване независимо от устройството, с което потребителят достъпва сайта. Този
            дизайн се фокусира върху автоматичната адаптация на съдъражанието, визуалния стил и компонентите на уеб
            страницата към различни екрани и устройства, като например компютърни монитори, таблети и мобилни телефони.
            <ul class="mt-4">
              <li class="mb-4">
                <span class="text-bold">По-добро SEO</span>:
                Тъй като уеб страницата използва един URL и
                HTML код за всички устройства, адаптивният уеб дизайн е SEO-оптимизиран и подобрява видимостта на сайта
                в търсачките.
              </li>
              <li>
                <span class="text-bold">Адаптивен дизайн</span>:
                Адаптивният дизайн подобрява удобството на потребителите, като предоставя лесна навигация, удобно четене
                на съдържание и бърз достъп до
                функционалността на уеб сайта.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-8" aria-expanded="false" aria-controls="#flush-collapse-8">
            Административен панел
          </button>
        </h3>
        <div id="flush-collapse-8" class="accordion-collapse collapse" data-bs-parent="#accordion">
          <div class="accordion-body">
            <p>
              Всеки уеб сайт, направен от мен има собствен персоналициран административен панел, изграден и
              специализиран за конкретният сайт.
            </p>
            <p>
              Този персонализиран административен панел предоставя удобен и лесен достъп до всички функционалности на
              уеб сайта, позволявайки на администратора бързо и ефективно да управляват съдържанието, потребителите и
              други аспекти на сайта. Административният панел е създаден с оглед на специфичните нужди и цели на
              конкретния сайт, което гарантира оптимално управление и интуитивна работа.
            </p>
            <p>
              Моят опит в създаването на персонализирани административни панели допринася за по-голямата ефективност
              и ефикасност на уеб сайтовете, които проектирам. Съчетавайки техническите умения и творческия подход,
              създавам индивидуално решение, което удовлетворява нуждите на всеки клиент.
            </p>
            <p>
              Оптимизирам административните панели за лесна навигация, ефективно управление на данни и висока защита на
              информацията. С тях администраторите могат лесно да добавят, редактират и премахват съдържание, да
              управляват потребителите и да проследяват статистически данни за сайта.
            </p>
            <p>
              Всеки административен панел е разработен с използването на най-новите технологии и най-добрите практики в
              уеб разработката, за да гарантирам, че всеки клиент получава висококачествено и персонализирано решение.
              Моето стремеже е да предоставям уеб сайтове с интуитивен, функционален и елегантен административен панел,
              който отговаря на най-високите стандарти на управление и контрол.
            </p>
          </div>
        </div>
      </div>
      <div class="p-4 text-center">
        <p>Клиентите, които изберат мен за свой уеб програмист, ще се възползват от индивидуално изградени решения,
          техническа експертиза и непрекъсната поддръжка, които ще им помогнат да постигнат успех и конкурентно
          предимство
          в своите онлайн усилия.</p>
      </div>
    </div>
  </section>

  <section class="text-center container">
    <h2>SEO оптимизация</h2>
    <div class="bg-white border p-4">
      <p>SEO оптимизация е процесът на подобряване видимостта на уеб сайта в резултатите от търсенето на търсачките като
        Google, Bing и други. Целта на SEO оптимизацията е да се постигне по-добро рангиране на страниците на уеб сайта
        в органичните резултати, което води до увеличен органичен трафик и насочване на повече потенциални клиенти към
        бизнеса.</p>
      <p>SEO оптимизацията е от съществено значение, защото повече от 90% от онлайн потребителите започват с търсене в
        търсачки. Ако вашите уеб страниците не са оптимизирани, те вероятно няма да се появят във високите резултати от
        търсенето, което може да ограничи броя на потенциалните клиенти и възможностите за растеж на бизнеса. SEO
        оптимизацията ви помага да се издигнете в резултатите от търсенето и да създадете по-силно онлайн присъствие,
        което подобрява видимостта, атрактивността и конкурентоспособността на вашето предприятие.</p>
    </div>
  </section>

  <section>
    <div class="container text-center mt-5">
      <h2 class="">Цялостни уеб решения и подкрепа</h2>
      <p>Със задълбочените си знания, умения, опит и експертиза в уеб програмирането, предлагам не само изработка на уеб
        сайтове и
        приложения, но и пълен комплект от услуги, които гарантират успешното ви присъствие онлайн. Всичко, от което се
        нуждаете за вашето уеб преживяване, можете да намерите на едно място.</p>
    </div>

    <div id="carousel" class="carousel carousel-dark slide bg-white border shadow mt-5">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Обучение за работа със сайта"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"
          aria-label="Помощ при избора на хостинг и домейн"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"
          aria-label="Създаване на уникални дизайни"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="3"
          aria-label="Техническа поддръжка и оптимизация"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="4"
          aria-label="Гъвкавост и персонализация"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container text-center d-flex flex-column justify-content-center align-items-center">
            <h3 class="h1">Обучение за работа със сайта</h3>
            <p>Вярвам, че клиентите ми заслужават повече от просто завършен продукт. Затова предлагам индивидуално
              обучение и обстойни ръководства, които ще ви научат как да управлявате и актуализирате вашия уеб сайт.
              Независимо дали сте начинаещ или напреднал потребител, правя персонализирано обучение,
              съобразено с вашите потребности.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container text-center d-flex flex-column justify-content-center align-items-center">
            <h3 class="h1">Помощ при избора на хостинг и домейн</h3>
            <p>Започването на уеб присъствие може да бъде предизвикателство, затова аз предлагам съвети и помощ при
              избора на подходящ хостинг и домейн за вашия сайт. Ще ви помогна да изберете най-подходящите опции, които
              отговарят на вашите нужди и бюджет.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container text-center d-flex flex-column justify-content-center align-items-center">
            <h3 class="h1">Създаване на уникални дизайни</h3>
            <p>Не само създавам уеб сайтове и приложения, а съчетавам техническата функционалност с красотата на
              дизайна. Моите уникални дизайни ще ви помогнат да се отличите от конкуренцията и да привлечете посетители.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container text-center d-flex flex-column justify-content-center align-items-center">
            <h3 class="h1">Техническа поддръжка и оптимизация</h3>
            <p>Уеб присъствието на сайта ви изисква редовна поддръжка и оптимизация. Винаги съм на разположение, за да
              осигуря
              техническа поддръжка и актуализации, които ще гарантират безпроблемното функциониране на вашите сайтове и
              приложения.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container text-center d-flex flex-column justify-content-center align-items-center">
            <h3 class="h1">Гъвкавост и персонализация</h3>
            <p>Всеки клиент е уникален, затова съм отворен за предоставяне на индивидуални решения, които отговарят на
              вашите специфични изисквания. Вашият успех е моят приоритет, и работя усърдно, за да ви осигуря
              най-добрите решения за вашия уеб сайт.</p>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предишен</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следващ</span>
      </button>
    </div>
  </section>

  <section>
    <h2></h2>
  </section>

  <section class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 p-4 text-center">
        <div class="bg-white shadow rounded p-4 border">
          <h3>5+</h3>
          <p>Години опит</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 p-4 text-center">
        <div class="bg-white shadow rounded p-4 border">
          <h3>40+</h3>
          <p>Доволни клиенти</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 p-4 text-center">
        <div class="bg-white shadow rounded p-4 border">
          <h3>60+</h3>
          <p>Проекта</p>
        </div>
      </div>
    </div>
  </section>

  <div class="text-center mt-4 mb-5">
    <a title="Контакти" class="btn btn-primary" href="/contacts">Свържете се с мен</a>
  </div>
</main>

<?php require "inc/footer.php" ?>