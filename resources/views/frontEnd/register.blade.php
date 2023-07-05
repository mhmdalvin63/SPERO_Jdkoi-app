<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('../css/frontEnd/register.css')}}">
  </head>
  <body class="mx-auto py-5 d-flex align-items-center" style="background-image: url({{asset('../images/bg-ikan.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-1 mb-lg-5 logo-jd">
                <img src="{{asset('../images/jdkoi-logo.png')}}" alt="">
                <h1 class="text-white">REGISTRASI  </h1>
            </div>
            <div class="col-md-6">
                <div class="mb-1 mb-md-3">
                    <label for="exampleFormControlInput1" class="mt-2 text-white">Nama Depan</label>
                    <input type="text" class="form-control py-1 py-md-3" id="exampleFormControlInput1" placeholder="Nama Depan">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1 mb-md-3">
                    <label for="exampleFormControlInput1" class="mt-2 text-white">Nama Belakang</label>
                    <input type="text" class="form-control py-1 py-md-3" id="exampleFormControlInput1" placeholder="Nama Belakang">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1 mb-md-3">
                    <label for="exampleFormControlInput1" class="mt-2 text-white">Email</label>
                    <input type="email" class="form-control py-1 py-md-3" id="exampleFormControlInput1" placeholder="Email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1 mb-md-3">
                    <label for="exampleFormControlInput1" class="mt-2 text-white">No Handphone</label>
                    <input type="number" class="form-control py-1 py-md-3" id="exampleFormControlInput1" placeholder="No Handphone">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1 mb-md-3">
                    <label for="exampleFormControlInput1" class="mt-2 text-white">Password</label>
                    <input type="password" class="form-control py-1 py-md-3" id="exampleFormControlInput1" placeholder="Password">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1 mb-md-3">
                    <label for="exampleFormControlInput1" class="mt-2 text-white">Konfirmasi Password</label>
                    <input type="password" class="form-control py-1 py-md-3" id="exampleFormControlInput1" placeholder="Konfirmasi Password">
                </div>
            </div>
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="mt-2 text-white">Provinsi</label>
                <select class="form-select py-1 py-md-3 mb-1 mb-md-3" aria-label="Default select example">
                    <option selected>Provinsi</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="mt-2 text-white">Kota</label>
                <select class="form-select py-1 py-md-3 mb-1 mb-md-3" aria-label="Default select example">
                    <option selected>Kota</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="mt-2 text-white">Kecamatan</label>
                <select class="form-select py-1 py-md-3 mb-1 mb-md-3" aria-label="Default select example">
                    <option selected>Kecamatan</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="mt-2 text-white">Kelurahan</label>
                <select class="form-select py-1 py-md-3 mb-1 mb-md-3" aria-label="Default select example">
                    <option selected>Kelurahan</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-md-6">
                <div class="mb-1 mb-md-3">
                    <label for="exampleFormControlInput1" class="mt-2 text-white">Alamat</label>
                    <input type="text" class="form-control py-1 py-md-3" id="exampleFormControlInput1" placeholder="Alamat">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="mt-2 text-white">Kode Pos</label>
                    <input type="text" class="form-control py-1 py-md-3" id="exampleFormControlInput1" placeholder="Kode Pos">
                </div>
            </div>
            <div class="col-md-12 text-center button-regis">
                <a class="btn btn-danger w-50 fw-bold mb-1 py-2" href="#" role="button" style="background-color: #ED1B24;">REGISTRASI</a>
                <p class="text-white">Already have an account? Come on in right away <a class="text-decoration-none" href="login" style="color: #ED1B24;">here</a></p>
            </div>
        </div>
    </div>
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>



