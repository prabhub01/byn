@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h3>Add Minute</h3>
     <form class="needs-validation" action="meeting.php" method="POST" enctype="multipart/form-data" novalidate="">
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
           <input type="text" class="form-control" id="participants" name="pcpts" placeholder="" value="" required="">
         </div>

         <div class="col-md-3 mb-3">
           <label> Meeting Type </label>
           <select name="type" class="form-control" required="">
             <option value="youth only">General Youth Meeting</option>
             <option value="youth only">General Board Meeting</option>
             <option value="joint">Joint Meeting</option>
           </select>
         </div>

         <div class="col-md-4 mb-3">
           <label> Photo </label> &nbsp;&nbsp;&nbsp; <small style="font-size: 13px;"> ** Front Page of Minute</small>
           <input type="file" class="" name="fileToUpload1" id="" placeholder="" value="" required="">
         </div>

         <div class="col-md-4 mb-3">
            <label> Photo </label> &nbsp;&nbsp;&nbsp; <small style="font-size: 13px;"> Second/Signed Page of Minute</small>
            <input type="file" class="" name="fileToUpload3" id="" placeholder="" value="">
          </div>

         <!-- <input type="submit" name="" value="Send"> -->

       </div>

       <div class="form-row">
         <button class="btn btn-primary" name="btn-addmeeting" type="submit">Registered this meeting</button>

       </div>
     </form>
        </div>
    </section>
 </div>
@endsection
