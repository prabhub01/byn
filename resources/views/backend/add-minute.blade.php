@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Success !</h5>
                <p>{{ $message }}</p>
              </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Alert! There were some problems with your input.</h5>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
            @endif

            <h3>Add Minute</h3>
     <form class="needs-validation" action="{{ route('admin.add-minute') }}" method="POST" enctype="multipart/form-data" novalidate="">
        @csrf
      <div class="form-row">
         <div class="col-md-12 mb-3">
           <label for="keywords"> Keywords </label> <br>
           <small style="font-size: 13px;">** For Eg: Main points to be discussed, main decision made or anythings which helps to identify this meetings easily</small>
           <input type="text" class="form-control" id="keywords" name="keyword" placeholder="Meeting to discuss about the upcomming Orientation Program" value="" required="">
         </div>
         <div class="col-md-2 mb-3">
           <label for="date"> Date </label>
           <input type="date" class="form-control" id="date" name="date" placeholder="" value="" required="">
         </div>
         <div class="col-md-4 mb-3">
           <label for="location"> Location </label>
           <input type="text" class="form-control" id="location" name="location" placeholder="" value="" required="">
         </div>
         <div class="col-md-3 mb-3">
           <label for="participants"> Total no. of participants </label>
           <input type="text" class="form-control" id="participants" name="participants" placeholder="" value="" required="">
         </div>

         <div class="col-md-3 mb-3">
           <label> Meeting Type </label>
           <select name="meeting_type" class="form-control" required="">
             <option value="General Youth Meeting">General Youth Meeting</option>
             <option value="General Board Meeting">General Board Meeting</option>
             <option value="Joint Meeting (Group-43)">Joint Meeting (Group-43)</option>
             <option value="Urgent Youth Meeting">Urgent Youth Meeting</option>
             <option value="Urgent Board Meeting">Urgent Board Meeting</option>
           </select>
         </div>

         <div class="col-md-4 mb-3">
           <label> Image 1 </label> &nbsp;&nbsp;&nbsp; <small style="font-size: 13px;"> ** Front Page of Minute</small>
           <input type="file" class="" name="image1" id="" placeholder="" value="" required="">
         </div>

         {{-- <div class="col-md-4 mb-3">
            <label> Image 2 </label> &nbsp;&nbsp;&nbsp; <small style="font-size: 13px;"> Second/Signed Page of Minute</small>
            <input type="file" class="" name="image2" id="" placeholder="" value="">
          </div> --}}

          <div class="col-md-3 mb-3">
            <label for="participants"> <em> Ek Rupaiya Ek Bandi </em> </label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-rs">Rs.</i>
                  </span>
                </div>
                <input type="text" class="form-control" id="participants" name="ek_rupaiya" placeholder="" value="" required="">
             </div>
          </div>

       </div>

       <div class="form-row">
         <button class="btn btn-primary" type="submit">Register this meeting</button>

       </div>
     </form>
        </div>
    </section>
 </div>
@endsection
