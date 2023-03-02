
<div class="chart_item" style="width: 400px;">
    <canvas id="myChart"></canvas>
</div>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');

    const myChar = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                '1.Поощрения',
                '2.Взыскания',
            ],
            datasets: [{
                label: 'Взыскания/Поощрения',
                data: [100, 20],
                backgroundColor: [
                    'rgb(54, 162, 235)',
                    'rgb(255, 99, 132)',
                ],
                hoverOffset: 4
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<!--<script src="../js/chartLineProgress.js"></script>-->