@extends('layout.frontend')

@section('content')

<!-- breadcam_area_start -->
<div class="breadcam_area bradcam_bg"
style="background-image: url('{{ asset('img/banner/1.png')}}');">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcam_text">
                    <h3>About Us</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcam_area_end -->

<div class="about_page">
    <div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="about_info">
                <h3>{!! $info->intro_heading !!}</h3>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-xl-12">
            <div class="about_text_info">
                <h2>Amnesty International Nepal's History</h2>
                <p style="text-align: justify;"> {!! $info->ai_history !!} </p>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-xl-8 col-md-6">
            <div class="about_text_info">
                <h2>AI Banepa Youth Network's History</h2>
                <p style="text-align: justify;"> {!! $info->ai_history !!} </p>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="about_text_info">
                <!-- <p style="text-align: justify;">hello </p> -->
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhimalayanhomestaynepal%2Fhttps%3A%2F%2Fwww.facebook.com%2FAmnesty-International-Banepa-Youth-Network-141948589179765&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>


    </div>
</div>
</div>

<!-- volunteers_area_satrt -->
<div class="volunteers_area">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title text-center mb-60">
                <!-- <span>Our Team</span> -->
                <h3>
                    Our Team
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
    @foreach ($team as $member)
        <div class="col-xl-3 col-md-6" style="margin-bottom: 30px;">
            <div class="single_volunteer">
                <div class="thumb">
                    <img src="{{ asset('uploads/team/' . $member->image) }}" alt="Image not found">
                    <div class="social_links">
                        <ul>
                            <li><a href="{{ $member->fb_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $member->insta_link }}" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="author_name text-center">
                    <h3>{{ $member->full_name }} </h3>
                    <span>{{ $member->post }} </span>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
</div>
<!-- volunteers_area_end -->

<!-- become_volunter_start -->
<div class="become_volunter volunter_bg_1"
style="background-image: url('{{ asset('img/volunteers/bg.png')}}');">
<div class="container">
    <div class="row">
        <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1">
            <div class="volunter_text text-center">
                <h3>Be with us</h3>
                <p>Inspires volunteers and supporters to support the causes they care <br>
                about. We do this to ensure human rights are enjoyed by all.</p>
                <a class="boxed-btn4" href="joinus.php">Join Now</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- become_volunter_end -->

@endsection
