@extends('layout.main')
@section('judul_tab','Favorite JDKoi')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/frontEnd/auctionChart.css')}}">

<div class="pageChart">
    <div id="listauction">
        <div class="container py-5">
            <div class="row">
                <h1 class="text-white mb-4 list_auction">Auction <span class="text-warning">Chart</span></h1>
                <div class="col-md-6 mt-2 mt-md-0">
                    <div class="ikan d-flex">
                        <div class="gambar_ikan">
                            <img src="{{asset('../images/foto-ikan.png')}}" alt="">
                        </div>
                        <div class="deskripsi text-white p-2 d-flex align-items-start flex-column bd-highlight mb-3">
                            <div class="nama_ikan w-100 mb-auto p-2 bd-highlight">
                                <p class="mb-sm-3 mb-1 fw-bold">Name Fish</p>
                            </div>
                            <div class="detail_price w-100 p-2 bd-highlight">
                                <div class="desc_ikan d-flex align-items-center justify-content-between">
                                    <p class="mb-0">Now Price</p>
                                    <p class="mb-0 fw-bold">60,000</p>
                                </div>
                                <hr class="style">
                                <div class="desc_ikan d-flex align-items-center justify-content-between">
                                    <p class="mb-0">Time</p>
                                    <p class="mb-0 fw-bold">End</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection