<div id="fh5co-home" class="js-fullheight" data-section="home">
    <div class="flexslider">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-text">
            <div class="container">
                <div class="row">
                    <h1 style="font-size: 9rem" class="to-animate">{{ __('content.title') }}</h1>
                </div>
            </div>
        </div>
        <ul class="slides">
            <li style="background-image: url({{ url($MainImage1->image) }});" data-stellar-background-ratio="0.5"></li>
            <li style="background-image: url({{ url($MainImage2->image) }});" data-stellar-background-ratio="0.5"></li>
            <li style="background-image: url({{ url($MainImage3->image) }});" data-stellar-background-ratio="0.5"></li>
        </ul>
    </div>
</div>
