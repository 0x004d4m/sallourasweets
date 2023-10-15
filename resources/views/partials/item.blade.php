<div id="fh5co-featured" data-section="features">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">{{ $Item->name }}</h2>
                <p class="pricing to-animate">{{ $Item->price . ' ' . __('content.currency') }}</p>
                <img class="to-animate" src="{{ url($Item->image) }}" alt="{{ $Item->name }}" style="width: 100%">
                <br>
                <br>
                <br>
                <p class="sub-heading to-animate">{{ $Item->description }}</p>
            </div>
        </div>
    </div>
</div>
