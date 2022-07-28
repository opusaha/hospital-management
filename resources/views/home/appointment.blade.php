<section class="book_section layout_padding" id="appointment">
  <div class="container">
    <div class="row">
      <div class="col">
        <form action="{{url('/appointment')}}" method="post">
          <h4>
            BOOK <span>APPOINTMENT</span>
          </h4>
          <div class="row ">
            <div class="form-group col-md-6">
              <label for="inputPatientName">Patient Name </label>
              <input type="text" class="form-control" id="inputPatientName" placeholder="Patient Name" name="name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputDepartmentName">Specialty</label>
              <select name="" class="form-control wide" id="inputDepartmentName">
                <option value="" disabled selected hidden></option>
                @foreach($doctor as $doctors)
                <option value="{{$doctors->specialty}}" placeholder="Specialty">{{$doctors->specialty}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputDoctorName">Doctor's Name</label>
              <select name="" class="form-control wide" id="inputDoctorName">
                <option value="" disabled selected hidden></option>
                @foreach($doctor as $doctors)
                <option value="{{$doctors->name}}">{{$doctors->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPhone">Phone Number</label>
              <input type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX" name="patientPhone">
            </div>
            <div class="form-group col-md-6">
              <label for="inputSymptoms">Symptoms</label>
              <input type="text" class="form-control" id="inputSymptoms" placeholder="" name="symptoms">
            </div>
            <div class="form-group col-md-6">
              <label for="inputDate">Choose Date </label>
              <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                <input type="text" class="form-control" readonly name="date">
                <span class="input-group-addon date_icon">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputSymptoms">Message</label>
              <textarea class="form-control" placeholder="Your Message" name="message"></textarea>
            </div>
          </div>
          <div class="btn-box">
            <button type="submit" class="btn ">Submit Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>