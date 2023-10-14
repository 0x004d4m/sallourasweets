<div id="fh5co-menus" data-section="menu">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">{{ __('content.menu_title') }}</h2>
                <p class="sub-heading to-animate">{{ __('content.menu_text') }}</p>
            </div>
        </div>
        <div class="row row-padded">
            @foreach ($Categories as $category)
                @if (count($category->items)>0)
                    <div class="col-md-6">
                        <div class="fh5co-food-menu to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ url($category->image) }})"></div>
                            <span class="h2">{{ $category->name }}</span>
                            <ul>
                                @foreach ($category->items as $key => $item)
                                    <a href="/Items/{{ $item->id }}">
                                        <li>
                                            <div class="fh5co-food-desc">
                                                <figure>
                                                    <img src="{{ url($item->image) }}" class="img-responsive"
                                                        alt="{{ $item->name }}">
                                                </figure>
                                                <div>
                                                    <h3>{{ $item->name }}</h3>
                                                    <p>{{ $item->description }}</p>
                                                </div>
                                            </div>
                                            <div class="fh5co-food-pricing">
                                                {{ $item->price . " " . __('content.currency') }}
                                            </div>
                                        </li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
