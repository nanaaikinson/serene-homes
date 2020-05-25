@extends('layouts.main')

@section('content')

<div class="site-property py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <h4 class="font-weight-bold text-dark">Five Bedroom Luxury Home</h4>
      </div>

      <!-- Slider -->
      <div class="col-lg-9 col-xl-7 mb-4">
        <div class="property-slider">
          <div id="property-slider" class="mb-4">
            <div><img class="border-radius-rounded" src="{{ url('/img/property-1.jpg') }}" alt=""></div>
            <div><img class="border-radius-rounded" src="{{ url('/img/property-2.jpg') }}" alt=""></div>
            <div><img class="border-radius-rounded" src="{{ url('/img/property-3.jpg') }}" alt=""></div>
          </div>

          <div class="pb-4">
            <ul class="d-flex flex-wrap property-slider-thumbnails" id="property-slider-thumbnails">
              <li class="thumbnail-item active shadow-sm">
                <img src="{{ url('/img/property-1.jpg') }}" alt="">
              </li>
              <li class="thumbnail-item shadow-sm">
                <img src="{{ url('/img/property-2.jpg') }}" alt="">
              </li>
              <li class="thumbnail-item shadow-sm">
                <img src="{{ url('/img/property-3.jpg') }}" alt="">
              </li>
            </ul>
          </div>

          <div class="pb-4 d-none">
            <div class="property-slider-controls d-flex justify-content-center align-items-center" id="property-slider-controls">
              <div><button class="btn btn-primary prev-btn">Prev</button></div>
              <div><button class="btn btn-primary next-btn">Next</button></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Details -->
      <div class="col-xl-5 mb-3 mb-xl-0">
        <h4 class="font-weight-bold text-dark mb-3">Overview</h4>

        <div class="description">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque a autem omnis veniam iste, laboriosam saepe provident at aut pariatur, cumque nam, reprehenderit minima rem cupiditate. Iste eligendi ullam accusamus cum in harum. Accusantium exercitationem maiores ipsa non voluptates, quae, neque voluptas odit nisi, eligendi tempore amet. Facere, reprehenderit impedit.</p>

          <div class="row row-eq-height">
            <div class="col-4 col-md-3">
              <div class="property-metas mb-3 h-100">
                <span class="name font-weight-bold">Bedrooms</span>

                <div>
                  <img src="{{ url('/img/bedroom.svg') }}" alt="bedroom">
                  <span class="number">3</span>
                </div>
              </div>
            </div>

            <div class="col-4 col-md-3">
              <div class="property-metas mb-3 h-100">
                <span class="name font-weight-bold">Bathrooms</span>

                <div>
                  <img src="{{ url('/img/bathroom.svg') }}" alt="bathroom">
                  <span class="number">3</span>
                </div>
              </div>
            </div>

            <div class="col-4 col-md-3">
              <div class="property-metas mb-3 h-100">
                <span class="name font-weight-bold">Garages</span>

                <div>
                  <img src="{{ url('/img/car-parking.svg') }}" alt="garage">
                  <span class="number">3</span>
                </div>
              </div>
            </div>

            <div class="col-4 col-md-3">
              <div class="property-metas mb-3 h-100">
                <span class="name font-weight-bold">Living Room</span>

                <div>
                  <img src="{{ url('/img/living-room.svg') }}" alt="garage">
                  <span class="number">3</span>
                </div>
              </div>
            </div>



          </div>
        </div>

        <div class="description">
          <div class="card card-p-2">
            <h5>Additional Features</h5>
            <hr class="mb-4">

            <div class="property-meta-features">
              <ul class="property-additional-features">
                <li>2 Stories</li>
                <li>Central Heating</li>
                <li>Dual Sinks</li>
                <li>Electric Range</li>
                <li>Emergency Exit</li>
                <li>Fire Alarm</li>
                <li>Fire Place</li>
                <li>Hurricane Shutters</li>
                <li>Laundry Room</li>
                <li>Marble Floors</li>
                <li>NEXT to busway</li>
                <li>Swimming Pool</li>
                <li>Wifi</li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="col-12">
        <div class="video-presentaion">
          <div class="card card-p-2">
            <h5>Property Video Presentation</h5>
            <hr class="mb-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

<!-- @push('styles')
<link rel="stylesheet" href="{{ url('/css/tiny-slider.css') }}" />
@endpush -->

@push('scripts')
<script src="{{ url('/js/property.js') }}"></script>
@endpush