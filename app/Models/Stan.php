<?php


namespace App\Models;


class Stan
{
    protected $tableName="stan";
    public $brojSoba, $dodatno, $grejanje, $opstina, $ostalo, $sprat, $stanje,
    $tipNekretnine, $tipObjekta, $tipUsluge,
    $ulica, $vlasnik,$slika, $prikaz, $broj="bb", $kvadrati="0", $cena="0", $naslov="naslov", $opis="opis", $ukupnaSpratnost="/", $id;


    public function getOne($id){

        $data["info"]=
         \DB::table($this->tableName)
            ->join('tip_nekretnine', 'stan.tipNekretnineID', '=', 'tip_nekretnine.id')
            ->join('tip_objekta', 'stan.tipObjektaID', '=', 'tip_objekta.id')
            ->join('tip_usluge', 'stan.tipUslugeID', '=', 'tip_usluge.id')
            ->join('brsoba', 'stan.brSobaID', '=', 'brsoba.id')
            ->join('sprat', 'stan.spratID', '=', 'sprat.id')
            ->join('opstina', 'stan.opstinaID', '=', 'opstina.id')
            ->join('ulica', 'stan.ulicaID', '=', 'ulica.id')
            ->join('stanje_objekta', 'stan.stanjeID', '=', 'stanje_objekta.id')
            ->join('vlasnik', 'stan.vlasnikID', '=', 'vlasnik.id')
//            ->join('stan_dodatno', 'stan.Id', '=', 'stan_dodatno.stanID')
//            ->join('dodatno', 'stan_dodatno.dodatnoID', '=', 'dodatno.Id')
//            ->join('stan_ostalo', 'stan.Id', '=', 'stan_ostalo.stanID')
//            ->join('ostalo', 'stan_ostalo.ostaloID', '=', 'ostalo.Id')
//            ->join('stan_grejanje', 'stan.Id', '=', 'stan_grejanje.stanID')
//            ->join('grejanje', 'stan_grejanje.grejanjeID', '=', 'grejanje.Id')
            ->select("stan.*","opstina.naziv as opstina","ulica.naziv as ulica", "tip_nekretnine.naziv as nekretnina", "tip_objekta.naziv as objekat","tip_usluge.naziv as usluga","brsoba.naziv as brsoba","sprat.naziv as sprat","stanje_objekta.naziv as stanje","vlasnik.id as vlasnikID", "vlasnik.Ime as vlasnikIme", "vlasnik.Prezime AS vlasnikPrezime")
            ->where('stan.Id',$id)
            ->first();


        $data["dodatno"]= \DB::table($this->tableName)
                 ->join('stan_dodatno', 'stan.Id', '=', 'stan_dodatno.stanID')
                 ->join('dodatno', 'stan_dodatno.dodatnoID', '=', 'dodatno.Id')
                 ->select('dodatno.id as dodatno')
                   ->where('stan.Id',$id)
                 ->get()->toArray();


        $data["grejanje"]= \DB::table($this->tableName)
            ->join('stan_grejanje', 'stan.Id', '=', 'stan_grejanje.stanID')
            ->join('grejanje', 'stan_grejanje.grejanjeID', '=', 'grejanje.Id')
            ->select('grejanje.id as grejanje', "grejanje.naziv as grejanjeNaziv")
            ->where('stan.Id',$id)
            ->get()->toArray();







        $data["ostalo"]= \DB::table($this->tableName)
            ->join('stan_ostalo', 'stan.Id', '=', 'stan_ostalo.stanID')
            ->join('ostalo', 'stan_ostalo.ostaloID', '=', 'ostalo.Id')
//            ->select('ostalo.id as ostalo')
            ->select('ostalo.id as ostalo')
            ->where('stan.Id',$id)
            ->get()->toArray();

        return $data;
    }

    public function getAll(){

        return \DB::table($this->tableName)
            ->join('tip_nekretnine', 'stan.tipNekretnineID', '=', 'tip_nekretnine.id')
            ->join('opstina', 'stan.opstinaID', '=', 'opstina.id')
            ->join('ulica', 'stan.ulicaID', '=', 'ulica.id')
            ->select("stan.*","opstina.naziv as opstina","ulica.naziv as ulica", "tip_nekretnine.naziv as tip")
            ->get();
    }

