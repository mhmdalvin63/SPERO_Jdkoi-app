@extends('layout.main')
@section('judul_tab','Home JDKoi')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/frontEnd/home.css')}}">

<div class="pageHome">
    <div class="banner">
        <figure class="image">
            <img class="background_banner" src="{{asset('../images/banner-baru.png')}}" alt="background">
            <figcaption>
                <img class="hiasan_banner" src="{{asset('../images/hiasan-text.png')}}" alt="">
                <h1 class="text-white ">Find Your Next <br> Awesome <span class="text-warning">Koi Fish</span></h1>
                <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, facere?</p>
            </figcaption>
        </figure>
    </div>
    

    {{-- <div id="header" style="background: url('{{asset('../images/banner-home-top.png')}}'); 
        background-position: left left;
        background-repeat: no-repeat;
        /* background-attachment: fixed; */
        background-size: cover;">
        <div class="container text-white">
            <div class="row">
                <div class="col-md-5">
                    <h1>Find Your Next Awesome Koi Fish</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, facere?</p>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="mt-2 mt-sm-5" id="event">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12 text-white">
                    <h3>What's <span class="text-warning">New</span></h3>
                </div>
                <div class="col-md-6 col-lg-4 p-2">
                    <div class="event_content text-white p-3 " style="background: url('{{asset('../images/bg-event.png')}}');">
                        <div class="ec_top d-flex justify-content-between">
                            <p class="mb-0 fw-bold">EVENT</p>
                            <p class="mb-0">21 Juni 2023</p>
                        </div>
                        <hr class="style">
                        <div class="ec_bottom">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta voluptas sed quae provident ipsum?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 p-2">
                    <div class="event_content text-white p-3 " style="background: url('{{asset('../images/bg-event.png')}}');">
                        <div class="ec_top d-flex justify-content-between">
                            <p class="mb-0 fw-bold">EVENT</p>
                            <p class="mb-0">21 Juni 2023</p>
                        </div>
                        <hr class="style">
                        <div class="ec_bottom">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta voluptas sed quae provident ipsum?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 p-2">
                    <div class="event_content text-white p-3 " style="background: url('{{asset('../images/bg-event.png')}}');">
                        <div class="ec_top d-flex justify-content-between">
                            <p class="mb-0 fw-bold">EVENT</p>
                            <p class="mb-0">21 Juni 2023</p>
                        </div>
                        <hr class="style">
                        <div class="ec_bottom">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta voluptas sed quae provident ipsum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="logo_home d-block d-md-none col-md-4 m-auto text-center">
                    <img src="{{asset('../images/jdkoi-logo.png')}}" alt="">
                </div>
                <div class="col-md-8 about_text">
                    <img class="d-block mx-auto mx-md-0" src="{{asset('../images/hiasan-text.png')}}" alt="">
                    <h2 class="text-white text-center text-md-start">About <span class="text-warning">JD KOI CENTER</span></h2>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non accusamus tempore distinctio incidunt aspernatur est! At officia aliquid temporibus accusantium, unde doloribus. Eius eligendi, ea, explicabo veniam quo necessitatibus nobis voluptas facilis dolorem minima ipsum deleniti, omnis praesentium sapiente provident soluta. Nulla quos inventore beatae nemo tenetur fugiat ipsum labore vero, atque harum expedita laborum voluptates explicabo nam eius, quia cum dolores porro temporibus a, sit illo sapiente placeat pariatur. Perferendis, odit minima blanditiis molestias fuga, aperiam nihil corporis mollitia ipsam vero dolore ipsa, earum molestiae quam dicta odio! Voluptas animi similique ab consequuntur beatae, cumque possimus consequatur non rem.</p>
                </div>
                <div class="logo_home d-none d-md-block col-md-4 m-auto text-center">
                    <img src="{{asset('../images/jdkoi-logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="listauction">
        <div class="container py-5">
            <div class="row">
                <h1 class="text-white list_auction">List <span class="text-warning">Auction</span></h1>
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
                                <a class="btn btn-danger mt-1 ms-auto" href="#" role="button">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <a class="btn btn-danger mt-1 ms-auto" href="#" role="button">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <a class="btn btn-danger mt-1 ms-auto" href="#" role="button">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end mt-2">
                <a class="all-bidder text-decoration-none text-white me-0" href="breeder">Lihat Semua >></a>
            </div>
        </div>
    </div>
</div>

    
@endsection