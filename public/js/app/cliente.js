
   function destroy(id){

    var url = '/cliente.destroy?id=' + JSON.stringify(id);
    window.location.href = url;

    }

    function cancel(){

      window.location.href = '/cliente';
    }

    function edit(id){
    window.location.href = '/cliente.edit?ide='+id;
    }

// Seleciona as Caixas de select de acordo com dado da DB
    function load_fkresponsavel(qnt){
     $("#ifkresponsavel").val(qnt);
    }
    function load_fksegmento(id){
     $("#ifksegmento").val(qnt);
    }
    function load_fkorigem(id){
     $("#ifkorigem").val(qnt);
    }
