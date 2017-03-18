<!-- slide -->
<div class="swiper-container">
    <ul class="swiper-wrapper">
    @foreach ($slides as $element)
        <li class="swiper-slide">
            <a href="https://tiki.vn" >
               <img src="{{ URL::asset($element->slide_image) }}">
            </a>
        </li>
    @endforeach
    </ul>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>