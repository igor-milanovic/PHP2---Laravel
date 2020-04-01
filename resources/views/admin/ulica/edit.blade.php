@extends("adminLayout")

@section("content")




    <div class="container text-center " id="prvi">

        <div class="row ">
            <div class="container text-center">
                <h2 class="display-3">Admin panel</h2>
            </div>
        </div>

        <div class="row text-center bg-light my-5 py-3">
            <div class="col-12  my-3">
                <h3>{{$header}}</h3>
            </div>
            <div class="col-12">
                <form action="{{route("$routeName.update",["$parameterName"=>$el->id])}}" method="POST">
                    @method('PUT')
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Opština</label>
                        <select class="form-control" id="opstina" name="opstina">
                            <option value="0">Odaberite opštinu</option>
                            @foreach($ddlOpstina as $d)
                                <option value="{{$d->id}}"
                                @if($el->opstinaID==$d->id)
                                    selected
                                    @endif>

                                    {{$d->naziv}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ime">Naziv ulice</label>
                        <input type="text" class="form-control" id="naziv" name="naziv" placeholder="Naziv ulice" value="{{$el->naziv}}">
                    </div>




                    <button type="submit" class="btn btn-secondary">Unesi</button>
                </form>
            </div>
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

@endsection


















