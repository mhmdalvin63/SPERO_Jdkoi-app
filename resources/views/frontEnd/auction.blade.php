@extends('layout.main')
@section('judul_tab','Auction JDKoi')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/frontEnd/auction.css')}}">

<div class="pageAuction">
    <div class="rules">
        <div class="container text-white py-5">
            <h1>Rules Auction</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veritatis maiores quia, non officiis cumque cum natus commodi ea magnam ab earum!</p>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veritatis maiores quia, non officiis cumque cum natus commodi ea magnam ab earum!</p>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veritatis maiores quia, non officiis cumque cum natus commodi ea magnam ab earum!</p>
            <p class="mt-5 text-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consectetur nisi corrupti ullam rem odio!</p>
        </div>
    </div>

    <div id="listauction">
        <div class="container py-5">
            <div class="row">
                <h1 class="text-white list_auction">On <span class="text-warning">Going</span></h1>
                <div class="col-md-6 mt-2 mt-md-0">
                    <div class="ikan d-flex">
                        <div class="gambar_ikan">
                            <img src="{{asset('../images/foto-ikan.png')}}" alt="">
                        </div>
                        <div class="deskripsi text-white p-2 d-flex align-items-start flex-column bd-highlight ">
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
                                    <div class="bid_left">
                                        <p class="mb-0">Bidding Price</p>
                                    </div>
                                    <div class="bid_right">
                                        <p class="mb-0 text-end">2,000,000</p>
                                        <p class="text-warning mb-0">Less than others price</p>
                                    </div>
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
                                <hr class="style">
                                <div class="join_auction_btn d-flex justify-content-end">
                                    <a class="btn btn-danger btn-join mt-1 ms-auto" href="#" role="button">Join Auction</a>
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
                        <div class="deskripsi text-white p-2 d-flex align-items-start flex-column bd-highlight ">
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
                                    <div class="bid_left">
                                        <p class="mb-0">Bidding Price</p>
                                    </div>
                                    <div class="bid_right">
                                        <p class="mb-0 text-end">2,000,000</p>
                                        <p class="text-warning mb-0">Less than others price</p>
                                    </div>
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
                                <hr class="style">
                                <div class="join_auction_btn d-flex justify-content-end">
                                    <a class="btn btn-danger btn-join mt-1 ms-auto" href="#" role="button">Join Auction</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="listauction">
        <div class="container py-5">
            <div class="row">
                <h1 class="text-white list_auction">Next <span class="text-warning">Auction</span></h1>
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
                                <hr class="style">
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
                                <hr class="style">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

    
@endsection