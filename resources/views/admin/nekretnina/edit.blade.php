@extends("adminLayout")
@section("content")

    <div class="container text-center " id="prvi">
{{--{{dd($data)}}--}}
<form  action="{{route("$routeName.update",["$parameterName"=>$data["info"]->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @method('PATCH')
    @csrf

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
                                    <input class="form-check-input" type="radio" name="tip_usluge" id="tip_usluge" value="{{$d->id}}"

                                           @if($d->id == $data["info"]->tipUslugeID)
                                           checked
                                        @endif

                                    >
                                    <label class="form-check-label" for="inlineRadio1">{{$d->id}}</label>
                                </div>
                            </td>

                        @endforeach
                    </tr>
                    </tbody>
                </table>

            </div>

            <div class="col-sm-6">
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th scope="col" colspan="3" >Adresa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
{{--                                {{dd($opstina)}}--}}
{{--                                {{dd($data["info"]->opstinaID)}}--}}
                                <select class="form-control" id="opstina" name="opstina">


                        @foreach($opstina as $d)

{{--{{dd($d->id)}}--}}
                            <option value="{{$d->id}}"

                                    @if($d->id == $data["info"]->opstinaID)

                                    selected="selected"
                                        @endif

                                    >
                                    {{$d->naziv}}
                            </option>

                        @endforeach
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <select class="form-control" id="ulica" name="ulica">
                                    @foreach($ulica as $d)


                                        <option value="{{$d->id}}"

                                                @if($d->id == $data["info"]->ulicaID)
                                                selected="selected"
                                            @endif

                                        >
                                            {{$d->naziv}}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="text" class="form-control" id="broj" name="broj" placeholder="Broj" value="{{$data["info"]->broj}}">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>

        <div class="row align-items-center">

            <div class="col-sm-3">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Vlasnik</label>
                    <select class="form-control" id="vlasnik" name="vlasnik">
                        @foreach($vlasnik as $d)


                            <option value="{{$d->id}}"

                                    @if($d->id == $data["info"]->vlasnikID)
                                    selected="selected"
                                @endif

                            >
                                {{$d->Ime}}  {{$d->Prezime}}
                            </option>

                        @endforeach
                    </select>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Broj soba</label>
                    <select class="form-control" id="brSoba" name="brSoba">
                        @foreach($brSoba as $d)


                            <option value="{{$d->id}}"

                                    @if($d->id == $data["info"]->brSobaID)
                                    selected="selected"
                                @endif

                            >
                                {{$d->naziv}}
                            </option>

                        @endforeach
                    </select>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Sprat</label>
                    <select class="form-control" id="sprat" name="sprat">
                        @foreach($sprat as $d)


                            <option value="{{$d->id}}"

                                    @if($d->id == $data["info"]->spratID)
                                    selected="selected"
                                @endif

                            >
                                {{$d->naziv}}
                            </option>

                        @endforeach
                    </select>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Stanje</label>
                    <select class="form-control" id="stanje" name="stanje">
                        @foreach($stanje as $d)


                            <option value="{{$d->id}}"

                                    @if($d->naziv == $data["info"]->stanje)
                                    selected="selected"
                                @endif

                            >
                                {{$d->naziv}}
                            </option>

                        @endforeach
                    </select>
                </div>

            </div>

        </div>

        <div class="row align-items-center">

            <div class="col-sm-3">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tip objekta</label>
                    <select class="form-control" id="tip_objekta" name="tip_objekta">

                        @foreach($tip_objekta as $d)


                            <option value="{{$d->id}}"

                                    @if($d->id == $data["info"]->tipObjektaID)
                                    selected="selected"
                                @endif

                            >
                                {{$d->naziv}}
                            </option>

                        @endforeach
                    </select>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tip nekretnine</label>
                    <select class="form-control" id="tip_nekretnine" name="tip_nekretnine">

                        @foreach($tip_nekretnine as $d)


                            <option value="{{$d->id}}"

                                    @if($d->id == $data["info"]->tipNekretnineID)
                                    selected="selected"
                                @endif

                            >
                                {{$d->naziv}}
                            </option>

                        @endforeach
                    </select>
                </div>

            </div>

            <div class="col-sm-3">


                <div class="form-group">
                    <label for="exampleFormControlSelect1">Slika</label>
                    <div class="custom-file">
{{--                        <input type="file" class="form-control"  placeholder="Gde tražite?">--}}
                        <input type="file"  id="inputGroupFile02" name="slika">
{{--                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Slika</label>--}}
                    </div>
                </div>

            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Ukupna spratnost</label>
                    <input type="text" class="form-control"id="spratnost" name="spratnost" placeholder="Ukupna spratnost" value="{{$data["info"]->ukupnaSpratnost}}">
                </div>

            </div>

        </div>






    <div class="row align-items-center">

        <div class="col-sm-2">

            <div class="form-group">
                <label for="exampleFormControlSelect1">Cena</label>
                <input type="text" class="form-control" placeholder="Cena" id="cena" name="cena" value="{{$data["info"]->cena}}">

            </div>

        </div>

        <div class="col-sm-2">

            <div class="form-group">
                <label for="exampleFormControlSelect1">Kvadratura</label>
                <input type="text" class="form-control" placeholder="Kvadratura" id="kvadratura" name="kvadratura" value="{{$data["info"]->brKvadrata}}">
            </div>

        </div>

        <div class="col-sm-2">
            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th scope="col" colspan="2" style="border-top: 0px;">Prikaži na sajtu</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="prikaz" id="prikaz" name="prikaz"  @if($data["info"]->prikazi==1)
                                            checked
                                                   @endif value="1">
                                            <label class="form-check-label" for="inlineRadio1">Da</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="prikaz" id="prikaz" name="prikaz" @if($data["info"]->prikazi==2)
                                            checked
                                                   @endif value="2">
                                            <label class="form-check-label" for="inlineRadio1">Ne</label>
                                        </div>
                                    </td>

                                </tr>
                                </tbody>
                            </table>

        </div>

        <div class="col-sm-6">

            <div class="form-group">
                <label for="exampleFormControlSelect1">Naslov</label>
                <textarea class="form-control" aria-label="With textarea" id="naslov" name="naslov" >{{$data["info"]->naslov}}</textarea>

            </div>

        </div>





    </div>

    <div class="row align-items-center">

        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">

            <div class="form-group">
                <label for="exampleFormControlSelect1">Opis</label>

                <textarea class="form-control" aria-label="With textarea" id="opis" name="opis">{{$data["info"]->naslov}}</textarea>

            </div>

        </div>


        <div class="col-sm-2">

        </div>



    </div>






























































        <div class="row align-items-center">
            <div class="col-sm-4">
                <a class="btn btn-primary" data-toggle="collapse" href="#grejanje" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Grejanje</a>
                <div class="row align-items-center mt-3">
                    <div class="col-sm-12">
                        <div class="collapse multi-collapse" id="grejanje">

                            @foreach($grejanje as $d)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{$d->id}}"  name="grejanje[]"
                                           @foreach($data["grejanje"] as $o)
                                           @if($d->id == $o->grejanje)
                                           checked
                                           @endif
                                           @endforeach


                                           id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{$d->naziv}}
                                    </label>
                                </div>
                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <a class="btn btn-primary" data-toggle="collapse" href="#ostalo" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Ostalo</a>
                <div class="row align-items-center mt-3">
                    <div class="col-sm-12">
                        <div class="collapse multi-collapse" id="ostalo">

                            @foreach($ostalo as $d)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{$d->id}}"  name="ostalo[]"
                                           @foreach($data["ostalo"] as $o)
                                           @if($d->id == $o->ostalo)
                                           checked
                                           @endif
                                           @endforeach


                                           id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{$d->naziv}}
                                    </label>
                                </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <a class="btn btn-primary" data-toggle="collapse" href="#dodatno" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Dodatno</a>
                <div class="row align-items-center mt-3">
                    <div class="col-sm-12">
                        <div class="collapse multi-collapse" id="dodatno">

                            @foreach($dodatno as $d)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{$d->id}}" name="dodatno[]"
                                    @foreach($data["dodatno"] as $o)
                                        @if($d->id == $o->dodatno)
                                           checked
                                        @endif
                                    @endforeach


                                           id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{$d->naziv}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row align-items-center">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-secondary">Izmeni</button>
            </div>
        </div>






    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


</form>
































    </div>


@endsection
