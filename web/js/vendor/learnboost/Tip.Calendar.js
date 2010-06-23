Tip.Calendar = new Class({

  Extends: Tip,

  options: {

  },

  initialize: function(element, options){
    this.setOptions(options);
    var self = this;

    this.calendar = new Calendar({
      cssClassName:'calendar-picker',
      injectTo: false,
      formatTitle: '%B %Y',
      nav: {
        textBack: '&nbsp;',
        textNext: '&nbsp;'
      }
    });

    this.parent(this.calendar.el, options);

    this.calendar.addEvents({
      selectedDay: function (el, date, changeDay) {
        element.set('value', date.format('%Y-%m-%d').toString());
        self.hide();
      }.bind(this),
      closed: function () {
        self.hide();
      }
    })
  }
});


Element.implement({
  addCalendar: function(options){
    var overlay = new Tip.Calendar(this, $merge({
      injectTo: [this.getParent(), 'bottom'],
      'class': 'tip tip-calendar',
      position: {
        relativeTo: this,
        position: 'upperRight',
        edge: 'bottomLeft'
      }
    }, options));

    this.store('tip:overlay', overlay);

    return overlay;
  }
});