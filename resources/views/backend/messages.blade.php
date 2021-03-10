@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h3>Messages / Contact Form</h3>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S.N.</th>
                      <th>Date &amp; Time</th>
                      <th>Sender</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>3/10/2021, 11:56 pm</td>
                      <td>Sundar Thapa</td>
                      <td>sundar.thapa@gmail.com</td>
                      <td>986014598</td>
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
</div>
@endsection
