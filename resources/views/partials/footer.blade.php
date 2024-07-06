<?php
 $link = config('linksComics')
?>

<footer class=" container-fluid myBg">
    <section class="container-fluid d-flex justify-content-space-between mt-3 ">

        {{--Left Section  --}}
        <div class="col-12 col-md-6 d-flex flex-wrap text-decoration-none p-5">
            <div class="col-4 col-md-6 col-lg-4 py-2">
                <ul>
                    <h3>DC COMICS</h3>
                     
                    @foreach ($link["links"]["dcComics"] as $i => $item)  
                    <li>{{$item}}</li>
                    @endforeach     
                    
                </ul>
                <ul>
                    <h3>SHOP</h3>
                    
                    @foreach ($link["links"]["shop"] as $i => $item)   
                    <li>{{$item}}</li>
                    @endforeach     

                </ul>
            </div>
            <div class="col-4 col-md-6 col-lg-4 py-2">
                <ul>
                    <h3>DC</h3>
                       
                    @foreach ($link["links"]["dc"] as $i => $item)   
                    <li>{{$item}}</li>
                    @endforeach

                </ul>
            </div>
            <div class="col-4 col-md-12 col-lg-4 py-2">
                <ul>
                    <h3>SITES</h3>
                    
                    @foreach ($link["links"]["sites"] as $i => $item)   
                    <li>{{$item}}</li>
                    @endforeach

                </ul>
            </div>
        </div>
        <!-- Right Section -->
        <div class="footerBG d-none d-md-block col-md-6" alt=""></div>  
    </section>
</footer>
