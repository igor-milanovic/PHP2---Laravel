@extends("layout")
@section("content")




    <div class="container text-center " id="prvi">

        <div class="row align-items-center mt-3">
            <div class="col-sm-12 mt-3">
                <a class="btn btn-primary" data-toggle="collapse" href="#pretraga" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Pretraga</a>
            </div>
        </div>
        <div class="collapse multi-collapse" id="pretraga">


            <div class="row">

                <div class="col-sm-12">

                    <div class="form-group">
                        <label for="formGroupExampleInput">Unesite lokaciju</label>
                        <input type="text" class="form-control" id="pr" placeholder="Gde tražite?">


                        <table class="table table-dark text-left" style="display: none;" id="pon">
                            <tbody id="tabelica">

                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

            <div class="row mt-3 ">
                <div class="col-sm-6">

                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th scope="col" colspan="3" >Tip usluge</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            @foreach($tip_usluge as $d)


                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input tip_usluge" type="radio" name="tip_usluge" id="tip_usluge" value="{{$d->id}}"



                                        >
                                        <label class="form-check-label" for="inlineRadio1">{{$d->naziv}}</label>
                                    </div>
                                </td>

                            @endforeach
                        </tr>
                        </tbody>
                    </table>

                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Šta tražite?</label>

                            <select class="form-control" id="tip_nekretnine" name="tip_nekretnine">
                                <option value="0">Tip nekretnine</option>
                                @foreach($tip_nekretnine as $d)


                                    <option value="{{$d->id}}"



                                    >
                                        {{$d->naziv}}
                                    </option>

                                @endforeach
                            </select>

                    </div>

                </div>


            </div>


{{--OVO NECU STICI DA ODRADIM, IDEM METODOM, ZA PROLAZ--}}
{{--            <div class="row align-items-center">--}}

{{--                <div class="col-sm-4">--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlSelect1">Šta tražite?</label>--}}
{{--                        <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                            <option>Stan</option>--}}
{{--                            <option>Stan</option>--}}
{{--                            <option>Stan</option>--}}
{{--                            <option>Stan</option>--}}
{{--                            <option>Stan</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="col-sm-4">--}}

{{--                    <div class="form-check form-check-inline">--}}
{{--                        <input class="form-check-input" type="radio" name="akcija" id="inlineRadio1" value="option1">--}}
{{--                        <label class="form-check-label" for="inlineRadio1">Prodaja</label>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="col-sm-4">--}}

{{--                    <div class="form-check form-check-inline">--}}
{{--                        <input class="form-check-input" type="radio" name="akcija" id="inlineRadio1" value="option1">--}}
{{--                        <label class="form-check-label" for="inlineRadio1">Izdavanje</label>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}







{{--            <div class="row align-items-center">--}}

{{--                <div class="col-sm-4">--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlSelect1">Cena</label>--}}
{{--                        <form>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    Od: <input type="text" class="form-control" placeholder="First name">--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    Do: <input type="text" class="form-control" placeholder="Last name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="col-sm-4">--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlSelect1">Kvadratura</label>--}}
{{--                        <form>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    Od: <input type="text" class="form-control" placeholder="First name">--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    Do: <input type="text" class="form-control" placeholder="Last name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div>--}}



{{--                <div class="col-sm-4">--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlSelect1">Broj soba od:</label>--}}
{{--                        <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                            <option>0.5</option>--}}
{{--                            <option>0.5</option>--}}
{{--                            <option>0.5</option>--}}
{{--                            <option>0.5</option>--}}
{{--                            <option>0.5</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}




{{--            <div class="row align-items-center">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <a class="btn btn-primary" data-toggle="collapse" href="#detaljnije" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Detaljnije</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row align-items-center mt-3">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <div class="collapse multi-collapse" id="detaljnije">--}}
{{--                        <div class="row align-items-center">--}}

{{--                            <div class="col-sm-3">--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleFormControlSelect1">Stanje:</label>--}}
{{--                                    <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="col-sm-3">--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleFormControlSelect1">Tip objekta:</label>--}}
{{--                                    <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="col-sm-3">--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleFormControlSelect1">Sprat:</label>--}}
{{--                                    <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="col-sm-3">--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleFormControlSelect1">Grejanje:</label>--}}
{{--                                    <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                        <option>0.5</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <a class="btn btn-primary" data-toggle="collapse" href="#ostalo" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Ostalo</a>--}}
{{--                                <div class="row align-items-center mt-3">--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <div class="collapse multi-collapse" id="ostalo">--}}

{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Default checkbox--}}
{{--                                                </label>--}}
{{--                                            </div>--}}

{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Default checkbox--}}
{{--                                                </label>--}}
{{--                                            </div>--}}

{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Default checkbox--}}
{{--                                                </label>--}}
{{--                                            </div>--}}

{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Default checkbox--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Default checkbox--}}
{{--                                                </label>--}}
{{--                                            </div><div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Default checkbox--}}
{{--                                                </label>--}}
{{--                                            </div><div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Default checkbox--}}
{{--                                                </label>--}}
{{--                                            </div><div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Default checkbox--}}
{{--                                                </label>--}}
{{--                                            </div>--}}


{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <a class="btn btn-primary" data-toggle="collapse" href="#dodatno" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Dodatno</a>--}}
{{--                                <div class="row align-items-center mt-3">--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <div class="collapse multi-collapse" id="dodatno">--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Uknjizen--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Duplex--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Nije poslednji sprat--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                    Default checkbox--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!--GOTOV DETALJNIJE-->
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <input type="button" id="pretrazi" value="Pretrazi"/>
{{--                    <a class="btn btn-primary"  href="#" role="button" id="pretrazi">Pretrazi</a>--}}
                </div>
            </div>
        </div>
        <!-- GOTOVA PRETRAGA-->
    </div>
    </div>


    <div class="container my-3">

        <div class="row justify-content-around" id="istaknuto">
            <div class=" col-sm-12">
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



    </div>

    @endsection
@section("scripts")
    <script type="text/javascript" src="{{ asset('js/ponuda.js') }}"></script>

    @endsection
