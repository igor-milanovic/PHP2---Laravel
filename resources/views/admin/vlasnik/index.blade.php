@extends("adminLayout")
@section("content")

    <div class="container text-center " id="prvi">
        <div class="container text-center">
            <h2 class="display-3">Vlasnici</h2>
        </div>
        <table class="table table-striped">
            @if(session()->has("success"))
                <div class="alert alert-success">
                    {{session()->get("success")}}
                </div>
            @endif
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ime</th>
                <th scope="col">Prezime</th>
                <th scope="col">Broj telefona</th>
                <th scope="col">Dodatne informacije</th>
                <th scope="col">Akcija</th>

            </tr>
            </thead>
            <tbody>

            @foreach($tipovi as $d)

                <tr>
                    <th scope="row">{{$d->id}}</th>

                    <td>{{$d->Ime}}</td>
                    <td>{{$d->Prezime}}</td>
                    <td>{{$d->brTelefona}}</td>
                    <td>{{$d->ostalo}}</td>

                    <td>
                        <a href="{{route("$routeName.edit",["$parameterName"=>$d->id])}}"><i class="fas fa-pen"></i></a>

                        <span onclick="obrisi({{$d->id}});"><i class="fas fa-trash-alt"></i></span></td>
                </tr>

            @endforeach
            <tr>
                <td colspan="6"><a href="{{route("$routeName.create")}}" > Dodaj</a></td></td>

            </tr>

            </tbody>
        </table>

    </div>

@endsection
@section("scripts")
    <script>
            {{--            {{route("$routeName.store")}}--}}
        let pageUrl="{{route("$routeName.store")}}";
        let novo="{{route("$routeName.edit",["$parameterName"=>$d->id])}}";
        let briska="{{route("$routeName.destroy",["$parameterName"=>$d->id])}}";
    </script>
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
@endsection
