<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href=" {{ asset('../css/frontEnd/login.css')}}">
        <!-- font awesome  -->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4/css/all.css"
       integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
       <script src="https://kit.fontawesome.com/8def9595b8.js" crossorigin="anonymous"></script>
  </head>
  <body class="mx-auto d-flex align-items-center" style="height: 100vh; background-image: url({{asset('../images/bg-ikan.png')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6 mb-5">
                <div class="logo text-center mb-3 mb-sm-5">
                    <img src="{{asset('../images/jdkoi-logo.png')}}" alt="">
                    <h1 class="fw-bold text-white">JAPAN DIRECT <br> KOI CENTER</h1>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control py-2 py-md-3" id="exampleFormControlInput1" placeholder="Masukkan Email Anda">
                </div>
                <div class="mb-1 btn-login">
                    <a class="btn btn-danger w-100 fw-bold mb-1" href="#" role="button">RESET PASSWORD</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

    

