<div class="row px-5 py-5" id="about">
    <div class="col-12">
        <div class="row px-md-5 py-5">
            <div class="col-md-6 pt-5 animate-on-scroll">
                <h2 class="@if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') text-end @else text-start @endif">{{ __('content.about_title') }}</h2>
                <p class="@if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') text-end @else text-start @endif">{{ __('content.about_text') }}</p>
            </div>
            <div class="col-md-6 animate-on-scroll">
                <img src="{{ url($AboutImage->image) }}" class="img-fluid rounded-start"
                    alt="{{ __('content.about_title') }}">
            </div>
        </div>
    </div>
</div>
