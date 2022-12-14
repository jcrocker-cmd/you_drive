<section class="booking-form-section">
    <div class="booking-form-buttons">

        <button type="button" class="btn-daily button active" target="1">
            <span>DAILY BOOKING FORM</span>
        </button>

        <button type="button" class="btn-weekly button" target="2">
            <span>WEEKLY BOOKING FORM</span>
        </button>

        <button type="button" class="btn-monthly button" target="3">
            <span>MONTHLY BOOKING FORM</span>
        </button>

    </div>

    <section class="div1 single">

        <div class="booking-info-section">

            <div class="sect-1">

                <form action="{{ route('book.submit') }}" method="post">
                    @csrf
                    <h4 style="color: #005281"><strong>Renter Information</strong></h4>
                    <hr>

                    <div class="d-flex renter-info" style="gap: 20px; margin-bottom: 15px;">

                        <div style="width: 100%;">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" placeholder="Ex. Cruz" value="{{ $data->fname}} {{ $data->lname}}" onkeyup="javascript:capitalize(this);">
                            <span class="text-danger"style="font-size: 13px;">@error('name') {{$message}} @enderror</span>
                        </div>

                        <div style="width: 100%;">
                            <label class="form-label">Contact Number</label>
                            <input type="number" name="con_num" placeholder="Enter phone no." value="" onkeyup="javascript:capitalize(this);">
                            <span class="text-danger"style="font-size: 13px;">@error('con_num') {{$message}} @enderror</span>
                        </div>

                    </div>

                    <div class="d-flex renter-info" style="gap: 20px; margin-bottom: 25px;">

                        <div style="width: 100%;">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" placeholder="Enter Address" value="">
                            <span class="text-danger"style="font-size: 13px;">@error('address') {{$message}} @enderror</span>
                        </div>

                        <div style="width: 100%;">
                            <label class="form-label">Contact Email</label>
                            <input type="email" name="con_email" placeholder="Enter Email" value="{{ $data->email}}" onkeyup="javascript:capitalize(this);">
                            <span class="text-danger"style="font-size: 13px;">@error('con_email') {{$message}} @enderror</span>
                        </div>

                    </div>

                    <div style="margin-bottom: 25px;">
                        <h5 style="color: #005281"><strong>Requirements</strong></h5> 
                        <hr class="bg-dark">
                        <h6>1. Driver's license</h6>
                        <h6>2. Pay before drive</h6>
                        
                        <h6>3. I accept this requirements Cashbond ???2,000 fully refundable upon returning the car.</h6>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            ???2,000
                        </label>
                        </div>

                        <br>
                        <h6 class="text-primary" style="  text-justify: inter-word; text-align: justify;">IMPORTANT: For clients outside Philippines, please provide us a VALID email address for us to communicate with you. Upon submission, a link of our WhatsApp, Viber, Telegram, 
                            and Facebook Messenger account will be sent to the email you provide.</h6>
                    </div>


                    <div style="margin-bottom: 25px;">
                        <h5 style="color: #005281"><strong>Mode of Delivery</strong></h5> 
                        <hr class="bg-dark">

                            <div class="d-flex mode-of-delivery">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mode_del" id="opt1" value="Airport ???500">
                                    <label class="form-check-label" for="opt1">
                                        Airport ???500
                                    </label>
                                </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode_del" id="opt2" value="Cebu City ???300">
                                <label class="form-check-label" for="opt2">
                                    Cebu City ???300
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode_del" id="opt3" value="Mandaue City ???350">
                                <label class="form-check-label" for="opt3">
                                    Mandaue City ???350
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode_del" id="opt4" value="Talisay City ???500">
                                <label class="form-check-label" for="opt4">
                                    Talisay City ???500
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode_del" id="opt5" value="Pick-up at Marcopolo Hotel ???10">
                                <label class="form-check-label" for="opt5">
                                    Pick-up at Marcopolo Hotel ???10
                                </label>
                            </div>
                        </div>
                        
                    </div>


                    <div style="width: 100%; margin-bottom: 20px;">
                        <label class="form-label"><strong>Leave a Message</strong><span style="font-size: 13px;"> (Optional)</span></label>
                        <textarea name="msg" id="" rows="5" ></textarea>
                    </div>

                    
                    
                </div>

                <div class="sect-2">
                    <div class="car-rent-info-wrapper">

                        <div class="d-flex justify-content-between align-items-center">

                            <p><strong>{{ $viewcar->brand}} {{ $viewcar->model}} {{ $viewcar->year}}</strong></p>

                            <div class="car-image">

                            <img src="/images/uploads/{{ $viewcar->carphoto }}"
                            id="car-image" style="object-fit: cover;"/>
                            </div>

                        </div>

                        <div class="date-time-wrapper justify-content-between">
                            <div class="start-date d-flex pb-2">
                                <div>
                                    <label for="">Start Date</label>
                                    <input type="date" name="start_date" id="datePicker">
                                </div>
                                <div>
                                    <label for="">Start Time</label>
                                    <input type="time" name="start_time" id="">
                                </div>
                            </div>

                            <div class="return-date d-flex">
                                <div>
                                    <label for="">Return Date</label>
                                    <input type="date" name="return_date" id="">
                                </div>
                                <div>
                                    <label for="">Return Time</label>
                                    <input type="time" name="return_time" id="">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="price-info">

                        <div class="alert alert-warning text-center" role="alert">
                        You are using <strong>DAILY RATE</strong> 
                        </div>

                        <div class="justify-content-between d-flex">
                            <p>2 Days</p>
                            <p>??? 1,000</p>
                        </div>

                        <div class="justify-content-between d-flex">
                            <p>Cashbond (Fully Refundable)</p>
                            <p>??? 1,000</p>
                        </div>

                        <div class="justify-content-between d-flex">
                            <p>Delivery Fee</p>
                            <p>??? 1,000</p>
                        </div>


                        <hr>

                        <div class="justify-content-between d-flex">
                            
                        
                            <h5><strong>Total Amount Payable</strong></h5>
                            <h5><strong>??? 2,000</strong></h5>

                        </div>

                        <hr>

                        <div class="form-check agreement">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                        I agree with AJAB Transport Services' terms and privacy policy
                        </label>
                        </div>

                        <button class="bg-success text-white" type="submit">SUBMIT</button>

                    </div>
                </form>

            </div>
        </div>
    </section>

 <!-- WEEKLY BOOKING FORM -->

<!-- MONTHLY BOOKING FORM -->

</section>