<div id="fh5co-events" data-section="offers" style="background-image: url({{ url($BranchesImage->image) }});"
    data-stellar-background-ratio="0.5">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2 to-animate">
                <h2 class="heading">{{ __('content.branches_title') }}</h2>
                <p class="sub-heading">{{ __('content.branches_text') }}</p>
            </div>
        </div>
        <div class="row">
            @foreach ($Branches as $branch)
                <div class="col-md-4">
                    <div class="fh5co-event to-animate-2">
                        <h3>{{ $branch->address }}</h3>
                        <img src="{{ url($branch->image) }}" class="img-responsive" style="padding-top: 10px; padding-bottom: 10px; width: 100%" alt="{{ $branch->address }}">
                        <p style="font-size: xx-large">
                            <a href="tel:{{ $branch->phone }}" class="link-primary"><i class="icon-phone"></i></a>
                            <a href="{{ $branch->location }}" target="_blank" class="link-primary"><i class="icon-location-pin"></i></a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
