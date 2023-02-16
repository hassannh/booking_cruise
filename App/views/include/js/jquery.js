$('#demo').pagination({
    dataSource: [1, 2, 3, 4, 5, 6, 7, , 195],
    callback: function(data, pagination) {
        // template method of yourself
        var html = template(data);
        dataContainer.html(html);
    }
});







// function template(data) {
//     var html = '';
//     for (var i = 0; i < data.length; i++) {
//         html += '<div>' + data[i] + '</div>';
//     }
//     return html;
// }