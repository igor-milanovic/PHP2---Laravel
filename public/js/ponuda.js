$(document).ready(function(){

});

$("#pr").keyup(function(){
    text= $(this).val();
    if(text.length>1){
        dohvatiPredloge(text);
        $("#pon").css("display","block");
    }else{
        $("#pon").css("display","none");
    }

});

$("#pretrazi").click(function(){
    let lokacija = $("#pr").val();
    let tip_usluge = $("input[name='tip_usluge']:checked").val();
    let tip_nekretnine = $("#tip_nekretnine").val();


    // console.log(lokacija);
    // console.log(tip_usluge);
    // console.log(tip_nekretnine);
    if(lokacija.length==0)lokacija=0;
    if(tip_usluge == undefined) tip_usluge=0;
    if(tip_nekretnine==0)tip_nekretnine=0;

    // console.log("--------------------------------------");


    pronadji(lokacija,tip_usluge, tip_nekretnine);

    // console.log(lokacija);
    // console.log(tip_usluge);
    // console.log(tip_nekretnine);
});

function pronadji(lokacija,tip_usluge, tip_nekretnine){
    let lok= baseURL+"/api/nekretnine/"+lokacija+"/"+tip_usluge+"/"+tip_nekretnine;
    $.ajax({
        "url":lok,
        "method":"POST",
        data:{
            _token:csrfToken,
            "lokacija":lokacija,
            "tip_usluge":tip_usluge,
            "tip_nekretnine":tip_nekretnine
        },
        success:function(data){
            prikaziSve(data);
        },
        error:function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}
function prikaziSve(data){
    let tmpHtml=`<div class=" col-sm-12">
                <h2 class="text-center">Istaknuto</h2>
            </div>`;
    data.forEach(function(e){

        tmpHtml+= prikaziProizvod(e);

    });
    // console.log(tmpHtml);
    $("#istaknuto").html(tmpHtml);
}
function prikaziProizvod(el){
    console.log(el);
    let tmp=`
    <div class="col-sm-6 col-lg-3 my-3">
                    <a href="http://127.0.0.1:8000/nekretnina/${el.id}">
                        <div class="card text-center " >
                            <img src="images/${el.slika}" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title">${el.tip}</h5>
                                <p class="card-text">${el.naslov}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">${el.brKvadrata}kvadrata  ${el.cena}</li>
                                <li class="list-group-item">${el.opstina}, ${el.ulica} ${el.broj}</li>

                            </ul>
                        </div>
                    </a>
                </div>`;

    return tmp;
}

function dohvatiPredloge(x){
    let lok= baseURL+"/api/nekretnine/"+x;
    $.ajax({
        "url":lok,
        "method":"POST",
        data:{
            _token:csrfToken
        },
        success:function(data){
            popuniListu(data);
        },
        error:function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}
function popuniListu(x){
    var tmp="";
    if(x!=null){
        x.forEach(function(el){
            tmp+=`<tr>
                       <th scope="row">${el.naziv}</th>
                   </tr>`;
        });
    }
    $("#tabelica").html(tmp);
}
