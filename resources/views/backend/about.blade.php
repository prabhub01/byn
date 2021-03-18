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
                  <h1 class="h3 mb-0 text-gray-800">About </h1>
                </div>

                  <row>
                    @foreach ($data as $about)
                    <form class="needs-validation" action="{{ route('admin.create-about', $about->id) }}" method="POST" novalidate="">
                        @csrf
                        <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="heading">Intro Heading</label>
                          <input type="text" class="form-control" id="heading" name="intro_heading" value="{{ $about->intro_heading }}" required="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="txtarea1">AI Nepal's Short History</label> <br>
                          <textarea class="form-control" id="txtarea1" name="ai_history" rows="10">
                              {{ $about->ai_history }}
                          </textarea>
                        </div>
                      </div> <br>

                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="txtarea1">Banepa Youth Network's Short History</label> <br>
                          <textarea class="form-control" id="txtarea1" name="byn_history" rows="10">
                            {{ $about->byn_history }}
                          </textarea>
                        </div>
                      </div>
                    @endforeach
                      <div class="form-row" style="margin:1% 0% 1% 0%;">
                        <button class="btn btn-primary" name="btn-update" type="submit">Update Content</button>
                      </div>
                    </form>
                  </row>
                </div>
   </section>
</div>
@endsection
