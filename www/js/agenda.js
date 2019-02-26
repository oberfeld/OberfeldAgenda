$(document).ready(function () {
    var datePickerConfig = {
        locale: 'de-de',
        uiLibrary: 'bootstrap4',
        format: 'dd.mm.yyyy'
    };

    $('#input_fromdate').datepicker(datePickerConfig);
    $('#input_todate').datepicker(datePickerConfig);
});
