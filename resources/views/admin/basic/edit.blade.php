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
                        <label for="ime">Naziv tipa</label>
                        <input type="text" class="form-control" id="tip_usluge" name="naziv" placeholder="naziv" value="{{$el->naziv}}">

                    </div>

                    <button type="submit" class="btn btn-secondary">Izmeni</button>
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
