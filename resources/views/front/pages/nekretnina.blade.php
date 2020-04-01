@extends("layout")

@section("content")


    <div class="container " id="prvi">
        <div class="row mt-3 align-items-center">
            <div class="col-sm-12 col-md-6 text-center mt-lg-5">

                <img src="{{asset("images\\".$data['info']->slika)}}" alt="Igor Milanović" class="img-fluid rounded ">
            </div>
            <div class="col-sm-12 col-md-6 mt-5">
                <h2 class="display-4 d-none d-lg-block text-center">{{$data["info"]->naslov}}</h2>


                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Informacije</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dodatno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Ostalo</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ul class="list-group">
                            <li class="list-group-item ">Cena: <span class="float-right">{{$data["info"]->cena}}</span></li>
                            <li class="list-group-item ">Kvadratura: <span class="float-right">{{$data["info"]->brKvadrata}}</span></li>
                            <li class="list-group-item ">Tip objekta: <span class="float-right">{{$data["info"]->objekat}}</span></li>
                            <li class="list-group-item ">Broj soba: <span class="float-right">{{$data["info"]->brsoba}}</span></li>
                            <li class="list-group-item ">Tip nekretnine: <span class="float-right">{{$data["info"]->nekretnina}}</span></li>
                            <li class="list-group-item ">Stanje objekta: <span class="float-right">{{$data["info"]->stanje}}</span></li>
                            <li class="list-group-item ">Grejanje: <span class="float-right">
                                    @foreach($data["grejanje"] as $d) {{$d->grejanjeNaziv}},    @endforeach

                                </span></li>
                            <li class="list-group-item ">Sprat: <span class="float-right">{{$data["info"]->sprat}}</span></li>
              @if($data["info"]->ukupnaSpratnost != null)              <li class="list-group-item ">Ukupna spratnost: <span class="float-right">{{$data["info"]->ukupnaSpratnost}}</span></li> @endif
                            <li class="list-group-item ">Opština: <span class="float-right">{{$data["info"]->opstina}}</span></li>
                            <li class="list-group-item ">Adresa: <span class="float-right">{{$data["info"]->ulica}} {{$data["info"]->broj}}</span></li>


                            <!--<li class="list-group-item ">Cena: <a
                                    href="https://igor-milanovic-portfolio.000webhostapp.com/"><span
                                        class="float-right">Pogledajte portfolio</span></a></li>-->
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ul class="list-group">
                            @foreach($dodatno as $d)
                                <li class="list-group-item ">{{$d->naziv}} <span class="float-right">

                                        @foreach($data["dodatno"] as $o)
                                            @if($d->id == $o->dodatno)
                                                <i class="fas fa-check-square"></i>
                                            @endif
                                        @endforeach
                                    </span></li>
                            @endforeach


                        </ul>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <ul class="list-group">
                            @foreach($ostalo as $d)
                                <li class="list-group-item ">{{$d->naziv}} <span class="float-right">

                                        @foreach($data["ostalo"] as $o)
                                            @if($d->id == $o->ostalo)
                                        <i class="fas fa-check-square"></i>
                                            @endif
                                        @endforeach
                                    </span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>











            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 pt-4">
                <h3>
                    Dodatni opis:<br/>
                    <small class="text-muted">
                    {{$data["info"]->opis}}
                  </small>
                </h3>
            </div>
        </div>
        <hr class="my-3">




{{--        <div class="row d-none d-md-block">--}}
{{--            <div class="col">--}}
{{--                <h3 class="display-4 text-center mb-5">Slični stanovi</h3>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row d-none d-md-block mb-2" id="donji">--}}
{{--            <div class="container">--}}
{{--                <div class="card-deck">--}}
{{--                    <div class="card">--}}
{{--                        <a data-toggle="modal" data-target="#exampleModalCenter1"><img class="card-img-top img-fluid"--}}
{{--                                                                                       src="1.jpg" alt="Da Vinčijev Kod"></a>--}}
{{--                        <div class="card-body">--}}
{{--                            <a data-toggle="modal" data-target="#exampleModalCenter1">--}}
{{--                                <h5 class="card-title">Da Vinčijev Kod</h5>--}}
{{--                            </a>--}}
{{--                            <p class="card-text">Prva u nizu knjiga o avanturama Roberta Langdona!</p>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer">--}}
{{--                            <small class="text-muted">Den Braun</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card">--}}
{{--                        <a data-toggle="modal" data-target="#exampleModalCenter2"><img class="card-img-top img-fluid"--}}
{{--                                                                                       src="2.jpg " alt="Nož"></a>--}}
{{--                        <div class="card-body">--}}
{{--                            <a data-toggle="modal" data-target="#exampleModalCenter2">--}}
{{--                                <h5 class="card-title">Čuvari biblioteke</h5>--}}
{{--                            </a>--}}
{{--                            <p class="card-text">Poslednji deo cuvenog serijala o inspektorima FBI u potrazi za tajnom--}}
{{--                                cuvanom hiljadama godina!</p>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer">--}}
{{--                            <small class="text-muted">Glen Kuper</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card">--}}
{{--                        <a data-toggle="modal" data-target="#exampleModalCenter3"><img class="card-img-top img-fluid"--}}
{{--                                                                                       src="3.jpg" alt="Nož"></a>--}}
{{--                        <div class="card-body">--}}
{{--                            <a data-toggle="modal" data-target="#exampleModalCenter3">--}}
{{--                                <h5 class="card-title">Knjiga mrtvih duša</h5>--}}
{{--                            </a>--}}
{{--                            <p class="card-text">Nastvak svetskog bestselera "Biblioteka mrtvih". Otkrijte da li je najveca--}}
{{--                                misterija covecanstva otkrivena!</p>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer">--}}
{{--                            <small class="text-muted">Glen Kuper</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    </div>






@endsection
