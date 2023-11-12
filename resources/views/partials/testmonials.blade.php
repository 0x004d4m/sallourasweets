<div id="row px-5 py-5">
    <div class="col-12">
        <div id="cardCarousel" class="carousel carousel-dark slide animate-on-scroll bg-y" data-bs-ride="carousel" data-bs-touch="true">
            <div class="row justify-content-center">
                <div class="col-10">
                    <!-- Carousel indicators -->
                    <div class="carousel-indicators">
                        @foreach ($Testmonials as $key=>$testmonial)
                            @if ($key == 0)
                                <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="{{ $key }}" class="active" aria-current="true"
                                    aria-label="Slide {{ $key +1}}"></button>
                            @else
                                <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="{{ $key }}" aria-label="Slide {{ $key +1}}"></button>
                            @endif

                        @endforeach
                    </div>

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        @foreach ($Testmonials as $key=>$testmonial)
                            @if ($key == 0)
                                <div class="carousel-item active">
                                    <div class="card">
                                        <div class="card-body text-center mb-5">
                                            <p class="card-text">{{ $testmonial->description }}</p>
                                            <p class="text-dark">&mdash; {{ $testmonial->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="carousel-item">
                                    <div class="card">
                                        <div class="card-body text-center mb-5">
                                            <p class="card-text">{{ $testmonial->description }}</p>
                                            <p class="text-dark">&mdash; {{ $testmonial->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <!-- Carousel controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                        <i class="fa fa-angle-left fa-2x text-dark" aria-hidden="true"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                        <i class="fa fa-angle-right fa-2x text-dark" aria-hidden="true"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
