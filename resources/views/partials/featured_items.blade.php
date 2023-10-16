<div id="fh5co-featured" data-section="features" dir="ltr">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">{{ __('content.featured_items_title') }}</h2>
                <p class="sub-heading to-animate">{{ __('content.featured_items_text') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="fh5co-grid">
                @php
                    $count = 0;
                @endphp
                @foreach ($FeateredItems as $item)
                    @if ($count == 0)
                        <div class="fh5co-v-half to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img"
                                style="background-image: url({{ url($item->image) }})">
                            </div>
                            <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                                <h2>{{ $item->name }}</h2>
                                <span class="pricing">{{ $item->price . ' ' . __('content.currency') }}</span>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    @endif
                    @if ($count == 1)
                        <div class="fh5co-v-half">
                            <div class="fh5co-h-row-2 to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img"
                                    style="background-image: url({{ url($item->image) }})">
                                </div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-left">
                                    <h2>{{ $item->name }}</h2>
                                    <span class="pricing">{{ $item->price . ' ' . __('content.currency') }}</span>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                    @endif
                    @if ($count == 2)
                            <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ url($item->image) }})">
                                </div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-right">
                                    <h2>{{ $item->name }}</h2>
                                    <span class="pricing">{{ $item->price . ' ' . __('content.currency') }}</span>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($count == 3)
                        <div class="fh5co-v-half">
                            <div class="fh5co-h-row-2 to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img"
                                    style="background-image: url({{ url($item->image) }})">
                                </div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-left">
                                    <h2>{{ $item->name }}</h2>
                                    <span class="pricing">{{ $item->price . ' ' . __('content.currency') }}</span>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                    @endif
                    @if ($count == 4)
                            <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ url($item->image) }})">
                                </div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-right">
                                    <h2>{{ $item->name }}</h2>
                                    <span class="pricing">{{ $item->price . ' ' . __('content.currency') }}</span>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($count == 5)
                        <div class="fh5co-v-half to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img"
                                style="background-image: url({{ url($item->image) }})">
                            </div>
                            <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                                <h2>{{ $item->name }}</h2>
                                <span class="pricing">{{ $item->price . ' ' . __('content.currency') }}</span>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                        @php
                            $count=-1;
                        @endphp
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
</div>
