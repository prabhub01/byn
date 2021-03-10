@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h3>Messages / Contact Form</h3>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Keywords</th>
                    <th>Location</th>
                    <th>Participants</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2020-09-04</td>
                    <td>test</td>
                    <td>Banepa</td>
                    <td>541</td>
                    <td>youth only</td>
                    <td>
                      <img src="img/project/1.png" width="70px" style="border: 1px solid #000";>
                      <img src="img/project/3.png" width="70px" style="border: 1px solid #000";>
                    </td>
                    <td>
                        <a href="#"><i class="far fa-eye"></i></a> |
                        <a href="#"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                  </tr>


              </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
