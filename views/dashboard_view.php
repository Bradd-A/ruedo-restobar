<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="../img/icons/ruedo_icon.ico" type="image/x-icon">
    <link href="../css/output.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="flex h-screen bg-gray-100">
        <?php
            require_once 'includes/nav_view.php'
        ?>
        <!-- Contenido principal -->
        <div class="flex-grow p-4">
            <h1 class="text-center text-4xl font-bold">Graficos de no se k!</h1>
            <div class="flex flex-wrap justify-center">
                <div class="w-1/2 p-2">
                    <div class="w-full h-80 bg-white p-4 rounded shadow">
                        <canvas id="chart1" class="w-full h-full"></canvas>
                    </div>
                </div>
                <div class="w-1/2 p-2">
                    <div class="w-full h-80 bg-white p-4 rounded shadow">
                        <canvas id="chart2" class="w-full h-full"></canvas>
                    </div>
                </div>
                <div class="w-1/2 p-2">
                    <div class="w-full h-80 bg-white p-4 rounded shadow">
                        <canvas id="chart3" class="w-full h-full"></canvas>
                    </div>
                </div>
                <div class="w-1/2 p-2">
                    <div class="w-full h-80 bg-white p-4 rounded shadow">
                        <canvas id="chart4" class="w-full h-full"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .div principal -->
    <script>
        // Gráfico de línea
        const ctx1 = document.getElementById('chart1').getContext('2d');
        const chart1 = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Ventas',
                    data: [12, 19, 3, 5, 2],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                }]
            }
        });
        // Gráfico de pastel
        const ctx2 = document.getElementById('chart2').getContext('2d');
        const chart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Rojo', 'Azul', 'Verde'],
                datasets: [{
                    data: [12, 19, 3],
                    backgroundColor: ['red', 'blue', 'green']
                }]
            }
        });

        // Gráfico de radar
        const ctx3 = document.getElementById('chart3').getContext('2d');
        const chart3 = new Chart(ctx3, {
            type: 'radar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Ventas',
                    data: [12, 19, 3, 5, 2],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: true,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)'
                }]
            }
        });
        // Gráfico de dispersión
        const ctx4 = document.getElementById('chart4').getContext('2d');
        const chart4 = new Chart(ctx4, {
            type: 'scatter',
            data: {
                datasets: [{
                    label: 'Puntos',
                    data: [
                        { x: 1, y: 2 },
                        { x: 2, y: 4 },
                        { x: 3, y: 1 },
                        { x: 4, y: 3 },
                        { x: 5, y: 5 },
                    ],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)'
                }]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>