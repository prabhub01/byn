@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Contact Details </h1>
                </div>

                  <row>
                          <form class="needs-validation" action="contact.php" method="POST" novalidate="">
                            <div class="form-row">
                              <div class="col-md-12 mb-3">
                                <label for="Address"> Full Address </label>
                                <input type="text" class="form-control" id="Address" name="address" placeholder="" value="Banepa-13, Kavre, State 4" required="">
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="num"> Contact Numbers </label>
                                <input type="text" class="form-control" id="num" name="number" placeholder="" value="9861425285 / 9860145986" required="">
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="email"> Contact Email Address </label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="" value="info@aibyn.org" required="">
                              </div>
                            </div>

                            <div class="form-row" style="margin:0px auto;">
                              <button class="btn btn-primary" name="btn-update" type="submit">Update Content</button>
                            </div>
                        </form>
                  </row>
            </div>
   </section>
</div>
@endsection
