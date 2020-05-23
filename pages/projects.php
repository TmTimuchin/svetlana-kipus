<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <!-- head -->
  <?php $title = 'Обо мне'; ?>
  <?php require "../includes/head.php" ?>
  <!-- head -->
  <body>
    <!-- header -->
    <?php require "../includes/header.php" ?>
    <!-- header -->

    <main>
      <section id="posts">
        <div class="container p-3">
          <h2 class="my-5">Статьи</h2>

          <div class="row">
            <?php
              $i = 1;
              while ($i <= 10) :
              ?>
                <div class="col-lg-6 mb-5" <?php echo $i++; ?>>
                  <div class="card">
                    <img class="card-img-top" src="../media/portfolio/portfolio-2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Название карточки</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">Ссылка карты</a>
                      <a href="#" class="card-link">Другая ссылка</a>
                    </div>
                  </div>
                </div>
              <?
              endwhile;
             ?>
          </div>
        </div>
      </section>
    </main>

    <!-- footer -->
    <?php require "../includes/footer.php" ?>
    <!-- footer -->
  </body>
</html>
