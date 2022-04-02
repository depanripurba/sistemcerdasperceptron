let data = document.getElementById("hidden")
let chartline = document.getElementById("hidden2")
let chartline2 = document.getElementById("hidden3")
var ctx = document.getElementById("mycanvas").getContext('2d');
var ctx2 = document.getElementById("mycanvas2").getContext('2d');
var ctx3 = document.getElementById("mycanvas3").getContext('2d');
let conver = data.value.split(" ");
let conver2 = chartline.value.split("+");
let conver3 = chartline2.value.split("+");
var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: ["pengguna", "kerusakan", "pelatihan", "diagnosa"],
		datasets: [{
			label: 'Banyak data',
			data: conver,
			backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
			],
			borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
			],
			borderWidth: 1
		}]
	},
	options: {
		plugins: {
			subtitle: {
				display: true,
				text: 'Data di Dalam Sistem',
				font: {
					size: 16,
					weight: 'bold'
				}
			},
			scales: {
				myScale: {
					type: 'logarithmic',
					position: 'right', // `axis` is determined by the position as `'y'`
				}
			}
		}
	}
});

var myChart2 = new Chart(ctx2, {
	type: 'line',
	data: {
		labels: conver2,
		datasets: [{
			label:'banyak data pelatihan',
			data: conver3,
			backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
			],
			borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
			],
			borderWidth: 1
		}]
	},
	options: {
		plugins: {
			subtitle: {
				display: true,
				text: 'Perbandingan Data Pelatihan Diagram Garis',
				font: {
					size: 16,
					weight: 'bold'
				}
			},
			scales: {
				myScale: {
					type: 'logarithmic',
					position: 'right', // `axis` is determined by the position as `'y'`
				}
			}
		}
	}
});


var myChart3 = new Chart(ctx3, {
	type: 'pie',
	data: {
		labels: conver2,
		datasets: [{
			label:'banyak data pelatihan',
			data: conver3,
			backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
			],
			borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
			],
			borderWidth: 1
		}]
	},
	options: {
		plugins: {
			subtitle: {
				display: true,
				text: 'Perbandingan Data Pelatihan Diagram Lingkaran',
				font: {
					size: 16,
					weight: 'bold'
				}
			},
			scales: {
				myScale: {
					type: 'logarithmic',
					position: 'right', // `axis` is determined by the position as `'y'`
				}
			}
		}
	}
});