<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prédio</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-four-fifths">
          <h1 class="title">
            Prédio
          </h1>


          <?php
          $authorization = "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjVmYzRlYjMwMzJiMzAyMWNiNTFlMmY4ZCIsInRpZCI6IjVmY2E0ZDVhZGJiMjAyMWNhZGI1M2IwZiIsImlhdCI6MTYwNzA5MzU5NCwiZXhwIjoxNjA3Njk4Mzk0fQ._QF6-GnMATZ7eR5fMeZ--eVErW7ChwhG5JYQXKYa2AA";
          // Inicia
          $curl = curl_init();

          // Configura
          curl_setopt_array($curl, [
          CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ),
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_URL => 'https://api.sinric.pro/api/v1/devices/5fc5041032b3021cb51e30d9'
          ]);





          // Envio e armazenamento da resposta
          echo $response = curl_exec($curl);

          // Fecha e limpa recursos
          curl_close($curl);
?>




          <video autoplay id="video"></video>
          <button class="button is-hidden" id="btnPlay">
            <span class="icon is-small">
              <i class="fas fa-play"></i>
            </span>
          </button>
          <button class="button" id="btnPause">
            <span class="icon is-small">
              <i class="fas fa-pause"></i>
            </span>
          </button>
          <button class="button is-success" id="btnScreenshot">
            <span class="icon is-small">
              <i class="fas fa-camera"></i>
            </span>
          </button>
          <button class="button" id="btnChangeCamera">
            <span class="icon">
              <i class="fas fa-sync-alt"></i>
            </span>
            <span>Switch camera</span>
          </button>
        </div>
        <div class="column">
          <h2 class="title">Screenshots</h2>
          <div id="screenshots"></div>
        </div>
      </div>
    </div>
  </section>


  <canvas class="is-hidden" id="canvas"></canvas>
  <script src="script.js"></script>
</body>

</html>