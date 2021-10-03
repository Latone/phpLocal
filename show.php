<?PHP
	session_start();
?>
<<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Lab 1</title>
  </head>

  <body>

    <h1> Проверка попадания точки в область графика</h1>

    <header class=headStyle>
      ФИО сделавших:<br>
      -Жучков Иван Сергеевич<br>
      -Максимов Александр Владимирович<br>
      <p class="addinfo">
      Группа: P33202<br>
      Вариант: 21058<br> </p>
    </header>
    <div align="left" >
        <img class="varImage" src="Variant.png">
        <div align="left">
            <form method="get" class="stacked validatedform">
              <div class="inputX form field">
                  <p>Выберите координату X:</p>
                  <input type="checkbox" name="x[]" value=-2>-2
                  <input type="checkbox" name="x[]" value=-1.5>-1.5
                  <input type="checkbox" name="x[]" value=-1>-1
                  <input type="checkbox" name="x[]" value=-0.5>-0.5
                  <input type="checkbox" name="x[]" value=0>0
                  <input type="checkbox" name="x[]" value=0.5>0.5
                  <input type="checkbox" name="x[]" value=1>1
                  <input type="checkbox" name="x[]" value=1.5>1.5
                  <input type="checkbox" name="x[]" value=2>2
                  <br>
              </div>

              <div class="inputY form field">
                <p>Впишите координату Y:<p>
                <input type="text" name="y">
              </div>

              <div class="inputR form field">
                <p>Выберите радиус R:</p>
                <select name="r">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                <br>
              </div>
              <div class="button validateBtn">
                <input type="submit" value="Проверить">
              </div>
            </form>

            <div class="response stacked">
            <?php
              include "coordLogic.php";
            ?>
            </div>
          </div>
  </div>
    <div class="history">
			<table class="historytable">
				<?PHP
				include "historyLogic.php";
				?>
			</table>
		</div>

    <script src="Script.js"></script>
  </body>
</html>
