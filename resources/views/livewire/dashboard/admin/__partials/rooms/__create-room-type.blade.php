<div class="modal fade create-room-type-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Room Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form id="create-room-type-form" action="{{ route('create-room-type') }}" class="needs-validation" validate enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="form-validation">
                            <div class="row">
                                <div class="col-xl-6 col-xxl-6 col-lg-6">
                                    <div class="mb-2 p-2">
                                        <div class="col-12">
                                            <div class="border-2 border-dashed shadow-xs border-slate-200/60 dark:border-darkmode-400 rounded-md p-0">
                                                <div class="h-20 relative image-fit cursor-pointer zoom-in mx-auto">
                                                    <img class="col-12" alt="" id="preview-image-room_type" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fdevelopers.elementor.com%2Fdocs%2Fhooks%2Fplaceholder-image%2F&psig=AOvVaw1D_jfnBOgOPsPKTsGEWftF&ust=1679948068450000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCOjKutW0-v0CFQAAAAAdAAAAABAE">
                                                </div>
                                                <div class="mx-auto cursor-pointer relative mt-5">
                                                    <input type="file" id="room_type_image_create" name="image_path" class="w-full h-full top-0 left-0"> 
                                                </div>
                                            </div>
                                        </div>                                                        
                                    </div>
                                    <div class="mb-3 p-2 row">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control wide" id="validationCustom01" name="name"  placeholder="Enter a Room Type Name.." required>
                                        <div class="invalid-feedback">
                                            Please enter a room type name.
                                        </div>
                                    </div>
                                    <div class="mb-3 p-2 row">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Price
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control wide" id="validationCustom01" name="price"  placeholder="ZMW" required>
                                        <div class="invalid-feedback">
                                            Please enter the price
                                        </div>
                                    </div>  
                                    <div class="mb-3 p-2 row">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Total Occupancy
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control wide" id="validationCustom01" name="size"  placeholder="Enter a Number of People" required>
                                        <div class="invalid-feedback">
                                            Please enter the total number of people to occupy the room.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-2 p-2">
                                        <div class="col-6">
                                            {{-- <div class="border-2 border-dashed shadow-xs border-slate-200/60 dark:border-darkmode-400 rounded-md p-0">
                                                <div class="h-20 relative image-fit cursor-pointer zoom-in mx-auto">
                                                    <img class="col-12" alt="" id="preview-image-before-upload_create" src="{{ asset('public/images/noimage.jpg') }}">
                                                </div>
                                                <div class="mx-auto cursor-pointer relative mt-5">
                                                    <input type="file" id="prof_image_create" name="image_path" class="w-full h-full top-0 left-0"> 
                                                </div>
                                                <small>
                                                </small>
                                            </div> --}}
                                        </div>                                                        
                                    </div>                                              
                                    <div class="mb-3 p-2 row">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Bed Type
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select name="bed_type" class="default-select wide form-control" id="validationCustom05">
                                            <option value="" data-display="Select">Select One</option>
                                            <option value="Double Bed">Double Bed</option>
                                            <option value="Queen Bed">Queen Bed</option>
                                            <option value="Twin Bed">Twin Bed</option>
                                            <option value="Double & Twin Beds">Double & Twin Beds</option>
                                            <option value="Queen & Twin Beds">Queen & Twin Beds</option>
                                            <option value="Queen & Double Beds">Queen & Double Beds</option>
                                            <option value="Queen, Double & Twin Beds">Queen, Double & Twin Beds</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="added_by" value="{{auth()->user()->id}}" />
                                    <div class="mb-3 p-2 row">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Charged
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select name="per" class="default-select wide form-control" id="validationCustom05">
                                            <option value="" data-display="Select">Select one</option>
                                            <option value="day">Daily</option>
                                            <option value="month">Monthly</option>
                                            <option value="year">Yearly</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a one.
                                        </div>
                                    </div>  
                                    <div class="mb-3 p-2 row">
                                        <label class="col-lg-6 col-form-label" for="validationCustom04">Facilities<span
                                                class="text-danger">*</span>
                                        </label>
                                        <textarea name="comments" class="form-control" id="validationCustom04"  rows="5" placeholder="Example: AC, Shower, Double Bed, Towel, Bathup, Coffee Set, LED TV, Wifi etc." required></textarea>
                                        <div class="invalid-feedback">
                                            Ex. AC, Shower, Double Bed, Towel, Bathup, Coffee Set, LED TV, Wifi etc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" data-bs-dismiss="modal" id="success-toastr-success-bottom-left" class="btn btn-primary" >Save changes</button>
                </div>  
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="js/rooms.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $('#room_type_image_create').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#preview-image-room_type').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>