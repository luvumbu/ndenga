 
        document.getElementById("addColumnBtn").addEventListener("click", function() {
            var columnDiv = document.createElement("div");
            columnDiv.classList.add("column");

            // Création de l'input pour le nom de la colonne
            var labelName = document.createElement("label");
            labelName.textContent = "Nom de la colonne :";
            columnDiv.appendChild(labelName);

            var inputName = document.createElement("input");
            inputName.type = "text";
            inputName.name = "column_name[]";
            inputName.required = true;
            columnDiv.appendChild(inputName);

            columnDiv.appendChild(document.createElement("br"));
            columnDiv.appendChild(document.createElement("br"));

            // Création du select pour le type de la colonne
            var labelType = document.createElement("label");
            labelType.textContent = "Type de la colonne :";
            columnDiv.appendChild(labelType);

            var selectType = document.createElement("select");
            selectType.name = "column_type[]";
            selectType.required = true;

            // Ajout des options de types de colonne
            var types = [
                { value: "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY", text: "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY" },
                { value: "INT", text: "INT" },
                { value: "BIGINT", text: "BIGINT" },
                { value: "FLOAT", text: "FLOAT" },
                { value: "DOUBLE", text: "DOUBLE" },
                { value: "DECIMAL(10,2)", text: "DECIMAL(10,2)" },
                { value: "VARCHAR(255) NOT NULL", text: "VARCHAR(255) NOT NULL" },
                { value: "CHAR(100) NOT NULL", text: "CHAR(100) NOT NULL" },
                { value: "TEXT NOT NULL", text: "TEXT NOT NULL" },
                { value: "LONGTEXT NOT NULL", text: "LONGTEXT NOT NULL" },
                { value: "BLOB", text: "BLOB" },
                { value: "DATE", text: "DATE" },
                { value: "DATETIME", text: "DATETIME" },
                { value: "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP", text: "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP" },
                { value: "TIME", text: "TIME" },
                { value: "YEAR", text: "YEAR" }
            ];
            types.forEach(function(type) {
                var option = document.createElement("option");
                option.value = type.value;
                option.textContent = type.text;
                selectType.appendChild(option);
            });
            columnDiv.appendChild(selectType);
            columnDiv.appendChild(document.createElement("br"));
            columnDiv.appendChild(document.createElement("br"));
            // Ajouter le nouveau champ à la liste
            document.getElementById("columns").appendChild(columnDiv);
        });
 