var barchart, linechart;;
$(function () {
    //  morris Area chart on dashboard///
    linechart = Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            sales: 2666,
        }, {
            period: '2010 Q2',
            sales: 2778,
        }, {
            period: '2010 Q3',
            sales: 4912,
        }, {
            period: '2010 Q4',
            sales: 3767,
        }, {
            period: '2011 Q1',
            sales: 6810,
        }, {
            period: '2011 Q2',
            sales: 5670,
        }, {
            period: '2011 Q3',
            sales: 4820,
        }, {
            period: '2011 Q4',
            sales: 15073,
        }, {
            period: '2012 Q1',
            sales: 10687,
        }, {
            period: '2012 Q2',
            sales: 8432,
        }, {
            period: '2012 Q3',
            sales: 12332,
        }],
        xkey: 'period',
        ykeys: ['sales'],
        labels: ['iPhone'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
    //  morris donut chart on dashboard///


    barchart = Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100
        }, {
            y: '2007',
            a: 75
        }, {
            y: '2008',
            a: 50
        }, {
            y: '2009',
            a: 75
        }, {
            y: '2010',
            a: 50
        }, {
            y: '2011',
            a: 75
        },{
            y: '2012',
            a: 75
        }, {
            y: '2013',
            a: 92
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Total Products'],
        hideHover: 'auto',
        resize: true
    });

});
