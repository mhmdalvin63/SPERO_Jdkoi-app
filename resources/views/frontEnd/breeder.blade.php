@extends('layout.main')
@section('judul_tab','Breeder JDKoi')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/frontEnd/breeder.css')}}">

<div class="pageBidder py-4">
    <div id="listbidder">
        <div class="container py-3">
            <div class="row text-white">
                <h1 class="text-white list_auction">List <span class="text-warning">Bidder</span></h1>
                <div class="mt-4 col-md-6 col-lg-4">
                    <div class="bidder d-flex">
                        <div class="lb_profile">
                            <img src="{{asset('../images/bidder.png')}}" alt="">
                        </div>
                        <div class="lb_bio p-2 d-flex align-content-between flex-wrap bd-highlight">
                            <div class="lb_nama">
                                <h1 class="fw-bold mb-0">Koi No Minums</h1>
                                <p class="mb-1">Kenichi WADA</p>
                            </div>
                            <div class="lb_alamat">
                                <p class="mb-0 fw-bold">Address:</p>
                                <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, hic.</p>
                            </div>
                            <div class="btn-detail">
                                <a class="btn btn-danger mt-1 ms-auto" href="detailbidder" role="button">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 d-flex justify-content-end mt-2">
                <a class="all-bidder text-decoration-none text-white me-0" href="">Lihat Semua >></a>
            </div> --}}
        </div>
    </div>
</div>

    
@endsection