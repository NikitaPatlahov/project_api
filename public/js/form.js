$(document).ready(function () {
    $("form").submit(function (event) {
        console.log('test');
        var formData = {
            name: $("#name").val(),
            email: $("#email").val(),
            age: $("#age").val(),
            experience: $("#experience").val(),
            photo: $("#photo").val(),
            salary: $("#salary").val(),
        };

        $.ajax({
            type: "POST",
            url: "/api/person",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (formData) {
            $('#table').append(makeTableRowHtml(formData));
        });

        event.preventDefault();
    });
});

function makeTableRowHtml(data) {
    var html = '';

    html += '<tr>';
    html += '<td>' +
        data.email + '</td>';
    html += '<td><a href="/api/person/61">' +
        data.name + '</a></td>';
    html += '<td>' +
        data.age + '</td>';
    html += '<td>' +
        data.experience + '</td>';
    html += '<td>' +
        data.photo + '</td>';
    html += '<td>' +
        data.salary + '</td>';
    html += '</tr>';

    return html;
}

$(document).ready(function () {
    $("#button").click(function (event) {
        $.getJSON("/api/person",
            function (data) {
                var html = '';
                $.each(data, function (key, value) {
                    html += makeTableRowHtml(value);
                });
                $('#table tbody').empty()
                $('#table').append(html);
            });
    });
});
