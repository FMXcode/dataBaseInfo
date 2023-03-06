<div class="chart_item" style="width: 400px;">
    <canvas id="myChart"></canvas>
</div>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');

    const myChar = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: [
                'Взыскания',
                'НИР',
                'Спортивные достижения',
                'Успеваемость',
                'Поощрения'
            ],
            datasets: [{
                label: 'Баллы:',
                data: [5, 16, 14, 15, 14],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                    'rgb(255, 205, 86)',
                    'rgb(208,93,234)',
                    'rgb(54, 162, 235)'
                ]
            }]
        },
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            }
        },
    });
</script>

<!--<script src="../js/chartLineProgress.js"></script>-->