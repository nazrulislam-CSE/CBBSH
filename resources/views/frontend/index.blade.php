@extends('layouts.frontend.app')
@section('content')
    <style>
        .partner-logo {
            height: 80px;
            filter: grayscale(0%);
            transition: var(--transition);
            margin: 15px;
            opacity: 0.7;
        }
    </style>
    <!-- Rest of the content remains the same -->
    <!-- Hero Slider -->

    <section class="hero-slider">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($sliders as $key => $slider)
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}"></button>
                @endforeach
            </div>

            <div class="carousel-inner">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('upload/slider/' . $slider->image) }}" alt="Slide {{ $key + 1 }}"
                            class="d-block w-100" />
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>


    <!-- Mission & Vision Section -->
    <section class="mission-vision">
        <div class="container">
            <div class="row">
                @if ($about)
                    <div class="col-md-6">
                        <img src="{{ !empty($about->image) ? url('upload/about/' . $about->image) : url('upload/no_image.jpg') }}"
                            height="500px;" alt="Mission Vision" />

                        @if ($about->vission)
                            <div class="icon-box fade-in delay-1">
                                <h2>VISION</h2>
                                <p>{!! $about->vission !!}</p>
                            </div>
                        @endif

                        @if ($about->mission)
                            <div class="icon-box fade-in delay-2">
                                <h2>MISSION</h2>
                                <p>{!! $about->mission !!}</p>
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6 fade-in">
                        <div class="icon-box fade-in delay-1 mt-1">
                            <h3 class="text-center">About Us</h3>
                            <hr>
                            <p>{!! $about->description !!}</p>
                        </div>
                    </div>
                @else
                    <p>No About information found.</p>
                @endif
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title fade-in">Our Services</h2>
            <div class="row">
                @foreach ($services as $key => $service)
                    <div class="col-md-3 fade-in {{ $key >= 1 ? 'delay-' . $key : '' }}">
                        <div class="service-card">
                            <img src="{{ !empty($service->image) ? url('upload/service/' . $service->image) : url('upload/no_image.jpg') }}"
                                alt="{{ $service->title }}" class="service-img" />
                            <div class="service-content">
                                <h5><a href="#">{{ $service->title }}</a></h5>
                            </div>
                        </div>
                    </div>
                    @if (($key + 1) % 4 == 0)
            </div>
            <div class="row mt-4">
                @endif
                @endforeach
            </div>
        </div>
    </section>


    <!-- Gallery Section -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title fade-in">Our Gallery</h2>
            <div class="row">
                @foreach ($gallerys as $key => $gallery)
                    <div class="col-md-3 fade-in {{ $key % 4 != 0 ? 'delay-' . $key % 4 : '' }}">
                        <div class="service-card">
                            <img src="{{ !empty($gallery->image) ? url('upload/gallery/' . $gallery->image) : url('upload/no_image.jpg') }}"
                                alt="Gallery Image" class="service-img" />
                        </div>
                    </div>
                    @if (($key + 1) % 4 == 0)
            </div>
            <div class="row mt-2">
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- 33 Years Services Section -->
    <section class="stats-section">
        <div class="container">
            <h2 class="section-title text-white fade-in">
                33 Years Services In Eye Care
            </h2>
            <div class="row">
                <div class="col-md-3 col-6 fade-in">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="fas fa-eye"></i></div>
                        <div class="stat-number">778,219</div>
                        <div class="stat-label">Vision Corrected</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 fade-in delay-1">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="fas fa-user-injured"></i></div>
                        <div class="stat-number">2,067,279</div>
                        <div class="stat-label">Outpatients Treated</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 fade-in delay-2">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="fas fa-procedures"></i></div>
                        <div class="stat-number">146,536</div>
                        <div class="stat-label">Ocular Surgeries</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 fade-in delay-3">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="fas fa-low-vision"></i></div>
                        <div class="stat-number">113,501</div>
                        <div class="stat-label">Cataract Surgeries</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inspiring Stories Section -->
    <section class="stories-section">
        <div class="container">
            <h2 class="section-title fade-in">Inspiring Stories of Recovery</h2>
            <div class="row">
                @foreach ($stories as $index => $story)
                    <div class="col-md-6 fade-in delay-{{ $index % 4 }}">
                        <div class="story-card">
                            <img src="{{ !empty($story->image) ? url('upload/story/' . $story->image) : url('upload/no_image.jpg') }}"
                                alt="{{ $story->title }}" />
                            <div>
                                <h6>{{ $story->title }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <h2 class="section-title fade-in">Our Partners & Supporters</h2>
            <div class="row justify-content-center">
                @foreach ($partners as $key => $partner)
                    <div class="col-md-2 col-4 text-center fade-in delay-{{ $key }}">
                        <img src="{{ !empty($partner->image) ? url('upload/partner/' . $partner->image) : url('upload/no_image.jpg') }}"
                            alt="{{ $partner->name ?? 'Partner Logo' }}" class="partner-logo img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- News & Events Section -->
    <section class="news-events">
        <div class="container">
            <div class="row">
                {{-- News & Events --}}
                <div class="col-md-6 fade-in">
                    <h4 class="mb-4">News & Events</h4>
                    <div class="news-slider-container">
                        <div class="news-slider">
                            @foreach ($newsEvents as $index => $event)
                                <div class="news-slide {{ $loop->first ? 'active' : '' }}">
                                    <div class="news-content">
                                        <h5>{{ $event->title }}</h5>
                                        <p>
                                            @if ($event->organizer)
                                                Organized by: {{ $event->organizer }}<br>
                                            @endif
                                            @if ($event->date)
                                                Date: {{ \Carbon\Carbon::parse($event->date)->format('d F, Y') }}<br>
                                            @endif
                                            @if ($event->venue)
                                                Venue: {{ $event->venue }}
                                            @endif
                                        </p>
                                        @if ($event->link)
                                            <a href="{{ $event->link }}" class="btn btn-light mt-3">Read More</a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="news-indicators">
                            @foreach ($newsEvents as $i => $event)
                                <div class="news-indicator {{ $loop->first ? 'active' : '' }}"
                                    data-slide="{{ $i }}"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 fade-in delay-1">
                    <h4 class="mb-4">Notice</h4>
                    @forelse ($notices as $notice)
                        <div class="notice-item">
                            <div class="row">
                                <div class="col-4">
                                    <h5>{{ \Carbon\Carbon::parse($notice->date)->format('d F Y') }}</h5>
                                </div>
                                <div class="col-8">
                                    <p><strong>{{ $notice->title }}</strong></p>
                                    @if ($notice->file_url)
                                        <a href="{{ asset('storage/' . $notice->file_url) }}" target="_blank"
                                            class="btn btn-primary btn-sm">
                                            Click here
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No notices available.</p>
                    @endforelse
                </div>

            </div>
        </div>
    </section>

    <!-- Developers Section -->
    <section class="committee-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">Our Committee Team</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Address / Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>
                                    <img src="{{ !empty($team->image) ? url('upload/team/' . $team->image) : url('upload/avatar5.png') }}"
                                        width="80" class="rounded" alt="{{ $team->name }}">
                                </td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->designation }}</td>
                                <td>
                                    {!! nl2br(e($team->address)) !!}
                                    @if (!empty($team->phone))
                                        <br>{{ $team->phone }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title fade-in">Find Us</h2>
            <div class="map-container fade-in">
                <!-- Google Map would be embedded here -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.69481256426!2d91.97995237597729!3d21.441237473482428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc90142468acf%3A0xc565870393eb91d!2sCox&#39;s%20Bazar%20Baitush%20Sharaf%20Complex!5e0!3m2!1sen!2sbd!4v1761626629689!5m2!1sen!2sbd"
                    width="100%" height="100%" style="border: 0; border-radius: 10px" allowfullscreen=""
                    loading="lazy" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
