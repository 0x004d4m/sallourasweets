<div id="fh5co-sayings">
    <div class="container">
        <div class="row to-animate">
            <div class="flexslider">
                <ul class="slides">
                    @foreach ($Testmonials as $testmonial)
                        <li>
                            <blockquote>
                                <p>&ldquo;{{ $testmonial->description }}&rdquo;</p>
                                <p class="quote-author">&mdash; {{ $testmonial->name }}</p>
                            </blockquote>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
