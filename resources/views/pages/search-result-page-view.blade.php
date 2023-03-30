
@include('layouts.head')
<div class="bradcam_area breadcam_bg_1" style="background-image: url('img/banner/bradcam2.png');">
    <h3>Search Results</h3>
</div>
<div>
    <div class="features_room">
        <div style=" class="container">
            <div class="row">
                <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <br>
                    <h3>Available Rooms</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            @forelse ($rooms as $room )
                <div class="single_rooms">
                    <div class="room_thumb">
                        <img src="img/rooms/1.png" alt="" />
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <h4 style="color:white">Room No. {{ $room['room_number'] }}</h4>
                                <span>From K{{ $room['price'] }}/{{ $room['categories']['per'] }}</span>
                                <h3>{{ $room['categories']['name'] }}</h3>
                            </div>
                            <a href="{{  }}" class="popup-with-form line-button">Book Now</a>
                        </div>
                    </div>
                </div>
            @empty
                <h3>No Rooms Found.</h3>
            @endforelse
            
        </div>
    </div>
    <div class="col-lg-12">

    </div>
</div>

@include('layouts.footer')
