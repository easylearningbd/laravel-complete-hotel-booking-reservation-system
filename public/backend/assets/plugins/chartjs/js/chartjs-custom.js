$(function() {


    // chart1
    var ctx = document.getElementById('chart1').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
            datasets: [{
                label: 'Google',
                data: [6, 20, 14, 12, 17, 8, 10],
                backgroundColor: [
                    '#008cff'
                ],
                lineTension: 0.4,
                borderColor: [
                    '#008cff'
                ],
                borderWidth: 3
            },
            {
                label: 'Facebook',
                data: [5, 30, 16, 23, 8, 14, 11],
                backgroundColor: [
                    '#fd3550'
                ],
                tension: 0.4,
                borderColor: [
                    '#fd3550'
                ],
                borderWidth: 3
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
				legend: {
					position:'bottom',
					display: true,
				}
			},
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


    
    // chart2
    var ctx = document.getElementById('chart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
            datasets: [{
                label: 'Google',
                data: [18, 25, 14, 12, 17, 8, 10],
                backgroundColor: [
                    '#0d6efd'
                ],
                lineTension: 0,
                borderColor: [
                    '#0d6efd'
                ],
                borderWidth: 3
            },
            {
                label: 'Facebook',
                data: [12, 30, 16, 23, 8, 14, 11],
                backgroundColor: [
                    '#15ca20'
                ],
                tension: 0,
                borderColor: [
                    '#15ca20'
                ],
                borderWidth: 3
            }]
        },
        options: {
            maintainAspectRatio: false,
            barPercentage: 0.6,
            categoryPercentage: 0.5,
            plugins: {
				legend: {
					position:'bottom',
					display: true,
				}
			},
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


     // chart3
     var ctx = document.getElementById('chart3').getContext('2d');
     var myChart = new Chart(ctx, {
         type: 'pie',
         data: {
             labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
             datasets: [{
                 data: [12, 19, 3, 5, 2, 3],
                 backgroundColor: [
                     '#0d6efd',
                     '#6f42c1',
                     '#d63384',
                     '#fd7e14',
                     '#15ca20',
                     '#0dcaf0'
                 ],
                 borderWidth: 1.5
             }]
         },
         options: {
            maintainAspectRatio: false,
            plugins: {
				legend: {
					position:'bottom',
					display: true,
				}
			},
            
         }
     });
    


      // chart4
      var ctx = document.getElementById('chart4').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
              labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
              datasets: [{
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                     '#0d6efd',
                     '#6f42c1',
                     '#d63384',
                     '#fd7e14',
                     '#15ca20',
                     '#0dcaf0'
                ],
                  borderWidth: 1
              }]
          },
          options: {
             maintainAspectRatio: false,
             plugins: {
				legend: {
					position:'bottom',
					display: true,
				}
			},
             
          }
      });



      
      // chart5
      var ctx = document.getElementById('chart5').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'radar',
          data: {
            labels: [
                'Eating',
                'Drinking',
                'Sleeping',
                'Designing',
                'Coding',
                'Cycling',
                'Running'
              ],
              datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 90, 81, 56, 55, 40],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
              }, {
                label: 'My Second Dataset',
                data: [28, 48, 40, 19, 96, 27, 100],
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
            maintainAspectRatio: false,
            plugins: {
				legend: {
					position:'bottom',
					display: true,
				}
			},
            elements: {
              line: {
                borderWidth: 3
              }
            }
          },
      });



      
      // chart6
      var ctx = document.getElementById('chart6').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'polarArea',
          data: {
            labels: [
                'Red',
                'Purple',
                'Yellow',
                'Grey',
                'Green'
              ],
              datasets: [{
                label: 'My First Dataset',
                data: [11, 16, 7, 3, 14],
                backgroundColor: [
                     '#0d6efd',
                     '#6f42c1',
                     '#d63384',
                     '#fd7e14',
                     '#15ca20',
                     '#0dcaf0'
                ],
              }]
          },
          options: {
            maintainAspectRatio: false,
            plugins: {
				legend: {
					position:'bottom',
					display: true,
				}
			},
            elements: {
              line: {
                borderWidth: 3
              }
            }
          },
      });


    

// chart7
var ctx = document.getElementById('chart7').getContext('2d');
var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
		datasets: [{
			label: 'Google',
			data: [18, 25, 14, 12, 17, 8, 10],
			backgroundColor: [
				'#fd3550'
			],
			lineTension: 0,
			borderColor: [
				'#fd3550'
			],
			borderWidth: 0
		}
		]
	},
	options: {
		maintainAspectRatio: false,
		barPercentage: 0.5,
		categoryPercentage: 0.7,
		indexAxis: 'y',
		plugins: {
			legend: {
				position:'bottom',
				display: true,
			}
		},
		scales: {
			y: {
				beginAtZero: true
			}
		}
	}
});




    // chart8
    var ctx = document.getElementById('chart8').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
            datasets: [{
				type: 'bar',
                label: 'Google',
                data: [6, 20, 14, 12, 17, 8, 10],
                backgroundColor: [
                    '#008cff'
                ],
                lineTension: 0.4,
                borderColor: [
                    '#008cff'
                ],
                borderWidth: 1
            },
            {
				type: 'line',
                label: 'Facebook',
                data: [5, 30, 16, 23, 8, 14, 11],
                backgroundColor: [
                    '#fd3550'
                ],
                tension: 0.4,
                borderColor: [
                    '#fd3550'
                ],
                borderWidth: 4
            }]
        },
        options: {
            maintainAspectRatio: false,
			barPercentage: 0.5,
		    categoryPercentage: 0.5,
            plugins: {
				legend: {
					position:'bottom',
					display: true,
				}
			},
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });




    // chart9
    var ctx = document.getElementById('chart9').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
            datasets: [{
                label: 'Facebook',
                data: [5, 30, 16, 23, 8, 14, 2],
                backgroundColor: [
                    '#15ca20'
                ],
				fill: {
					target: 'origin',
					above: 'rgb(21 202 32 / 20%)',   // Area will be red above the origin
					//below: 'rgb(21 202 32 / 100%)'   // And blue below the origin
				  }, 
                tension: 0.4,
                borderColor: [
                    '#15ca20'
                ],
                borderWidth: 4
            }]
        },
        options: {
            maintainAspectRatio: false,
			barPercentage: 0.5,
		    categoryPercentage: 0.5,
            plugins: {
				legend: {
					position:'bottom',
					display: true,
				}
			},
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    
});