    public function createNew(){
        try{
            \DB::transaction(function () {
                $id= \DB::table($this->tableName)->insertGetId([
                    "tipNekretnineID"=>$this->tipNekretnine,
                    "tipObjektaID"=>$this->tipObjekta,
                    "tipUslugeID"=>$this->tipUsluge,
                    "brSobaID"=>$this->brojSoba,
                    "spratID"=>$this->sprat,
                    "vlasnikID"=>$this->vlasnik,
                    "opstinaID"=>$this->opstina,
                    "ulicaID"=>$this->ulica,
                    "broj"=>$this->broj,
                    "brKvadrata"=>$this->kvadrati,
                    "cena"=>$this->cena,
                    "stanjeID"=>$this->stanje,
                    "naslov"=>$this->naslov,
                    "opis"=>$this->opis,
                    "slika"=>$this->slika,
                    "ukupnaSpratnost"=>$this->ukupnaSpratnost,
                    "prikazi"=>$this->prikaz
                ]);
                if($this->grejanje != null){
                    foreach ($this->grejanje as $g){

                        \DB::table("stan_grejanje")->insert([
                            "stanID"=>$id,
                            "grejanjeID"=>$g
                        ]);
                    }
                }

                if($this->ostalo != null) {
                    foreach ($this->ostalo as $o){

                        \DB::table("stan_ostalo")->insert([
                            "stanID"=>$id,
                            "ostaloID"=>$o
                        ]);
                    }
                }


                if($this->dodatno != null) {
                    foreach ($this->dodatno as $d){

                        \DB::table("stan_dodatno")->insert([
                            "stanID"=>$id,
                            "dodatnoID"=>$d
                        ]);
                    }
                }


            });
        }catch(\Throwable $e){
            dd($e->getMessage());
            throw new \Exception($e->getMessage());
        }
    }

    public function updateWithPicture($id){
            $this->id=$id;
//            dd( $this->id);
            try{
                \DB::transaction(function () {
                    \DB::table($this->tableName)->where('id', $this->id)
                        ->update([
                        "tipNekretnineID"=>$this->tipNekretnine,
                        "tipObjektaID"=>$this->tipObjekta,
                        "tipUslugeID"=>$this->tipUsluge,
                        "brSobaID"=>$this->brojSoba,
                        "spratID"=>$this->sprat,
                        "vlasnikID"=>$this->vlasnik,
                        "opstinaID"=>$this->opstina,
                        "ulicaID"=>$this->ulica,
                        "broj"=>$this->broj,
                        "brKvadrata"=>$this->kvadrati,
                        "cena"=>$this->cena,
                        "stanjeID"=>$this->stanje,
                        "naslov"=>$this->naslov,
                        "opis"=>$this->opis,
                        "slika"=>$this->slika,
                        "ukupnaSpratnost"=>$this->ukupnaSpratnost,
                        "prikazi"=>$this->prikaz
                    ]);

                    \DB::table('stan_grejanje')->where('stanID', '=', $this->id)->delete();
                    \DB::table('stan_ostalo')->where('stanID', '=', $this->id)->delete();
                    \DB::table('stan_dodatno')->where('stanID', '=', $this->id)->delete();

                    if($this->grejanje != null) {
                        foreach ($this->grejanje as $g) {

                            \DB::table("stan_grejanje")->insert([
                                "stanID" => $this->id,
                                "grejanjeID" => $g
                            ]);
                        }
                    }

                    if($this->ostalo != null) {
                        foreach ($this->ostalo as $o) {

                            \DB::table("stan_ostalo")->insert([
                                "stanID" => $this->id,
                                "ostaloID" => $o
                            ]);
                        }
                    }

                    if($this->dodatno != null) {
                        foreach ($this->dodatno as $d) {

                            \DB::table("stan_dodatno")->insert([
                                "stanID" => $this->id,
                                "dodatnoID" => $d
                            ]);
                        }
                    }
                });
            }catch(\Throwable $e){
                dd($e->getMessage());
                throw new \Exception($e->getMessage());
            }
        }

