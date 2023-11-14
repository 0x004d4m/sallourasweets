<div class="row p-5 bg-y" id="menu">
    <div class="col-12">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="animate-on-scroll">{{ __('content.menu_title') }}</h2>
                <p class="animate-on-scroll">{{ __('content.menu_text') }}</p>
            </div>
        </div>
        <div class="row pt-5 text-center justify-content-center">
            @foreach ($Categories as $category)
                <div class="col-12 text-center pb-5 animate-on-scroll text-center">
                    <a href="/Categories/{{ $category->id }}">
                        <img src="{{ url($category->image) }}" class="img-fluid rounded" alt="{{ $category->name }}">
                        <br>
                        <br>
                        <h3>{{ $category->name }}</h3>
                    </a>
                    <a href="/Categories/{{ $category->id }}" class="btn btn-primary">{{ __('content.see_more') }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
