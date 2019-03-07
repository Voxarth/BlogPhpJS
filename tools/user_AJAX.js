function add(){

    var xhr = new XMLHttpRequest();
     
      xhr.onreadystatechange = function(){
          if (xhr.readyState == 4 && xhr.status == 200) {
         //   alert ("C'est bon!")
          }
          else{
         //   alert ("J'ai glissé chef !")
          }
      };
    

    var	data=new FormData();	
        data.append('nom',	document.getElementById('name').value);	
        data.append('prenom', document.getElementById('surname').value);
        data.append('email', document.getElementById('email').value);
        xhr.open('POST','add_user.php');	
        xhr.send(data);

    }

    function look(id){
        
        var id = id;
        var xhr = new XMLHttpRequest();
     
      xhr.onreadystatechange = function(){
          if (xhr.readyState == 4 && xhr.status == 200) {
         //   alert ("C'est bon!")
          }
          else{
         //   alert ("J'ai glissé chef !")
          }
      };
    

    var	data=new FormData();	
        data.append('id',id);	
        xhr.open('POST','getUser.php');	
        xhr.send(data);

    }

        
    

