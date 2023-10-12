<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <div id="app">
    <h1>Scegli il cd</h1>
    <div v-for="disc in discs">
     <div class="card" style="width: 18rem;">
       <img :src="disc.poster" class="card-img-top" alt="...">
       <div class="card-body">
          <h3 class="card-text">{{disc.title}}</h3>
          <span>{{disc.author}}</span>
          <h5 class="card-text">{{disc.year}}</h5>
       </div>
      </div>
    </div>
  </div>


<script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./main.js"></script>
</body>
</html>