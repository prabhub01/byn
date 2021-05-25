@extends('layout.frontend')

@section('content')
    <!-- breadcam_area_start -->
    <div class="breadcam_area bradcam_bg"
    style="background-image: url('{{ asset('img/banner/1.png')}}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcam_text">
                        <h3>Join Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcam_area_end -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section" style="background-color: rgb(4, 82, 82);">
        <div class="container" style="background-color: white; padding:20px;">
             <h1>Sign Up</h1>
             <p style="font-size: 12px;">* marked are required</p>
             <hr>
            <form class="needs-validation" action="joinus.php" method="POST" name="myForm" id="requestForm" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="inputState">Salutation *</label>
                  <select id="inputState" class="form-control" name="salutation" >
                    <option selected value="Mr." >Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                </select>
                </div>
            <div class="col-md-3 mb-2">
                  <label for="validationDefault01">First name *</label>
                  <input type="text" class="form-control" id="validationDefault01" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" name="fname" >
              </div>
              <div class="col-md-3 mb-2">
                  <label for="validationDefault02">Middle name</label>
                  <input type="text" class="form-control" id="validationDefault02" placeholder="" name="mname" >
              </div>
              <div class="col-md-3 mb-2">
                  <label for="validationDefault03">Last name *</label>
                  <input type="text" class="form-control" id="validationDefault03" placeholder="" name="lname">
              </div>
          </div>

          <div class="form-row">
            <div class="col-md-4 mb-2">
                  <label for="validationDefault04">Email *</label>
                  <input type="Email" class="form-control" id="validationDefault04" placeholder="" name="email" >
              </div>
              <div class="col-md-3 mb-2">
                  <label for="validationDefault05">Mobile *</label>
                  <input type="number" class="form-control" id="validationDefault05" placeholder="" name="mobile" >
              </div>
              <div class="col-md-3 mb-2">
                  <label for="validationDefault06">Phone </label>
                  <input type="text" class="form-control" id="validationDefault06" placeholder="" name="phone" >
              </div>
          </div>

          <div class="form-row">
            <div class="col-md-4 mb-2">
                  <label for="validationDefault07">Date of Birth (AD) *</label>
                  <input type="date" class="form-control" id="validationDefault07" placeholder="1996-11-28" name="dobad" >
              </div>
              <div class="col-md-3 mb-2">
                  <label for="validationDefault08">Date of Birth (BS)</label>
                  <input type="text" class="form-control" id="validationDefault08" placeholder="dd/mm/yyyy" name="dobbs" >
              </div>
              {{-- <div class="col-md-1 mb-2">
                  <label for="validationDefault09">Age * </label>
                  <input type="number" class="form-control" id="validationDefault09" placeholder="" name="age" >
              </div> --}}
              <div class="col-md-3 mb-1">
                  <label for="validationDefault10">Occupation</label>
                  <input type="text" class="form-control" id="validationDefault10" placeholder="" name="occupation" >
              </div>
          </div>

          <div class="form-row">
               <div class="form-group col-md-2">
                    <label for="edu">Education </label>
                  <select id="edu" class="form-control" name="education">
                    <option value="" selected>----Select----</option>
                    <option value="School">In School</option>
                    <option value="High School">High School (+2)</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Postgraduate">Postgraduate</option>
                    <option value="Above Postgraduate">Above Postgraduate</option>

                </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="Gender">Gender * </label>
                  <select id="Gender" class="form-control" name="gender" >
                    <option value="" selected>----Select----</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="Religion">Religion </label>
                  <select id="Religion" class="form-control" name="religion">
                    <option value="" selected>----Select----</option>
                    <option value="Hindu">Hinduism</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Islam">Islam</option>
                    <option value="Kirat">Kirat</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Others">Other</option>
                </select>
                </div>
                <div class="col-md-4 mb-2">
                  <label for="validationDefault11">Associate School / College / Office Name</label>
                  <input type="text" class="form-control" id="validationDefault11" placeholder="" name="institution" >
              </div>
          </div> <br/> <br/>

          <h3>Permanent Address</h3>
            <hr>
            <div class="form-row">
               <div class="col-md-3 mb-2">
                  <label for="validationDefault12">Country *</label>
                  <input type="text" class="form-control" id="validationDefault12" placeholder="" value="Nepal" name="country" >
              </div>
                <div class="form-group col-md-2">
                    <label for="Provience">Provience/State *</label>
                  <select id="Provience" class="form-control"  name="state" >
                    <option value="" selected>----Select----</option>
                    @foreach ($provience as $item)
                    <option value="$item->provience">{{ $item->proviences }}</option>
                      @endforeach
                </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="District">District * </label>
                  <select id="District" class="form-control" name="district" >
                    <option value="" selected>----Select----</option>
                    @foreach ($district as $item)
                    <option value="$item->district">{{ $item->district }}</option>
                      @endforeach
                </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="munvdc">Municipality/Rural Municipality * </label>
                    <input type="text" class="form-control" id="munvdc" placeholder="" name="munvdc" >
                    {{-- <select id="Munvdc" class="form-control" name="munvdc" >
                    <option value="" selected>----Select----</option>
                </select> --}}
                </div>
              </div>

              <div class="form-row">
            <div class="col-md-3 mb-2">
                  <label for="validationDefault21">Ward Num *</label>
                  <input type="number" class="form-control" id="validationDefault21" placeholder="" name="ward" >
              </div>
              <div class="col-md-3 mb-2">
                  <label for="validationDefault22">City/Village</label>
                  <input type="text" class="form-control" id="validationDefault22" placeholder="" name="city" >
              </div>
              <div class="col-md-3 mb-2">
                  <label for="validationDefault23">Tole/Street</label>
                  <input type="text" class="form-control" id="validationDefault23" placeholder="" name="tole" >
              </div>
          </div><br/><br/>

          <h3>Upload your verified document </h3>
            <hr>
            <br> <input type="checkbox" id="myCheck" name="document" value="Pending" onclick="myFunction()">  Skip this. I will submit my verified documents later<br> <br>
           <div class="form-group col-md-6 mb-2" style="display:block" id="verified">
                        <!-- <img src="" alt="" class="display_avatar"> -->
                        <input name="document" type="file" placeholder="" class="form-control">
                        <small>Document issued by government authority such as citizenship or birth certificate that mentions your date of birth.</small>
                        <hr></div> <br>

          <h5 class="info">Before submitting your form, be notified that you will be member of <strong>Banepa Youth Network</strong> as
            <select name="memtype">
                <option value="Youth Member">Youth Member</option>
                <option value="Supporter">Supporter</option>
            </select>
                and strictly follow the protocals of Amnesty International Nepal and Banepa Youth Network.</h5>
            <hr>

    <button class="btn btn-primary" name="btn-newform" type="submit">Submit form</button>
    </form>
    </div>
    </section>
    <!-- ================ contact section end ================= -->

@endsection
