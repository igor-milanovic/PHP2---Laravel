$(document).ready(function(){
   console.log(pageUrl+"/");
   console.log("Novo: "+novo);
   console.log("briska: "+briska);

});

function obrisi(x){
    $.ajax({
        url:pageUrl+"/"+x,
        type:"DELETE",
        data:{
            _token:csrfToken
        },
        success:function(data){
            location.reload();
            console.log("obrisano");
        },
        error:function(a,b,c){
            let status=a.status;
            if(status==500)alert("Ne možete obrisati stavku koja se već negde koristi");
            console.log(a);
            console.log(b);
            console.log(c);
        }

    });
}
