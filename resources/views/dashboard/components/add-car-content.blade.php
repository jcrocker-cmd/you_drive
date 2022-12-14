<section id="addcar-main">

@if (session('status'))
  <h6 class="alert alert-success" id="myAlert" style="font-size: 14px;">{{ session('status') }}</h6>
@endif


<!-- PROGRESS-BAR -->
<div class="progress-bar-container" >
<div class="progressbar">

    <div class="progress" id="progress"></div>

  <div class="progress-step active" data-title="Car Information"></div>
  <div class="progress-step" data-title="Owner Information"></div>
  <div class="progress-step" data-title="Pricing"></div>
  <div class="progress-step" data-title="Submit"></div>
</div>
</div>





<!-- FORM ACTION START -->
<form enctype="multipart/form-data" action="addcar" method="post" class="addform">
@csrf


<!-- FIRST FORM -->
<section class="form-1 bg-light py-2 first-form add-car-form active" id="addcar-section-forms">


<div class="px-4 py-2"><h5 class=" pt-2">Car Information</h5></div>


<!-- ROW 1 -->

<div data-step="1" class ="add-row d-flex px-4">


<!-- COLUMN 1 -->

<div class="add-col ">



<div class="mb-2 vehicle">
<label for="exampleFormControlInput1" class="form-label">Type</label>
<select class="form-select " name="vehicle" aria-label="Default select example" id="vehicle-info">
  <option selected>Select Vehicle Type</option>
  <option value="Van">Van</option>
  <option value="Pick-Up">Pick-Up</option>
  <option value="7 Seaters">7 Seaters</option>
  <option value="Sedan">Sedan</option>
  <option value="Hatchback">Hatchback</option>
</select>
</div>


<div class="mb-2 brand">
  <label for="exampleFormControlInput1" class="form-label">Brand</label>
  <input type="text" name="brand" class="form-control " id="vehicle-info" placeholder="Ex. Toyota" onkeyup="javascript:capitalize(this);">
  <!-- <span>Please input a Car Brand</span> -->
</div>

<div class="mb-2">
  <label for="exampleFormControlInput1" class="form-label">Model</label>
  <input type="text" name="model" class="form-control " id="vehicle-info" placeholder="Ex. Vios" onkeyup="javascript:capitalize(this);">
</div>

<div class="mb-2">
<label for="exampleFormControlInput1" class="form-label">Year</label>
<select class="form-select " name="year" aria-label="Default select example" id="vehicle-info">
    <option selected>Pick a Year</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
</select>
</div>

<div class="mb-2">
  <label for="exampleFormControlInput1" class="form-label">Plate No.</label>
  <input type="text" name="plate" class="form-control " id="vehicle-info" placeholder="Ex. ABC 1234">
</div>

<div class="mb-2">
<label for="exampleFormControlInput1" class="form-label">Seats</label>
<select class="form-select " name="seats" aria-label="Default select example" id="vehicle-info">
<option value="2" selected>2 Seats</option>
<option value="3">3 Seats</option>
<option value="4">4 Seats</option>
<option value="5">5 Seats</option>
<option value="6">6 Seats</option>
<option value="7">7 Seats</option>
<option value="8">8 Seats</option>
<option value="9">9 Seats</option>
<option value="10+">10+ Seats</option>
</select>
</div>

</div>


<!-- COLUMN 2 -->

<div class="add-col">


<div class="mb-2">
<label for="exampleFormControlInput1" class="form-label">Fuel Type</label>
<select class="form-select " name="fuel" aria-label="Default select example" id="vehicle-info">
  <option value="Diesel">Diesel</option>
  <option value="Petrol">Petrol</option>
  <option value="Unleaded">Unleaded</option>
  <option value="Hybrid">Hybrid</option>
</select>
</div>

<div class="mb-2">
  <label for="exampleFormControlInput1" class="form-label">Displacement</label>
  <input type="text" name="displacement" class="form-control " id="vehicle" placeholder="Enter Displacement (cc)" onkeyup="this.value=commaSep(this.value);"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
</div>

<div class="mb-2">
  <label for="exampleFormControlInput1" class="form-label">Mileage</label>
  <input type="text" name="mileage" class="form-control " id="vehicle"  placeholder="Enter Mileage (km)" onkeyup="this.value=commaSep(this.value);" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
</div>

<div class="mb-2">
  <label for="exampleFormControlInput1" class="form-label">Car Location</label>
  <input type="text" name="carlocation" class="form-control " id="vehicle-info" placeholder="Enter Location" onkeyup="javascript:capitalize(this);">
</div>

<label for="exampleFormControlInput1" class="form-label">Transmission</label>
<div class="form-check">
  <input class="form-check-input" name="transmission" type="radio" name="exampleRadios" id="exampleRadios1" value="Manual">
  <label class="form-check-label" for="exampleRadios1">
    Manual
  </label>
</div>
<div class="form-check mb-2">
  <input class="form-check-input" name="transmission" type="radio" name="exampleRadios" id="exampleRadios2" value="Automatic">
  <label class="form-check-label" for="exampleRadios2">
    Automatic
  </label>
</div>

<a href="#" class="btn btn-primary add-car-btn addcar-btn-next" id="addcar-btn-next">Next</a>
</div>

</section>


</div>


<!-- SECOND FORM -->
<section class="form-1 bg-light py-2 second-form add-car-form" id="addcar-section-forms">


<div class="px-4 py-2">

<h5 class="pt-2">Owner Information</h5>

