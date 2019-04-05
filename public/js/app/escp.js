function send(){


     var ids = [];

     $("table tr").each(function(){

        if($(this).find("input[type='checkbox']").is(":checked")){

           ids.push($(this).find("td:eq(0)").text());
        }

     });



   var candidate = document.getElementById('name');
    var nm = candidate.value;
     var candidate2 = document.getElementById('code');
      var idid = candidate2.value;
       var url = '/escp.add?items=' + JSON.stringify(ids);
        var url = url + '&id=' + JSON.stringify(idid);
         var url = url + '&name=' + JSON.stringify(nm);

    window.location.href = url;

  }



  function update(){


       var ids = [];

       $("table tr").each(function(){

          if($(this).find("input[type='checkbox']").is(":checked")){

             ids.push($(this).find("td:eq(0)").text());
          }

       });



     var candidate = document.getElementById('name');
      var nm = candidate.value;
       var candidate2 = document.getElementById('code');
        var idid = candidate2.value;

         var url = '/escp.update?items=' + JSON.stringify(ids);
          var url = url + '&id=' + JSON.stringify(idid);
           var url = url + '&name=' + JSON.stringify(nm);
      window.location.href = url;

    }

    function edit(id){

    var url = '/escp.edit?id=' + JSON.stringify(id);
    window.location.href = url;



    }

    function destroy(id){

    var url = '/escp.destroy?id=' + JSON.stringify(id);
    window.location.href = url;

    }

    function cancel(){

      window.location.href = '/escp';
    }
