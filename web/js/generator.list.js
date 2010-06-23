window.addEvent('domready', function () {

  if($$('.admin-list')) {
    var list = new Generator.List();
  }
})


/*
 * Generator class.
 */
Generator = new Class({
  Implements: [Options, Events],

  options: {

  },

  initialize: function(el, options){
    this.init();
  },

  init: function () {
    this.elems = {};
    this.mask = new mdMask();
  }
});



/*
 * Generator.List class.
 */
Generator.List = new Class({
  Implements: [Options, Events],
  Extends: Generator,

  options: {
    cssNames: {
      list: {
        container: 'admin-list'
      }
    }
  },

  initialize: function(el, options){
    this.setOptions(options);
    this.element = $$(el ? el : $$('.' + this.options.cssNames.list.container))[0];

    this.parent();
  },

  init: function () {
    this.parent();
    this.retrieveElements();

    this.sfAdminBar();
  },

  retrieveElements: function () {
    this.elems.adminBar = {el: this.element.getElement('.sf-admin-bar')};
  },

  sfAdminBar: function () {
    var self = this;
    
    // links
    this.elems.adminBar.el.addEvents({
      'click:relay(nav a)': function (ev) {
        self[this.get('class').camelCase()](ev);
      }
    })

    // filter
    this.elems.adminBar.filter = this.elems.adminBar.el.getElement('.sf-admin-filter')
      .dispose()
      .setStyle('display', 'block');

    this.elems.adminBar.filter.getElement('.filter-cancel').addEvent('click', function () {
      self.hideFilter();
    })
    // end filter
  },

  /* menu methods */
  optFilter: function (ev) {
    this.mask.show();
    //console.debug ("this.mask.el -> ", this.mask.el);
    this.elems.adminBar.filter.inject(this.mask.el);
  },
  hideFilter: function () {
    this.elems.adminBar.filter.dispose();
    this.mask.hide();
  }
  /* end menu methods */

});



var mdMask = new Class({
  Implements: Options,

  options: {
    injectTo: ['body', 'bottom'],
    hideOnClick: true,
    css: {
      'z-index': 1000,
      'class': 'md-mask'
    }
  },

  initialize: function(options){
    this.setOptions(options);
    this.elems = {};

    this.markup();

    if(this.options.hideOnClick) this.setEvents();
  },

  markup: function () {
    this.el = new Element('div',{'class': this.options.css['class'],
      styles: {
        'z-index': this.options.css['z-index']
      }
    });
  },

  setEvents: function () {
    var self = this;
    this.el.addEvents({
      click: function (ev) {
        if(ev.target === self.el) self.hide();
      }  
    })
  },

  show: function () {
    this.el.inject($$(this.options.injectTo[0])[0], this.options.injectTo[1]);
  },

  hide: function () {
    this.el.dispose();
  }
})