@extends('layouts.main')

@section('content')

<div class="site-property py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <h4 class="font-weight-bold text-dark">{{ ucfirst($property->title) }}</h4>
      </div>

      <!-- Slider -->
      <div class="col-lg-9 col-xl-7 mb-4">
        <div class="property-slider">
          <div id="property-slider" class="mb-4">
            <div>
              <img class="border-radius-rounded glightbox" src="{{ url($coverPhoto->file_url) }}" alt="">
            </div>

            @if(isset($otherPhotos))
            @foreach($otherPhotos as $photo)
            <div>
              <img class="border-radius-rounded glightbox" src="{{ url($photo->file_url) }}" alt="">
            </div>
            @endforeach
            @endif

          </div>

          <div class="pb-4">
            <ul class="d-flex flex-wrap property-slider-thumbnails" id="property-slider-thumbnails">
              <li class="thumbnail-item active shadow-sm">
                <img src="{{ url($coverPhoto->file_url) }}" alt="">
              </li>

              @if(isset($otherPhotos))
              @foreach($otherPhotos as $photo)
              <li class="thumbnail-item shadow-sm">
                <img src="{{ url($photo->file_url) }}" alt="">
              </li>
              @endforeach
              @endif

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
          <div class="mb-4">
            {!! $property->description !!}
          </div>

          <div class="row row-eq-height mb-4">
            <div class="col-4 col-md-3">
              <div class="property-metas mb-3 h-100">
                <span class="name font-weight-bold">Bedrooms</span>

                <div>
                  <img src="{{ url('/img/bedroom.svg') }}" alt="bedroom">
                  <span class="number">{{ $property->bedroom }}</span>
                </div>
              </div>
            </div>

            <div class="col-4 col-md-3">
              <div class="property-metas mb-3 h-100">
                <span class="name font-weight-bold">Bathrooms</span>

                <div>
                  <img src="{{ url('/img/bathroom.svg') }}" alt="bathroom">
                  <span class="number">{{ $property->bathroom }}</span>
                </div>
              </div>
            </div>

            <div class="col-4 col-md-3">
              <div class="property-metas mb-3 h-100">
                <span class="name font-weight-bold">Packing Space</span>

                <div>
                  <img src="{{ url('/img/car-parking.svg') }}" alt="garage">
                  <span class="number">{{ $property->garage }}</span>
                </div>
              </div>
            </div>

            <div class="col-4 col-md-3">
              <div class="property-metas mb-3 h-100">
                <span class="name font-weight-bold">Living Room</span>

                <div>
                  <img src="{{ url('/img/living-room.svg') }}" alt="garage">
                  <span class="number">{{ $property->living_area }}</span>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="description">
          <div class="card card-p-2 mb-3">
            <h5>Additional Features</h5>
            <hr class="mb-4">

            <div class="property-meta-features">
              <ul class="property-additional-features">
                @if ($features)
                @if ($features->air_conditioning)
                <li>Air Conditioning</li>
                @endif

                @if ($features->cooker)
                <li>Cooker</li>
                @endif

                @if ($features->washing_machine)
                <li>Washing Machine</li>
                @endif

                @if ($features->fans)
                <li>Fans</li>
                @endif

                @if ($features->refrigerator)
                <li>Refrigerator</li>
                @endif

                @if ($features->microwave)
                <li>Microwave</li>
                @endif

                @if ($features->internet_access)
                <li>Internet Access</li>
                @endif

                @if ($features->satellite_tv)
                <li>Satellite Tv</li>
                @endif

                @if ($features->garden)
                <li>Garden</li>
                @endif

                @if ($features->annex)
                <li>Annex (Boys' Quarters)</li>
                @endif

                @if ($features->roof_terrace)
                <li>Roof Terrace</li>
                @endif

                @if ($features->swimming_pool)
                <li>Swimming Pool</li>
                @endif

                @if ($features->security_service)
                <li>Security Service</li>
                @endif

                @if ($features->generator)
                <li>Generator</li>
                @endif

                @if ($features->water_reservoir)
                <li>Water Reservoir</li>
                @endif
                @endif

              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="col-12">
        <div class="video-presentaion">
          <div class="card card-p-2">
            <h5>Video Presentation</h5>
            <hr class="mb-4">

            @if ($property->video_url)
            <div>
              <iframe width="100%" height="500" src="{{ $property->video_url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endif
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