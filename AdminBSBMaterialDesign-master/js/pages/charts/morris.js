$(function () {
    getMorris('line', 'line_chart');
    getMorris('bar', 'bar_chart');
    getMorris('area', 'area_chart');
    getMorris('donut', 'donut_chart');
});


function getMorris(type, element) {
    if (type === 'donut') {
        Morris.Donut({
            element: element,
            data: [ {
                    label: 'สภาพแวดล้อมในหอพัก',
                    value: 40
                }, {
                    label: 'สภาพแวดล้อมนอกหอพัก',
                    value: 25
                }, {
                    label: 'ที่ปรึกษาหอพัก',
                    value: 10
                },{
                    label: 'สภาพแวดล้อมในห้องพัก',
                    value: 25
                },],
            colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)'],
            formatter: function (y) {
                return y + '%'
            }
        });
    }
}