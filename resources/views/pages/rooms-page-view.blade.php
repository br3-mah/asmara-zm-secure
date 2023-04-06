@include('layouts.head')
<style>
.slider {
  position: relative;
}

.slider__container {
  cursor: grab;
  display: flex;
  overflow: hidden;
  scroll-behavior: smooth;
}

.slider__container.dragging {
  scroll-behavior: auto;
  cursor: grabbing;
}

.slider__item {

  flex: 0 0 auto;
  
}

.slider__container[data-step="4"] .slider__item {
  width: calc(100% / 4);
}

.slider__container[data-step="3"] .slider__item {
  width: calc(100% / 3);
}

.slider__container[data-step="2"] .slider__item {
  width: calc(100% / 2);
}

.slider__container[data-step="1"] .slider__item {
  width: calc(100% / 1);
}

@media screen and (max-width: 1024px) {
  .slider__item,
  .slider__container[data-step="4"] .slider__item {
    width: calc(100% / 3);
  }
}

@media screen and (max-width: 768px) {
  .slider__item,
  .slider__container[data-step="4"] .slider__item,
  .slider__container[data-step="3"] .slider__item {
    width: calc(100% / 2);
  }
}
@media screen and (max-width: 480px) {
  .slider__item,
  .slider__container[data-step="4"] .slider__item,
  .slider__container[data-step="3"] .slider__item,
  .slider__container[data-step="2"] .slider__item {
    width: calc(100% / 1);
  }
}

.slider__control {
  font-size: 16px;
  border: none;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  color: #000;
  background: #fff;
  cursor: pointer;
  opacity: .5;
  transition: all .3s;
}

.slider__control.prev {
  left: 16px;
}

.slider__control.next {
  right: 16px;
}

.slider__control:hover {
  opacity: 1;
  transform: translateY(-50%) scale(1.2);
}

.slider__item img {
  -webkit-user-drag: none;
  -khtml-user-drag: none;
  -moz-user-drag: none;
  -o-user-drag: none;
  user-select: none;
}
</style>
<!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1" style="background-image: url('img/banner/bradcam2.png');">
        <h3>Luxury Rooms</h3>
    </div>
<!-- bradcam_area_end -->

  
  <!-- features_room_startt -->
   <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <span>Featured Rooms</span>
                    <h3>Pick a Room</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="rooms_here slider">
          <button class="slider__control prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
            </svg>
          </button>
          <button class="slider__control next">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
            </svg>
          </button>
  
          <div class="slider__container" data-multislide="true" data-step="2">
            @forelse ($room_types as $type)
              @if ($type->cover != null)
                <div class="single_rooms slider__item">
                  <div class="room_thumb">
                      @if ($type->name == 'Double Deluxe Room')
                      <img style="width: 700px; height:400px" src="img/rooms/2.png" alt="{{ $type->name }}" />
                      @else
                      <img style="width: 700px; height:400px" src="img/rooms/1.png" alt="{{ $type->name }}" />
                      @endif                    
                    <div
                      class="room_heading d-flex justify-content-between align-items-center"
                    >
                      <div class="room_heading_inner">
                        <span>From K{{ $type->price }}/{{ $type->per }}</span>
                        <h3>{{ $type->name }}</h3>
                      </div>
                      <a href="#test-form" class=" popup-with-form line-button">Book now</a>
                    </div>
                  </div>
                </div>
              @endif
            @empty
            <p>No Rooms Available</p>
            @endif
            
            
          </div>
  
        </div>
    </div>
  <!-- features_room_end -->
  <!-- features_room_end -->
