@extends('layout._shared')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="zerosChart" width="800" height="400" style="background-color: rgb(255, 255, 255)"></canvas>

    <script>
        // Parse PHP data into JavaScript array
        var zerosData = @json($zeros);

        // Extract real and imaginary parts
        var realParts = zerosData.map(zero => zero.real_part);
        var imaginaryParts = zerosData.map(zero => zero.imaginary_part);

        // Create labels
        var labels = zerosData.map((zero, index) => 'Zero ' + (index + 1));

        // Create chart data
        var data = {
            labels: labels,
            datasets: [{
                label: 'Real Part',
                backgroundColor: 'rgb(171, 14, 35)',
                borderColor: 'rgb(171, 14, 35)',
                borderWidth: 1,
                data: realParts
            }, {
                label: 'Imaginary Part',
                backgroundColor: 'rgb(64, 71, 255)',
                borderColor: 'rgb(64, 71, 255)',
                borderWidth: 1,
                data: imaginaryParts
                
            }]
            
        };

        // Create chart
        var ctx = document.getElementById('zerosChart').getContext('2d');
        var zerosChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>@endsection