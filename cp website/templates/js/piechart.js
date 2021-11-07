
anychart.onDocumentReady(function() {

    // set the data
    var data = [
        {x: "Solved", value: 30},
        {x: "In progress", value: 10},
        {x: "Unsolved", value: 60}
    ];
  
    // create the chart
    var chart = anychart.pie();
  
    // set the chart title
    chart.title("Progress");
  
    // add the data
    chart.data(data);
  
    chart.legend().position("right");
    
    // set items layout
    chart.legend().itemsLayout("vertical");
    
    // display the chart in the container
    chart.container('chart');
    chart.draw(); 
})