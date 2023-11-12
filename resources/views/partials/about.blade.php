<div class="row px-5 py-5 bg-y" id="about">
    <div class="col-12">
        <div class="row px-5 py-5">
            <div class="col-md-6 pt-5">
                <h2 class="text-start">{{ __('content.about_title') }}</h2>
                <p class="text-start">{{ __('content.about_text') }}</p>
            </div>
            <div class="col-md-6">
                <img src="{{ url($AboutImage->image) }}" class="img-fluid rounded-start"
                    alt="{{ __('content.about_title') }}">
            </div>
        </div>
    </div>
</div>
