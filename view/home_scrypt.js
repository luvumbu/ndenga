
function b(_this) {
    const myTimeout = setTimeout(x, 250);

    function x() {
      var textInput2 = document.getElementById("textInput2" + _this.title).value;
      var textInput0 = document.getElementById("textInput" + _this.title).innerHTML;
      var element = afficherValeursFormattees2(_this.className, __);
      console.log(element);


      /*

      var ok = new Information("config/general_function_update.php"); // création de la classe 

      ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
      ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
      ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
      ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
      ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
      ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
      ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 

      ok.add("textInput2", textInput2); // ajout de l'information pour lenvoi 
      ok.add("textInput0", textInput0); // ajout de l'information pour lenvoi 
      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
*/
    }

  }

  function remove_all(_this) {


    var ok = new Information("config/remove_all.php"); // création de la classe 
    var element = afficherValeursFormattees2(_this.className, __);
    console.log(element);
    ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    location.reload();
  }


  function add_child(_this) {


    var ok = new Information("config/add_child.php"); // création de la classe 
    var element = afficherValeursFormattees2(_this.className, __);
    console.log(element);
    ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
    ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
    ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
    ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
    ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
    ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
    ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 



    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(xxx, 250);

    function xxx() {
      location.reload();

    }
  }



  function add_calendar(_this) {
    var ok = new Information("config/add_calendar.php"); // création de la classe 
    var element = afficherValeursFormattees2(_this.className, __);
    console.log(element);
    ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
    ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
    ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
    ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
    ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
    ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
    ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 



    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }


  function my_date(_this) {

    console.log(_this.value);

    var ok = new Information("config/my_date.php"); // création de la classe 
    var element = afficherValeursFormattees2(_this.className, __);

    ok.add("heure_debut_projet", _this.value); // ajout de l'information pour lenvoi 

    ok.add("id_sha1_projet", _this.className); // ajout de l'information pour lenvoi 
    ok.add("title", _this.title); // ajout de l'information pour lenvoi 


    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 


  }


  function my_date_remove(_this) {






document.getElementById("my_date_"+_this.className).value ="" ;








var ok = new Information("config/my_date_remove.php"); // création de la classe 
    var element = afficherValeursFormattees2(_this.className, __);

    ok.add("heure_debut_projet", ""); // ajout de l'information pour lenvoi 

    ok.add("id_sha1_projet", _this.className); // ajout de l'information pour lenvoi 



    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 





}

  function visivility(_this) {




    var ok = new Information("config/add_child.php"); // création de la classe 
    var element = afficherValeursFormattees2(_this.className, __);





    var visivility = "";





    if (_this.src == visible_1) {
      _this.src = visible_2;
      visivility = "(0-0)";
    } else {
      _this.src = visible_1;
      visivility = "";


    }


    var ok = new Information("config/visivility.php"); // création de la classe 


    ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 
    ok.add("visivility", visivility); // ajout de l'information pour lenvoi 

    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 




    //const myTimeout = setTimeout(xxx, 250);

    function xxx() {
      location.reload();

    }


  }
 
  function add_img2(_this) {
    document.getElementById("add_img").className = "";
  }

  function change_color(_this) {




    var element = afficherValeursFormattees2(_this.className, " ");

    var ok = new Information("config/change_color.php"); // création de la classe 


    ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
    ok.add("color_projet", _this.value); // ajout de l'information pour lenvoi 



    document.getElementById("parent_" + element[0]).style = "border: 5px solid " + _this.value;


    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }

  function change_google_title(_this) {





    var element = afficherValeursFormattees2(_this.className, " ");


    var ok = new Information("config/change_google_title.php"); // création de la classe 


    ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
    ok.add("google_title_projet", _this.value); // ajout de l'information pour lenvoi 



    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 





  }


  function level_urgence_projet(_this) {


    var element = afficherValeursFormattees2(_this.className, " ");


    var ok = new Information("config/level_urgence_projet.php"); // création de la classe 


    ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
    ok.add("level_urgence_projet", _this.value); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 




  }

  function change_meta_name(_this) {
    var element = afficherValeursFormattees2(_this.className, " ");


    var ok = new Information("config/change_meta_name.php"); // création de la classe 


    ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
    ok.add("change_meta_content", _this.value); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }

  function change_meta_content(_this) {
    var element = afficherValeursFormattees2(_this.className, " ");


    var ok = new Information("config/change_meta_content.php"); // création de la classe 


    ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
    ok.add("change_meta_content", _this.value); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp  
  }
 






 
  function html_mode_projet_dynamic_1(_this) {
    var element = afficherValeursFormattees2(_this.className, " ");







    var opacite = document.getElementById("html_1_" + element[0]).style.opacity;

    console.log(opacite);




    if (opacite == 0.2) {

      html_mode_projet = "on";
      document.getElementById("html_1_" + element[0]).style.opacity = 1;
      document.getElementById("html_2_" + element[0]).style.opacity = 0.2;

    } else {
      document.getElementById("html_1_" + element[0]).style.opacity = 0.2;
      document.getElementById("html_2_" + element[0]).style.opacity = 1;
      html_mode_projet = "";

    }




    var ok = new Information("config/html_mode_projet.php"); // création de la classe 



    ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
    ok.add("html_mode_projet_1", html_mode_projet); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp  

    const myTimeout = setTimeout(time_out, 250);

    function time_out() {
      location.reload();
    }



  }






  function change_styles(_this) {






    var element = afficherValeursFormattees2(_this.className, __);
    console.log(element);




    var ok = new Information("config/change_styles.php"); // création de la classe 

    ok.add("id_sha1_projet", _this.className); // ajout de l'information pour lenvoi 
    ok.add("style_pages_projet", _this.value); // ajout de l'information pour lenvoi 


    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 







  }
 


 
  function select_img(_this) {

    _this.style.display="none" ; 
    var element = afficherValeursFormattees2(_this.className, __);



    element[0] = element[0].replace(" ", "");




    var ok = new Information("config/select_img.php"); // création de la classe 

    ok.add("id_sha1_projet", element[1]); // ajout de l'information pour lenvoi 
    ok.add("img_projet_src1", element[0]); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

    const myTimeout = setTimeout(xx, 250);

    function xx() {
      location.reload();
    }

  }

  function remove_img(_this) {
    _this.style.display="none" ; 

    var element = afficherValeursFormattees2(_this.className, "__");


    element[0] = element[0].replace(" ", "");


    var ok = new Information("config/remove_img.php"); // création de la classe 

    ok.add("id_sha1_projet", element[1]); // ajout de l'information pour lenvoi 
    ok.add("img_projet_src1", element[0]); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

    const myTimeout = setTimeout(xx, 250);

    function xx() {
      location.reload();
    }

  }
 