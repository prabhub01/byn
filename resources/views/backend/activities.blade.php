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
                  <h1 class="h3 mb-0 text-gray-800">Activities </h1>
                </div>

                  <row>
                          <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                <tr>
                                  <th>Title</th>
                                  <th>Date</th>
                                  <th>Venue</th>
                                  <th>Image</th>
                                  <th>Action</th>
                                </tr>
                              </thead>

                              <tbody>
                                  @foreach ($data as $activities)
                                <tr>
                                  <td>{{ $activities->title }}</td>
                                  <td>{{ $activities->date }}</td>
                                  <td> {{ $activities->venue }}
                                  <td> <img src="{{ asset('uploads/activities/' . $activities->image) }}" alt="No Image" style="height:60px; width:100px;"></td>
                                  </td>
                                  <td><a href="{{ route('admin.edit-activity', $activities->id) }}"> <i class="fas fa-fw fa-edit"></i></a> | <a href=""><i class="fas fa-fw fa-trash"></i></a>
                                  </td>
                                </tr>
                                @endforeach
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
          <form class="needs-validation" action="{{ route('admin.store-activity') }}" method="POST" enctype="multipart/form-data" novalidate="">
            @csrf
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
                <label for="venue">Venue </label>
                <input type="text" class="form-control" id="venue" name="venue" placeholder="" value="" required="">
              </div>

            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="par"> No. of Participants </label>
                  <input type="text" class="form-control" id="par" name="participants" placeholder="" value="" required="">
                </div>

                <div class="col-md-4 mb-3">
                  <label for="program"> Program Type </label> <br>
                  <select name="program_type" id="program" class="form-control">
                      <option value="Youth">Youth Only</option>
                      <option value="Joint">Joint</option>
                      <option value="Other">Other</option>
                  </select>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="photo"> Photo <small>* This will display as a banner image</small> </label> <br>
                  <input type="file" class="form-control" name="image" id="" placeholder="" value="" required="">
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
