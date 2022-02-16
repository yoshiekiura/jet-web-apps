<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('/css/front.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/942785f6e0.js" ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Oswald&family=Poppins:ital,wght@0,200;0,500;1,100&display=swap" rel="stylesheet">
    <title>GRAND SHANGHAI Lottery</title>
    <style>
        .menu-toggle {
            padding-top:20px;
        }
        @media (max-width: 1300px){
            header nav {
                position: absolute;
                width: 80%;
                top:5px;
                bottom: 0px;
                margin-bottom: -500px;
                background: #091353;
                left:-100%;
                transition: 0.5s;
            }
        }
        @media (max-width: 575px) {
            #liveresult{
                display: block !important;
            }
            #web {
                display: none !important;
            }

        }
    </style>
</head>
<body >

<!-- === NAV ==== -->
<header >
    <div class="logo">
        <img src="{{ asset('img/logoshanghai.png') }}" alt="logo grand shanghai">
    </div>
    <nav>
        <ul>
            <li><a href="/" >HOME</a></li>
            <li><a href="#">HADIAH</a>

                </li>
            <li><a href="/hasil">HASIL</a></li>
            {{--            <li class="sub-menu"><a href="#">COMMUNITY</a>--}}
            {{--                <ul>--}}
            {{--                    <li><a href="#">LINK</a></li>--}}
            {{--                    <li><a href="#">LINK</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            <li><a href="/live">LIVE</a></li>
            <li><a href="/bencut">BENCUT</a></li>
            <li><a href="#">ENG</a>
                <ul>
                    <li><a href="#">IND</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:black; font-weight:500; border: 1px solid yellow; background:#e6e600; padding-bottom: 0;">LOGIN</a>
            </li>
        </ul>
    </nav>
    <div class="menu-toggle mt-1">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    {{--    Modal--}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" sytle="width:0.7rem;">
                <div class="modal-header" style="background: #aaaaaa">
                    <h5 class="modal-title" id="exampleModalLabel">Login Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="modal-body" style="background: #142F43; font-family: 'Nunito', sans-serif; color:white;">
                        <div class="row" id="userbox">
                            <div class="col-lg-1 col-sm-1">

                            </div>
                            <div class="col-lg-4 col-sm-4" id="usernamelabel">
                                <label for="" class="col-form-label">Username</label>
                            </div>
                            <div class="col-lg-6 col-sm-6" id="usernametext">
                                <div class="input-group" >
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    <input type="text" name="username" id="username" placeholder="Username" class="form-control text-center" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                            </div>
                        </div>
                        <div class="row mt-1" id="passbox">
                            <div class="col-lg-1 col-sm-1">

                            </div>
                            <div class="col-lg-4 col-sm-4" id="passwordlabel">
                                <label for="" class="col-form-label " >Password</label>
                            </div>
                            <div class="col-lg-6 col-sm-6" id="passwordtext">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control text-center" placeholder="Password" aria-label="password" aria-describedby="basic-addon2">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer" style="background: #aaaaaa">
                        {{--                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>--}}
                        <button type="submit" class="btn btn-dark">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid" style="background: #0a53be; color:white;">
    <div class="container">
        <h3 >Hadiah GRAND SHANGHAI</h3>
        <div class="row">
            <div class="col-lg-4">
                <table class="table table-bordered text-center text-white">
                    <thead>
                    <tr>
                        <td colspan="3" style="font-weight: bold;">Hadiah Utama 4D</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1stPrize</td>
                        <td>Rp 3.000.000</td>
                    </tr>
                    <tr>
                        <td>2ndPrizes</td>
                        <td>Rp 1.000.000</td>
                    </tr>
                    <tr>
                        <td>3rdprizes</td>
                        <td>Rp 500.000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <table class="table table-bordered text-center text-white">
                    <thead>
                        <tr>
                            <th colspan="2">Hadiah Starter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Starter 1</td>
                            <td>Rp 300.000</td>
                        </tr>
                    <tr>
                        <td>Starter 2</td>
                        <td>Rp 200.000</td>
                    </tr>
                    <tr>
                        <td>Starter 3</td>
                        <td>Rp 100.000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <table class="table table-bordered text-center text-white">
                    <thead>
                    <tr>
                        <th colspan="2">Hadiah Consolation</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Consol 1</td>
                            <td>Rp 75.000</td>
                        </tr>
                        <tr>
                            <td>Consol 2</td>
                            <td>Rp 75.000</td>
                        </tr>
                        <tr>
                            <td>Consol 3</td>
                            <td>Rp 75.000</td>
                        </tr>
                        <tr>
                            <td>Consol 4</td>
                            <td>Rp 50.000</td>
                        </tr>

                        <tr>
                            <td>Consol 5</td>
                            <td>Rp 50.000</td>
                        </tr>

                        <tr>
                            <td>Consol 6</td>
                            <td>Rp 50.000</td>
                        </tr>
                        <tr>
                            <td>Consol 7</td>
                            <td>Rp 25.000</td>
                        </tr>

                        <tr>
                            <td>Consol 8</td>
                            <td>Rp 25.000</td>
                        </tr>

                        <tr>
                            <td>Consol 9</td>
                            <td>Rp 25.000</td>
                        </tr>



                    </tbody>
                </table>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <table class="table table-bordered text-center text-white">
                    <thead>
                        <tr>
                            <th colspan="2">Hadiah 3angka dan 2angka</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hadiah 3A</td>
                            <td>Rp. 500.000</td>
                        </tr>
                        <tr>
                            <td>Hadiah 2A</td>
                            <td>Rp. 65.000</td>
                        </tr>
                        <tr>
                            <td>Hadiah 2A-BB</td>
                            <td>Rp. 5.000</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <h6>Peraturan :</h6>
            <p>** Apabila Keluar Nomor 4 Angka yang sama dihadiah Utama, starter dan consolation, maka secara otomatis yang dihitung hadiah tertinggi, tidak dapat double.</p>
            <span style="font-size:1rem;">*** Hadiah 3angka dan 2angka berdasarkan hadiah utama 1st price</span>
        </div>
        <div class="row mt-3">

            <h2 style="color:yellow;">Hadiah Jackpot : Rp. 100.000.000</h2>
            <h5>Kupon Hadiah Grand Jackpot</h5>
            <p>Harga 1 Kupon Rp.10.000</p>
            <p>** Hadiah Jackpot Diputar setiap hari minggu Jam 00:00 WIB</p>
            <p>Nomor Jackpot didapat dari penggabungan hadiah 2ndprize dan 1stprize </p>
            <p>Contoh 2stprize = 5678 dan 1stprize = 1234</p>
            <p>Maka nomor jackpot adalah = 56781234</p>
            <p>Apabila Angka kupon jackpot yang dibeli 4 angka ujungnya adalah nomor sama dengan nomor
            keluaran 1st prize maka akan mendapatkan hadiah Rp 20.000.000</p>

        </div>
    </div>

</div>

<a href="https://wa.me/+6287886486915" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
<footer class="w-100 " style="background: #091353; ">
    <h6 class="text-center text-white" style="padding-top:1rem;"> GRAND SHANGHAI &copy;2019 Copyright</h6>
    <div class="text-center pb-3" >
        <span><a href="#"><i class="fab fa-instagram fa-2x" style="color:white; margin-right: 10px;" ></i></a></span>
        <span><a href="#"><i class="fab fa-facebook fa-2x" style="color:white; margin-right: 10px;"></i></a></span>
        <span><a href="#"><i class="fab fa-youtube fa-2x" style="color:white; margin-right:10px;"></i></a></span>
        <span><a href=""><i class="fab fa-tiktok fa-2x" style="color:white;"></i></a></span>
    </div>
</footer>
{{--https://i.ibb.co/zbqc542/Micro-Gaming-Imgur.jpg--}}
{{--"https://i.ibb.co/zbykx3K/1c60701987064b7abc83df449554081f.png--}}
{{--"https://i.ibb.co/N9sJqys/c5eb1e9c74934144ac751bc96f885522.jpg--}}

<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.menu-toggle').click(function(){
            $('nav').toggleClass('active')
        })
        $('ul li').click(function(){
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
        })
    })
</script>
<script type="text/javascript">

</script>

</body>
</html>

