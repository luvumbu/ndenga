     function red_box_1(_this) {
         document.getElementById("title_projet_" + _this.title).innerHTML = "";
         var description_projet = document.getElementById("description_projet_" + _this.title).innerHTML;
         var title_projet = document.getElementById("title_projet_" + _this.title).innerHTML;
         const myTimeout = setTimeout(xx, 250);
         function xx() {
             var ok = new Information("config/all_blok.php"); // création de la classe 
             ok.add("description_projet", description_projet); // ajout de l'information pour lenvoi 
             ok.add("id_sha1_projet", _this.title); // ajout de l'information pour lenvoi 
             ok.add("title_projet", title_projet); // ajout de l'information pour lenvoi 
             console.log(ok.info()); // demande l'information dans le tableau
             ok.push(); // envoie l'information au code pkp 
         }
     }
     function red_box_2(_this) {
         document.getElementById("description_projet_" + _this.title).innerHTML = "";
         var description_projet = document.getElementById("description_projet_" + _this.title).innerHTML;
         var title_projet = document.getElementById("title_projet_" + _this.title).innerHTML;
         const myTimeout = setTimeout(xx, 250);
         function xx() {
             var ok = new Information("config/all_blok.php"); // création de la classe 
             ok.add("description_projet", description_projet); // ajout de l'information pour lenvoi 
             ok.add("id_sha1_projet", _this.title); // ajout de l'information pour lenvoi 
             ok.add("title_projet", title_projet); // ajout de l'information pour lenvoi 
             console.log(ok.info()); // demande l'information dans le tableau
             ok.push(); // envoie l'information au code pkp 
         }
     }
     function all_blok(_this) {
         var title_projet = document.getElementById("title_projet_" + _this.title).innerHTML;
         var description_projet = document.getElementById("description_projet_" + _this.title).innerHTML;
         var info_2 = document.getElementById("blog-content-2" + _this.title).title;
         const myTimeout = setTimeout(xx, 250);
         function xx() {
             var ok = new Information("config/all_blok.php"); // création de la classe 
             ok.add("description_projet", description_projet); // ajout de l'information pour lenvoi 
             ok.add("title_projet", title_projet); // ajout de l'information pour lenvoi 
             ok.add("autre", title_projet); // ajout de l'information pour lenvoi 
             ok.add("id_sha1_projet", info_2); // ajout de l'information pour lenvoi
             console.log(ok.info()); // demande l'information dans le tableau
             ok.push(); // envoie l'information au code pkp 
         }
     }
     function html_mode_projet_dynamic_2(_this) {
         var element = afficherValeursFormattees2(_this.className, " ");
         var opacite = document.getElementById("html_11_" + element[0]).style.opacity;
         if (opacite == 0.2) {
             html_mode_projet = "on";
             document.getElementById("html_11_" + element[0]).style.opacity = 1;
             document.getElementById("html_22_" + element[0]).style.opacity = 0.2;
         } else {
             document.getElementById("html_11_" + element[0]).style.opacity = 0.2;
             document.getElementById("html_22_" + element[0]).style.opacity = 1;
             html_mode_projet = "";
         }
         var ok = new Information("config/html_mode_projet_2.php"); // création de la classe 
         ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
         ok.add("html_mode_projet_1", html_mode_projet); // ajout de l'information pour lenvoi 
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp  
         const myTimeout = setTimeout(time_out, 250);
         function time_out() {
             location.reload();
         }
     }