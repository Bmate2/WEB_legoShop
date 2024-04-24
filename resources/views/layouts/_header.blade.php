<style>
        .box {
  background: #f9f9f9;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
}

.box h2 {
  font-size: 24px;
  margin-bottom: 20px;
  text-align: center;
}

.inputBox {
  position: relative;
  margin-bottom: 30px;
}

.inputBox input {
  width: 100%;
  padding: 10px 0;
  border: none;
  outline: none;
  border-bottom: 1px solid #ccc;
  font-size: 16px;
  color: #333;
  background: transparent;
}

.inputBox span {
  position: absolute;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #666;
  pointer-events: none;
  transition: 0.5s;
}

.inputBox input:focus ~ span,
.inputBox input:valid ~ span {
  transform: translateY(-20px);
  font-size: 12px;
  color: #ff5722;
}

.inputBox input:focus,
.inputBox input:valid {
  border-bottom: 2px solid #ff5722;
}

.links {
  text-align: center;
  margin-top: 20px;
}

.links a {
  color: #333;
  text-decoration: none;
  margin: 0 10px;
  transition: 0.3s;
}

.links a:hover {
  color: #ff5722;
}

    </style>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">LEGO shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Kezdőlap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("all_lego")}}">Összes LEGO</a>
                </li>

                @if(Auth::user())
                    @if(Auth::user()->role=="A")
                    <li class="nav-item">
                    <a class="nav-link" href="{{route("add_lego")}}">LEGO hozzáadása</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route("categories.view")}}">Kategória hozzáadása</a>
                    </li>
                    @endif
                    <li class="nav-item">
                    <form action="{{route("logout")}}" method="POST">
                    @csrf
                    <button class="nav-link" style="border:none; background-color:transparent" type="submit">Kijelentkezés</button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route("loginView")}}">Bejelentkezés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("registerView")}}">Regisztráció</a>
                </li>
                @endif
                </ul>
        </div>
    </nav>
</header>