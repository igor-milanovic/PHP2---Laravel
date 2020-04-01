@extends("adminLayout")
@section("content")

    <div class="container text-center " id="prvi">

        <form  action="{{route("$routeName.store")}}" method="POST" enctype="multipart/form-data">
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

                                    <select class="form-control" id="opstina" name="opstina">
                                        <option>Opstina</option>

                                        @foreach($opstina as $d)


                                            <option value="{{$d->id}}"



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



                                            >
                                                {{$d->naziv}}
                                            </option>

                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="broj" name="broj" placeholder="Broj" >
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

                            <input type="file"  id="inputGroupFile02" name="slika">

                        </div>
                    </div>

                </div>

                <div class="col-sm-3">
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
                                    <input class="form-check-input" type="radio" name="prikaz" id="prikaz" name="prikaz" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Da</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="prikaz" id="prikaz" name="prikaz" value="2" checked>
                                    <label class="form-check-label" for="inlineRadio1">Ne</label>
                                </div>
                            </td>

                        </tr>
                        </tbody>
                    </table>

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
                    <button type="submit" class="btn btn-secondary">Unesi</button>
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
