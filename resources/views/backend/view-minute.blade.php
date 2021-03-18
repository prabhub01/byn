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

            <h3>Record of Minutes</h3>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($data as $meeting)
                        <tr>
                            <td> {{ $meeting->id }}</td>
                            <td> {{ $meeting->date }}</td>
                            <td> {{ $meeting->location }}</td>
                            <td> {{ $meeting->meeting_type }}</td>
                            <td>
                                <a href="#" class="" data-toggle="modal" data-target="#modal-lg"><i class="far fa-eye"></i></a> |
                                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
              </tbody>
            </table>
              {{-- popup modal --}}

              <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Minute in Details</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                              <table class="table table-sm">
                                <tbody>
                                  <tr>
                                      <td><strong>Date<strong></td>
                                    <td>{{ $meeting->date }}</td>
                                  </tr>
                                  <tr>
                                    <td> <strong>Venue</strong> </td>
                                  <td>{{ $meeting->location }}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Participants</strong> </td>
                                  <td>{{ $meeting->participants }}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Meeting Type</strong> </td>
                                  <td>{{ $meeting->meeting_type }}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Keywords</strong> </td>
                                  <td>{{ $meeting->keywords }}</td>
                                </tr>
                                <tr>
                                    <td> <strong><em>Ek Rupaiya</em></strong> </td>
                                  <td>{{ $meeting->ek_rupaiya }}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Image</strong> </td>
                                    <td><img src="{{ asset('uploads/minute/' . $meeting->photo1) }}" alt="No Image"></td>
                                </tr>
                                <tr>
                                    <td><strong>Image</strong></td>
                                    <td><img src="{{ asset('uploads/minute/' . $meeting->photo2) }}" alt="No Image Available"></td>
                                </tr>
                                <tr>

                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
        </div>
    </section>
</div>
@endsection
