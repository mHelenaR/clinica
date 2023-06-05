<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Anel</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #chart {
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
    <canvas id="chart"></canvas>

    <script>
        // Valores para o gráfico de anel
        var data = {
            labels: ["Chrome", "Firefox", "Safari", "Internet Explorer", "Outros"],
            datasets: [{
                data: [3, 50, 20,8,30],
                backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#246B9B", "#3ED464"]
            }]
        };
        


        // Configuração do gráfico
        var options = {
            responsive: true,
            maintainAspectRatio: false
        };

        // Renderizar o gráfico
        var ctx = document.getElementById("chart").getContext("2d");
        var chart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
        });
    </script>
</body>
</html>
