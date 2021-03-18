@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h3>Messages / Contact Form</h3>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>S.N.</th>
                      <th>Date &amp; Time</th>
                      <th>Sender</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th width="30%">Message</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $inbox)
                        <tr>
                            <td>{{ $inbox->id }}</td>
                            <td>{{ $inbox->created_at }}</td>
                            <td>{{ $inbox->sender }}</td>
                            <td>{{ $inbox->email }}</td>
                            <td>{{ $inbox->mobile }}</td>
                            <td>
                                <div style="height:50px; overflow:hidden;">
                                    {{ $inbox->message }}
                                </div>
                            </td>
                            <td>
                                <a href="#" class="" data-toggle="modal" data-target="#modal-lg"><i class="far fa-eye"></i></a> |
                                <a href="#"><i class="far fa-check-circle"></i></a>
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
                      <h4 class="modal-title">Message from {{ $inbox->sender }}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>{{ $inbox->message }}</p>
                    </div>
                    {{-- <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->


            </div>
        </div>
    </section>
    <br> <br>
</div>
@endsection
