<!DOCTYPE html>
<html>

<head>
    <title>Gráfico de Anel</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.4.2/tinycolor.min.js"></script>
    <style>
        #chart {
            width: 300px;
            height: 300px;
        }

        #legend1 {
            margin-top: 60px;
            margin-left: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            font-family: Arial, sans-serif;
            font-weight: bold;
            font-size: 14px;
        }

        .legend1-item {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
            cursor: pointer;
        }

        .legend1-marker {
            width: 10px;
            height: 10px;
            margin-right: 5px;
        }

        .legend1-label {
            user-select: none;
        }

        .hidden-segment {
            opacity: 0.5;
        }
    </style>
</head>

<body>
    <div id="chart-container1">
        <canvas id="chart1"></canvas>
    </div>

    <div id="legend1"></div>

    <script>
        // Valores para o gráfico de anel
        var labels = ["Chrome", "Firefox", "Safari", "Internet Explorer", "Outros"];
        var datasets = [3, 50, 20, 8, 30];

        // Gerar cores aleatórias combinantes
        function getRandomColors(numColors) {
            var colors = [];
            for (var i = 0; i < numColors; i++) {
                var color = tinycolor.random().saturate().toString();
                colors.push(color);
            }
            return colors;
        }

        var backgroundColors = getRandomColors(datasets.length);

        var data = {
            labels: labels,
            datasets: [{
                data: datasets,
                backgroundColor: backgroundColors
            }]
        };

        // Configuração do gráfico
        var options = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            }
        };

        // Renderizar o gráfico
        var ctx = document.getElementById("chart1").getContext("2d");
        var chart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
        });

        // Criar a legenda interativa
        var legendContainer = document.getElementById("legend1");
        var legendItems = chart.legend.legendItems;

        legendItems.forEach(function(item, index) {
            var legendItem = document.createElement("div");
            legendItem.classList.add("legend1-item");

            var legendMarker = document.createElement("div");
            legendMarker.classList.add("legend1-marker");
            legendMarker.style.backgroundColor = item.fillStyle;
            legendItem.appendChild(legendMarker);

            var legendLabel = document.createElement("span");
            legendLabel.classList.add("legend1-label");
            legendLabel.textContent = item.text;
            legendItem.appendChild(legendLabel);

            legendItem.addEventListener("click", function() {
                var segment = chart.getDatasetMeta(0).data[index];
                segment.hidden = !segment.hidden;
                this.classList.toggle("hidden-segment");
                chart.update();
            });

            legendContainer.appendChild(legendItem);
        });
    </script>
</body>

</html>