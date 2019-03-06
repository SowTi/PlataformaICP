function addItem(ID){

    var table = document.getElementById("datasTable");
    var candidate = document.getElementById(ID);

    var code = document.getElementById(code, "value");
    var description = document.getElementById(description, "value");

    var tr = document.createElement("tr");

    var td_id = document.createElement("td");
    var td_code = document.createElement("td");
    var td_description = document.createElement("td");
    var td_options = document.createElement("td");

    var btn = document.createElement("button");
    var icn = document.createElement("i")

    btn.setAttribute('id',candidate.value);
    btn.setAttribute('type',"button");
    btn.setAttribute('id',ID);
    btn.setAttribute('onclick',"removeItem("+ID+")");
    btn.setAttribute('class',"btn btn-danger btn-circle btn-sm");
    icn.setAttribute('class',"fas fa-eraser");

    td_id.appendChild(document.createTextNode(ID));
    td_code.appendChild(document.createTextNode(code));
    td_description.appendChild(document.createTextNode(description));


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
