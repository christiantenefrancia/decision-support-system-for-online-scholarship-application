<html>
    <head>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/highcharts.js"></script>
        <script type="text/javascript" src="js/exporting.js"></script>
    </head>

    
    <script type="text/javascript">
        $(document).ready(function () {    
           
            var string = "["+
                          "{ name: 'Firefox',"+
                           "y: 45.0,"+
                            "sliced:true,"+
                            "selected:true"+
                            "},"+
                          "{"+
                            "name: 'Chrome',"+
                            "y:14.8,"+
                            "sliced:true,"+
                            "selected:true"+
                         "}"+
            "]";
            
            RenderPieChart('container', string
//                           [
//                      ['Firefox', 45.0],
//                      ['IE', 26.8],
//                      {
//                          name: 'Chrome',
//                          y: 14.8,
//                          sliced: true,
//                          selected: true
//                      },                         
//                      ['Safari', 8.5],
//                      ['Opera', 6.2],
//                      ['Others', 0.7]
//                  ]
                          );     
     
     $('#btnPieChart').live('click', function(){ 
         var data = [
                      ['Firefox', 42.0],
                      ['IE', 26.8],
                      {
                          name: 'Chrome',
                          y: 14.8,
                          sliced: true,
                          selected: true
                      },
                      ['Safari', 6.5],
                      ['Opera', 8.2],
                      ['Others', 0.7]
                  ];
             
            RenderPieChart('container', data);
     });
     
            function RenderPieChart(elementId, dataList) {
                new Highcharts.Chart({
                    chart: {
                        renderTo: elementId,
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    }, title: {
                        text: 'Browser market shares at a specific website, 2010'
                    },
                    tooltip: {
                        formatter: function () {
                            return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false,
                                color: '#000000',
//                                connectorColor: '#000000',
//                                formatter: function () {
//                                    return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
//                                }
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: 'Browser share',
                        data: dataList
                    }]
                });
            };
        });
    
    
    </script>
    
<body>
    <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    <input type="button" id="btnPieChart" value="Pie Chart" />
    
</body>
    

</html>