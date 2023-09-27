<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/Praktikum_day3/style.css" /> <!--menuju public jdi harus ada path ke foldernya-->
    <title>Tugas Routing - Figma web</title>
  </head>
  <header>
    <!--ini text netflix dibaliik-->
  </header>
  <body>
    <div class="container">
      <div class="header">
        <div class="font"><b> <?=$nama?></b></div>
        <div class="spasi-tengah"></div>
        <div class="button"></div>
        <form>
          <select name="Bahasa">
            <option value="Volvo">🌐 Indonesia</option>
            <option value="Peugeot">🌐 English</option>
            <option value="Fiat">🌐 Javanese</option>
            <option value="Jaguar">🌐 Sundanese</option>
          </select>
          <input type="button" value="Masuk" />
        </form>
      </div>
      <div class="box">
        <img class="image" src="/Praktikum_day3/mada kono sekai wa.gif" alt="komet bang" />
        <div>
          <h1>{{$jargon}}</h1>
          <h5>Bulanannya jangan lupa bayar ya! 🙏</h5>
          <h6>IDR 100.000/Bulan</h6>
          <div>
            <form>
              <input
                type="text"
                name="mail"
                placeholder="G-mail kamu"
                size="100px"
              />
              <input type="button" value="Langganan >" class="langganan" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer></footer>
</html>
