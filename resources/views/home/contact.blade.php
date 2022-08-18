<section class="contact_section layout_padding-bottom" id="contact">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="{{url('/contact-us-form')}}" method="post">
              @csrf
              <div>
                <input type="text" placeholder="Full Name" name="name" />
              </div>
              <div>
                <input type="email" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="phone" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="content" />
              </div>
              <div class="btn_box">
                <button type="submit">SEND</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>