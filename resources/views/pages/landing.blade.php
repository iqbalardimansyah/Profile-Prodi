<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Rekayasa Perangkat Lunak</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/custom.css') }}">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
<div id="header-holder">
    <div id="top-content" class="container-fluid">
        <div class="container logo">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('landing/images/UPI_EDUN.svg') }}" alt="" height="60" width="60">
                    <img src="{{ asset('landing/images/logo_rpl.png') }}" class="ml-4" alt="" height="60">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-slider">
                        <div class="slide">
                            <div class="row main-content">
                                <div class="col-sm-7">
                                    <p>Visitasi Akreditasi - Assesmen Lapangan (AL)</p>
                                    <p>Program Studi S-1</p>
                                    <h3 class="b-text">Rekayasa</span><br>Perangkat Lunak</h3>
                                    <p class="m-text">Universitas Pendidikan Indonesia Kampus Daerah Cibiru</p>
                                    <a href="{{ route('admin.dashboard.index') }}" class="btn btn-lg button-see-data">
                                        Lihat Data
                                    </a>
                                </div>
                                <div class="col-sm-5 d-none d-md-block">
                                    <div class="img-holder mr-2">
                                        <lottie-player class="img" src="https://assets7.lottiefiles.com/packages/lf20_obtuqvpd.json"  background="transparent"  speed="1"  style="width: 450px; height: 450px;"  loop autoplay></lottie-player>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('landing/js/slick.min.js') }}"></script>
</body>
</html>