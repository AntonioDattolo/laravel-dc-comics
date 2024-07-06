<section class="container-fluid d-flex justify-content-around">
    <div class="swiper-button-prev align-self-center" style=" position:static "></div>
    <div class="swiper d-flex justify-content-center w-100">
       
        <div class="swiper-wrapper">
            
            @foreach ($comics as $item)
            <div class="swiper-slide text-center">
                <a href="comic/{{$item->id}}" >
                    <img src=" {{$item->thumb}}" style="object-fit:cover;" alt="">
                </a>
            </div>
            @endforeach
        </div>
        
    </div>
    <div class="swiper-button-next align-self-center" style=" position:static"></div>
</section>