<!doctype html>
<html lang="en">
<script>
    let baseURL="{{url("/")}}";
    let csrfToken="{{csrf_token()}}";
</script>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="Pergament, Knjiga, knjige, books, Prodaja knjiga, knjizara, akcija, knjizevnost, hari poter, roman, pesmam Ju Nesbe, Den Braun, bestseler"/>
    <meta name="description" content="Prodaja knjiga preko mreže! Veliki izbor domacih i stranih knjiga" />
    <meta name="author" content="Igor Milanovic" />
    <meta name="robots" content="index, follow" />
    <title>Pergament</title>
    <link rel="shortcut icon" href="https://tenanekretnine.rs/wp-content/uploads/2019/07/cropped-tena_logo-1.png" />

    <link href="https://fonts.googleapis.com/css?family=Mali:400i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/styles.css') }}" media="screen,projection" />
</head>

<body>
<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light  pr-3">
    <a class="navbar-brand " href="#">
        <img src="https://tenanekretnine.rs/wp-content/uploads/2019/07/cropped-tena_logo-1.png" class="nav_pic "  alt="Pergament najbolja prodavnica knjiga u gradu!" title="Pergament - Najbolja online prodavnica knjiga">
    </a>
    <button class="navbar-toggler nav_btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">


        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="{{route("home")}}">Početna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("ponuda")}}">Ponuda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("kontakt")}}">Kontakt</a>
            </li>

            @if(session()->has("user"))
                @if(session()->get("user")[0]->ulogaID==1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("admin")}}">Admin panel</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route("logOut")}}">Izlogujte se</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route("loginForm")}}">Ulogujte se</a>
                </li>
            @endif



        </ul>



    </div>
</nav>





<div class="container text-center " id="prvi">



    <div class="row">
        <div class="col-md-3">
            <!--                -----------------------------------------------------------     meni kategorije------------------------------------------------------------>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Obaveštenja</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>Statistika</td>
                </tr>
                <tr>
                    <td>Akcije korisnika</td>
                </tr>
                <tr>
                    <td>Upozorenja</td>
                </tr>
                </tbody>
            </table>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Upravljanje</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><a href="{{route("nekretnina.index")}}">Nekretnine</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("vlasnik.index")}}">Vlasnici</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("opstina.index")}}">Opštine</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("ulica.index")}}">Ulice</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("sprat.index")}}">Sprat</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("brojSoba.index")}}">Broj soba</a> </td>
                </tr>
                <tr>
                    <td><a href="{{route("stanje_objekta.index")}}">Stanje</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("grejanje.index")}}">Grejanje</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("tip_nekretnine.index")}}">Tip nekretnine</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("tip_usluge.index")}}">Tip usluge</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("tip_objekta.index")}}">Tip objekta</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("dodatno.index")}}">Dodatno</a></td>
                </tr>
                <tr>
                    <td><a href="{{route("ostalo.index")}}">Ostalo</a></td>
                </tr>
                </tbody>
            </table>


        </div>
        <div class="col-md-9" >





















@yield("content")




        </div>
    </div>

<nav class="navbar  navbar-light bg-light" id="footer">
    <div class="col-md-5  col-12 text-center">
        <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" width="290" height="100" alt="Pergament najbolja online prodavnica knjiga u gradu" title="Pergament - Najbolja online prodavnica knjiga">
        </a>
    </div>

    <div class="dropdown-divider"></div>
    <div class="col-md-3  col-12 text-center">
        Opsti uslovi koriscenja
    </div>


    <div class="col-md-3  col-12">
        <ul class="navbar-nav text-center">
            <li class="nav-item "> Telefon:</li>
            <li class="nav-item "> 011/1234-567</li>
            <li class="nav-item "> Adresa:</li>
            <li class="nav-item "> Ljubitelja književnosti 15a</li>
        </ul>
    </div>
</nav>




























<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    @yield("scripts")

</body>

</html>
