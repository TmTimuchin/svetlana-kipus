<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <!-- head -->
  <?php $title = 'Светлана Кипус'; ?>
  <?php require "includes/head.php" ?>
  <!-- head -->

  <!-- СОДЕРЖАНИЕ -->
  <!--
    1. Слайдер
    2. Проекты
    3. Текст о дизайне и ссылка на услуги
    4. Обо мне
    5. Форма связи
  -->

  <body>
    <!-- header -->
    <?php require "includes/header.php" ?>
    <!-- header -->


    <!-- slider -->
    <?php require "includes/slider.php" ?>
    <!-- slider -->

    <main>
      <!-- проекты -->
      <section id="projects">
        <div class="container">
          <div class="d-flex justify-content-between bd-highlight mb-3">
            <div class="p-2 bd-highlight">
              <h2 class="my-5">Проекты</h2>
            </div>
            <div class="mt-4 p-2 bd-highlight">
              <a id="link_to_calc" href="pages/prices.php#calc">
                <span id="span1" class="d-block text-center" style="font-size: 1.2rem; padding: 0;">Посчитать</span>
                <span id="span2" class="d-block text-center" style="font-size: 1.5rem; padding: 0;">ПРОЕКТ</span>
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="card-main card mb-4 shadow-sm">
                <img class="card-img-top" src="http://placehold.it/348x225">
                <div class="card-body">
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-main card mb-4 shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                <img class="card-img-top" src="http://placehold.it/348x225">
                <div class="card-body">
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-main card mb-4 shadow-sm">
                <img class="card-img-top" src="http://placehold.it/348x225">
                <div class="card-body">
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card-main card mb-4 shadow-sm">
                <img class="card-img-top" src="http://placehold.it/348x225">
                <div class="card-body">
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-main card mb-4 shadow-sm">
                <img class="card-img-top" src="http://placehold.it/348x225">
                <div class="card-body">
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-main card mb-4 shadow-sm">
                <img class="card-img-top" src="http://placehold.it/348x225">
                <div class="card-body">
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <!-- текст о дизайне -->
      <section id="design">
        <div class="container">
          <h2 class="my-3">Дизайн</h2>

          <div id="design_text" class="px-5 justify-center mx-auto">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>

          <div>
            <a class="main-link" href="pages/prices.php">Ознакомтесь с услугами</a>
          </div>
        </div>
      </section>



      <!-- отзывы -->
      <section id="comments">
        <div class="container">
          <h2 class="mb-5 text-center">Отзывы</h2>

          <div class="row">
            <div class="col-sm text-center">
              <img class="bd-placeholder-img rounded-circle mb-2" src="http://placehold.it/140">
              <h3>Клиент</h3>
              <p class="mb-4">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm text-center">
              <img class="bd-placeholder-img rounded-circle mb-2" src="http://placehold.it/140">
              <h3>Клиент</h3>
              <p class="mb-4">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm text-center">
              <img class="bd-placeholder-img rounded-circle mb-2" src="http://placehold.it/140">
              <h3>Клиент</h3>
              <p class="mb-4">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            </div><!-- /.col-lg-4 -->
          </div>
          <!-- <div class="row">
            <div class="col-sm" id="comment">
              <div class="card"></div>
            </div>
            <div class="col-sm" id="comment">
              <div class="card"></div>
            </div>
            <div class="col-sm" id="comment">
              <div class="card"></div>
            </div>
          </div> -->
        </div>
      </section>



      <!-- обратная связь -->
      <section id="feedback">
        <div class="container">
          <h2 class="my-3">Обратная связь</h2>

          <div class="row">
            <div class="col-sm pb-3">
              <p id="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="col-sm pb-3">
              <form class="pb-3" action="skripts/email.php" method="post">
                <div class="form-group">
                  <!-- <label for="email">Ваша почта</label> -->
                  <input type="email" class="form-control" id="email" placeholder="name@mail.ru">
                </div>

                <div class="form-group">
                  <!-- <label for="name">Ваше имя</label> -->
                  <input type="text" class="form-control" id="name" placeholder="Как к вам обращаться">
                </div>

                <div class="form-group">
                  <!-- <label for="message">Example textarea</label> -->
                  <textarea class="form-control" id="message" rows="5"></textarea>
                </div>

                <input class="btn btn-primary w-100" type="submit" id="do_email" name="do_email" value="Отправить">
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- header -->
    <?php require "includes/footer.php" ?>
    <!-- header -->
  </body>
</html>
