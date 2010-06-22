// jquery
if ('jQuery' in window){
  jQuery.noConflict();
  window.j = jQuery;
}

// mootools
window.$ = document.id;

window.addEvent('domready', function () {

  j('input[type=date]').live('focus', function(){
    this.addCalendar().show();
  });



  // add datapicker to input type date
  var inputsDate = $$('input.input_date');

  inputsDate.each(function (inputDate) {
    inputDate.addCalendar();
  })


  var inputsDateTime = $$('input.input_date-time');
  inputsDateTime.each(function (inputDate) {
    inputDate.addCalendar();

    inputDate.getNext().addEvents({
      blur: function (ev) {
        var dates = inputDate.get('value').split(' ');
        inputDate.set('value', dates[0] + ' ' + this.get('value'));
      }
    })

    new InputMask.Time(inputDate.getNext(), {
      onError: function(element){
        element.highlight('#f88');
      }
    });
  })


})