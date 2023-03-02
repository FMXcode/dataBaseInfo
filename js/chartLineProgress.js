import {Chart} from "chart.js";
let ctx = document.getElementById("myChart").getContext('2d');
let myChart = new Chart(ctx, {
    data: {
        labels: [1, 2, 3, 4, 5],
        datasets: [{
            label: 'My First Dataset',
            data: [65, 59, 80, 81, 56, 55, 40],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
    },
    options: {}
})
const config = {
    type: 'line',
    data: data,
};
module.exports = {
    actions: [],
    config: config,
};