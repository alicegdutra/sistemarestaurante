<x-app-layout>
    <h5 class="mt-3">Bem-vindo ao sistema de controle de mesas!</h5>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Mesa', 'Quantidade de Pedidos'],
                @foreach($mesas as $index => $mesa)
                    ["{{$mesa}}", {{$quantidades[$index]}}],
                @endforeach
            ]);

            var options = {
                title: 'Quantidade de Pedidos por Mesa',
                pieHole: 0.4,
                width: 900,
                height: 500,
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>

    <div class="d-flex justify-content-center">
        <div id="chart_div" style="width: 900px; height: 500px;"></div>
    </div>
</x-app-layout>
