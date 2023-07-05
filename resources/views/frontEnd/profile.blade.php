@extends('layout.main')
@section('judul_tab','Profile JDKoi')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/frontEnd/profile.css')}}">

<div class="pageProfile">
    <div class="banner">
        <img class="background_banner" src="{{asset('../images/bg-banner-profile.png')}}" alt="bannerProfile">
    </div>
    <div class="container" id="content">
        <div class="row justify-content-md-start justify-content-center">
            <div class="col-md-4 col-6 p-2 ">
                <img class="orang" src="{{asset('../images/orang.png')}}" alt="orang">
                <a class="btn w-100 mt-1 ms-auto text-white" href="#" role="button" style="background-color: #ED1B24;">LOG OUT</a>
            </div>
            <div class="col-md-8 p-2 my-md-auto text-white">
                <h1 class="text-md-start text-center">JOHN DOE</h1>
                <div class="contact_profile justify-content-md-start justify-content-center d-flex gap-3 align-items-center">
                    <p class="mb-0">johndoe12@gmail.com</p>
                    <div class="vr" style="width: .15rem;"></div>
                    <p class="mb-0">0857 4859 5623</p>
                </div>

                <div class="address_profile mt-5">
                    <h1>Address :</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos perferendis perspiciatis assumenda ut minima eos quis a quidem ipsum omnis.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection