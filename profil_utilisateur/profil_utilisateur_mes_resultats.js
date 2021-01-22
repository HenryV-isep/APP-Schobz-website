let labels1 = ['Janvier', 'février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet'];
let data1 =  [7, 12, 10, 14, 16, 17, 17];
let colors1 = ['#dd3333'];

let myDoughnutChart = document.getElementById("myChart").getContext('2d');

let chart1 = new Chart(myDoughnutChart, {
    // The type of chart we want to create
    type: 'line',
    data: {
        labels: labels1,
        datasets: [ {
            data: data1,
            backgroundColor: colors1
        }]
    },
    // Configuration options go here
    options: {
        title: {
            text: "Evolution des résultats du test 1",
            display: true
        },
        legend: {
            display: false
        }
    }
});

let labels2 = ['Juliette', 'Gabin', 'Henry', 'Kais'];
let data2 = [137.6, 130.3, 129.3, 130];
let colors2 = [ 'white','#CED7DA', '#dd3333', '#484848'];

let myChart2 = document.getElementById("myChart2").getContext('2d');

let chart2 = new Chart(myChart2, {
    type: 'bar',
    data: {
        labels: labels2,
        datasets: [ {
            data: data2,
            backgroundColor: colors2
        }]
    },
    options: {
        title: {
            text: "Résultats des étudiants",
            display: true
        },
        legend: {
            display: false
        }
    }
});


let labels3 = ['Vision', 'Reflexe ophtalmique 1', 'Reflexe ophtalmique 2', 'Réaction auditive', 'Rythme cardiaque'];
let myChart3 = document.getElementById("myChart3").getContext('2d');
let data31 = [50, 34, 55, 7, 29];
let data32 = [51, 45, 32, 20, 44];
let colors3 = ['#38B6FF'];

let chart3 = new Chart(myChart3, {
    type: 'radar',
    data: {
        labels: labels3,
        datasets: [
            {
                label: '1er Test',
                fill: true,
                backgroundColor: "rgba(179, 181, 198, 0.2)",
                borderColor: '#497e9F',
                pointBorderColor: '#497e9F',
                pointBackgroundColor: '#497e9F',
                data: data31,
            },
            {
                label: '2ème Test',
                fill: true,
                backgroundColor: "rgba(255, 99, 132, 0.2)",
                borderColor: "#dd3333",
                pointBorderColor: "#fff",
                pointBackgroundColor: "#dd3333",
                data: data32,
            }
        ]
    },
    options: {
        title: {
            text: "Résultats des différents capteurs",
            display: true
        }
    }
});

let labels4 = ['Test 1', 'Test 2', 'Test 3', 'Test 4', 'Test 5'];
let data4 = [83, 67, 66, 61, 187];
let colors4 = ['#dd3333','#CED7DA', '#497e9F', '#484848','white',];

let myChart4 = document.getElementById("myChart4").getContext('2d');

let chart4 = new Chart(myChart4, {
    type: 'pie',
    data: {
        labels: labels4,
        datasets: [ {
            data: data4,
            backgroundColor: colors4
        }]
    },
    options: {
        title: {
            text: "Temps passé sur les tests (en min)",

            display: true

        }
    }
});
