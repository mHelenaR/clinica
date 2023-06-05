<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Pizza</title>
    <style>
        #chart-container {
            width: 400px;
            height: 400px;
        }
    </style>
</head>
<body>
    <div id="chart-container"></div>

    <?php
        // Dados do gráfico
        $data = array(
            'Chrome' => 1,
            'Firefox' => 12,
            'Safari' => 10,
            'Internet Explorer' => 8,
            'Outros' => 5
        );

        // Cores para as fatias
        $colors = array('#f44336', '#2196f3', '#4caf50', '#ffeb3b', '#9c27b0');

        // Total de valores
        $total = array_sum($data);

        // Ângulo inicial
        $startAngle = 0;

        // Gerar o gráfico de pizza
        echo '<script>';
        echo 'var data = ['; 

        foreach ($data as $browser => $value) {
            $percentage = ($value / $total) * 100;
            $endAngle = $startAngle + ($percentage * 3.6);
            $color = array_shift($colors);

            echo '{';
            echo "browser: '$browser',";
            echo "value: $value,";
            echo "percentage: $percentage,";
            echo "startAngle: $startAngle,";
            echo "endAngle: $endAngle,";
            echo "color: '$color'";
            echo '},';

            $startAngle = $endAngle;
        }

        echo '];';

        echo 'window.onload = function() {';
        echo 'var canvas = document.createElement("canvas");';
        echo 'canvas.width = 400;';
        echo 'canvas.height = 400;';
        echo 'document.getElementById("chart-container").appendChild(canvas);';
        echo 'var context = canvas.getContext("2d");';

        echo 'var centerX = canvas.width / 2;';
        echo 'var centerY = canvas.height / 2;';
        echo 'var radius = Math.min(centerX, centerY);';

        echo 'data.forEach(function(slice) {';
        echo 'var startAngle = slice.startAngle * Math.PI / 180;';
        echo 'var endAngle = slice.endAngle * Math.PI / 180;';

        echo 'context.beginPath();';
        echo 'context.moveTo(centerX, centerY);';
        echo 'context.arc(centerX, centerY, radius, startAngle, endAngle);';
        echo 'context.fillStyle = slice.color;';
        echo 'context.fill();';

        echo 'var labelX = centerX + (radius / 2) * Math.cos((startAngle + endAngle) / 2);';
        echo 'var labelY = centerY + (radius / 2) * Math.sin((startAngle + endAngle) / 2);';
        echo 'context.textAlign = "center";';
        echo 'context.fillStyle = "#ffffff";';
        echo 'context.font = "14px Arial";';
        echo 'context.fillText(slice.browser, labelX, labelY);';

        echo '});';
        echo '};';
        echo '</script>';
    ?>
</body>
</html>
