<div class="chart_item">
    <canvas id="myChart"></canvas>
</div>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');

    const myChar = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['1 сем.', '2 сем.', '3 сем.', '4 сем.', '5 сем.', '6 сем.',
                '7 сем.', '8 сем.', '9 сем.', '10 сем.'],
            datasets: [{
                label: 'НИР',
                data: [4, 2, 7, 1, 3, 1, 5, 3, 7, 4, 8, 6],
                borderColor: [
                    'rgb(54,215,220)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)',
                    'rgba(27,149,238)',
                    'rgb(93,18,239)',
                    'rgb(27,232,39)',
                ],
                borderWidth: 3,
                tension: 0.3
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