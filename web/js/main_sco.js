window.onload = function () {

  'use strict';

  var Viewer = window.Viewer;
  var console = window.console || { log: function () {} };
  var pictures = document.querySelector('.docs-pictures');

  var options = {
        // inline: true,
        url: 'data-original',
        ready:  function (e) {
          console.log(e);
          var txt = e.explicitOriginalTarget.attributes[1].nodeValue;
          console.log(txt);
          $('#nameImage').val(txt);
         
        },
        show:  function (e) {
          console.log(e.type);
        },
        shown:  function (e) {                  
          console.log(e.type);
        },
        hide:  function (e) {
          console.log(e.type);
        },
        hidden:  function (e) {
          console.log(e.type);
        },
        view:  function (e) {
          console.log(e.type, e.detail.index);
        },
        viewed:  function (e) {
          console.log(e.type, e.detail.index);
          this.viewer.zoomTo(0.64);
        }
      };
  var viewer;

  function toggleButtons(mode) {
    var targets;
    var target;
    var length;
    var i;


  }

  function addEventListener(element, type, handler) {
    if (element.addEventListener) {
      element.addEventListener(type, handler, false);
    } else if (element.attachEvent) {
      element.attachEvent('on' + type, handler);
    }
  }

  addEventListener(pictures, 'ready', function (e) {
    console.log(e.type);
    console.log('readyyy');
  });
  addEventListener(pictures, 'show', function (e) {
    console.log(e.type);
    console.log('showww');
  });
  addEventListener(pictures, 'shown', function (e) {
    console.log(e.type);
    console.log('shownnn');
  });
  addEventListener(pictures, 'hide', function (e) {
    console.log(e.type);
    console.log('hideee');
  });
  addEventListener(pictures, 'hidden', function (e) {
    console.log(e.type);
    console.log('hiddennnn');
  });
  addEventListener(pictures, 'view', function (e) {
    console.log(e.type, e.detail.index);
  });
  addEventListener(pictures, 'viewed', function (e) {
    console.log(e.type, e.detail.index);
  });
  viewer = new Viewer(pictures, options);



};
