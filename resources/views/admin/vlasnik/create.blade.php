@extends("adminLayout")

@section("content")
  <!--  <div class="container text-center " id="prvi">
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
                <form action="{{route("$routeName.store")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="ime">Naziv tipa</label>
                        <input type="text" class="form-control" id="tip_usluge" name="naziv" placeholder="naziv">
                    </div>

                    <button type="submit" class="btn btn-secondary">Unesi</button>
                </form>
            </div>
        </div>


    </div>
-->
  <div class="container text-center " id="prvi">
      <div class="row ">
          <div class="container text-center">
              <h2 class="display-3">Admin panel</h2>
          </div>
      </div>

      <div class="row text-center bg-light my-5 py-3">
          <div class="col-12  my-3">
              <h3>Vlasnik</h3>
          </div>
          <div class="col-12">
              {{route("$routeName.store")}}
              <form action="{{route("$routeName.store")}}" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="ime">Ime</label>
                      <input type="text" class="form-control" id="ime" name="ime" placeholder="Ime" >
                  </div>

                  <div class="form-group">
                      <label for="ime">Prezime</label>
                      <input type="text" class="form-control" id="prezime" name="prezime" placeholder="Prezime" >
                  </div>

                  <div class="form-group">
                      <label for="ime">Broj telefona</label>
                      <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon" >
                  </div>


                  <div class="form-group">
                      <label for="porudzbina">Dodatne informacije</label>
                      <textarea class="form-control" id="dodatno" name="dodatno" rows="5" ></textarea>
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
