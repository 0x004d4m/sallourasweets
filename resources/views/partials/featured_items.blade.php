<div class="row px-5 py-5" id="features">
    <div class="col-12">
        <div class="row text-center justify-content-center animate-on-scroll">
            <div class="col-md-12">
                <h2 class="heading">{{ __('content.featured_items_title') }}</h2>
                <p class="sub-heading">{{ __('content.featured_items_text') }}</p>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($FeateredItems as $key => $item)
                @if ($key % 2 == 0)
                    <div class="col-6 animate-on-scroll">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 text-center">
                                    <img src="{{ url($item->image) }}" class="img-fluid rounded-start"
                                        alt="{{ $item->name }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $item->name }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text"><small
                                                class="text-muted">{{ $item->price . ' ' . __('content.currency') }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-6 animate-on-scroll">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $item->name }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text"><small
                                                class="text-muted">{{ $item->price . ' ' . __('content.currency') }}</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="{{ url($item->image) }}" class="img-fluid rounded-start"
                                        alt="{{ $item->name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
