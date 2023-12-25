<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a wire:navigate class="nav-link active" aria-current="page" href="/customers">customers</a>
          </li>

          @guest
          <li class="nav-item">
            <a wire:navigate class="nav-link" href="/registerLivewire">Register</a>
          </li>
          <li class="nav-item">
            <a wire:navigate class="nav-link" href="/LoginLivewire">Login</a>
          </li>
          @endguest
@auth
<li class="nav-item">
    <a wire:navigate class="nav-link active" aria-current="page" href="/customers">customers</a>
  </li>
  <li class="nav-item">
    <button wire:click="logoutlivewire" class="nav-link">logout</button>
  </li>
@endauth

            </ul>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