    public function change($id){
        $this->id=$id;
        try{
            \DB::transaction(function () {
                \DB::table($this->tableName)->where('id', $this->id)
                    ->update([
                        "tipNekretnineID"=>$this->tipNekretnine,
                        "tipObjektaID"=>$this->tipObjekta,
                        "tipUslugeID"=>$this->tipUsluge,
                        "brSobaID"=>$this->brojSoba,
                        "spratID"=>$this->sprat,
                        "vlasnikID"=>$this->vlasnik,
                        "opstinaID"=>$this->opstina,
                        "ulicaID"=>$this->ulica,
                        "broj"=>$this->broj,
                        "brKvadrata"=>$this->kvadrati,
                        "cena"=>$this->cena,
                        "stanjeID"=>$this->stanje,
                        "naslov"=>$this->naslov,
                        "opis"=>$this->opis,
                        "ukupnaSpratnost"=>$this->ukupnaSpratnost,
                        "prikazi"=>$this->prikaz
                    ]);

                \DB::table('stan_grejanje')->where('stanID', '=', $this->id)->delete();
                \DB::table('stan_ostalo')->where('stanID', '=', $this->id)->delete();
                \DB::table('stan_dodatno')->where('stanID', '=', $this->id)->delete();

                if($this->grejanje != null) {
                    foreach ($this->grejanje as $g) {

                        \DB::table("stan_grejanje")->insert([
                            "stanID" => $this->id,
                            "grejanjeID" => $g
                        ]);
                    }
                }

                if($this->ostalo != null) {
                    foreach ($this->ostalo as $o) {

                        \DB::table("stan_ostalo")->insert([
                            "stanID" => $this->id,
                            "ostaloID" => $o
                        ]);
                    }
                }

                if($this->dodatno != null) {
                    foreach ($this->dodatno as $d) {

                        \DB::table("stan_dodatno")->insert([
                            "stanID" => $this->id,
                            "dodatnoID" => $d
                        ]);
                    }
                }
            });
        }catch(\Throwable $e){
            dd($e->getMessage());
            throw new \Exception($e->getMessage());
        }
    }

    public function deleteItem($id){

        $this->id=$id;
        try{
//            DB::table('users')->where('votes', '>', 100)->delete();
            \DB::transaction(function () {

                \DB::table('stan_grejanje')->where('stanID', '=', $this->id)->delete();
                \DB::table('stan_ostalo')->where('stanID', '=', $this->id)->delete();
                \DB::table('stan_dodatno')->where('stanID', '=', $this->id)->delete();

                \DB::table($this->tableName)->where('id', '=', $this->id)->delete();

                });
            return redirect()->route("admin/nekretnina.index")->with("success","Uspesno ste obrisali");

        }catch(\Throwable $e){
            dd($e->getMessage());
            throw new \Exception($e->getMessage());
        }
    }

    public function filterSve($lokacija, $tip_nekretnine, $tip_usluge){



        $tmp=\DB::table($this->tableName)
            ->join('tip_nekretnine', 'stan.tipNekretnineID', '=', 'tip_nekretnine.id')
            ->join('opstina', 'stan.opstinaID', '=', 'opstina.id')
            ->join('ulica', 'stan.ulicaID', '=', 'ulica.id')
            ->where([
                ["stan.tipNekretnineID","=", $tip_nekretnine],
                ["stan.tipUslugeID","=", $tip_usluge],
                ["opstina.naziv","like", "%".$lokacija."%"]
            ])
            ->orWhere([
                ["stan.tipNekretnineID","=", $tip_nekretnine],
                ["stan.tipUslugeID","=", $tip_usluge],
                ["ulica.naziv","like", "%".$lokacija."%"]
            ])
            ->select("stan.*","opstina.naziv as opstina","ulica.naziv as ulica", "tip_nekretnine.naziv as tip")
            ->get();

        return $tmp;
    }

    public function filterLokacijaText($lokacija){
        $data=[];

        $tmp= \DB::table("opstina")
            ->where("opstina.naziv", "like", "%".$lokacija."%")
            ->select("opstina.naziv")
            ->get()->toArray();
        foreach ($tmp as $t) {
            array_push($data,$t);
        }

        $tmp= \DB::table("ulica")
            ->where("ulica.naziv", "like", "%".$lokacija."%")
            ->select("ulica.naziv")
            ->get()->toArray();
        foreach ($tmp as $t) {
            array_push($data,$t);
        }
        return $data;
    }

