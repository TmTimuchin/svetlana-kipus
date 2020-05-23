<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <!-- head -->
  <?php $title = 'Услуги и цены'; ?>
  <?php require "../includes/head.php" ?>
  <!-- head -->
  <body>
    <!-- header -->
    <?php require "../includes/header.php" ?>
    <!-- header -->


    <main>
      <section id="prices">
        <div class="container">
          <h2>Услуги и цены</h2>

          <p class="text-secondary">Я делаю неогрониченное количество вариантов и планировки</p style="color: red;">

          <div class="row">
            <!-- desc1 -->
            <div class="col-sm border mx-2 mb-4 px-2 py-4 display-flex prices">
              <p class="price"><b>2-3 дня</b></p>
              <p class="desc">Проект для черновых работ 350 р.м.кв.</p>
              <button class="btn btn-secondary btn-price ml-2" name="0">Подробнее</button>
            </div>

            <!-- desc2 -->
            <div class="col-sm border mx-2 mb-4 px-2 py-4 display-flex prices">
              <p class="price"><b>2-3 недели</b></p>
              <p class="desc">Полный дизайн-проект от 2000-2500р. Более 30 чертежей</p>
              <button class="btn btn-secondary btn-price ml-2" name="1">Подробнее</button>

              <script type="text/javascript">

              </script>
            </div>

            <!-- desc3 -->
            <div class="col-sm border mx-2 mb-4 px-2 py-4 display-flex prices">
              <p class="price"><b>2-5 недель</b></p>
              <p class="desc">Премиум дизайн-проект от 4000р.</p>
              <button class="btn btn-secondary btn-price ml-2" name="2">Подробнее</button>

              <script type="text/javascript">

              </script>
            </div>

            <!-- desc4 -->
            <div class="col-sm border mx-2 mb-4 px-2 py-4 display-flex prices">
              <p class="price"></p>
              <p class="desc">Проект с ремонтом</p>
              <button class="btn btn-secondary btn-price ml-2" name="3">Подробнее</button>

              <script type="text/javascript">

              </script>
            </div>

            <!-- desc5 -->
            <div class="col-sm border mx-2 mb-4 px-2 py-4 display-flex prices">
              <p class="price"></p>
              <p class="desc">Проект типового ремонта</p>
              <button class="btn btn-secondary btn-price ml-2" name="4">Подробнее</button>

              <script type="text/javascript">

              </script>
            </div>
          </div>



          <!-- подробности -->
          <div class="w-100 dynamic-container" id="services">
            <hr>

            <h3 id="head"></h3>

            <p id="under" class="text"></p>
          </div>
        </div>
      </section>



      <!-- калькулятор -->
      <section id="calc" name="calc">
        <div class="container">
          <h2>Стоимость дизайн-проекта</h2>

          <form id="calulator" class="p-5 w-100">
            <div class="form-row align-items-center">
              <div class="col-sm-3 my-1">
                  <select id="type" name="type" class="form-control" style="height: calc(2em + .75rem + 5px); font-size: 20px;">
                    <option>Дом</option>
                    <option>Квартира</option>
                    <option>Магазин</option>
                    <option>Офис</option>
                  </select>
              </div>

              <div class="col-sm-3 my-1">
                  <input id="repair" type="number" name="repair" class="form-control" style="height: calc(2em + .75rem + 5px); font-size: 20px;" placeholder="Количество комнта">
              </div>

              <div class="col-sm-3 my-12">
                  <input id="area" type="number" name="area" class="form-control" style="height: calc(2em + .75rem + 5px); font-size: 20px;" placeholder="Площадь">
              </div>

              <div class="col-sm-3 my-1">
                <button id="do_calc" name="do_calc" type="button" class="btn btn-primary" style="height: calc(2em + .75rem + 5px); font-size: 20px; width: 100%;" onclick="doCalc()">Посчитать</button>
              </div>
            </div>

            <script type="text/javascript">

            </script>

            <div id="res" class="pt-3">
              <hr>

              <div class='p-4 bg-light'>
                <p>Проект будет стоить</p>
                <p><b id="count"></b></p>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>


    <!-- footer -->
    <?php require "../includes/footer.php" ?>
    <!-- footer -->
    <script type="text/javascript">
      // услуги
      var isDescOpen = false;
      var currentDesc = null;
      var buttons = document.querySelectorAll(".btn-price");
      for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function (event) {
          desc(event)
        })
      }

      function desc(event) {
        var index = Number(event.target.name);

        var container = document.getElementById('services');
        if (isDescOpen && currentDesc === index) {
          container.style.maxHeight = 0;
          event.target.innerHTML = "Подробнее";
        } else {
          for (var i = 0; i < buttons.length; i++) {
            buttons[i].innerHTML = "Подробнее";
          }
          event.target.innerHTML = "Свернуть";
          switch (index) {
            case 0:
              document.getElementById('head').innerHTML = "Проект для черновых работ";
              document.getElementById('under').innerHTML = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
              break;

            case 1:
              document.getElementById('head').innerHTML = "Полный дизайн-проект";
              document.getElementById('under').innerHTML = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
              break;

            case 2:
              document.getElementById('head').innerHTML = "Премиум дизайн-проект";
              document.getElementById('under').innerHTML = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
              break;

            case 3:
              document.getElementById('head').innerHTML = "Проект с ремонтом";
              document.getElementById('under').innerHTML = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
              break;

            case 4:
              document.getElementById('head').innerHTML = "Проект типового ремонта";
              document.getElementById('under').innerHTML = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
              break;
          }
          container.style.maxHeight = `${container.scrollHeight}px`;
        }

        isDescOpen = !isDescOpen;
        currentDesc = index;
      }



      // калькулятор
      function doCalc() {
        var type = document.querySelector("#type").value;
        var repair = document.querySelector("#repair").value;
        var area = document.querySelector("#area").value;

        const MPRICE = 200;

        if (type == 'Дом') {
          var mPrice = MPRICE * 2;
        } else {
          var mPrice = MPRICE;
        }

        var calc = area * mPrice;

        if (repair == 'Капитальный') {
          var finalCalc = calc * 1.5;
        } else {
          var finalCalc = calc;
        }

        var calcContainer = document.getElementById('res');
        if (finalCalc === 0) {
          calcContainer.style.maxHeight = 0;
        } else {
          document.getElementById('count').innerHTML = `${finalCalc} рублей`;
          calcContainer.style.maxHeight = `${calcContainer.scrollHeight}px`;
        }

        // document.getElementById('count').innerHTML = `${finalCalc} рублей`;
      }
    </script>
  </body>
</html>
