<section class="team_section layout_padding" id="doctor">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          @foreach($doctor as $doctors)
          <div class="item">
            <div class="box"  style="height: 450px;">
              <div class="img-box" style="height: 275 px;">
                <img class="h-100" src="doctorImage/{{$doctors->image}}" alt="" />
              </div>
              <div class="detail-box">
                <h5>{{$doctors->name}}</h5>
                <h6 class="text-danger">{{$doctors->qualifications}}</h6>
                <h6 class="">{{$doctors->specialty}}</h6>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>