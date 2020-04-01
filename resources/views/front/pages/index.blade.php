@extends("layout")

@section("content")

    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner d-flex align-items-center slika sl_text">
            <div class="carousel-item active">
                <div class="jumbotron mx-4 sl_text">
                    <h1 class="display-4">Prodaja , kupovina i izdavanje nepokretnosti u današnje vreme ima sasvim novu dimenziju.</h1>
                    <p class="lead">Naša agencija je svesna sve veće uloge koju agent posrednik ima u tom procesu. Svakom našem klijentu mi smo profesionalan partner i uslužan savetodavac.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Detaljnije</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron mx-4 sl_text">
                    <h1 class="display-4">Konsultacije</h1>
                    <p class="lead">širokim krugom ljudi sa bogatim iskustvom u radu sa stambenim i komercijalnim nekretninama, gradjevinarstvom, pravnim poslovima, oglašavanjem, logistikom i projektovanjem – sigurni smo da možemo da budemo od pomoći u svakom trenutku gde Vam bude bila podrška i pomoć </p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Detaljnije</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron mx-4 sl_text">
                    <h1 class="display-4">Dom ili kancelarija, kupovina ili prodaja, trajno ili iznajmljivanje</h1>
                    <p class="lead">Kažite nam Vaše želje ili pitajte za savet</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Detaljnije</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron mx-4 sl_text">
                    <h1 class="display-4">Kontaktirajte nas</h1>
                    <p class="lead">Spremni smo da zajedno odradimo svaki posao od početka do finalne realizacije, brzo, diskretno i stručno.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Detaljnije</a>
                    </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container">
        <div class="row justify-content-around" id="istaknuto">
            <div class=" col-sm-12" >
                <h2 class="text-center">Istaknuto</h2>
            </div>







        @foreach($data as $d)
                <div class="col-sm-6 col-lg-3 my-3">
                    <a href="{{route("prikaz",["id"=>$d->id])}}">
                    <div class="card text-center " >
                        <img src="images/{{$d->slika}}" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">{{$d->tip}}</h5>
                            <p class="card-text">{{$d->naslov}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$d->brKvadrata}}kv  {{$d->cena}}e</li>
                            <li class="list-group-item">{{$d->opstina}}, {{$d->ulica}} {{$d->broj}}</li>

                        </ul>
                    </div>
                    </a>
                </div>
        @endforeach



























        </div>
        <div class="row justify-content-around" id="donji">
            <div class=" col-sm-12" >
                <h2 class="text-center">Usluge</h2>
            </div>

            <!-- jedna usluga -->
            <div class="usl col-sm-6 col-12">
                <div class="row">
                    <div class="col-3 text-center my-auto ">
                        asdasd
                    </div>
                    <div class="col-9  my-auto">
                        <h5>Posredovanje</h5>
                        <p>Posredovanje pri kupoprodaji i izdavanju nepokretnosti</p>
                    </div>
                </div>
            </div>
            <!-- usluga gotova -->

            <!-- jedna usluga -->
            <div class="usl col-sm-6 col-12">
                <div class="row">
                    <div class="col-3 text-center my-auto ">
                        asdasd
                    </div>
                    <div class="col-9  my-auto">
                        <h5>Dokumentacija</h5>
                        <p>Kompletiranje dokumentacije za prodaju nepokretnosti</p>
                    </div>
                </div>
            </div>
            <!-- usluga gotova -->



            <!-- jedna usluga -->
            <div class="usl col-sm-6 col-12">
                <div class="row">
                    <div class="col-3 text-center my-auto ">
                        asdasd
                    </div>
                    <div class="col-9  my-auto">
                        <h5>3d prikaz</h5>
                        <p>prezentacija mogucnosti adaptacije nepokretnosti u 3D formatu</p>
                    </div>
                </div>
            </div>
            <!-- usluga gotova -->



            <!-- jedna usluga -->
            <div class="usl col-sm-6 col-12">
                <div class="row">
                    <div class="col-3 text-center my-auto ">
                        asdasd
                    </div>
                    <div class="col-9  my-auto">
                        <h5>Konsultovanje</h5>
                        <p>konsultanske i savetodavne usluge</p>
                    </div>
                </div>
            </div>
            <!-- usluga gotova -->



            <!-- jedna usluga -->
            <div class="usl col-sm-6 col-12">
                <div class="row">
                    <div class="col-3 text-center my-auto ">
                        asdasd
                    </div>
                    <div class="col-9  my-auto">
                        <h5>Upravljanje</h5>
                        <p>dugorocno izdavanje sa upravljanjem</p>
                    </div>
                </div>
            </div>
            <!-- usluga gotova -->



            <!-- jedna usluga -->
            <div class="usl col-sm-6 col-12">
                <div class="row">
                    <div class="col-3 text-center my-auto ">
                        asdasd
                    </div>
                    <div class="col-9  my-auto">
                        <h5>Renoviranje</h5>
                        <p>pomoć pri angažovanju radnika za selidbu i renoviranje</p>
                    </div>
                </div>
            </div>
            <!-- usluga gotova -->
        </div>
    </div>
    @endsection
