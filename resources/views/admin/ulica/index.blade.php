@extends("adminLayout")
@section("content")

    <div class="container text-center " id="prvi">
        <div class="container text-center">
            <h2 class="display-3">{{$header}}</h2>
        </div>
        @if(session()->has("success"))
            <div class="alert alert-success">
                {{session()->get("success")}}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Opstina</th>
                <th scope="col">Naziv ulice</th>
                <th scope="col">Akcija</th>

            </tr>
            </thead>
            <tbody>

            @foreach($tipovi as $d)

                <tr>
                    <th scope="row">{{$d->id}}</th>
                    <td>{{$d->opstina}}</td>
                    <td>{{$d->naziv}}</td>


                    <td>
                        <a href="{{route("$routeName.edit",["$parameterName"=>$d->id])}}"><i class="fas fa-pen"></i></a>

                        <span onclick="obrisi({{$d->id}});"><i class="fas fa-trash-alt"></i></span></td>
                </tr>

            @endforeach
            <tr>
                <td colspan="4"><a href="{{route("$routeName.create")}}" > Dodaj</a></td></td>

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
