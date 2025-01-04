<script src="view/admin_form_creation_table_bdd.js"></script>

 <link rel="stylesheet" href="view/admin_form_creation_table_bdd.css"> 
    <h1>Créer une nouvelle table dans la base de données</h1>
    <form action="config/config_form_creation_table_bdd.php" method="POST">
        <label for="main_table_name">Nom de la table :</label>
        <input type="text" id="main_table_name" name="main_table_name" required><br><br>
        <div id="columns">
            <div class="column">
                <label for="column_name_1">Nom de la colonne :</label>
                <input type="text" name="column_name[]" required><br><br>

                <label for="column_type_1">Type de la colonne :</label>
                <select name="column_type[]" required>
    <!-- Types numériques -->
    <option value="INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY">INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY</option>
    <option value="INT">INT</option>
    <option value="BIGINT">BIGINT</option>
    <option value="FLOAT">FLOAT</option>
    <option value="DOUBLE">DOUBLE</option>
    <option value="DECIMAL(10,2)">DECIMAL(10,2)</option>
    <!-- Types de chaînes de caractères -->
    <option value="VARCHAR(255) NOT NULL">VARCHAR(255) NOT NULL</option>
    <option value="CHAR(100) NOT NULL">CHAR(100) NOT NULL</option>
    <option value="TEXT NOT NULL">TEXT NOT NULL</option>
    <option value="LONGTEXT NOT NULL">LONGTEXT NOT NULL</option>
    <option value="BLOB">BLOB</option>
    <!-- Plusieurs tailles de VARCHAR -->
    <option value="VARCHAR(100)">VARCHAR(100)</option>
    <option value="VARCHAR(200)">VARCHAR(200)</option>
    <option value="VARCHAR(300)">VARCHAR(300)</option>
    <option value="VARCHAR(400)">VARCHAR(400)</option>
    <option value="VARCHAR(500)">VARCHAR(500)</option>
    <option value="VARCHAR(600)">VARCHAR(600)</option>
    <option value="VARCHAR(700)">VARCHAR(700)</option>
    <option value="VARCHAR(800)">VARCHAR(800)</option>
    <option value="VARCHAR(900)">VARCHAR(900)</option>
    <option value="VARCHAR(1000)">VARCHAR(1000)</option>
    <!-- Types de date et heure -->
    <option value="DATE">DATE</option>
    <option value="DATETIME">DATETIME</option>
    <option value="TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP">
        TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    </option>
    <option value="TIME">TIME</option>
    <option value="YEAR">YEAR</option>
</select>
<br><br>
            </div>
</div>
        <button type="button" id="addColumnBtn">Ajouter une colonne</button><br><br>
        <input type="submit" value="Créer la table">
    </form> 