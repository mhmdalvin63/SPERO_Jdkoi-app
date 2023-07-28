@extends('layout.main')
@section('judul_tab','Join Auction JDKoi')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/frontEnd/joinAuction.css')}}">

<div class="pageJoin">
   <div class="container">

       <div class="backButton my-sm-2 d-flex align-items-center gap-2 text-white">
        <i class="fa-solid fa-arrow-left"></i>
        <p>Back</p>
       </div>

       <div class="information my-3 my-sm-2 p-sm-3 p-2">
        <p>Step Bidding : The system will automatically re-bid againt other bidders up to the specified amount.
            Jump Bidding : Jump the current amount up to the spesified amount.</p>
       </div>

       <div class="contentJoin my-md-5 my-2">
        <div class="row justify-content-between">
            <div class="col-4 imageLeft">
                <img src="{{asset('../images/joinAuction.png')}}" alt="">
            </div>
            <div class="col-8">
                <p class="xl fw-bold ">Name Fish</p>
                <div class="flexDesc my-2 d-flex justify-content-between align-items-center">
                    <p class="md">Now Price</p>
                    <p class="xl fw-bold">2,000,000</p>
                </div>
                <div class="flexDesc my-2 d-flex justify-content-between align-items-center">
                    <p class="md">Time Left</p>
                    <p class="xl fw-bold">2,000,000</p>
                </div>
                <div class="flexDesc my-2 d-flex justify-content-between align-items-center">
                    <p class="md">Bid Count</p>
                    <p class="xl fw-bold">2,000,000</p>
                </div>
                <p class="md mb-md-4 mb-2">Bidding Price</p>
                <div class="columnPrice p-md-3 p-sm-2 p-1 my-2">
                    <p class="md fw-bold px-1">2.100.000</p>
                </div>
                <a class="btn btn-bidding gap-2 p-md-3 p-sm-2 p-1 my-2" href="#" role="button">
                    <p class="xl"><i class="fa-solid fa-gavel"></i></p>
                    <p class="md">BIDDING</p>
                </a>
            </div>
        </div>
       </div>

       <img class="my-3 bgLine" src="{{asset('../images/bgLine.png')}}" alt="">

       <div class="bottomContent mt-4">
        <div class="row justify-content-between">
            <div class="col-sm-4 col-6">
                <div class="bcTitle">
                    <p class="xl text-white my-sm-3 my-2">Detail <span class="text-warning fw-bold">Fish</span></p>
                    <div class="bcDesc">
                        <div class="bcFlex d-flex justify-content-between align-items-center">
                            <p class="md text-white">Size</p>
                            <p class="md fw-bold text-warning">27</p>
                        </div>
                        <div class="hr"></div>
                    </div>
                    <div class="bcDesc">
                        <div class="bcFlex d-flex justify-content-between align-items-center">
                            <p class="md text-white">Kind</p>
                            <p class="md fw-bold text-warning">Female</p>
                        </div>
                        <div class="hr"></div>
                    </div>
                    <div class="bcDesc">
                        <div class="bcFlex d-flex justify-content-between align-items-center">
                            <p class="md text-white">Age</p>
                            <p class="md fw-bold text-warning">27</p>
                        </div>
                        <div class="hr"></div>
                    </div>
                    <div class="bcDesc">
                        <div class="bcFlex d-flex justify-content-between align-items-center">
                            <p class="md text-white">Gender</p>
                            <p class="md fw-bold text-warning">Male</p>
                        </div>
                        <div class="hr"></div>
                    </div>
                    <p class="md text-white">Memo</p>
                </div>
            </div>
            <div class="col-sm-7 col-6">
                <div class="iframeKoi">
                    <img class="" src="{{asset('../images/iframeKoi.png')}}" alt="">
                </div>
                <div class="noted p-md-3 p-2 my-sm-3 my-1">
                    <label for="comment"><p class="md">Noted</p></label>
                    <textarea class="form-control" id="comment" name="text"></textarea>
                </div>
            </div>
        </div>
       </div>

   </div>
</div>

    
@endsection