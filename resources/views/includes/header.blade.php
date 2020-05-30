<div class="site-navigation">
  <nav class="navbar navbar-expand-md navbar-light nav-lg fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand text-uppercase font-weight-bold" href="{{ url('/') }}">Serenegated <span class="text-yellow font-weight-light">homes</span></a>

      <button class="navbar-toggler" type="button">
        <i data-feather="menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ request()->segment(1) == '' ? 'active' : '' }}" data-href="{{ url('/') }}">
            <a class="nav-link">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item 
          {{ request()->segment(1) == 'properties' || request()->segment(1) == 'property' ? 'active' : '' }}" data-href="{{ url('/properties') }}">
            <a class="nav-link">Properties</a>
          </li>
          <li class="nav-item" data-href="{{ url('/#about') }}">
            <a class="nav-link">About</a>
          </li>
          <li class="nav-item" data-href="{{ url('/#contact') }}">
            <a class="nav-link" id="contactHeader">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>