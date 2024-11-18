<style>
    .btn-new {
    font-size: 40px;
    text-decoration: none;
    padding: 20px;
    border-radius: 10px;
    color: white;
    transition: .2s linear;
    background: rgb(28, 198, 255);
}

.btn-new:hover {
    -webkit-transform: rotateZ(25deg);
    -ms-transform: rotateZ(25deg);
    transform: rotateZ(25deg);
}
.cent{
    padding: 30px;
    text-align: center;
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.blue{
    background-color: rgb(28, 198, 255);
    width: 100%;
    height: 50px;
  }
  .footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 50px;
  background-color: rgb(28, 198, 255);
  text-align: center;
}
.pad{
    padding: 20px;
}
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8">
   <title>Выберите действие!</title>
  </head>
  <body>
    <div class="blue"></div>
    <div class="cent">
        <a class="btn-new" href="info.php" > Общая статистика!</a>
        <p class="pad"></p>
        <a class="btn-new" href="db.php" > Каждый пользователь!</a>
        <p class="pad"></p>
        <a class="btn-new" href="clear.php" > Очистить всех!</a>
    </div>
    <div class="footer"></div>
  </body>
</html>