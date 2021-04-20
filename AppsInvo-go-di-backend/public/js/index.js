window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(231,233,237)'
};

Chart.defaults.global.tooltips.custom = function(tooltip) {
  // Tooltip Element
  var tooltipEl = document.getElementById('chartjs-tooltip');

  // Hide if no tooltip
  if (tooltip.opacity === 0) {
    tooltipEl.style.opacity = 0;
    return;
  }

  // Set Text
  if (tooltip.body) {
    var total = 0;

    // get the value of the datapoint
    var value = this._data.datasets[tooltip.dataPoints[0].datasetIndex].data[tooltip.dataPoints[0].index].toLocaleString();

    // calculate value of all datapoints
  this._data.datasets[tooltip.dataPoints[0].datasetIndex].data.forEach(function(e) {
      total += e;
    });

    // calculate percentage and set tooltip value
    tooltipEl.innerHTML = '<h1>' + (value / total * 100) + '%</h1>';
  }

  // calculate position of tooltip
  var centerX = (this._chartInstance.chartArea.left + this._chartInstance.chartArea.right) / 2;
  var centerY = ((this._chartInstance.chartArea.top + this._chartInstance.chartArea.bottom) / 2);

  // Display, position, and set styles for font
  tooltipEl.style.opacity = 1;
  tooltipEl.style.left = centerX + 'px';
  tooltipEl.style.top = centerY + 'px';
  tooltipEl.style.fontFamily = tooltip._fontFamily;
  tooltipEl.style.fontSize = tooltip.fontSize;
  tooltipEl.style.fontStyle = tooltip._fontStyle;
  tooltipEl.style.padding = tooltip.yPadding + 'px ' + tooltip.xPadding + 'px';
};

var config = {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [300, 50, 100, 40, 10],
      backgroundColor: [
        window.chartColors.red,
        window.chartColors.orange,
        window.chartColors.yellow,
        window.chartColors.green,
        window.chartColors.blue,
      ],
    }],
    labels: [
      "A",
      "B",
      "C",
      "D",
      "E"
    ]
  },
  options: {
    responsive: true,
    legend: {
      display: true,
      labels: {
        padding: 20
      },
    },
    tooltips: {
      enabled: false,
    }
  }
};

window.onload = function() {
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myPie = new Chart(ctx, config);
};