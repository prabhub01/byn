@extends('layout.backend')

@section('content')
<div class="content-wrapper">
    <section class="content">
            <div class="container-fluid">

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">External Links </h1>
                </div>

                  <row>
                    @foreach ($data as $link)
                          <form class="needs-validation" action="{{ route('admin.update_external_links', $link->id ) }}" method="POST" novalidate="">
                            @csrf
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="num"> AI  </label>
                                <input type="text" class="form-control" id="num" name="ai" placeholder="" value="{{ $link->ai }}" required="">
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="email"> AI Nepal  </label>
                                <input type="text" class="form-control" id="email" name="ai_nepal" placeholder="" value="{{ $link->ai_nepal }}" required="">
                              </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                  <label for="num"> Internationial Campaign </label>
                                  <input type="text" class="form-control" id="num" name="int_campaign" placeholder="" value="{{ $link->int_campaign }}" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="email">Campaign Materials </label>
                                  <input type="text" class="form-control" id="email" name="campaign_materails" placeholder="" value="{{ $link->campaign_materails }}" required="">
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-md-6 mb-3">
                                  <label for="num"> Appeal For Action </label>
                                  <input type="text" class="form-control" id="num" name="appeal_for_action" placeholder="" value="{{ $link->appeal_for_action }}" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="email"> National Board </label>
                                  <input type="text" class="form-control" id="email" name="national_board" placeholder="" value="{{ $link->national_board }}" required="">
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-md-6 mb-3">
                                  <label for="num"> Publications </label>
                                  <input type="text" class="form-control" id="num" name="publications" placeholder="" value="{{ $link->publications }}" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email"> AI Nepal Activities </label>
                                    <input type="text" class="form-control" id="email" name="ai_nepal_activities" placeholder="" value="{{ $link->ai_nepal_activities }}" required="">
                                  </div>
                              </div>
                    @endforeach

                            <div class="form-row" style="margin:0px auto;">
                              <button class="btn btn-primary" name="btn-update" type="submit">Update Content</button>
                            </div>
                        </form>
                  </row>
            </div>
   </section>
</div>
@endsection
