var arr = [];
$.getJSON("searchBar.json", function (data) {
    $.each(data, function (key, value) {
        if ($.inArray(value.label, arr) === -1) {
            console.log("ui");
            arr.push(value.label)
        }
    })
});
$("#searchBar").autocomplete({
    source: arr
});