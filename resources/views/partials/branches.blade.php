<div class="row p-5" id="branches" style="background-image: url({{ url($BranchesImage->image) }});">
    <div class="col-12">
        <div class="row text-center justify-content-center">
            <div class="col-md-12 animate-on-scroll">
                <h2 class="heading">{{ __('content.branches_title') }}</h2>
                <p class="sub-heading">{{ __('content.branches_text') }}</p>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($Branches as $branch)
                <div class="col-6 col-md-4 animate-on-scroll mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <h3>{{ $branch->address }}</h3>
                            <img src="{{ url($branch->image) }}" class="img-responsive"
                                style="padding-top: 10px; padding-bottom: 10px; width: 100%"
                                alt="{{ $branch->address }}">
                            <p>
                                <a href="tel:{{ $branch->phone }}" target="_blank" class="btn btn-outline-primary"><i
                                        class="fa fa-phone"></i></a>
                                <a href="{{ $branch->location }}" target="_blank" class="btn btn-outline-primary"><i
                                        class="fa fa-map-marker"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
