 <!DOCTYPE html>
 <html lang="fr">

 <head>
   <meta charset="UTF-8">
   <title><?= $name_style_pages_[0] ?></title>



   <style>
     :root {
       --primary: #4361ee;
       --secondary: #3f37c9;
       --bg: #f8f9fa;
       --text: #212529;
       --card: #ffffff;
       --gap: 16px;
       --font: 'Segoe UI', system-ui, sans-serif;
       --item-bg: #4361ee;
       --item-color: white;
       --item-width: auto;
     }

     [data-theme="dark"] {
       --primary: #4895ef;
       --secondary: #560bad;
       --bg: #121212;
       --text: #f8f9fa;
       --card: #1e1e1e;
       --item-bg: #4895ef;
     }

     body {
       font-family: var(--font);
       background: var(--bg);
       color: var(--text);
       margin: 0;
       padding: 2rem;
       padding-top: 150px;
       transition: all 0.3s ease;
     }

     .fixed-header {
       position: fixed;
       top: 0;
       left: 0;
       right: 0;
       background: var(--card);
       padding: 1rem;
       box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
       z-index: 1000;
       display: flex;
       flex-wrap: wrap;
       gap: 1rem;
       align-items: center;
     }

     h1 {
       color: var(--primary);
       text-align: center;
       margin: 2rem 0;
     }

     .panel {
       display: grid;
       grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
       gap: var(--gap);
       margin-bottom: 2rem;
     }

     .control-group {
       background: var(--card);
       padding: 1.5rem;
       border-radius: 12px;
       box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
     }

     h3 {
       color: var(--secondary);
       margin-top: 0;
       border-bottom: 2px solid var(--primary);
       padding-bottom: 0.5rem;
     }

     h4 {
       color: var(--primary);
       margin: 0.5rem 0 0.3rem;
       font-size: 0.9rem;
     }

     label {
       display: block;
       margin: 0.8rem 0 0.3rem;
       font-weight: 500;
     }

     select,
     input,
     button {
       width: 100%;
       padding: 0.8rem;
       border: 2px solid #ddd;
       border-radius: 8px;
       background: var(--card);
       color: var(--text);
       font-size: 1rem;
       transition: border 0.2s;
     }

     .flex-container {
       display: flex;
       border: 2px dashed var(--primary);
       padding: 1.5rem;
       border-radius: 12px;
       min-height: 300px;
       gap: 12px;
       background: var(--card);
       margin-bottom: 2rem;
     }

     .flex-item {
       background: var(--item-bg);
       color: var(--item-color);
       padding: 1.5rem;
       border-radius: 8px;
       display: flex;
       align-items: center;
       justify-content: center;
       font-weight: bold;
       transition: all 0.3s ease;
       min-width: 60px;
       width: var(--item-width);
       position: relative;
       box-sizing: border-box;
     }

     .delete-item {
       position: absolute;
       top: -10px;
       right: -10px;
       background: #ff4757;
       color: white;
       border: none;
       border-radius: 50%;
       width: 24px;
       height: 24px;
       font-size: 12px;
       cursor: pointer;
       display: none;
     }

     .flex-item:hover .delete-item {
       display: block;
     }

     .color-picker {
       display: flex;
       gap: 8px;
       align-items: center;
     }

     .color-picker input[type="color"] {
       width: 30px;
       height: 30px;
       border-radius: 50%;
       cursor: pointer;
       padding: 0;
     }

     .preset-btn,
     .action-btn {
       background: var(--primary);
       color: white;
       border: none;
       padding: 0.5rem 1rem;
       border-radius: 6px;
       cursor: pointer;
       margin: 0.3rem;
       width: auto;
     }

     .action-btn {
       background: var(--secondary);
     }

     .items-control {
       display: flex;
       gap: 10px;
       margin-top: 1rem;
     }

     .output-container {
       display: flex;
       gap: 1rem;
       margin-bottom: 2rem;
     }

     .output-container>div {
       flex: 1;
     }

     textarea {
       width: 100%;
       font-family: monospace;
       min-height: 150px;
       background: var(--card);
       color: var(--text);
       border: 1px solid var(--primary);
       border-radius: 8px;
       padding: 0.8rem;
     }

     .width-control {
       display: flex;
       gap: 8px;
       align-items: center;
     }

     .width-control input[type="range"] {
       flex: 1;
     }

     .width-control span {
       min-width: 40px;
       text-align: center;
     }

     .element-controls {
       margin-top: 1rem;
       border-top: 1px dashed var(--primary);
       padding-top: 1rem;
     }

     .element-control-group {
       margin-bottom: 1rem;
       padding: 0.8rem;
       background: rgba(0, 0, 0, 0.05);
       border-radius: 8px;
     }

     @media (max-width: 768px) {
       .panel {
         grid-template-columns: 1fr;
       }

       .fixed-header {
         padding: 0.8rem;
       }

       .output-container {
         flex-direction: column;
       }
     }
   </style>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
 </head>

 <body>
   <div class="fixed-header">
     <button onclick="toggleTheme()">🌙 Mode Sombre</button>

     <div class="color-picker">
       <input type="color" id="primary-color" value="#4361ee" onchange="updateColors()" title="Couleur primaire">
       <input type="color" id="bg-color" value="#f8f9fa" onchange="updateColors()" title="Couleur de fond">
       <input type="color" id="item-bg-color" value="#4361ee" onchange="updateColors()" title="Couleur des éléments">
       <button onclick="logColors()">📋 Log Couleurs</button>
     </div>
   </div>

   <h1>Flexbox Playground ULTIMATE</h1>

   <div class="panel">
     <div class="control-group">
       <h3>Conteneur Flex</h3>
       <label for="display">display</label>
       <select id="display" onchange="updateFlex()">
         <option value="flex">flex</option>
         <option value="inline-flex">inline-flex</option>
       </select>

       <label for="flexDirection">flex-direction</label>
       <select id="flexDirection" onchange="updateFlex()">
         <option value="row">row</option>
         <option value="row-reverse">row-reverse</option>
         <option value="column">column</option>
         <option value="column-reverse">column-reverse</option>
       </select>

       <label for="flexWrap">flex-wrap</label>
       <select id="flexWrap" onchange="updateFlex()">
         <option value="nowrap">nowrap</option>
         <option value="wrap">wrap</option>
         <option value="wrap-reverse">wrap-reverse</option>
       </select>

       <label for="gap">gap</label>
       <input type="range" id="gap" min="0" max="50" value="12" oninput="updateFlex()">
     </div>

     <div class="control-group">
       <h3>Alignement</h3>
       <label for="justifyContent">justify-content</label>
       <select id="justifyContent" onchange="updateFlex()">
         <option value="flex-start">flex-start</option>
         <option value="flex-end">flex-end</option>
         <option value="center">center</option>
         <option value="space-between">space-between</option>
         <option value="space-around">space-around</option>
         <option value="space-evenly">space-evenly</option>
       </select>

       <label for="alignItems">align-items</label>
       <select id="alignItems" onchange="updateFlex()">
         <option value="stretch">stretch</option>
         <option value="flex-start">flex-start</option>
         <option value="flex-end">flex-end</option>
         <option value="center">center</option>
         <option value="baseline">baseline</option>
       </select>
     </div>

     <div class="control-group">
       <h3>Éléments Flex</h3>

       <label for="itemWidth">Largeur des éléments (px)</label>
       <div class="width-control">
         <input type="range" id="itemWidth" min="50" max="500" value="0" step="10" oninput="updateItemWidth()">
         <span id="itemWidthValue">auto</span>
       </div>

       <div id="elementSpecificControls" class="element-controls">
         <!-- Contrôles spécifiques aux éléments apparaîtront ici -->
       </div>

       <div class="items-control">
         <button class="action-btn" onclick="addItem()">➕ Ajouter un élément</button>
         <button class="action-btn" onclick="resetItems()">🔄 Réinitialiser</button>
       </div>
     </div>
   </div>

   <div class="control-group">
     <h3>Presets</h3>
     <button class="preset-btn" onclick="applyPreset('equal-size')">Taille égale</button>
     <button class="preset-btn" onclick="applyPreset('navbar')">Navbar</button>
     <button class="preset-btn" onclick="applyPreset('card-grid')">Grille de cartes</button>
     <button class="preset-btn" onclick="applyPreset('fixed-width')">Largeur fixe</button>
   </div>

   <div class="flex-container" id="flexContainer">
     <!-- Les éléments seront ajoutés dynamiquement -->
   </div>

   <div class="output-container">
     <div class="control-group">
       <h3>Export HTML</h3>
       <textarea id="html-output" rows="6"></textarea>
       <button class="preset-btn" onclick="copyHTML()">📋 Copier le HTML</button>
     </div>

     <div class="control-group">
       <h3>Export CSS</h3>
       <textarea id="css-output" rows="6"></textarea>
       <button class="preset-btn" onclick="copyCSS()">📋 Copier le CSS</button>
     </div>
   </div>


   <div class="preset-btn" style="text-align:center" onclick="update_style()">
     VALIDER
   </div>

   <script>
     function update_style() {
       var html_output = document.getElementById("html-output").value;
       var css_output = document.getElementById("css-output").value;
       var primary_color = document.getElementById("primary-color").value;
       var bg_color = document.getElementById("bg-color").value;
       var item_bg_color = document.getElementById("item-bg-color").value;


       var ok = new Information("../config/update_style.php"); // création de la classe 
       ok.add("flex_box_1_style_pages", html_output); // ajout de l'information pour lenvoi 
       ok.add("flex_box_2_style_pages", css_output); // ajout de l'information pour lenvoi 
       ok.add("flex_box_3_style_pages", primary_color); // ajout de l'information pour lenvoi 
       ok.add("flex_box_4_style_pages", bg_color); // ajout de l'information pour lenvoi 
       ok.add("flex_box_5_style_pages", item_bg_color); // ajout de l'information pour lenvoi 





       console.log(ok.info()); // demande l'information dans le tableau
       ok.push(); // envoie l'information au code pkp 



     }
     let itemCount = 0;
     let currentItemWidth = 'auto';

     function addItem() {
       itemCount++;
       const container = document.getElementById('flexContainer');
       const newItem = document.createElement('div');
       newItem.className = 'flex-item';
       newItem.id = `item${itemCount}`;
       newItem.textContent = itemCount;

       const deleteBtn = document.createElement('button');
       deleteBtn.className = 'delete-item';
       deleteBtn.textContent = '×';
       deleteBtn.onclick = (e) => {
         e.stopPropagation();
         newItem.remove();
         updateElementSpecificControls();
         updateOutputs();
       };

       newItem.appendChild(deleteBtn);
       container.appendChild(newItem);

       if (currentItemWidth !== 'auto') {
         newItem.style.width = currentItemWidth + 'px';
       }

       updateElementSpecificControls();
       updateOutputs();
     }

     function resetItems() {
       const container = document.getElementById('flexContainer');
       container.innerHTML = '';
       itemCount = 0;
       for (let i = 0; i < 4; i++) {
         addItem();
       }
     }

     function updateItemWidth() {
       const widthInput = document.getElementById('itemWidth');
       const widthValue = document.getElementById('itemWidthValue');
       const width = parseInt(widthInput.value);

       if (width === 0) {
         currentItemWidth = 'auto';
         widthValue.textContent = 'auto';
       } else {
         currentItemWidth = width;
         widthValue.textContent = width + 'px';
       }

       const items = document.querySelectorAll('.flex-item');
       items.forEach(item => {
         item.style.width = width === 0 ? 'auto' : width + 'px';
       });

       updateOutputs();
     }

     function updateElementSpecificControls() {
       const controlsContainer = document.getElementById('elementSpecificControls');
       controlsContainer.innerHTML = '';

       const items = document.querySelectorAll('.flex-item');
       if (items.length === 0) return;

       items.forEach((item, index) => {
         const itemId = item.id;
         const controlGroup = document.createElement('div');
         controlGroup.className = 'element-control-group';
         controlGroup.id = `controls-${itemId}`;

         // Récupère les valeurs actuelles
         const currentFlex = item.style.flex || '0 1 auto';
         const currentFlexGrow = currentFlex.split(' ')[0];
         const currentAlignSelf = item.style.alignSelf || 'auto';

         controlGroup.innerHTML = `
          <h4>Élément ${index + 1} (${itemId})</h4>
          <label for="flexGrow-${itemId}">flex-grow</label>
          <input type="number" id="flexGrow-${itemId}" value="${currentFlexGrow}" min="0" step="0.1" 
                 onchange="updateItemProperty('${itemId}', 'flexGrow', this.value)">
                 
          <label for="alignSelf-${itemId}">align-self</label>
          <select id="alignSelf-${itemId}" onchange="updateItemProperty('${itemId}', 'alignSelf', this.value)">
            <option value="auto" ${currentAlignSelf === 'auto' ? 'selected' : ''}>auto</option>
            <option value="flex-start" ${currentAlignSelf === 'flex-start' ? 'selected' : ''}>flex-start</option>
            <option value="flex-end" ${currentAlignSelf === 'flex-end' ? 'selected' : ''}>flex-end</option>
            <option value="center" ${currentAlignSelf === 'center' ? 'selected' : ''}>center</option>
            <option value="baseline" ${currentAlignSelf === 'baseline' ? 'selected' : ''}>baseline</option>
            <option value="stretch" ${currentAlignSelf === 'stretch' ? 'selected' : ''}>stretch</option>
          </select>
        `;

         controlsContainer.appendChild(controlGroup);
       });
     }

     function updateItemProperty(itemId, property, value) {
       const item = document.getElementById(itemId);
       if (!item) return;

       if (property === 'flexGrow') {
         const flexShrink = item.style.flex ? item.style.flex.split(' ')[1] || '1' : '1';
         const flexBasis = item.style.flex ? item.style.flex.split(' ')[2] || 'auto' : 'auto';
         item.style.flex = `${value} ${flexShrink} ${flexBasis}`;
       } else if (property === 'alignSelf') {
         item.style.alignSelf = value;
       }

       updateOutputs();
     }

     function updateFlex() {
       const container = document.getElementById('flexContainer');
       container.style.display = document.getElementById('display').value;
       container.style.flexDirection = document.getElementById('flexDirection').value;
       container.style.flexWrap = document.getElementById('flexWrap').value;
       container.style.justifyContent = document.getElementById('justifyContent').value;
       container.style.alignItems = document.getElementById('alignItems').value;
       container.style.gap = document.getElementById('gap').value + 'px';
       updateOutputs();
     }

     function updateColors() {
       const primaryColor = document.getElementById('primary-color').value;
       const bgColor = document.getElementById('bg-color').value;
       const itemBgColor = document.getElementById('item-bg-color').value;

       document.documentElement.style.setProperty('--primary', primaryColor);
       document.documentElement.style.setProperty('--bg', bgColor);
       document.documentElement.style.setProperty('--item-bg', itemBgColor);

       updateOutputs();
     }

     function logColors() {
       const colors = {
         primary: document.getElementById('primary-color').value,
         bg: document.getElementById('bg-color').value,
         itemBg: document.getElementById('item-bg-color').value
       };
       alert(document.getElementById('primary-color').value);
       console.log("Couleurs CSS:", `
:root {
  --primary: ${colors.primary};
  --bg: ${colors.bg};
  --item-bg: ${colors.itemBg};
}`);
     }

     function applyPreset(preset) {
       const container = document.getElementById('flexContainer');
       const items = document.querySelectorAll('.flex-item');
       const widthInput = document.getElementById('itemWidth');
       const widthValue = document.getElementById('itemWidthValue');

       switch (preset) {
         case 'equal-size':
           widthInput.value = 0;
           widthValue.textContent = 'auto';
           items.forEach(item => {
             item.style.width = 'auto';
             item.style.flex = '1';
             item.style.alignSelf = 'auto';
           });
           break;

         case 'navbar':
           document.getElementById('display').value = 'flex';
           document.getElementById('flexDirection').value = 'row';
           document.getElementById('justifyContent').value = 'space-between';
           document.getElementById('alignItems').value = 'center';
           widthInput.value = 0;
           widthValue.textContent = 'auto';
           items.forEach(item => {
             item.style.width = 'auto';
             item.style.flex = 'none';
             item.style.alignSelf = 'auto';
           });
           break;

         case 'card-grid':
           document.getElementById('flexWrap').value = 'wrap';
           document.getElementById('justifyContent').value = 'space-around';
           widthInput.value = 200;
           widthValue.textContent = '200px';
           items.forEach(item => {
             item.style.width = '200px';
             item.style.flex = '1 1 200px';
             item.style.maxWidth = '250px';
             item.style.alignSelf = 'auto';
           });
           break;

         case 'fixed-width':
           widthInput.value = 150;
           widthValue.textContent = '150px';
           items.forEach(item => {
             item.style.width = '150px';
             item.style.flex = 'none';
             item.style.alignSelf = 'auto';
           });
           break;
       }

       updateFlex();
       updateElementSpecificControls();
       updateOutputs();
     }

     function toggleTheme() {
       document.body.setAttribute('data-theme',
         document.body.getAttribute('data-theme') === 'dark' ? '' : 'dark');
       updateOutputs();
     }

     function updateOutputs() {
       updateCSSOutput();
       updateHTMLOutput();
     }

     function updateCSSOutput() {
       const container = document.getElementById('flexContainer');
       const primaryColor = getComputedStyle(document.documentElement).getPropertyValue('--primary').trim();
       const bgColor = getComputedStyle(document.documentElement).getPropertyValue('--bg').trim();
       const itemBgColor = getComputedStyle(document.documentElement).getPropertyValue('--item-bg').trim();
       const cardColor = getComputedStyle(document.documentElement).getPropertyValue('--card').trim();

       let output = `/* Couleurs */\n` +
         `:root {\n` +
         `  --primary: ${primaryColor};\n` +
         `  --bg: ${bgColor};\n` +
         `  --card: ${cardColor};\n` +
         `  --item-bg: ${itemBgColor};\n` +
         `}\n\n` +
         `/* Conteneur Flex */\n` +
         `.flex-container {\n` +
         `  display: ${container.style.display || 'flex'};\n` +
         `  flex-direction: ${container.style.flexDirection || 'row'};\n` +
         `  flex-wrap: ${container.style.flexWrap || 'nowrap'};\n` +
         `  justify-content: ${container.style.justifyContent || 'flex-start'};\n` +
         `  align-items: ${container.style.alignItems || 'stretch'};\n` +
         `  gap: ${container.style.gap || '12px'};\n` +
         `  background: ${cardColor};\n` +
         `  padding: 1.5rem;\n` +
         `  border-radius: 12px;\n` +
         `  border: 2px dashed ${primaryColor};\n` +
         `}\n\n` +
         `/* Éléments Flex */\n` +
         `.flex-item {\n` +
         `  background: ${itemBgColor};\n` +
         `  color: white;\n` +
         `  padding: 1.5rem;\n` +
         `  border-radius: 8px;\n` +
         `  display: flex;\n` +
         `  align-items: center;\n` +
         `  justify-content: center;\n` +
         `  box-sizing: border-box;\n` +
         `}`;

       // Ajout des styles spécifiques pour chaque élément
       const items = document.querySelectorAll('.flex-item');
       items.forEach((item, index) => {
         const itemId = item.id;
         const flex = item.style.flex || '1';
         const alignSelf = item.style.alignSelf || 'auto';
         const width = item.style.width || 'auto';

         output += `\n\n/* Élément ${index + 1} */\n` +
           `#${itemId} {\n` +
           `  flex: ${flex};\n` +
           `  align-self: ${alignSelf};\n` +
           `  width: ${width};\n` +
           `}`;
       });

       document.getElementById('css-output').value = output;
     }

     function updateHTMLOutput() {
       const container = document.getElementById('flexContainer');
       let html = container.outerHTML
         .replace(/ style="[^"]*"/g, '')
         .replace(/<button class="delete-item[^>]*>×<\/button>/g, '');
       document.getElementById('html-output').value = html;
     }

     function copyCSS() {
       const cssOutput = document.getElementById('css-output');
       cssOutput.select();
       document.execCommand('copy');
       alert("CSS copié dans le presse-papiers !");
     }

     function copyHTML() {
       const htmlOutput = document.getElementById('html-output');
       htmlOutput.select();
       document.execCommand('copy');
       alert("HTML copié dans le presse-papiers !");
     }

     window.addEventListener('DOMContentLoaded', () => {
       resetItems();
       updateFlex();
     });
   </script>

   <a href="../index.php" >
     <div class="preset-btn" style="width:300px; text-align: center;">
       PAge précedente
     </div>
   </a>
 </body>

 </html>