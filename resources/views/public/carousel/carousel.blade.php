<div id="homeBlock" class="pageBlock">
    <div id="carouselMain" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

            {{--  Slide 1--}}
            <div class="carousel-item active">
                <img class="d-block d-md-none w-100" src="{{ asset('images/carousel/1sm.jpg') }}" alt="">
                <img class="d-none d-md-block w-100" src="{{ asset('images/carousel/1.jpg') }}" alt="">

                @include('public.carousel.carousel_caption')

            </div>

            {{--Slide 2--}}
            <div class="carousel-item">
                <img class="d-block d-md-none w-100" src="{{ asset('images/carousel/2sm.jpg') }}" alt="">
                <img class="d-none d-md-block w-100" src="{{ asset('images/carousel/2.jpg') }}" alt="">

                @include('public.carousel.carousel_caption')

            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
