@extends('layout._shared')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="zerosChart"  style="background-color: rgba(255, 255, 255, 0.972);max-height: 41em"></canvas>

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
                backgroundColor: 'rgb(28, 62, 255)',
                borderColor: 'rgb(28, 62, 255)',
                fill: {value: 2},
                data: realParts
            }, {
                label: 'Imaginary Part',
                backgroundColor: 'rgb(255, 57, 54)',
                borderColor: 'rgb(255, 57, 54)',
                fill: {value: 2},
                data: imaginaryParts
                
            }]
            
        };

        // Create chart
        var ctx = document.getElementById('zerosChart').getContext('2d');
        var zerosChart = new Chart(ctx, {
            type: 'radar',
            data: data,
            options: {

    interaction: {
      intersect: false
    }
  }
});
    </script>
</body>@endsection