<label for="name" class="form-label">Basic Info</label>


<div class="d-flex add-full-name">

<div class="input-group mb-2">
  <span class="input-group-text">First Name</span>
  <input type="text" aria-label="First name" name="fname" class="form-control" onkeyup="javascript:capitalize(this);" value="{{ $data->admin_fname }}">
</div>

<div class="input-group mb-2">
  <span class="input-group-text">Middle Name</span>
  <input type="text" aria-label="First name" name="mname" class="form-control" onkeyup="javascript:capitalize(this);"  value="{{ $data->admin_mname }}">
</div>

<div class="input-group mb-2">
  <span class="input-group-text">Last Name</span>
  <input type="text" aria-label="First name" name="lname" class="form-control" onkeyup="javascript:capitalize(this);"  value="{{ $data->admin_lname }}">
</div>
</div>




<div class="d-flex add-full-name">

<div class="input-group mb-2">
  <span class="input-group-text">Email</span>
  <input type="email" aria-label="First name" name="email" class="form-control"  value="{{ $data->email }}">
</div>

<div class="input-group mb-2">
  <span class="input-group-text">Phone No.</span>
  <input type="number" aria-label="First name" name="phone" class="form-control"  value="{{ $data->admin_no }}">
</div>

<div class="input-group mb-2">
  <span class="input-group-text">Birth-Date</span>
  <input type="date" aria-label="First name" name="bday" class="form-control"  value="{{ $data->admin_bday }}">
</div>
</div>

<label for="address" class="form-label">Full Address</label>


<div class="d-flex add-full-address">

<div class="input-group mb-2">
  <span class="input-group-text">Purok/Street</span>
  <input type="text" aria-label="First name" name="purok" class="form-control" onkeyup="javascript:capitalize(this);"  value="{{ $data->admin_purok }}">
</div>

<div class="input-group mb-2">
  <span class="input-group-text">Baranggay</span>
  <input type="text" aria-label="First name" name="baranggay" class="form-control"onkeyup="javascript:capitalize(this);"  value="{{ $data->admin_baranggay }}">
</div>
</div>


<div class="d-flex add-full-address">

<div class="input-group mb-2">
  <span class="input-group-text">Town</span>
  <input type="text" aria-label="First name" name="town" class="form-control" onkeyup="javascript:capitalize(this);"  value="{{ $data->admin_town }}">
</div>


<div class="input-group mb-2">
  <span class="input-group-text">Province</span>
  <input type="text" aria-label="First name" name="province" class="form-control" onkeyup="javascript:capitalize(this);"  value="{{ $data->admin_province }}">
</div>

<div class="input-group mb-2">
  <span class="input-group-text">Postal Code</span>
  <input type="number" aria-label="First name" name="postal" class="form-control"  value="{{ $data->admin_postal }}">
</div>
</div>

<div class="addcar-button-group">
  <a href="#" class="btn btn-primary add-car-btn addcar-btn-prev" role="button">Previous</a>
  <a href="#" class="btn btn-primary add-car-btn addcar-btn-next" role="button">Next</a>
  </div>


</div>



</section>


<!-- THIRD FORM -->
<section class="form-1 bg-light py-2 second-form add-car-form" id="addcar-section-forms">


<div class="px-4 py-2">

<h5 class="pt-2">Pricing</h5>
<!-- 
<label for="name" class="form-label">Name</label> -->


<div class="mb-2 price">
  <label for="exampleFormControlInput1" class="form-label">Daily Rate</label>
  <input type="text" name="dailyrate" class="form-control" onkeyup="this.value=commaSep(this.value);" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
</div>

<div class="mb-2 price">
  <label for="exampleFormControlInput1" class="form-label">Weekly Rate</label>
  <input type="text" name="weeklyrate" class="form-control " onkeyup="this.value=commaSep(this.value);" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
</div>

<div class="mb-2 price">
  <label for="exampleFormControlInput1" class="form-label">Monthly Rate</label>
  <input type="text" name="monthlyrate" class="form-control " onkeyup="this.value=commaSep(this.value);" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
</div>



<div class="addcar-button-group">
  <a href="#" class="btn btn-primary add-car-btn addcar-btn-prev" role="button">Previous</a>
  <a href="#" class="btn btn-primary add-car-btn addcar-btn-next" role="button">Next</a>
  </div>

</div>

</section>


<!-- FOURTH FORM -->
<section class="form-1 bg-light py-2 second-form add-car-form" id="addcar-section-forms">


<div class="px-4 py-2">

<h5 class="pt-2 pb-3">You're almost there!</h5>

<label for="address" class="form-label">Select Car Photo</label>

<div class="addphoto">
  <img src="images/samplecar.png"
  id="change-img-add" style="object-fit: cover;">
  </div>

  <div class="img-button mt-3">
  <input type="file" name="carphoto" id="addphotoBtn" accept="image/jpg, image/jpeg, image/png" hidden>
  <button onclick ="addPhoto()" type="button" class="btn btn-primary addphoto-btn" id="addphotoBtn">Choose Image</button>
  </div>

<div class="addcar-button-group mt-3">
  <a href="#" class="btn btn-primary add-car-btn addcar-btn-prev" role="button">Previous</a>
  <!-- <a href="#" class="btn btn-primary add-car-btn addcar-btn-next" role="button">Next</a> -->
  <button class="btn btn-primary" type="submit">Submit</button>
  </div>

</div>

</section>



</form>
</section>