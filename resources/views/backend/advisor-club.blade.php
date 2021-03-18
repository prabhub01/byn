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

                      <!-- Page Heading -->
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" id="Team">BYN Advisor Club
                        </h1>
                      </div>

                      <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                                @foreach ($member as $team)
                                <tr>
                                    <td>{{ $team->id }}</td>
                                    <td>{{ $team->full_name }}</td>
                                    <td>{{ $team->mobile }}</td>
                                    <td style="line-height: 0%;">
                                        {{ $team->fb_link }} <br> <hr>
                                        {{ $team->insta_link }} <br> <hr>
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/advisor/' . $team->image) }}" alt="No Image" style="height:60px; width:100px;">
                                    </td>
                                    <td>
                                        <a href="#">  <i class="fas fa-fw fa-edit"></i> </a>
                                         <a href="#"><i class="fas fa-fw fa-trash"></i></a>
                                    </td>
                                </tr>
                              @endforeach
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
              <form class="needs-validation" action="{{ route('admin.advisor-store') }}" method="POST" enctype="multipart/form-data" novalidate="">
                @csrf
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
                    <input type="file" class="" name="image" id="" placeholder="" value="" required="">
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
