 
    <style>
        .forms input {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
            margin-bottom: 5px;
            border : 1px solid rgba(0, 0, 0, 0.2) ; 
        }

        .forms textarea {
            width: 100%;

            height: 150px;
            border : 1px solid rgba(0, 0, 0, 0.2) ; 

        }

        .envoyer {
            background-color: rgba(0, 0, 200, 0.5);
            padding: 7px;
            text-align: center;
            transition: 1s;
            margin-bottom: 75px;
            color: white;

        }

        .envoyer:hover {
            border: 3px solid rgba(0, 0, 200, 0.3);
            padding: 7px;
            text-align: center;
            transition: 1s;
            cursor: pointer;

        }

        .all_form {
            background-color: black;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .forms {

            width: 400px;
            margin: auto;
            padding: 15px;
            background-color: white;
        
          
 
 

margin-top: 100px;

        }

        body {
            margin: 0;
        }
    </style>




 
    <div class="forms" id="forms">
        <div>
            <input type="text" placeholder="Titre" id="title_projet">
        </div>

        <div>
            <textarea    placeholder="Déscription" id="description_projet"></textarea>
        </div>

    
        <div>
            <input type="date" id="date_debut_projet">
        </div>
        <div class="envoyer" title="<?= $id_sha1_projet ?>" id="date_debut_projet" onclick="envoyer_element(this)">
            Créer un element
        </div>
    </div>

 
    


    <script>
  

  class Information {
    constructor(link) {
        this.link = link;
        this.identite = new FormData();
        this.req = new XMLHttpRequest();
        this.identite_tab = [
        ];
    }
    info() {
        return this.identite_tab; 
    }
    add(info, text){
        this.identite_tab.push([info, text]); 
    }
    push(){
        for(var i = 0 ; i < this.identite_tab.length ; i++){
            console.log(this.identite_tab[i][1]);
            this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
        }		
        this.req.open("POST",this.link);
        this.req.send(this.identite);
        console.log(this.req);	 
    }
}




function envoyer_element(_this) {
var title_projet = document.getElementById("title_projet").value ; 
var description_projet = document.getElementById("description_projet").value ; 
var date_debut_projet = document.getElementById("date_debut_projet").value ; 

 

 _this.style.display= "none" ; 


var ok = new Information("../config/envoyer_element.php"); // création de la classe 
ok.add("id_sha1_parent_projet", _this.title); // ajout de l'information pour lenvoi 
ok.add("title_projet", title_projet); // ajout de l'information pour lenvoi 
ok.add("description_projet", description_projet); // ajout de l'information pour lenvoi 
ok.add("date_debut_projet", date_debut_projet); // ajout de l'information pour lenvoi 
 
 

console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 




const myTimeout = setTimeout(myGreeting, 3000);

function myGreeting() {
    _this.style.display= "block" ; 
}

}
    </script>
 