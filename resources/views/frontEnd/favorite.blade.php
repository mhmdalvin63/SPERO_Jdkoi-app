@extends('layout.main')
@section('judul_tab','Favorite JDKoi')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/frontEnd/favorit.css')}}">

<div class="pageFavorit">
   
    <div id="listauction">
        <div class="container py-5">
            <div class="row">
                <h1 class="text-warning mb-4 list_auction">Favorite</h1>
                <div class="col-md-6 mt-2 mt-md-0">
                    <div class="ikan d-flex">
                        <div class="gambar_ikan">
                            <img src="{{asset('../images/foto-ikan.png')}}" alt="">
                        </div>
                        <div class="deskripsi text-white p-2 d-flex align-items-start flex-column bd-highlight">
                            <div class="nama_ikan w-100 mb-auto bd-highlight">
                                <p class="mb-sm-3 mb-1 fw-bold">Name Fish</p>
                            </div>
                            <div class="detail_price w-100 bd-highlight">
                                <div class="desc_ikan d-flex align-items-center justify-content-between">
                                    <p class="mb-0">Now Price</p>
                                    <p class="mb-0">60,000</p>
                                </div>
                                <hr class="style">
                                <div class="desc_ikan d-flex align-items-center justify-content-between">
                                    <p class="mb-0">Time Left</p>
                                    <p class="mb-0">0:08:23</p>
                                </div>
                                <hr class="style">
                                <div class="desc_ikan d-flex align-items-center justify-content-between">
                                    <p class="mb-0">Bid Count</p>
                                    <p class="mb-0">53</p>
                                </div>
                                <div class="love d-flex justify-content-end mt-3">
                                    <i class="fa-solid fa-heart"></i>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2 mt-md-0">
                    <div class="ikan d-flex">
                        <div class="gambar_ikan">
                            <img src="{{asset('../images/foto-ikan.png')}}" alt="">
                        </div>
                        <div class="deskripsi text-white p-2 d-flex align-items-start flex-column bd-highlight">
                            <div class="nama_ikan w-100 mb-auto bd-highlight">
                                <p class="mb-sm-3 mb-1 fw-bold">Name Fish</p>
                            </div>
                            <div class="detail_price w-100 bd-highlight">
                                <div class="desc_ikan d-flex align-items-center justify-content-between">
                                    <p class="mb-0">Now Price</p>
                                    <p class="mb-0">60,000</p>
                                </div>
                                <hr class="style">
                                <div class="desc_ikan d-flex align-items-center justify-content-between">
                                    <p class="mb-0">Time Left</p>
                                    <p class="mb-0">0:08:23</p>
                                </div>
                                <hr class="style">
                                <div class="desc_ikan d-flex align-items-center justify-content-between">
                                    <p class="mb-0">Bid Count</p>
                                    <p class="mb-0">53</p>
                                </div>
                                <div class="love d-flex justify-content-end mt-3">
                                    <i class="fa-solid fa-heart"></i>   
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