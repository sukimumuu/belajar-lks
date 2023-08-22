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
                <a class="nav-link" href="{{ route('destination') }}">Destination</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hotel</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/login">Login | Register</a></li>
                <li><a class="dropdown-item" href="#">About</a></li>
                <li><a class="dropdown-item" href="#">F.A.Q</a></li>
                @if(Auth::user()->level === 'admin')
                <li>
                    <a class="dropdown-item" href="#">Control Panel</a>
                </li>
                @endif
                </ul>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </li>
            </ul>
        </div>
        </div>
  </nav>
    {{-- END NAVBAR --}}
    <div class="container-fluid p-0">
        <div class="col-xl-12 f-half" style="background-image: url('assets/img/balides.jpg'); background-size: cover; background-position: center;">
            
        </div>
    </div>
    <footer class="border">
      <div class="row col-xl-12 p-5">
        <div class="col-xl-3">
          <h2 class="display-6 text-center">Joyvel</h2>
        </div>
        <div class="col-xl-6">
          <div class="d-flex flex-column">
            <p><a class="nav-link fs-4 fw-bold" href="#">About Joyvel</a></p>
            <p>How to order</p>
            <p>Contact Us</p>
            <p>Help Center</p>
          </div>

        </div>
        <div class="col-xl-3">
            <p><a class="nav-link fs-4 fw-bold" href="#">Product</a></p>
            <p>Ticket</p>
            <p>Hotel</p>
        </div>
      </div>
    </footer>
  </main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>  </body>
</html>