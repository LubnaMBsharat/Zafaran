function addtocart(x){

    if(x==13){
        let fid =x;
        var tablebody =document.getElementById("carttable");

        let i;
        let res=0;
        len = tablebody.rows.length;
        for(i=1 ; i< len ; i++){
            if(tablebody.rows[1].cells[0].innerText == x){
                res =1;
                break;
            }
        }
        if(res == 0) {
            var tablebody = document.getElementById("carttable");
            var row = tablebody.insertRow(1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            let fname = document.getElementById("h1").innerText;
            let fprice = document.getElementById("p1").innerText;
            fprice = fprice.replace('$', '');


            cell1.innerHTML = x;
            cell2.innerHTML = fname;
            cell3.innerHTML = fprice;
            cell3.id = "p11"
            cell4.innerHTML = "<input type='number' id='qun' min='1' max='10' value='1' onblur='refresh(13)' ;>";
            var hi = Number(fprice) * Number(document.getElementById("qun").value);

            //cell4.a= "<button id='qun';>Hii </button>";
            cell5.innerHTML = String(hi);
            cell5.id = "tot";
            cell6.innerHTML = "<button id='del' onclick='removee(13)' ;> Remove </button>";

        }

    }
    if(x==14) {
        let fid= x;
        var tablebody = document.getElementById("carttable");

        let i;
        let res = 0;
        len = tablebody.rows.length;
        for (i= 1; i < len; i++) {
            if (tablebody.rows[1].cells[0].innerText == x) {
                res = 1;
                break;
            }
        }
        if (res == 0) {
            var tablebody = document.getElementById("carttable");
            var row = tablebody.insertRow(1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            let fname = document.getElementById("h2").innerText;
            let fprice = document.getElementById("p2").innerText;
            fprice = fprice.replace('$', '');


            cell1.innerHTML = x;
            cell2.innerHTML = fname;
            cell3.innerHTML = fprice;
            cell3.id = "p11"
            cell4.innerHTML = "<input type='number' id='qun' min='1' max='10' value='1' onblur='refresh(14)' ;>";
            var hi = Number(fprice) * Number(document.getElementById("qun").value);

            //cell4.a= "<button id='qun';>Hii </button>";
            cell5.innerHTML = String(hi);
            cell5.id = "tot";
            cell6.innerHTML = "<button id='del' onclick='removee(14)' ;> Remove </button>";



        }
    }
    if (x==15) {
        let fid3 = x;
        var tablebody = document.getElementById("carttable");

        let i3;
        let res3 = 0;
        len = tablebody.rows.length;
        for (i3 = 1; i3 < len; i3++) {
            if (tablebody.rows[1].cells[0].innerText == x) {
                res3 = 1;
                break;
            }
        }
        if (res3 == 0) {
            var tablebody = document.getElementById("carttable");
            var row = tablebody.insertRow(1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            let fname = document.getElementById("h3").innerText;
            let fprice = document.getElementById("p3").innerText;
            fprice = fprice.replace('$', '');


            cell1.innerHTML = x;
            cell2.innerHTML = fname;
            cell3.innerHTML = fprice;
            cell3.id = "p11"
            cell4.innerHTML = "<input type='number' id='qun' min='1' max='10' value='1' onblur='refresh(15)' ;>";
            var hi = Number(fprice) * Number(document.getElementById("qun").value);

            //cell4.a= "<button id='qun';>Hii </button>";
            cell5.innerHTML = String(hi);
            cell5.id = "tot";
            cell6.innerHTML = "<button id='del' onclick='removee(15)' ;> Remove </button>";



        }
    }
    if(x==16) {
        let fid4 = x;
        var tablebody = document.getElementById("carttable");

        let i4;
        let res4 = 0;
        len = tablebody.rows.length;
        for (i4 = 1; i4 < len; i4++) {
            if (tablebody.rows[1].cells[0].innerText == x) {
                res4 = 1;
                break;
            }
        }
        if (res4 == 0) {
            var tablebody = document.getElementById("carttable");
            var row = tablebody.insertRow(1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            let fname = document.getElementById("h4").innerText;
            let fprice = document.getElementById("p4").innerText;
            fprice = fprice.replace('$', '');


            cell1.innerHTML = x;
            cell2.innerHTML = fname;
            cell3.innerHTML = fprice;
            cell3.id = "p11"
            cell4.innerHTML = "<input type='number' id='qun' min='1' max='10' value='1' onblur='refresh(16)' ;>";
            var hi = Number(fprice) * Number(document.getElementById("qun").value);

            //cell4.a= "<button id='qun';>Hii </button>";
            cell5.innerHTML = String(hi);
            cell5.id = "tot";
            cell6.innerHTML = "<button id='del' onclick='removee(16)' ;> Remove </button>";



        }
    }
    if(x==17) {
        let fid5 = x;
        var tablebody = document.getElementById("carttable");

        let i5;
        let res5 = 0;
        len = tablebody.rows.length;
        for (i5 = 1; i5 < len; i5++) {
            if (tablebody.rows[1].cells[0].innerText == x) {
                res5 = 1;
                break;
            }
        }
        if (res5 == 0) {
            var tablebody = document.getElementById("carttable");
            var row = tablebody.insertRow(1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            let fname = document.getElementById("h5").innerText;
            let fprice = document.getElementById("p5").innerText;
            fprice = fprice.replace('$', '');


            cell1.innerHTML = x;
            cell2.innerHTML = fname;
            cell3.innerHTML = fprice;
            cell3.id = "p11"
            cell4.innerHTML = "<input type='number' id='qun' min='1' max='10' value='1' onblur='refresh(17)' ;>";
            var hi = Number(fprice) * Number(document.getElementById("qun").value);

            //cell4.a= "<button id='qun';>Hii </button>";
            cell5.innerHTML = String(hi);
            cell5.id = "tot";
            cell6.innerHTML = "<button id='del' onclick='removee(17)' ;> Remove </button>";



        }
    }
    if(x==18) {
        let fid6 = x;
        var tablebody = document.getElementById("carttable");

        let i6;
        let res6 = 0;
        len = tablebody.rows.length;
        for (i6 = 1; i6 < len; i6++) {
            if (tablebody.rows[1].cells[0].innerText == x) {
                res6 = 1;
                break;
            }
        }
        if (res6 == 0) {
            var tablebody = document.getElementById("carttable");
            var row = tablebody.insertRow(1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            let fname = document.getElementById("h6").innerText;
            let fprice = document.getElementById("p6").innerText;
            fprice = fprice.replace('$', '');


            cell1.innerHTML = x;
            cell2.innerHTML = fname;
            cell3.innerHTML = fprice;
            cell3.id = "p11"
            cell4.innerHTML = "<input type='number' id='qun' min='1' max='10' value='1' onblur='refresh(18)' ;>";
            var hi = Number(fprice) * Number(document.getElementById("qun").value);

            //cell4.a= "<button id='qun';>Hii </button>";
            cell5.innerHTML = String(hi);
            cell5.id = "tot";
            cell6.innerHTML = "<button id='del' onclick='removee(18)' ;> Remove </button>";



        }
    }

}
function refresh(x) {
    table = document.getElementById("carttable");
    let i = 1;
    let y = x;


    var hi = Number(document.getElementById("p11").innerText) * Number(document.getElementById("qun").value);

    document.getElementById("tot").innerText = String(hi);



}
function removee (x){
    let i;

    table = document.getElementById("carttable");
    len = table.rows.length;
    for(i=1 ; i< len ; i++){
        if(table.rows[i].cells[0].innerText == x){
            document.getElementById("carttable").deleteRow(i);
            break;
        }

    }

}
function gjfddfsoprejfv () {
    var xhr= new XMLHttpRequest();

    table = document.getElementById("carttable");
    len = table.rows.length;
    var qa;
    while(table.rows.length != 1){
        data= Number(table.rows[1].cells[0].innerText);
        qa= document.getElementById("qun").value;
        xhr.onreadystatechange= function (){
            if(xhr.readyState==4 && xhr.status==200){
                var result =xhr.responseText;

            }

        }

        xhr.open("GET",("database.php?sbut="+data+"&q="+qa),true);
        xhr.send(null);
        document.getElementById("carttable").deleteRow(1);
    }

}