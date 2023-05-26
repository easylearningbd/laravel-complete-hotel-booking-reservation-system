$(function() {
    "use strict";

        
	// chart 1
	var ctx = document.getElementById('chart1').getContext('2d');


  var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
		          gradientStroke1.addColorStop(0, 'rgba(255, 255, 0, 0.5)');  
		          gradientStroke1.addColorStop(1, 'rgba(233, 30, 99, 0.0)'); 

		      var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
		          gradientStroke2.addColorStop(0, '#ffff00');  
		          gradientStroke2.addColorStop(1, '#e91e63'); 


		      var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
		          gradientStroke3.addColorStop(0, 'rgba(0, 114, 255, 0.5)');  
		          gradientStroke3.addColorStop(1, 'rgba(0, 200, 255, 0.0)'); 

		      var gradientStroke4 = ctx.createLinearGradient(0, 0, 0, 300);
		          gradientStroke4.addColorStop(0, '#0072ff');  
		          gradientStroke4.addColorStop(1, '#00c8ff'); 


	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
      datasets: [{
        label: 'Visits',
        data: [6, 20, 14, 12, 17, 8, 10],
        borderColor: gradientStroke2,
        fill: {
					target: 'origin',
					above: gradientStroke1,   // Area will be red above the origin
					//below: 'rgb(21 202 32 / 100%)'   // And blue below the origin
				  }, 
        pointRadius :"0",
        pointHoverRadius:"0",
        tension: 0.4,
        borderWidth: 3
      }, {
        label: 'Sales',
        data: [5, 30, 16, 23, 8, 14, 11],
        borderColor: gradientStroke4,
        fill: {
					target: 'origin',
					above: gradientStroke3,   // Area will be red above the origin
					//below: 'rgb(21 202 32 / 100%)'   // And blue below the origin
				  }, 
        pointRadius :"0",
        pointHoverRadius:"0",
        tension: 0.4,
        borderWidth: 3
      }]
		},
		options: {
			maintainAspectRatio: false,
			legend: {
				display: true,
				labels: {
					fontColor: '#585757',
					boxWidth: 40
				}
			},
			tooltips: {
				enabled: false
			},
			scales: {
				xAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: '#585757'
					},
					gridLines: {
						display: true,
						color: "rgba(0, 0, 0, 0.07)"
					},
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: '#585757'
					},
					gridLines: {
						display: true,
						color: "rgba(0, 0, 0, 0.07)"
					},
				}]
			}
		}
	});




  // chart 2
	 
  var ctx = document.getElementById('chart2').getContext('2d');

  var gradientStroke = ctx.createLinearGradient(0, 0, 0, 300);
      gradientStroke.addColorStop(0, '#ee0979');  
      gradientStroke.addColorStop(1, '#ff6a00'); 

  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
      datasets: [{
        label: 'Sales',
        data: [9, 7, 14, 10, 12, 8],
        backgroundColor: gradientStroke,
        hoverBackgroundColor: gradientStroke,
        borderColor: "#fff",
        pointRadius :6,
        pointHoverRadius :6,
        pointHoverBackgroundColor: "#fff",
        borderWidth: 2,
        borderRadius: 20,

      }]
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.5,
      categoryPercentage: 0.7,
      plugins: {
        legend: {
          display: false,
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  }); 



 // chart 3 
	
 Morris.Donut({
  element: 'chart3',
  data: [{
    label: "Samsung",
    value: 15,

  }, {
    label: "Nokia",
    value: 30
  }, {
    label: "Apple",
    value: 20
  }],
  resize: true,
  colors:['#008cff', '#15ca20', '#fd3550']
});




	// chart 4
	
	$('#chart4').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
    type: 'bar',
    height: '25',
    barWidth: '2',
    resize: true,
    barSpacing: '2',
    barColor: '#008cff'
});


// chart 5

$('#chart5').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
    type: 'bar',
    height: '25',
    barWidth: '2',
    resize: true,
    barSpacing: '2',
    barColor: '#fd3550'
});


// chart 6

$('#chart6').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
    type: 'bar',
    height: '25',
    barWidth: '2',
    resize: true,
    barSpacing: '2',
    barColor: '#15ca20'
});

// chart 7	

$('#chart7').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
    type: 'bar',
    height: '25',
    barWidth: '2',
    resize: true,
    barSpacing: '2',
    barColor: '#ff9700'
});

// chart 8	

$('#chart8').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
    type: 'bar',
    height: '25',
    barWidth: '2',
    resize: true,
    barSpacing: '2',
    barColor: '#0dceec'
});

// chart 9	

$('#chart9').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
    type: 'bar',
    height: '25',
    barWidth: '2',
    resize: true,
    barSpacing: '2',
    barColor: '#673ab7'
});


// chart 10

var ctx = document.getElementById('chart10').getContext('2d');

