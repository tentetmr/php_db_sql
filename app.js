let targetProgressValue = 0;
let targetGoalValue = 0;

var ctx = $("#myChart");
var stackedBar = new Chart(ctx, {
  type: "bar",
  data: {
    // PHPから持ってきたい
    labels: ["3/21", "3/22", "3/23", "3/24", "3/25"],
    datasets: [
      {
        label: "学習時間",
        borderWidth: 1,
        backgroundColor: "darkgreen",
        borderColor: "darkgreen",
        // PHPから持ってきたい
        data: [30, 60, 10, 100, 300],
      },
    ],
  },
  options: {
    scales: {
      xAxes: [
        {
          stacked: true,
        },
      ],
      yAxes: [
        {
          stacked: true,
        },
      ],
    },
  },
});
