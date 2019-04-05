
   function destroy(id){

    var url = '/contato.destroy?id=' + JSON.stringify(id);
    window.location.href = url;

    }

    function cancel(){

      window.location.href = '/contato';
    }

    function edit(id){
    window.location.href = '/contato.edit?ide='+id;
    }
