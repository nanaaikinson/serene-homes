@extends('layouts.main')

@section('content')

<div class="site-property py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <h4 class="font-weight-bold text-dark">Five Bedroom Huxury Home</h4>
      </div>

      <div class="col-lg-7 mb-4">
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

      <div class="col-lg-5">
        <h4 class="font-weight-bold text-dark mb-4">Overview</h4>

        <div class="description">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque a autem omnis veniam iste, laboriosam saepe provident at aut pariatur, cumque nam, reprehenderit minima rem cupiditate. Iste eligendi ullam accusamus cum in harum. Accusantium exercitationem maiores ipsa non voluptates, quae, neque voluptas odit nisi, eligendi tempore amet. Facere, reprehenderit impedit.</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptatem eveniet explicabo tempora velit deserunt ab quo blanditiis exercitationem vel.</p>

          <div class="property-meta mt-4">
            <div class="property-meta-item">
              <img src="{{ url('/img/bedroom.svg') }}" alt="bedroom count">
              <span class="property-meta-number text-dark">5</span>
              <span class="property-meta-name text-dark">Bedrooms</span>
            </div>

            <div class="property-meta-item">
              <img src="{{ url('/img/bathroom.svg') }}" alt="bedroom count">
              <span class="property-meta-number text-dark">4</span>
              <span class="property-meta-name text-dark">Bathrooms</span>
            </div>

            <div class="property-meta-item">
              <img src="{{ url('/img/car-parking.svg') }}" alt="bedroom count">
              <span class="property-meta-number text-dark">3</span>
              <span class="property-meta-name text-dark">Garages</span>
            </div>

            <div class="property-meta-item">
              <img src="{{ url('/img/living-room.svg') }}" alt="bedroom count">
              <span class="property-meta-number text-dark">3</span>
              <span class="property-meta-name text-dark">Living Rooms</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 mb-4">
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