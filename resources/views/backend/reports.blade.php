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

            <h3>Generate Reports</h3>
        </div>
    </section>
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                    <div class="info-box-content">
                      <h5 class="info-box-text">Messages</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                      <div class="info-box-content">
                        <h5 class="info-box-text">Valid Members</h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                      <div class="info-box-content">
                        <h5 class="info-box-text">Invalid Members</h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                      <div class="info-box-content">
                        <h5 class="info-box-text">Board Members</h5>
                      </div>
                    </div>
                  </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                          <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                          <div class="info-box-content">
                            <h5 class="info-box-text">Advisors</h5>
                          </div>
                        </div>
                    </div>

              </div>
        </div>
    </section>
</div>
@endsection
