@include('layouts.head')


    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <h3>Contact Us</h3>
      </div>
      <!-- bradcam_area_end -->
  
      <!-- ================ contact section start ================= -->
      <section class="contact-section">
        <div class="container">
          <div class="d-none d-sm-block mb-5 pb-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d961.7012877252408!2d28.32076032916097!3d-15.387035399331594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19408bb0a46cc9e7%3A0xbc7fd4c626788091!2sAsmara!5e0!3m2!1sen!2szm!4v1598742247676!5m2!1sen!2szm"
              width="730"
              height="450"
              frameborder="0"
              style="border: 0"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0"
            ></iframe>
          </div>
  
          <div class="row">
            <div class="col-12">
              <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
           
              <form
                class="form-contact contact_form"
                action="{{ route('send-contact') }}"
                method="post"
                id="contactForm"
              >
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <textarea
                        class="form-control w-100"
                        name="message"
                        id="message"
                        cols="30"
                        rows="9"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter Message'"
                        placeholder=" Enter Message"
                        oninvalid="this.setCustomValidity('Please enter a message!')"
                        oninput="this.setCustomValidity('')"
                        required
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        class="form-control valid"
                        name="number"
                        id="Name"
                        maxlength="13"
                        minlength="10"
                        type="text"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter your number'"
                        oninvalid="this.setCustomValidity('Please enter a valid phone number!')"
                        oninput="this.setCustomValidity('')"
                        placeholder="Enter your number"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        class="form-control valid"
                        name="email"
                        id="email"
                        type="email"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email address'"
                        placeholder="Email"
                        oninvalid="this.setCustomValidity('Please enter a valid email address!')"
                        oninput="this.setCustomValidity('')"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input
                        class="form-control"
                        name="subject"
                        id="Subject"
                        type="text"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter Subject'"
                        placeholder="Enter Subject"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <button id="ogSubmit2"
                    type="submit" name="submit"
                    class="button button-contactForm boxed-btn"
                  >
                    Send
                  </button>
                  <button id="submitting2" 
                    class="button button-contactForm boxed-btn2"
                  >
                    Sending ...
                  </button>
                  {{-- <h2 class="text-center text-white"> Message </h2>
                      <h2 class="text-center text-danger"> MessageError</h2> --}}
                </div>
              </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <h3>Lusaka, Zambia.</h3>
                  <p>Plot No. 5494, Lunsemfwa Road, Kalundu, Lusaka.</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
                <div class="media-body">
                  <h3>+260211 355 874/5</h3>
                   <h3>+2609756546690</h3>
                  <!--<p>Mon to Fri 9am to 6pm</p>-->
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                  <h3>reservations@asmarahotelzm.com</h3>
                  <p>Send us your query anytime!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ================ contact section end ================= -->
  

@include('layouts.footer')