<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Joyvel</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <main>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand fs-3 fw-bold" href="#">Joyvel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Destination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hotel</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Login | Register</a></li>
              <li><a class="dropdown-item" href="#">About</a></li>
              <li><a class="dropdown-item" href="#">F.A.Q</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    {{-- END NAVBAR --}}
  <div class="col-xl-12 f-screen bg-index1">
    <div class="d-flex mb-3 position-absolute top-50 start-50 translate-middle col-xl-6 form-input-text border shadow">
      <span class="p-2"  ><i class="fa-solid fa-magnifying-glass fa-fade fa-lg" style="color: #000000;"></i></span>
      <input type="text" class="form-input-text p-2" placeholder="Search by country..." aria-label="Username" aria-describedby="basic-addon1">
      {{-- <button type="submit" class="btn btn-success">Search</button> --}}
    </div>
  </div>
    <div class="col-xl-12">
      <p class="text-center mt-5 mb-5 display-6 border-bottom col-xl-6 mx-auto">Recommended Destination</p>
      <div class="container d-block">
        {{-- 1 --}}
        <div class="row col-xl-12 mb-5">
          <div class="col-xl-4 p-0">
            <img src="assets/img/dubai.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-xl-8">
            <p class="fs-2">
              Dubai
            </p>
            <i class="fa-solid fa-location-dot"></i>
            <a class="icon-link text-dark" href="#">
              Dubai, Emirate of Dubai
            </a>
            <p class="mt-2 text-justify">Dubai is a destination that combines modern culture with history, and adventure with world-class shopping and entertainment. Catch a show at the Dubai Opera, see downtown from the top of the Burj Khalifa, and spend the afternoon cruising Dubai Creek exploring the gold, textile and spice souks. If you're looking for a challenge, you can soar over the dunes in a hot air balloon, go on high-speed rides at IMG Worlds of Adventure or skydive over Palm Jumeirah.</p>
            <span class="badge text-bg-success p-2 mt-5"><i class="fa-solid fa-hotel me-2"></i>Hotels</span>
          </div>
        </div>
        {{-- 1 --}}
        {{-- 2 --}}
        <div class="row col-xl-12 mb-5">
          <div class="col-xl-4 p-0">
            <img src="assets/img/bali.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-xl-8">
            <p class="fs-2">
              Bali
            </p>
            <i class="fa-solid fa-location-dot"></i>
            <a class="icon-link text-dark" href="#">
              Bali, Indonesia
            </a>
            <p class="mt-2 text-justify">Bali is as beautiful as a photo on a postcard, a paradise in Indonesia that feels like a land of fantasy. Enjoy sunbathing on stretches of fine white sand, or mingle with tropical creatures as you dive along stunning coral reefs and WWII warship wrecks. On the beach, a lush forest shelters temples and wild monkeys. As an “art center”, Ubud is the perfect place to see cultural dance performances, learn to make batik or work with silver, or refresh your mind and body by joining a yoga course.</p>
          </div>
        </div>
        {{-- 2 --}}
        {{-- 3 --}}
         <div class="row col-xl-12">
          <div class="col-xl-4 p-0">
            <img src="assets/img/paris.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-xl-8">
            <p class="fs-2">
              Paris
            </p>
            <i class="fa-solid fa-location-dot"></i>
            <a class="icon-link text-dark" href="#">
              Paris, Ile-de-France
            </a>
            <p class="mt-2 text-justify">Enjoy a brownie at a roadside cafe, relax after a stroll along the Seine and admire city icons like the Eiffel Tower and the Arc de Triomphe… the perfect Parisian vibe combines fun and excitement, with plenty of time to sample delicious dishes and view exhibitions at Louvre. Experience the majesty of Notre Dame, enjoy bargain shopping at the Marché aux Puces de Montreuil or, for the foodie, at the Marché Biologique Raspail, then end the day by seeing a show at the Moulin Rouge.</p>
          </div>
        </div>
        {{-- 3 --}}
      </div>
    </div>
  </main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>  </body>
</html>