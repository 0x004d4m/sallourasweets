<div id="fh5co-type" style="background-image: url({{ url($FeaturedCategoriesImage->image) }});" data-stellar-background-ratio="0.5">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="row">
            @foreach ($FeateredCategories as $category)
                <div class="col-md-3 to-animate">
                    <div class="fh5co-type text-center">
                        <img src="{{ url($category->image) }}" alt="{{ $category->name }}">
                        <h3 style="padding-top:0">{{ $category->name }}</h3>
                        <p>{{ $category->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
