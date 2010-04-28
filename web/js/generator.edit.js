window.addEvent('domready', function (ev) {
  //var inputsDate = $$('input[type="text"]');
  var inputsDate = $$('input.input_date');

  inputsDate.each(function (inputDate) {
    console.debug ("inputDate -> ", inputDate);
    inputDate.addCalendar()
  })
})