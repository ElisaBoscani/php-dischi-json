<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <header class="bg_header p-4">
    <nav>
      <i class="fa-brands fa-spotify fa-xl " style="color:#ffff"></i>
    </nav>
  </header>
  <main class="bg_main">
    <div id="app">
      <h1 class="text-center text-white p-3">Seleziona Brano</h1>
      <div class="container">

        <div class="row g-3 ">
          <div v-for="(disc, index) in discs" @click="centerCard(index)" :key="index" class="col">
            <div class=" bg_header d-flex flex-column align-items-center p-3 card" style="width: 18rem;">
              <img :src=" disc.poster" class="card-img-top w-75 pb-2" alt="...">
              <div class="card-body p-1 d-flex flex-column align-items-center ">
                <h5 class="card-text text-white">{{disc.title}}</h5>
                <span class="text-white">{{disc.author}}</span>
                <h6 class="card-text text-white">{{disc.year}}</h6>
              </div>
            </div>
          </div>
        </div>

        <div v-if="selectCard && modalVisible" class="all_page  card" @click="closeModal()">
          <img :src="selectCard.poster" class="w-25" alt="...">
          <div class="card-body p-1 d-flex flex-column align-items-center">
            <h3 class="text-white" class="card-text">{{selectCard.title}}</h3>
            <span class="text-white">{{selectCard.author}}</span>
            <h5 class="card-text text-white">{{selectCard.year}}</h5>
          </div>
        </div>

      </div>
    </div>
  </main>

  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./main.js"></script>
</body>

</html>