    public function filterLokacija($lokacija){
        $tmp=\DB::table($this->tableName)
            ->join('tip_nekretnine', 'stan.tipNekretnineID', '=', 'tip_nekretnine.id')
            ->join('opstina', 'stan.opstinaID', '=', 'opstina.id')
            ->join('ulica', 'stan.ulicaID', '=', 'ulica.id')
            ->where(

                "opstina.naziv","like", "%".$lokacija."%"
            )
            ->orWhere(

                "ulica.naziv","like", "%".$lokacija."%"
            )
            ->select("stan.*","opstina.naziv as opstina","ulica.naziv as ulica", "tip_nekretnine.naziv as tip")
            ->get();

        return $tmp;
    }
    public function filterNekretnina($tip_nekretnine){

        $tmp=\DB::table($this->tableName)
            ->join('tip_nekretnine', 'stan.tipNekretnineID', '=', 'tip_nekretnine.id')
            ->join('opstina', 'stan.opstinaID', '=', 'opstina.id')
            ->join('ulica', 'stan.ulicaID', '=', 'ulica.id')
            ->where('stan.tipNekretnineID', '=', $tip_nekretnine)
            ->select("stan.*","opstina.naziv as opstina","ulica.naziv as ulica", "tip_nekretnine.naziv as tip")
            ->get();

        return $tmp;

    }
    public function filterUsluga($tip_usluge){
        $tmp=\DB::table($this->tableName)
            ->join('tip_nekretnine', 'stan.tipNekretnineID', '=', 'tip_nekretnine.id')
            ->join('opstina', 'stan.opstinaID', '=', 'opstina.id')
            ->join('ulica', 'stan.ulicaID', '=', 'ulica.id')
            ->where('stan.tipUslugeID', '=', $tip_usluge)
            ->select("stan.*","opstina.naziv as opstina","ulica.naziv as ulica", "tip_nekretnine.naziv as tip")
            ->get();

        return $tmp;
    }
    public function filterLokacijaNekretnina($lokacija, $tip_nekretnine){
        $tmp=\DB::table($this->tableName)
            ->join('tip_nekretnine', 'stan.tipNekretnineID', '=', 'tip_nekretnine.id')
            ->join('opstina', 'stan.opstinaID', '=', 'opstina.id')
            ->join('ulica', 'stan.ulicaID', '=', 'ulica.id')
            ->where([
                ["stan.tipNekretnineID","=", $tip_nekretnine],

                ["opstina.naziv","like", "%".$lokacija."%"]
            ])
            ->orWhere([
                ["stan.tipNekretnineID","=", $tip_nekretnine],

                ["ulica.naziv","like", "%".$lokacija."%"]
            ])
            ->select("stan.*","opstina.naziv as opstina","ulica.naziv as ulica", "tip_nekretnine.naziv as tip")
            ->get();

        return $tmp;
    }
    public function filterLokacijaUsluga($lokacija, $tip_usluge){
        $tmp=\DB::table($this->tableName)
            ->join('tip_nekretnine', 'stan.tipNekretnineID', '=', 'tip_nekretnine.id')
            ->join('opstina', 'stan.opstinaID', '=', 'opstina.id')
            ->join('ulica', 'stan.ulicaID', '=', 'ulica.id')
            ->where([

                ["stan.tipUslugeID","=", $tip_usluge],
                ["opstina.naziv","like", "%".$lokacija."%"]
            ])
            ->orWhere([

                ["stan.tipUslugeID","=", $tip_usluge],
                ["ulica.naziv","like", "%".$lokacija."%"]
            ])
            ->select("stan.*","opstina.naziv as opstina","ulica.naziv as ulica", "tip_nekretnine.naziv as tip")
            ->get();

        return $tmp;

    }
    public function filterUslugaNekretnina($tip_nekretnine, $tip_usluge){
        $tmp=\DB::table($this->tableName)
            ->join('tip_nekretnine', 'stan.tipNekretnineID', '=', 'tip_nekretnine.id')
            ->join('opstina', 'stan.opstinaID', '=', 'opstina.id')
            ->join('ulica', 'stan.ulicaID', '=', 'ulica.id')
            ->where([
                ["stan.tipNekretnineID","=", $tip_nekretnine],
                ["stan.tipUslugeID","=", $tip_usluge]
            ])
            ->select("stan.*","opstina.naziv as opstina","ulica.naziv as ulica", "tip_nekretnine.naziv as tip")
            ->get();

        return $tmp;

    }



}
