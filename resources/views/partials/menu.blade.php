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
                            <div style="display: flex; justify-content: space-between;">
                                <span class="h2">{{ $category->name }}</span>
                                <a href="/menu" style="padding-top: 15px; color:#fb6e14;">{{ __('content.more') }}</a>
                            </div>
                            <ul>
                                @foreach ($category->items as $key => $item)
                                    <a href="/Items/{{ $item->id }}">
                                        <li>
                                            <div class="fh5co-food-desc">
                                                <figure>
                                                    <img src="{{ url($item->image) }}" class="img-responsive"
                                                        style="width: 100%"
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
                                        @if ($key == 1)
                                            @php
                                                break;
                                            @endphp
                                        @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
