// CHARTS SCRIPTS-------------------------------------------------------------------------


var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [' ', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Novmber', 'December'],
      datasets: [{
            label: 'Productivity per month (tasks accomplished / total tasks)',
            data: [50, 75, 65, 76, 84, 35, 46, 67, 65, 45, 67, 25, 50],
            backgroundColor: [
              'rgba(255, 99, 132, .75)',
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(153, 102, 255, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 1
          }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    steps: 10,
                    max: 100
                }
            }]
        }
    }
});

var ctx2 = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Novmber', 'December'],
        datasets: [{
            label: 'No. of tasks per month',
            data: [12, 19, 3, 5, 2, 3, 12, 3, 5, 2, 3, 12],
            backgroundColor: [
                'rgba(255, 99, 132, 0.75)',
                'rgba(54, 162, 235, 0.75)',
                'rgba(255, 206, 86, 0.75)',
                'rgba(75, 192, 192, 0.75)',
                'rgba(153, 102, 255, 0.75)',
                'rgba(153, 102, 255, 0.75)',
                'rgba(54, 162, 235, 0.75)',
                'rgba(255, 206, 86, 0.75)',
                'rgba(75, 192, 192, 0.75)',
                'rgba(153, 102, 255, 0.75)',
                'rgba(153, 102, 255, 0.75)',
                'rgba(255, 159, 64, 0.75)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                  beginAtZero: true,
                  steps: 10,
                }
            }]
        }
    }
});


const finishedTask = JSON.parse(document.getElementById('unFinishedTask').innerHTML);
const unFinishedTask = JSON.parse(document.getElementById('finishedTask').innerHTML);
// const unFinishedTask = 3;

var taskPercent = ((finishedTask / (finishedTask + unFinishedTask) )*100).toFixed(1) + "%";
var percentShow = document.getElementById('doughnutNumber').innerHTML = taskPercent + "</br>" + '<span style="font-size: 25px;">of tasks accomplished</span>';

var ctx3 = document.getElementById('myChart3').getContext('2d');
var myChart3 = new Chart(ctx3, {
    type: 'doughnut',
    data: {
        labels: ['Finished Tasks', 'Unfinished Tasks'],
        datasets: [{
            label: 'entries',
            data: [finishedTask, unFinishedTask],
            backgroundColor: [
                'rgba(54, 162, 235, 0.75)',
                'rgba(255, 99, 132, 0.75)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

