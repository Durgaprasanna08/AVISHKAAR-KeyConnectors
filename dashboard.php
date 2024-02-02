<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetation Measurement Dashboard</title>
    <style>
        #vegetationChart{
            width: auto !important;
            height: 415px !important;
        }
        #image img{
            
            width: 40%;
            height: 400px; 
            padding: 10px;
        }
    </style>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <h1>Vegetation Measurement Along Line Corridor</h1>

    <!-- Bar graph container -->
    <canvas id="vegetationChart"></canvas>
    <div id="image">
        <h1>NDVI in RGB BAND</h1> 
        <img src="SIHIMG.jpg" alt="NDVI in RGB BAND">
    </div>

    <script>
        // Chart.js script for rendering the bar graph
        var ctx = document.getElementById('vegetationChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['2006-09-14', '2006-09-30', '2006-10-16', '2006-11-01', '2006-11-17', '2006-12-03', '2006-12-19', '2007-01-01', '2007-01-17', '2007-02-02'],
                datasets: [
                    {
                        label: 'NDVI',
                        data: [0.4995, 0.4853, 0.7161, 0.6536, 0.5911, 0.6623, 0.7336, 0.7390, 0.7679, 0.7968],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'EVI',
                        data: [0.2628, 0.3299, 0.3968, 0.4150, 0.4332, 0.4388, 0.4445, 0.5015, 0.5256, 0.5498],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'NIR',
                        data: [0.2298, 0.3585, 0.2642, 0.3321, 0.4001, 0.3475, 0.2948, 0.3478, 0.3512, 0.3547],
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'MIR',
                        data: [0.1392, 0.1608, 0.0757, 0.1239, 0.1722, 0.1253, 0.0784, 0.0887, 0.0761, 0.0634],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        });
    </script>
    
    <div class="container">
      <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>
