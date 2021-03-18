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

            <h3>Member Request</h3>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="background-color: rgb(255, 255, 255)">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Member Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1</td>
                      <td>Prabhu Budhathoki</td>
                      <td>9861723432</td>
                      <td>Kavrepalanchowk</td>
                      <td>23</td>
                      <td>male</td>
                      <td>Youth Member</td>
                      <td>
                        <a href="#"><i class="far fa-eye"></i></a> |
                        <a href="#"><i class="far fa-check-circle"></i></a> |
                        <a href="#"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
        </div>
    </section>
    <br> <br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <h2>All Members</h2>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Member ID</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Valid Upto</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $members)
                    <tr>
                        <td>{{ $members->id }}</td>
                        <td>{{ $members->member_id }}</td>
                        <td><a href="{{ route('admin.member-details', $members->member_id) }}">{{ $members->full_name }}</a></td>
                        <td>{{ $members->gender }}</td>
                        <td>{{ $members->valid_upto }}</td>
                        <td>{{ $members->mobile }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <br> <br>
    <section class="content">
    <h3>Import Youth Members from csv/excel file</h3>
    <small>
        <form action="{{ route('admin.import') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="file-input">
              <input type="file" id="file" name="file" class="file">
              <button class="btn btn-primary"><i class="fas fa-upload"></i> &nbsp;Upload</button>
          </div>
      </form>
  </small>
    </section>
    <br> <br>
</div>
@endsection
