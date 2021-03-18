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
                  <h1 class="h3 mb-0 text-gray-800">Contact Details </h1>
                </div>

                  <row>
                    @foreach ($data as $contact)
                          <form class="needs-validation" action="{{ route('admin.update-contact', $contact->id ) }}" method="POST" novalidate="">
                            @csrf
                            <div class="form-row">
                              <div class="col-md-12 mb-3">
                                <label for="Address"> Full Address </label>
                                <input type="text" class="form-control" id="Address" name="full_address" placeholder="" value="{{ $contact->full_address }}" required="">
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="num"> Contact Numbers </label>
                                <input type="text" class="form-control" id="num" name="phone" placeholder="" value="{{ $contact->phone }}" required="">
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="email"> Contact Email Address </label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="" value="{{ $contact->email }}" required="">
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
