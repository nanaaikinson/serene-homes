@extends('layouts.main')

@section('content')

<div class="site-properties py-5">
  <div class="container">
    <div class="row">
      @if ($properties)
      @foreach ($properties as $property)

      <div class="col-md-6 col-lg-4 mb-3">
        <div class="property-box border-radius-rounded">
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

@stop