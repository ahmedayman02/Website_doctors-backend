const ctx = document.getElementById('barchart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Aswan', 'Ismailia', 'Fayoum', 'Cairo', 'Alexandria'],
    datasets: [{
      label: ' Statistics on first aid ',
      data: [30, 22, 43, 20,  100, 60],
      backgroundColor: [
        "rgba(57, 112, 193, 1)", //Blue      
        "rgba(57, 112, 193, 1)", //Blue      
        "rgba(57, 112, 193, 1)", //Blue      
        "rgba(0, 155, 0, 1)", //Blue      
        "rgba(57, 112, 193, 1)", //Blue      
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});












