<!-- offers_area_start -->
  <div class="offers_area padding_top">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title text-center mb-100">
            <span>Complementary Services</span>
            <h3>Additional</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-4">
          <div class="single_offers">
            <div class="about_thumb">
              <img src="img/offers/conference.jpg" alt="" />
            </div>
            <h3>
              The Conference Room
            </h3>
            <ul>
              <li>Spacious</li>
              <li>All Resources in Availability</li>
              <li>Food and drinks</li>
            </ul>
            <a href="#" class="book_now">book now</a>
          </div>
        </div>
        <div class="col-xl-4 col-md-4">
          <div class="single_offers">
            <div class="about_thumb">
              <img src="img/offers/bar.jpg" alt="" />
            </div>
            <h3>
              The Bar
            </h3>
            <ul>
              <li>Assorted Drinks</li>
              <li>Music and band</li>
              <li>Open 24/7hr</li>
            </ul>
            <a href="#" class="book_now">book now</a>
          </div>
        </div>
        <div class="col-xl-4 col-md-4">
          <div class="single_offers">
            <div class="about_thumb">
              <img src="img/offers/restuarant.jpg" alt="" />
            </div>
            <h3>
              The Restuarant
            </h3>
            <ul>
              <li>Delicious Meals</li>
              <li>Drinks and Meals</li>
              <li>Children friendly</li>
            </ul>
            <a href="#" class="book_now">book now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- offers_area_end -->
  <!-- forQuery_start -->
  <div class="forQuery">
    <div class="container">
      <div class="row">
        <div class="col-xl-10 offset-xl-1 col-md-12">
          <div class="Query_border">
            <div class="row align-items-center justify-content-center">
              <div class="col-xl-6 col-md-6">
                <div class="Query_text">
                  <p>For Reservation 0r Query?</p>
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="phone_num">
                  <a href="tel:0211 355 875" class="mobile_no">0211 355 875</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- forQuery_end-->

  <!-- instragram_area_start -->
  <div class="instragram_area">
    <div class="single_instagram">
      <img src="img/instragram/1.png" alt="" />
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="single_instagram">
      <img src="img/instragram/2.png" alt="" />
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="single_instagram">
      <img src="img/instragram/3.png" alt="" />
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="single_instagram">
      <img src="img/instragram/4.png" alt="" />
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="single_instagram">
      <img src="img/instragram/5.png" alt="" />
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- instragram_area_end -->

  <script>
  const sliders = [...document.querySelectorAll(".slider__container")];
  const sliderControlPrev = [...document.querySelectorAll(".slider__control.prev")];
  const sliderControlNext = [...document.querySelectorAll(".slider__control.next")];
  
  sliders.forEach((slider, i) => {
    let isDragStart = false,
        isDragging = false,
        isSlide = false,
        prevPageX,
        prevScrollLeft,
        positionDiff;
  
    const sliderItem = slider.querySelector(".slider__item");
    var isMultislide = (slider.dataset.multislide === 'true');
  
    sliderControlPrev[i].addEventListener('click', () => {
      if (isSlide) return;
      isSlide = true;
      let slideWidth = isMultislide ? slider.clientWidth : sliderItem.clientWidth;
      slider.scrollLeft += -slideWidth;
      setTimeout(function(){ isSlide = false; }, 700);
    });
  
    sliderControlNext[i].addEventListener('click', () => {
      if (isSlide) return;
      isSlide = true;
      let slideWidth = isMultislide ? slider.clientWidth : sliderItem.clientWidth ;
      slider.scrollLeft += slideWidth;
      setTimeout(function(){ isSlide = false; }, 700);
    });
  
    function autoSlide() {
      if(slider.scrollLeft - (slider.scrollWidth - slider.clientWidth) > -1 || slider.scrollLeft <= 0) return;
      positionDiff = Math.abs(positionDiff);
      let slideWidth = isMultislide ? slider.clientWidth : sliderItem.clientWidth;
      let valDifference = slideWidth - positionDiff;
      if(slider.scrollLeft > prevScrollLeft) {
          return slider.scrollLeft += positionDiff > slideWidth / 5 ? valDifference : -positionDiff;
      }
      slider.scrollLeft -= positionDiff > slideWidth / 5 ? valDifference : -positionDiff;
    }
  
    function dragStart(e) {
      if (isSlide) return;
      isSlide = true;
      isDragStart = true;
      prevPageX = e.pageX || e.touches[0].pageX;
      prevScrollLeft = slider.scrollLeft;
      setTimeout(function(){ isSlide = false; }, 700);
    }
  
    function dragging(e) {
      if(!isDragStart) return;
      e.preventDefault();
      isDragging = true;
      slider.classList.add("dragging");
      positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
      slider.scrollLeft = prevScrollLeft - positionDiff;
    }
  
    function dragStop() {
      isDragStart = false;
      slider.classList.remove("dragging");
      if(!isDragging) return;
      isDragging = false;
      autoSlide();
    }
  
    addEventListener("resize", autoSlide);
    slider.addEventListener("mousedown", dragStart);
    slider.addEventListener("touchstart", dragStart);
    slider.addEventListener("mousemove", dragging);
    slider.addEventListener("touchmove", dragging);
    slider.addEventListener("mouseup", dragStop);
    slider.addEventListener("touchend", dragStop);
    slider.addEventListener("mouseleave", dragStop);
  });
</script>
@include('layouts.footer')