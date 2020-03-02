var ctx = document.getElementById('sales-vs-target').getContext('2d');

var mixedChart = new Chart(ctx, {
    type: 'bar',
    data: {
        datasets: [{
            label: 'Meta',
            backgroundColor: 'rgba(0, 0, 0, 0)',
            borderColor: 'rgb(0, 0, 0)',
            data: [10, 25, 25, 50],
            type: 'line'
        },{
            label: 'Vendas',
            backgroundColor: 'rgb(255, 193, 7)',
            data: [10, 20, 30, 40]
        }],
        labels: ['January', 'February', 'March', 'April']
    },
    options: {}
});