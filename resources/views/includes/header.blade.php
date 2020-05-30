<div class="site-navigation">
  <nav class="navbar navbar-expand-md navbar-light nav-lg fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <i data-feather="menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ request()->segment(1) == '' ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item 
          {{ request()->segment(1) == 'properties' || request()->segment(1) == 'property' ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/properties') }}">Properties</a>
          </li>
          <li class="nav-item {{ request()->segment(1) == 'about' ? 'active' : '' }}">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" id="contactHeader">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>