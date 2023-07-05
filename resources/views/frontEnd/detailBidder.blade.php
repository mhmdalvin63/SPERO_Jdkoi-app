@extends('layout.main')
@section('judul_tab','Detail Bidder')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/frontEnd/detailBidder.css')}}">

<div class="pageDetailBidder">
    <div class="container">
        <div class="row text-white">
            <a href="/breeder" class="back d-flex align-items-center gap-2 mt-3 text-decoration-none text-white">
                <i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i>
                <p class="mb-0">Back</p> 
            </a>
            <h1 class="mt-5 list_auction">Detail <span class="text-warning">Bidder</span></h1>
            <div class="col-md-4 col-6 mx-auto mt-3">
                <img class="img_bidder" src="{{asset('../images/bidder.png')}}" alt="">
            </div>
            <div class="col-md-8 mt-3">
                <h1 class="text-md-start text-center">Koi No Minums</h1>
                <p class="text-md-start text-center">Kenichi WADA</p>
                <h1>Address:</h1>
                <p>666-1, Dai, Shobumachi Minarmisait ana gun saitama 346-0103</p>

                <div class="variety p-3">
                    <h1>Variety</h1>
                    <p>Lorem ipsum dolor sit amet consectetur. Viverra aenean dolor et ac. Dictumst elementum vitae sollicitudin viverra eu tellus eget. Est diam massa proin adipiscing sit facilisis pretium gravida. Sit consectetur velit vestibulum amet sed. Mattis eget eleifend magna laoreet. Quis sed egestas commodo elit ullamcorper odio. Massa fringilla consequat feugiat venenatis scelerisque nunc. Amet in consequat at consectetur ut euismod amet turpis. Tincidunt vestibulum arcu</p>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection