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
                label: 'Творческая деятельность',
                data: [4, 2, 7, 1, 3, 1, 5, 3, 7, 4, 8, 6],
                borderColor: [
                    'rgb(54,215,220)',
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