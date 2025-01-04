<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reorder Divs</title>
    <style>
        div {
            width: 100px;
            height: 100px;
            margin: 10px;
            display: inline-block;
            background-color: lightblue;
            text-align: center;
            line-height: 100px;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div id="div1">Div 1</div>
    <div id="div2">Div 2</div>
    <div id="div3">Div 3</div>
    <div id="div4">Div 4</div>
    <div id="div5">Div 5</div>

    <button onclick="reorderDivs()">Reorder Divs</button>

    <script>
        function reorderDivs() {
            const container = document.body;
            const order = ['div3', 'div1', 'div5', 'div4', 'div2'];

            // Reorganize divs based on the order array
            order.forEach(id => {
                const element = document.getElementById(id);
                container.appendChild(element); // Move the element to the end of the container
            });
        }
    </script>
</body>
</html>
