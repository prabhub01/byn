@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Activities </h1>
                </div>

                  <row>
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Title</th>
                                  <th>Date</th>
                                  <th>Image</th>
                                  <th>Action</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td>Orientation Program</td>
                                  <td>2021-03-25</td>
                                  <td> <img src="uploads/activities/BMW GS 310.png" width="70px">
                                     <form action="activities.php?image=15" method="POST" enctype="multipart/form-data">
                                      <a href="#" style="font-size: 11px"> <input type="file" class="" name="fileToUpload" id="" placeholder="" value="" required=""> </a>
                                      <button name="activities-img-update" type="submit" style="font-size: 11px"><i class="fas fa-fw fa-upload"></i></button>
                                      </form>
                                  </td>
                                  <td><a href=""> <i class="fas fa-fw fa-edit"></i></a> | <a href="activities.php?delete=15"><i class="fas fa-fw fa-trash"></i></a>
                                  </td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                  </row>
            </div>
   </section>

   <hr>

   <section class="content">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Add New Activities
            <!-- <br><small style="font-size: 15px;"># Information related to board members</small> -->
          </h1>
        </div>

        <div class="card-body">
         <row>
          <form class="needs-validation" action="activities.php" method="POST" enctype="multipart/form-data" novalidate="">
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="title"> Title </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="" value="" required="">
              </div>

              <div class="col-md-4 mb-3">
                <label for="date">Date </label>
                <input type="date" class="form-control" id="date" name="date" placeholder="" value="" required="">
              </div>

              <div class="col-md-4 mb-3">
                <label for="photo"> Photo </label> <br>
                <input type="file" class="" name="fileToUpload" id="" placeholder="" value="" required="">
              </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="details"> Details </label>
                  <textarea class="form-control" id="details" name="details" rows="10"> </textarea>
                </div>
              </div>


            <div class="form-row">
              <button class="btn btn-primary" name="btn-addactivities" type="submit">Record this Event</button>

            </div>
          </form>
        </row>
      </div>

    </div>
   </section>
</div>
@endsection
