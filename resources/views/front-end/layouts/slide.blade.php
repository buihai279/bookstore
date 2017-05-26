<!-- slide -->
<div class="swiper-container">
    <ul class="swiper-wrapper">
        @foreach ($slides as $element)
            <li class="swiper-slide" >
                <a href="#" >
                   <img class="responsive-img" style="height: 300px" src="{{ URL::asset($element->slide_image) }}">
                </a>
            </li>
        @endforeach
    </ul>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    
</div>