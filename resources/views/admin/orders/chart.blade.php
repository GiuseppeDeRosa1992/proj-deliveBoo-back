@extends('layouts.admin')
@section('content')
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
        <h2 class="text-center my-3">Seleziona come visualizzare i tuoi ordini ricevuti</h2>
        <select id="chartType" class="form-select my-3">
            <option value="monthly">Mensili</option>
            <option value="annual">Annuali</option>
        </select>

        <div id="monthlyCharts">
            <h2 class="text-center my-3">Numero Di ordini Mensili</h2>
            <canvas id="monthChart" class="my-3"></canvas>
        </div>

        <div id="annualCharts" style="display: none;">
            <h2 class="text-center my-3">Numero Di ordini Annuali</h2>
            <canvas id="yearChart" class="my-3"></canvas>
        </div>

        <h2 class="text-center my-3">Seleziona come visualizzare i tuoi Guadagni</h2>
        <select id="totalChartType" class="form-select my-3">
            <option value="monthly">Mensili</option>
            <option value="annual">Annuali</option>
        </select>

        <div id="monthlyTotalCharts">
            <h2 class="text-center my-3">Totale Guadagni Mensili</h2>
            <canvas id="monthTotalChart" class="my-3"></canvas>
        </div>

        <div id="annualTotalCharts" style="display: none;">
            <h2 class="text-center my-3">Totale Guadagni Annuali</h2>
            <canvas id="yearTotalChart" class="my-3"></canvas>
        </div>

    <script>
        document.getElementById('chartType').addEventListener('change', function() {
        var selectedValue = this.value;
        if (selectedValue === 'monthly') {
            document.getElementById('monthlyCharts').style.display = 'block';
            document.getElementById('annualCharts').style.display = 'none';
        } else {
            document.getElementById('monthlyCharts').style.display = 'none';
            document.getElementById('annualCharts').style.display = 'block';
        }
        });

        document.getElementById('totalChartType').addEventListener('change', function() {
        var selectedValue = this.value;
        if (selectedValue === 'monthly') {
            document.getElementById('monthlyTotalCharts').style.display = 'block';
            document.getElementById('annualTotalCharts').style.display = 'none';
        } else {
            document.getElementById('monthlyTotalCharts').style.display = 'none';
            document.getElementById('annualTotalCharts').style.display = 'block';
        }
        });

        let ctx = document.getElementById('monthChart').getContext('2d');
        let ctx2 = document.getElementById('monthTotalChart').getContext('2d');
        let ctx3 = document.getElementById('yearChart').getContext('2d');
        let ctx4 = document.getElementById('yearTotalChart').getContext('2d');

        let monthChart = new Chart(ctx, {
            type: 'bar', // Puoi cambiare il tipo di grafico
            data: {
                labels:{!! json_encode($labelsMonth) !!}, // Etichette per l'asse X
                datasets: [{
                    label: 'Numero di Ordini Mensili',
                    data: {!! json_encode($dataMonth) !!}, // Dati per l'asse Y
                    border: '2 px solid black',
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
                        // labels: ['Settembre', 'Ottobre', 'Novembre', 'Dicembre', 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto']
                    }
                }
            }
        });
        let monthTotalChart = new Chart(ctx2, {
            type: 'bar', // Puoi cambiare il tipo di grafico
            data: {
                labels:{!! json_encode($labelsTotalMonth) !!} , // Etichette per l'asse X
                datasets: [{
                    label: 'Guadagni Mensili',
                    data: {!! json_encode($dataTotalMonth) !!}, // Dati per l'asse Y
                    borderColor: '2 px solid black',
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
                        // labels: ['Settembre', 'Ottobre', 'Novembre', 'Dicembre', 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto']
                    }
                }
            }
        });
        let yearChart = new Chart(ctx3, {
            type: 'bar', // Puoi cambiare il tipo di grafico
            data: {
                labels:{!! json_encode($labelsYear) !!} , // Etichette per l'asse X
                datasets: [{
                    label: 'Numero di Ordini Annuali',
                    data: {!! json_encode($dataYear) !!}, // Dati per l'asse Y
                    borderColor: '2 px solid black',
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
                        labels: ['2024', '2025', '2026']
                    }
                }
            }
        });
        let yearTotalChart = new Chart(ctx4, {
            type: 'bar', // Puoi cambiare il tipo di grafico
            data: {
                labels:{!! json_encode($labelsTotalYear) !!}, // Etichette per l'asse X
                datasets: [{
                    label: 'Guadagni Annuali',
                    data: {!! json_encode($dataTotalYear) !!}, // Dati per l'asse Y
                    borderColor: '2 px solid black',
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
                        labels: ['2024', '2025', '2026']
                    }
                }
            }
        });
    </script>
</body>
</html>
@endsection
