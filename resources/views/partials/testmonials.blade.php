<div id="row px-5 py-5">
    <div class="col-12">
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
