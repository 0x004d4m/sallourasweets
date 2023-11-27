<div id="row px-5 py-5">
    <div class="col-12 text-center">
        <h2>{{ __('content.testmonials') }}</h2>
        <div id="cardCarousel" class="carousel carousel-dark slide animate-on-scroll" data-bs-ride="carousel" data-bs-touch="true">
            <div class="row justify-content-center">
                <div class="col-10 col-md-6">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        @foreach ($Testmonials as $key=>$testmonial)
                            @if ($key == 0)
                                <div class="carousel-item active">
                                    <div class="card">
                                        <div class="card-body mb-5">
                                            <div class="row">
                                                <div class="col-2 text-center">
                                                    <img src="{{ $testmonial->image }}" class="img-fluid rounded-circle" style="height:75px">
                                                </div>
                                                <div class="col-10 text-start">
                                                    <p class="text-dark">&mdash; {{ $testmonial->name }}</p>
                                                    @for ($i=0;$i<$testmonial->stars;$i++)
                                                            <i class="fa fa-star" style="color: gold;"></i>
                                                    @endfor
                                                    <p class="card-text">{{ $testmonial->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="carousel-item">
                                    <div class="card">
                                        <div class="card-body mb-5">
                                            <div class="row">
                                                <div class="col-2 text-center">
                                                    <img src="{{ $testmonial->image }}" class="img-fluid rounded-circle" style="height:75px">
                                                </div>
                                                <div class="col-10">
                                                    <p class="text-dark">&mdash; {{ $testmonial->name }}</p>
                                                    @for ($i=0;$i<$testmonial->stars;$i++)
                                                            <i class="fa fa-star" style="color: gold;"></i>
                                                    @endfor
                                                    <p class="card-text">{{ $testmonial->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div id="observedElement"></div>
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
    <div class="col-12 mt-5 animate-on-scroll">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="counter" id="counter1">
                            <p>{{ $Counters[0]->name }}</p>
                            <h1>0</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="counter" id="counter2">
                            <p>{{ $Counters[1]->name }}</p>
                            <h1>0</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="counter" id="counter3">
                            <p>{{ $Counters[2]->name }}</p>
                            <h1>0</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="counter" id="counter4">
                            <p>{{ $Counters[3]->name }}</p>
                            <h1>0</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
