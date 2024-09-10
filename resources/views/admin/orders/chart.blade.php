<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Statistiche Ordini su Deliveboo</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h2 class="text-center my-3">Numero Di ordini Mensili</h2>
        <canvas id="monthChart" class="my-3"></canvas>
        <h2 class="text-center my-3">Totale Guadagni Mensili</h2>
        <canvas id="monthTotalChart" class="my-3"></canvas>
    </div>
    <script>
        let ctx = document.getElementById('monthChart').getContext('2d');
        let ctx2 = document.getElementById('monthTotalChart').getContext('2d');
        let monthChart = new Chart(ctx, {
            type: 'line', // Puoi cambiare il tipo di grafico
            data: {
                labels:['Settembre', 'Ottobre', 'Novembre', 'Dicembre', 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto'] , // Etichette per l'asse X
                datasets: [{
                    label: 'Numero di Ordini Mensili',
                    data: {!! json_encode($data) !!}, // Dati per l'asse Y
                    borderColor: 'black',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                    x: {
                        type:'category',
                        labels: ['Settembre', 'Ottobre', 'Novembre', 'Dicembre', 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto']
                    }
                }
            }
        });
        let monthTotalChart = new Chart(ctx2, {
            type: 'line', // Puoi cambiare il tipo di grafico
            data: {
                labels:['Settembre', 'Ottobre', 'Novembre', 'Dicembre', 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto'] , // Etichette per l'asse X
                datasets: [{
                    label: 'Guadagni Mensili',
                    data: {!! json_encode($dataTotal) !!}, // Dati per l'asse Y
                    borderColor: 'black',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                    x: {
                        type:'category',
                        labels: ['Settembre', 'Ottobre', 'Novembre', 'Dicembre', 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto']
                    }
                }
            }
        });
    </script>
</body>
</html>
