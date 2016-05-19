var barchart, linechart;;
$(function () {
    //  morris Area chart on dashboard///
    linechart = Morris.Area({
        element: 'morris-area-chart',
        data: [{}],
        xkey: 'period',
        ykeys: ['sales'],
        labels: ['Sales'],
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
