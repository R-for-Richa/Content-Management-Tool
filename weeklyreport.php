
<html>
<head>
 <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>

<script type="text/javascript">
                                    $(function () {
    var chart;
    $(document).ready(function() {
    
        var colors = Highcharts.getOptions().colors,
            categories = ['Sold Out','Currently Advertised', 'Cancelled'],
            data = [{
                name:'Sold Out', 
                    y: 1550,
                    color: colors[0],
                    drilldown: {
                           
                        data: [{name:'Rockon',y:500},{name:'Fliers',y:350},{name:'MAxRage',y:358},{name:'Bombers',y: 342}],
                        color: colors[0]
                    }
                }, {
                    name: 'Currently Advertised',
                    y: 900,
                    color: colors[1],
                    drilldown: {
                                               
                        data: [{name:'Roars',y:246},{name:'Canes Festival',y:274},{name:'Musical Prodigy',y:173},{name:'Musical Night 2k13',y:127},{name:'IL Talents',y:80 }],
                        color: colors[1]
                    }
                }, {
                    name: 'Cancelled',
                    y: -500,
                    color: colors[2],
                    drilldown: {
                       
                        data: [
                            {name:'Fosters', y:-80},
                            {name:'Halloween Bash',y:-37},
                             {name:'New eve Concert',y:-40},
                             {name:'Holla Holla',y:-100},
                             {name:'Akon Musical',y:-25},
                             {name:'Colors of Music',y:-20},
                             {name:'Bang the Beat',y:-198}
                             ],
                        color: colors[2]
                    }
                }];
    
        function setChart(options) {
            chart.series[0].remove(false);
            chart.addSeries({
                type: options.type,
                name: options.name,
                data: options.data,
                color: options.color || 'white'
            }, false);
            chart.xAxis[0].setCategories(options.categories, true);
            chart.redraw();
        }
    
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Weekly Summary Report , Week # 34'
            },
            subtitle: {
                text: 'Click the columns to view individual event details in that category.'
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    text: 'Profit in Dollars'
                }
            },
            plotOptions: {
                series: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                var drilldown = this.drilldown;
                                var options;
                                if (drilldown) { // drill down
                                    options = {
                                        'name': drilldown.name,
                                        'categories': drilldown.categories,
                                        'prev' : name,
                                        'data': drilldown.data,
                                        'color': drilldown.color,
                                        'type': 'pie'
                                    };
                                } else { // restore
                                    options = {
                                        'name': name,
                                        'categories': categories,
                                        'data': data,
                                        'type': 'column'
                                    };
                                }
                                setChart(options);
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        color: colors[0],
                        style: {
                            fontWeight: 'bold'
                        },
                        formatter: function() {
                            return this.y +'$';
                        }
                    }
                }
            },
            tooltip: {
                formatter: function() {
                      var point = this.point,
                  s = point.name + ':<b>' + this.y + '$ Profit</b><br/>';
                if (point.drilldown) {
                  //  s = point.name + ':<b>' + this.y + '</b><br/>';
                    s += 'Click to view ' + point.name + ' individual events';
                } else {
                    //s = point.name + ':<b>' + this.y + '</b><br/>';
                    s += 'Click to return to Overview';
                }
                return s;
                }
            },
			     credits: {
            enabled: false
        },
            series: [{
                type: 'column',
                name: name,
                data: data,
                color: 'white'
            }],
            exporting: {
                enabled: false
            }
        });
    });
    
});
 </script>
</head>

<body>

<div id="container" style="width: 980px; height: 400px; margin: 0 auto"></div>
    <script src="js/highcharts.js"></script>
    <script src="js/exporting.js"></script>

</body>
</html>
