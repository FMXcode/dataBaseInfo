<div class="chart_item">
    <canvas id="myChart"></canvas>
</div>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');

    const myChar = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['1 сем.', '2 сем.', '3 сем.', '4 сем.', '5 сем.', '6 сем.',
                '7 сем.', '8 сем.', '9 сем.', '10 сем.'],
            datasets: [{
                label: 'Успеваемость',
                data: [4.32, 4.9, 4.5, 4.7, 4.8, 4.56, 4.32, 4.2, 4.7, 4.7, 4.8, 4.56],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                    'rgba(27,149,238,0.2)',
                    'rgba(93,18,239,0.2)',
                    'rgb(27,232,39, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)',
                    'rgba(27,149,238)',
                    'rgba(93,18,239',
                    'rgb(27,232,39'
                ],
                borderWidth: 1
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