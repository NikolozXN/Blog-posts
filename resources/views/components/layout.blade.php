<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">          
          <a class="navbar-brand" href={{ route('posts.create') }}>Create post</a>
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              
              <li class="nav-item">
                  <a class="nav-link active" href={{ route('posts.index') }} aria-current="page"
                    >Home</a>
              @auth

              <li class="nav-item">
                <a class="nav-link text-dark">Welcome {{auth()->user()->name}}</p>
                </li>
                </li>
                <form action={{route('users.logout')}} method="POST">
                @csrf
                <li class="nav-item">
                  <button class="nav-link btn btn-light" href={{ route('users.logout') }}>Logout</button>
                </li>
              </form> 
                @else 
                <li class="nav-item">
                <a class="nav-link" href={{ route('users.login') }}>Login</a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link" href={{ route('users.create') }}>Register</a>
                </li>
                @endauth
                
              </ul>
              
              @include('partials.search')
          </div>
        </div>
      </nav>
    </header>
    <main>
        <div class="container mt-5">
            {{$slot}}
        </div>
</main>
<footer>
  <!-- place footer here -->
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
  crossorigin="anonymous"
></script>

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
  crossorigin="anonymous"
></script>

<script src="index.js"></script>
</body>
</html>
