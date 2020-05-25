<footer class="site-footer">
  <div class="top py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-6">
          <div class="links">
            <ul class="list-inline">
              <li class="list-inline-item active font-weight-bold">
                <a href="javascript:;">Home</a>
              </li>
              <li class="list-inline-item font-weight-bold">
                <a href="javascript:;">Properties</a>
              </li>
              <li class="list-inline-item font-weight-bold">
                <a href="javascript:;">About</a>
              </li>
              <li class="list-inline-item font-weight-bold">
                <a href="javascript:;">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-8 col-md-6">
          <div class="d-flex float-md-right subscription">

            <div class="input-icon pr-4">
              <input type="text" name="subscribe-input" id="subscribe-input" class="form-control" placeholder="Email Address">
              <button>
                <i data-feather="arrow-right"></i>
              </button>
            </div>

            <div class="social">
              <ul class="list-inline">
                <li class="list-inline-item"><a href="javascript:;"><i data-feather="facebook"></i></a></li>
                <li class="list-inline-item"><a href="javascript:;"><i data-feather="instagram"></i></a></li>
                <li class="list-inline-item"><a href="javascript:;"><i data-feather="twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom py-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="pt-3">
            <p>Copyright &copy; {{ date('Y') }} All Rights Reserved</p>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="d-flex">
            <div class="ml-md-auto pt-3 developed-by">
              <ul class="list-inline">
                <li class="list-inline-item"><span class="text-yellow">Developed by</span></li>
                <li class="list-inline-item">
                  <img src="{{ url('/img/digicliq.png') }}" alt="digi cliq logo" height="38px">
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="{{ url('/js/app.js') }}"></script>
@stack('scripts')