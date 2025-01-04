 <link rel="stylesheet" href="view/add_img.css">
 <link rel="icon" href="https://pbs.twimg.com/profile_images/1244325575659061249/YjvhVutG_400x400.jpg" type="image/gif" sizes="16x16">
 <div class="element_1">
     <form style="position: fixed;">
         <div id="upload-progress"></div>
         <div>
             <label for="file-input"><img width="50" height="50" src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/50/external-dowload-big-data-xnimrodx-lineal-xnimrodx.png" alt="external-dowload-big-data-xnimrodx-lineal-xnimrodx"></label>

         </div>
         <input type="file" name="" id="file-input" class="class1" /><br />
         <div>
             <label for="submit-button"><img width="50" height="50" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/50/external-send-folder-folder-tanah-basah-basic-outline-tanah-basah.png" alt="external-send-folder-folder-tanah-basah-basic-outline-tanah-basah"></label>
         </div>
         <input class="class1" type="submit" value="Envoyer" id="submit-button" class="class3" onclick="disip()" />
     </form>
     <script>
         function disip() {
             document.getElementById("submit-button").style.display = "none";
         }
     </script>

     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="add_img/upload.js"></script>
 </div>
 <div id="bg_black" onclick="bg_black(this)"></div>
 
 <script>
     function bg_black(_this) {
         document.getElementById("add_img").className = "display_none";
     }
 </script>
 <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">