@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">About </h1>
                </div>

                  <row>
                    <form class="needs-validation" action="about.php" method="POST" novalidate="">
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="heading">Heading</label>
                          <input type="text" class="form-control" id="heading" name="heading" placeholder="" required="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="txtarea1">Paragraph</label> <br>
                          <textarea class="form-control" id="txtarea1" name="p1" rows="10"></textarea>
                        </div>
                      </div>

                      <div class="form-row" style="margin-top: 1%; float:right;">
                        <button class="btn btn-primary" name="btn-update" type="submit">Update Content</button>
                      </div>
                    </form>
                  </row>
                </div>
   </section>
</div>
@endsection
