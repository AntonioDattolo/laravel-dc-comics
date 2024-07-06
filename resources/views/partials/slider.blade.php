<section class="container">
    <div class="swiper d-flex justify-content-between">
       
        <div class="swiper-wrapper">
            
            @foreach ($comics as $item)
            <div class="swiper-slide text-center">
                <a href="comic/{{$item->id}}" >
                    <img src=" {{$item->thumb}}" style="object-fit:cover;" alt="">
                </a>
            </div>
            @endforeach
        </div>
        
        <div class="swiper-button-prev" style="left: 0 "></div>
        <div class="swiper-button-next" style="right: 0"></div>
    </div>
</section>