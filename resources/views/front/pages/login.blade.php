@extends("layout")

@section("content")


    <div class="container text-center " id="prvi">
        <div class="row ">
            <div class="container text-center">
                <h2 class="display-3">Ulogujte se</h2>
                @if(session()->has("error"))
                    <div class="alert alert-error">
                        {{session()->get("error")}}
                    </div>
                @endif
            </div>

        </div>

        <div class="row text-center bg-light my-5 py-3">
            <div class="col-12  my-3">
                <h3>Unesite Vaše kredencijale</h3>
            </div>
            <div class="col-12">
                <form action="{{route("loginUser")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="ime">Vaš email</label>
                        <input type="text" class="form-control" id="mail" name="mail" placeholder="Vaš email">
                    </div>
                    <div class="form-group">
                        <label for="adresa">Vaša lozinka</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Vaša lozinka">
                    </div>


                    <button type="submit" class="btn btn-secondary">Ulogujte se</button>
                </form>
            </div>
            <div class="col-12  my-3">
                <a href="{{route("registerForm")}}">Registrujte se ovde</a>
            </div>
        </div>
    </div>

@endsection
