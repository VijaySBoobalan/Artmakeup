@extends('makeuplayout.master')


@section('content')
    <section class="section_gap w3-hide-small w3-hide-medium">
      <div class="row">
        <div class="col-5">
          <img class="contact_img" src="img/contact.png" alt="">
        </div>
        <div class="col-7 right_form">
          <h1 class="about_h1">Get in touch with me</h1>
          <p class="about_p">Fill in the form to book an appointment with me,or if you have any queries. I will get in touch with you shortly.</p>
              <form action="#">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="contact_number" placeholder="Enter Contact Number" name="contact_number">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Enter email " name="email">
                </div>
                <div class="form-group">
                 <textarea class=" form-control w3-text-deep-purple  " rows="7" cols="35" name="message"  id="message" placeholder="Message" ></textarea>
                </div>
                <button type="submit" class="btn ">Send</button>
              </form>
        </div>
      </div>
    </section>
    <section class=" w3-hide-large">

        <div class="row " style="padding-top:100px;margin-left:15px;margin-right:15px;">
          <h1 class="about_h1_sm" style="text-align:center;">Get in touch with me</h1>
          <p class="about_p">Fill in the form to book an appointment with me,or if you have any queries. I will get in touch with you shortly.</p>
              <form action="#">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="contact_number" placeholder="Enter Contact Number" name="contact_number">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Enter email " name="email">
                </div>
                <div class="form-group">
                 <textarea class=" form-control w3-text-deep-purple  " rows="7" cols="35" name="message"  id="message" placeholder="Message" ></textarea>
                </div>
                <div class="w">
                  <button  type="submit" class="btn center">Send</button>

                </div>
              </form>
        </div>
    </section><br>
    @endsection 
    