<?php
$afficher_html = false; // Change à true si tu veux l'afficher

if ($afficher_html) {
?>
    <div class="display_flex_1">
        <div onclick="html_mode_projet_dynamic_1(this)" class="<?php echo $id_sha1_projet_dynamic_1_ ?>">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
            <br />
            <img id="<?php echo 'html_1_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20" src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
        </div>
    </div>
<?php
}
?>
