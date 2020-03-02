var ctx = document.getElementById('sales-by-payment-methods').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Boleto',
            backgroundColor: 'rgba(0, 0, 0, 0)',
            borderColor: 'rgb(0, 0, 0)',
            data: [0, 10, 5, 2, 20, 30, 45]
        },
        {
            label: 'Crédito',
            backgroundColor: 'rgba(0, 0, 0, 0)',
            borderColor: 'rgb(255, 193, 7)',
            data: [3, 15, 7, 6, 29, 5, 38]
        }]
    },

    // Configuration options go here
    options: {}
});