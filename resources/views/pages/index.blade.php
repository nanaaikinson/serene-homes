@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ url('/css/tiny-slider.css') }}" />
@endpush


@section('content')

<div class="site-home-page">
  <div class="slider-section">
    <div class="slider-container" id="slider-container">
      <div class="slider-item" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.45)), url({{ url('/img/slider-1.JPG') }});">
      </div>

      <div class="slider-item" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.45)), url({{ url('/img/slider-2.JPG') }});">
      </div>
    </div>

    <div class="container">
      <div class="slider-content">
        <h4 class="text-uppercase text-white display-4 font-weight-bolder">Serene Gated <span class="text-yellow font-weight-lighter">Homes</span></h4>
        <p>
          We have amazing luxury apartments for rent and short stay. <br class="d-none d-sm-block">
          Our apartments are located in one of the best residential areas in <br class="d-none d-sm-block">
          East Legon
        </p>

        <div class="d-inline">
          <button class="btn btn-warning contact-btn text-uppercase px-4 mt-4 font-weight-bold" id="sliderContactBtn">
            Call Us
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="home-properties my-5">
    <div class="container">
      <h5 class="text-uppercase font-weight-bolder mb-3 text-dark">Our Properties</h5>

      <div class="row">
        @if ($properties)
        @foreach ($properties as $property)

        <div class="col-md-6 col-lg-4 mb-3">
          <div class="property-box border-radius-rounded" data-href="{{ url('property/'. $property->slug) }}">
            <div class="property-image" style="background-image: url({{ url($property->photo) }});"></div>

            <div class="property-content px-3 py-3">
              <a class="title" href="{{ url('property/'. $property->slug) }}">
                <h5 class=" mb-3">{{ $property->title }}</h5>
              </a>

              <div class="meta">
                <ul class="list-inline">
                  <li class="list-inline-item pr-3">
                    <span class="icon">
                      <img src="{{ url('/img/bedroom.svg') }}" alt="bedroom">
                    </span>
                    <span class="number">{{ $property->bedroom }}</span>
                  </li>

                  <li class="list-inline-item pr-3">
                    <span class="icon">
                      <img src="{{ url('/img/bathroom.svg') }}" alt="bathroom">
                    </span>
                    <span class="number">{{ $property->bathroom }}</span>
                  </li>

                  <li class="list-inline-item pr-3">
                    <span class="icon">
                      <img src="{{ url('/img/car-parking.svg') }}" alt="garage">
                    </span>
                    <span class="number">{{ $property->garage }}</span>
                  </li>

                  <li class="list-inline-item">
                    <span class="icon">
                      <img src="{{ url('/img/living-room.svg') }}" alt="living room">
                    </span>
                    <span class="number">{{ $property->living_area }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        @endforeach
        @endif
      </div>
    </div>
  </div>

  <div class="home-video py-4 py-lg-0" id="about" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.45)), url({{ url('/img/slider-1.JPG') }});">
    <div class="home-about d-none d-lg-block w-50">
      <div class="d-flex py-5 px-5 align-items-center justify-content-center">
        <div class="content">
          <h5 class="text-uppercase font-weight-bolder mb-3 text-dark">About Us</h5>
          <p>Serene Gated Homes had very luxurious fully furnished homes and apartments for rent and short stay, our homes are located in very Serene environments in East Legon, with lots of amenities such as, 24hours protection, standby power plants spacious bedrooms, huge family lounges and a lot more.</p>
        </div>
      </div>
    </div>

    <div class="container d-lg-none">
      <div class="card">
        <div class="card-body">
          <div class="py-5">
            <h5 class="text-uppercase font-weight-bolder mb-3 text-dark">About Us</h5>

            <p>Serene Gated Homes had very luxurious fully furnished homes and apartments for rent and short stay, our homes are located in very Serene environments in East Legon, with lots of amenities such as, 24hours protection, standby power plants spacious bedrooms, huge family lounges and a lot more.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@push('scripts')
<script src="{{ url('/js/home.js') }}"></script>
@endpush