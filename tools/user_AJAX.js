function add(){

    var xhr = new XMLHttpRequest();
     
      xhr.onreadystatechange = function(){
          if (xhr.readyState == 4 && xhr.status == 200) {

            //var users =     document.getElementById("users");
            //var node_user = document.createElement("div");
            //var user = JSON.parse(xhr.responseText);


            













          }
          else{
         //   alert ("J'ai glissé chef !")
          }
      };
    

    var	data=new FormData();
        xhr.open('POST','add_user.php');
        data.append('nom',	document.getElementById('name').value);	
        data.append('prenom', document.getElementById('surname').value);
        data.append('email', document.getElementById('email').value);	
        xhr.send(data);

    }

    function look(id){
        
        var id = id;
        var xhr = new XMLHttpRequest();
     
      xhr.onreadystatechange = function(){
          if (xhr.readyState == 4 && xhr.status == 200) {
            
            var user = JSON.parse(xhr.responseText);

            document.getElementById("name").value = user.nom
            document.getElementById("surname").value = user.prenom
            document.getElementById("email").value = user.email

            //document.getElementById("id").value = user.id;



          }
          else{
         //   alert ("J'ai glissé chef !")
          }
      };
    

    var	data=new FormData();	
        data.append('id',id);	
        xhr.open('POST','tools/getUser.php');	
        xhr.send(data);
    }


    function up(id){
        
        var id=id;
        var xhr = new XMLHttpRequest();


   

       var data=new FormData();
       data.append('id',id);
       data.append('nom',	document.getElementById('name').value);	
        data.append('prenom', document.getElementById('surname').value);
        data.append('email', document.getElementById('email').value);
       xhr.open('POST','./tools/updateUser.php');
       xhr.send(data);
    }
        
    