var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke1.addColorStop(0, 'rgb(255 65 108 / 30%)');  
        gradientStroke1.addColorStop(1, 'rgba(255 75 43 / 0%)'); 

    var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke2.addColorStop(0, '#ff416c');  
        gradientStroke2.addColorStop(1, '#ff4b2b'); 



    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
              label: 'Facebook',
              data: [5, 30, 16, 23, 8, 14, 2],
             
        fill: {
          target: 'origin',
          above: gradientStroke1,   // Area will be red above the origin
          //below: 'rgb(21 202 32 / 100%)'   // And blue below the origin
          }, 
              tension: 0.4,
              pointRadius :"0",
              borderColor: [
                gradientStroke2
              ],
              borderWidth: 3
          }]
      },
      options: {
       maintainAspectRatio: false,
       barPercentage: 0.7,
       categoryPercentage: 0.45,
       plugins: {
         legend: {
           maxWidth: 20,
           boxHeight: 20,
           position:'bottom',
           display: false,
         }
       },
       scales: {
         x: {
           stacked: false,
           beginAtZero: true,
           display: false,
         },
         y: {
           stacked: false,
           beginAtZero: true,
           display: false,
         }
         }
     }
    });



// chart 11

var ctx = document.getElementById('chart11').getContext('2d');

var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke1.addColorStop(0, 'rgba(255, 255, 0, 0.5)');  
        gradientStroke1.addColorStop(1, 'rgba(233, 30, 99, 0.0)'); 

    var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke2.addColorStop(0, '#ffff00');  
        gradientStroke2.addColorStop(1, '#e91e63'); 



    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
              label: 'Facebook',
              data: [5, 30, 16, 23, 8, 14, 2],
             
        fill: {
          target: 'origin',
          above: gradientStroke1,   // Area will be red above the origin
          //below: 'rgb(21 202 32 / 100%)'   // And blue below the origin
          }, 
              tension: 0.4,
              pointRadius :"0",
              borderColor: [
                gradientStroke2
              ],
              borderWidth: 3
          }]
      },
      options: {
       maintainAspectRatio: false,
       barPercentage: 0.7,
       categoryPercentage: 0.45,
       plugins: {
         legend: {
           maxWidth: 20,
           boxHeight: 20,
           position:'bottom',
           display: false,
         }
       },
       scales: {
         x: {
           stacked: false,
           beginAtZero: true,
           display: false,
         },
         y: {
           stacked: false,
           beginAtZero: true,
           display: false,
         }
         }
     }
    });

  

// chart 12    

var ctx = document.getElementById('chart12').getContext('2d');

     
var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke3.addColorStop(0, 'rgb(0 176 155 / 40%)');  
    gradientStroke3.addColorStop(1, 'rgb(150 201 61 / 0%)'); 

var gradientStroke4 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke4.addColorStop(0, '#00b09b');  
    gradientStroke4.addColorStop(1, '#00b09b'); 


     var myChart = new Chart(ctx, {
       type: 'line',
       data: {
         labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
         datasets: [{
               label: 'Facebook',
               data: [5, 30, 16, 23, 8, 14, 2],
       fill: {
         target: 'origin',
         above: gradientStroke3,   // Area will be red above the origin
         //below: 'rgb(21 202 32 / 100%)'   // And blue below the origin
         }, 
               tension: 0.4,
               pointRadius :"0",
               borderColor: [
                 gradientStroke4
               ],
               borderWidth: 3
           }]
       },
       options: {
        maintainAspectRatio: false,
        barPercentage: 0.7,
        categoryPercentage: 0.45,
        plugins: {
          legend: {
            maxWidth: 20,
            boxHeight: 20,
            position:'bottom',
            display: false,
          }
        },
        scales: {
          x: {
            stacked: false,
            beginAtZero: true,
            display: false,
          },
          y: {
            stacked: false,
            beginAtZero: true,
            display: false,
          }
          }
      }
     });



	  
// worl map

jQuery('#dashboard-map').vectorMap(
  {
      map: 'world_mill_en',
      backgroundColor: 'transparent',
      borderColor: '#818181',
      borderOpacity: 0.25,
      borderWidth: 1,
      zoomOnScroll: false,
      color: '#009efb',
      regionStyle : {
          initial : {
            fill : '#008cff'
          }
        },
      markerStyle: {
        initial: {
                      r: 9,
                      'fill': '#fff',
                      'fill-opacity':1,
                      'stroke': '#000',
                      'stroke-width' : 5,
                      'stroke-opacity': 0.4
                  },
                  },
      enableZoom: true,
      hoverColor: '#009efb',
      markers : [{
          latLng : [21.00, 78.00],
          name : 'Lorem Ipsum Dollar'
        
        }],
      hoverOpacity: null,
      normalizeFunction: 'linear',
      scaleColors: ['#b6d6ff', '#005ace'],
      selectedColor: '#c9dfaf',
      selectedRegions: [],
      showTooltip: true,
  });	  
      
  
	
	  

});
      
	  