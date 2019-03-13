
items = [];


function addItem(ID){



    var table = document.getElementById("datasTable");
    var candidate = document.getElementById(ID);

   var code1 = 'code';

   var co = code1.concat(ID);

    var code = document.getElementById(co);

    var description1 = 'desc';

    var ds =  description1.concat(ID);

    var description = document.getElementById(ds);

    var escopo1 = 'escp';

    var escpo =  escopo1.concat(ID);

   escopo = document.getElementById(escpo);



    var tr = document.createElement("tr");

    var td_id = document.createElement("td");
    var td_code = document.createElement("td");
    var td_description = document.createElement("td");
    var td_options = document.createElement("td");

    var btn = document.createElement("button");
    var icn = document.createElement("i")


   items.push(ID)



    btn.setAttribute('id',candidate.value);
    btn.setAttribute('type',"button");
    btn.setAttribute('id',ID);
    btn.setAttribute('onclick',"removeItem("+ID+")");
    btn.setAttribute('class',"btn btn-danger btn-circle btn-sm");
    icn.setAttribute('class',"fas fa-eraser");

    td_id.appendChild(document.createTextNode(ID));
    td_code.appendChild(document.createTextNode(code.value));
    td_description.appendChild(document.createTextNode(description.value));


    table.appendChild(tr);
    tr.appendChild(td_id);
    tr.appendChild(td_code);
    tr.appendChild(td_description);
    tr.appendChild(td_options);

    td_options.appendChild(btn);
    btn.appendChild(icn)





}

function removeItem(ID){
    var tr = document.getElementById("dataTables");
    var candidate = document.getElementById(ID);
    var item = document.getElementById(candidate.id);
    tr.removeChild(item);
}


function send(){

   var candidate = document.getElementById('name');

   var nm = candidate.value
   var url = '/escp.add?items=' + JSON.stringify(items);
   var url = url + '&id=' + JSON.stringify(escopo.value);
   var url = url + '&name=' + JSON.stringify(nm);
   window.location.href = url;



}

function edit(id){

var url = '/escp.edit?id=' + JSON.stringify(id);
window.location.href = url;

}
