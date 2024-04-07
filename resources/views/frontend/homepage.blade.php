@extends('frontend.layout')

@section('content')
<div class="hero" style="background-image: url('{{ asset('frontend/images/hero_1_a.jpg') }}')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">
              <div class="row mb-5">
              </div>
              <div class="container">
                <div class="row">
                @foreach($cars as $car)
                  <div class="col-md-6 col-lg-4 mb-4">
                    <div class="listing d-block align-items-stretch">
                      <div class="listing-img h-100 mr-4">
                        <img src="{{ Storage::url($car->image) }}" alt="Image" class="img-fluid" />
                      </div>
                      <div class="listing-contents h-100">
                        <h3>{{ $car->nama_mobil }}</h3>
                        <div class="rent-price">
                          <strong>Rp{{ number_format($car->price,0,",",".") }}</strong><span class="mx-1">/</span>hari
                        </div>
                        <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                          <div class="listing-feature pr-4">
                            <span class="caption">Pintu:</span>
                            <span class="number">{{ $car->pintu }}</span>
                          </div>
                          <div class="listing-feature pr-4">
                            <span class="caption">Penumpang:</span>
                            <span class="number">{{ $car->penumpang }}</span>
                          </div>
                        </div>
                        <div>
                          <p>
                           {{ $car->description}}
                          </p>
                          <p>
                            <a href="{{ route('car.show', $car) }}" class="btn btn-primary btn-sm">Sewa Sekarang</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="site-section bg-light">
        
      </div>
@endsection