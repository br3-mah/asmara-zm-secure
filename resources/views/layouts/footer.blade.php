 <!-- footer -->
 <?php include ('footer.php') ?>
 <!-- link that opens popup -->

 <!-- form itself end-->
 <form action="{{ route('inquire-booking') }}" method="POST" id="test-form" class="white-popup-block mfp-hide">
   @csrf
   <div class="popup_box">
     <div class="popup_inner">
       <h3>Booking Inquiry</h3>
       {{-- <h3>Check Availability</h3> --}}
         <div class="row">           
            <div class="col-xl-12">
                <select name="adult_num" class="form-select wide" id="default-select" class="">
                    <option value="0" data-display="Country"></option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Australia">Australia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Canada">Canada</option>
                    <option value="Congo">Congo</option>
                    <option value="China">China</option>
                    <option value="Egypt">Egypt</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Russia">Russia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                    <option value="Zambia">Zambia</option>
                </select>
            </div>
            <div class="col-xl-6 input-group-lg">
                <input name="fname" class="form-control mb-4" placeholder="First Name" />
            </div>
            <div class="col-xl-6 input-group-lg">
                <input name="lname" class="form-control mb-4" placeholder="Last Name" />
            </div>
            <div class="col-xl-6 input-group-lg">
                <input name="email" class="form-control" placeholder="Your Email" />
            </div>
            <div class="col-xl-6">
                <input name="check_in_date" id="datepicker" placeholder="Check in date" />
            </div>
            <div class="col-xl-6">
                <input name="check_out_date" id="datepicker2" placeholder="Check out date" />
            </div>
            <div class="col-xl-6">
                <select name="adult_num" class="form-select wide" id="default-select" class="">
                    <option value="0" data-display="Adult"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="0">None</option>
                </select>
            </div>
            <div class="col-xl-6">
                <select name="children_num" class="form-select wide" id="default-select" class="">
                    <option value="0" data-display="Children"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="0">None</option>
                </select>
            </div>
            <div class="col-xl-6">
                <select name="room_type" class="form-select wide" id="default-select" required>
                    <option value="" data-display="Room type">Room type</option>
                    @forelse ($room_types as $type)
                        <option value="{{$type->name}}">{{$type->name}}</option>
                    @empty
                        <option value="">No Rooms Found</option>
                    @endforelse
                </select>
            </div>  
            <div class="col-xl-12 input-group-lg">
                <textarea cols="50" name="special_requests" class="form-control mb-3 wide" placeholder="Any Special Requests?"></textarea>
            </div>
                                                             
            <div class="col-xl-12">
                <button id="ogSubmit" type="submit" class="boxed-btn3">
                    Inquire Now
                </button>
                
                <button id="submitting" disabled class="boxed-btn2 disabled">
                    Loading ...
                </button>
            </div>
         </div>
     </div>
   </div>
 </form>

    {{-- <div class="modal" id="chatbot" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

<?php include('./chatbot/chatdialog.php'); ?>


<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/chat.js"></script>
<script src="js/all.min.js"></script>
<script src="js/smtp.js"></script>

<script src="js/main.js"></script>

<script>
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#submitting').hide();

    $("#datepicker").datepicker({
        iconsLibrary: "fontawesome",
        icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>',
        },
    });

    $("#datepicsker2").datepicker({
        iconsLibrary: "fontawesome",
        icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>',
        },
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/toastr.js"></script>
<script src="js/booking.js"></script>
<script src="js/email.js"></script>
</body>
</html>