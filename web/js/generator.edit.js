window.addEvent('domready', function () {
  // add datapicker to input type date
  var inputsDate = $$('input.input_date');

  inputsDate.each(function (inputDate) {
    inputDate.addCalendar();
  })
})