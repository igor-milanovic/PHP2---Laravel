@extends("layout")

@section("content")

    <div class="container text-center " id="prvi">

        <div class="row ">
            <div class="container text-center">
                <h2 class="display-3">Registracija</h2>
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
        </div>

        <div class="row text-center bg-light my-5 py-3">
            <div class="col-12  my-3">
                <h3>Zapratite novosti o stanovima koji Vas interesuju!</h3>
            </div>
            <div class="col-12">
                <form action="{{route("registerUser")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="ime">Vaš email</label>
                        <input type="text" class="form-control" id="mail"  name="mail" placeholder="Vaš email">
                    </div>
                    <div class="form-group">
                        <label for="adresa">Vaša lozinka</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Vaša lozinka">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="email">Ponovite lozinku</label>--}}
{{--                        <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Ponovite lozinku">--}}
{{--                    </div>--}}

                    <button type="submit" class="btn btn-secondary">Registruj se</button>
                </form>
            </div>
        </div>
        <div class="col-12  my-3">
            <a href="{{route("loginForm")}}">Ulogujte se ovde</a>
        </div>

    </div>
@endsection
