@extends('welcome')
@section('frontend_content')

<div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">
        @foreach ($slider_properties as $slider_property)
        @php
        $slider_image = App\Models\PropertyImage::where('property_id', $slider_property->id)->first();
        @endphp
        <div class="swiper-slide carousel-item-a intro-item bg-image"
            style="background-image: url('{{ asset($slider_image->image_url) }}');">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">

                                    <h1 class="intro-title mb-4 ">
                                        <span class="color-b">{{$slider_property->no}} </span>
                                        {{$slider_property->street}}
                                        <br> {{$slider_property->city}}, {{$slider_property->country}}
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="{{route('properties.show',[$slider_property->id])}}"><span
                                                class="price-a">Price | {{$slider_property->currency_type}}
                                                {{number_format($slider_property->price)}}</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>

<main id="main">
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="bi bi-cart"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Lifestyle</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien
                                massa,
                                convallis a pellentesque
                                nec, egestas non nisi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="bi bi-calendar4-week"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Loans</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.
                                Mauris blandit
                                aliquet elit, eget tincidunt
                                nibh pulvinar a.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="bi bi-card-checklist"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Sell</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien
                                massa,
                                convallis a pellentesque
                                nec, egestas non nisi.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest Properties</h2>
                        </div>
                        <div class="title-link">
                            <a href="{{route('all.properties')}}">All Property
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($latest_properties as $latest_property)
                    @php
                    $latest_property_image = App\Models\PropertyImage::where('property_id',
                    $latest_property->id)->first();
                    @endphp
                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img style="width: 400px; height:600px; object-fit: cover;" src="{{asset($latest_property_image->image_url)}}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">{{$latest_property->no}}
                                                {{$latest_property->street}}
                                                <br /> {{$latest_property->city}} {{$latest_property->country}}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Price | {{$latest_property->currency_type}}
                                                {{number_format($latest_property->price)}}</span>
                                        </div>
                                        <a href="{{route('properties.show',[$latest_property->id])}}"
                                            class="link-a">Click here to view
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="propery-carousel-pagination carousel-pagination"></div>
        </div>
    </section>
       <section class="section-agents section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Best Agents</h2>
                </div>
                <div class="title-link">
                  <a href="agents-grid.html">All Agents
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach ($agents as $agent)
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img style="width: 400px; height:600px; object-fit: cover;" src="{{asset($agent->photo)}}" alt="" class="img-d img-fluid">
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="{{route('agent.show', [$agent->id])}}"
                            class="link-two">{{$agent->name}}
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                   
                    <div class="info-agents color-a">
                      <p>
                        <strong>Phone: </strong> {{$agent->phone}}
                      </p>
                      <p>
                        <strong>Email: </strong> {{$agent->email}}
                      </p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section><!-- End Agents Section -->
</main>
@endsection
