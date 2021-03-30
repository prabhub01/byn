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
                  <h1 class="h3 mb-0 text-gray-800">Edit Activity </h1>
                </div>

                  <row>
                    <form class="needs-validation" action="{{ route('admin.update-activity', $details->id) }}" method="POST" enctype="multipart/form-data" novalidate="">
                        @csrf
                        <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="title"> Title </label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ $details->title }}" required="">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="date">Date </label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="" value="{{ $details->date }}" required="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="venue">Venue </label>
                            <input type="text" class="form-control" id="venue" name="venue" placeholder="" value="{{ $details->venue }}" required="">
                        </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                            <label for="par"> No. of Participants </label>
                            <input type="text" class="form-control" id="par" name="participants" placeholder="" value="{{ $details->participants }}" required="">
                            </div>

                            <div class="col-md-4 mb-3">
                            <label for="program"> Program Type </label> <br>
                            <select name="program_type" id="program" class="form-control">
                                <option value="Youth">Youth Only</option>
                                <option value="Joint">Joint</option>
                                <option value="Other">Other</option>
                            </select>
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="photo"> Photo <small>* This will display as a banner image</small> </label> <br>
                            @if($details->image)
                              <img src="{{ url('uploads/activities/' . $details->image) }}" style="height:60px; width:100px;" />
                            @endif
                            <input type="file" class="form-control" name="image" id="" placeholder="" value="{{ $details->image }}" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                            <label for="details"> Details </label>
                            <textarea class="form-control" id="details" name="details" rows="10"> {{ $details->details }} </textarea>
                            </div>
                        </div>

                        <div class="form-row">
                        <button class="btn btn-primary" name="" type="submit">Record this Event</button>
                        </div>
                    </form>
                  </row>
            </div>
   </section>
</div>
@endsection
