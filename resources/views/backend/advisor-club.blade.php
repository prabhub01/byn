@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
                  <div class="container-fluid">
                      <!-- Page Heading -->
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" id="Team">BYN Advisor Club
                        </h1>
                      </div>

                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Social Media</th>
                                <th>Photo</th>
                                <th>Action</th>

                              </tr>
                            </thead>

                            <tbody>

                              <tr>
                                <td>1</td>
                                <td>Prabhu Budhathoki</td>
                                <td>9843525259</td>
                                <td style="line-height: 0%;">
                                    https://www.facebook.com/suzalmdr1999<br> <hr>
                                    https://www.instagram.com/sujal_mdr/ <br> <hr>
                              </td>
                                <td>
                                  <img src="uploads/team/sujal.jpg" width="70px"> <br>
                                  <form action="about.php?image=1" method="POST" enctype="multipart/form-data">
                                  <a href="#" style="font-size: 11px"> <input type="file" class="" name="fileToUpload" id="" placeholder="" value="" required=""> </a>
                                  <button name="team-img-update" type="submit" style="font-size: 11px"><i class="fas fa-fw fa-upload"></i></button>
                                  </form>
                                </td>
                                <td><a href="edit.php?id=1">  <i class="fas fa-fw fa-edit"></i> </a>
                                 <a href="about.php?delete=1"><i class="fas fa-fw fa-trash"></i></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
    </section>
    <hr>
    <section class="content">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Advisor
                </h1>
            </div>

            <div class="card-body">
             <row>
              <form class="needs-validation" action="about.php" method="POST" enctype="multipart/form-data" novalidate="">
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="name"> Full Name </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required="">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="post"> Mobile </label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="" value="" required="">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="fb"> Facebook Link </label>
                    <input type="text" class="form-control" id="fb" name="fb" placeholder="" value="" required="">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="insta"> Insta Link </label>
                    <input type="text" class="form-control" id="insta" name="insta" placeholder="" value="" required="">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="photo"> Photo </label> <br>
                    <input type="file" class="" name="fileToUpload" id="" placeholder="" value="" required="">
                  </div>
                </div>

                <div class="form-row">
                  <button class="btn btn-primary" name="btn-addteam" type="submit">Add New Advisor</button>

                </div>
              </form>
            </row>
          </div>

        </div>
    </section>
</div>
@endsection
