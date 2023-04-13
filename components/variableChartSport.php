<div class="chart_item" style="width: 400px;">
    <canvas id="myChart"></canvas>
</div>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');

    const myChar = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: [
                'Сила',
                'Быстрота',
                'Выносливость',
                'Ловкость',
                'Гибкость',
            ],
            datasets: [{
                label: '1 семестр',
                data: [15, 29, 30, 41, 56],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }, {
                label: 'Текущий семестр',
                data: [28, 48, 40, 29, 66],
                fill: true,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(54, 162, 235)',
                pointBackgroundColor: 'rgb(54, 162, 235)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(54, 162, 235)'
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