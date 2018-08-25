/*! 
 * app Steps bata 0.1.1
 * 
 * 因作者停止開發，且需對此套件做適用性調整，特此對該套件重新包裝
 * 
 * Dependence: jQuery Steps v1.1.0 - 09/04/2014
 * 
 * Usage： $(selector).appsteps(options);
 * 
 */
;
(function(window, $, undefined) {
  var constructor,existingConstructor,name;
  
  $['myname'] = $['myname'] || {};
  existingConstructor = $['myname']['func'];
  
  
  constructor = $['myname']['func'] = function () {
    console.log('constructor');
    console.log(this);
  }
  
  
  $.widget.bridge( 'func', constructor );
  
  /**
   * Represents a jQuery wizard plugin.
   * 
   * @class steps
   * @constructor
   * @param [method={}]
   *          The name of the method as `String` or an JSON object for initialization
   * @param [params=]*
   *          {Array} Additional arguments for a method call
   * @chainable
   */
  $.fn.appsteps = function(method) {
    console.log(this);
    if ($.fn.appsteps[method]) {
      /* 執行一般 Mothed */

      return $.fn.appsteps[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else {
      /* 執行初始化 */

      // 重新包裝 onStepChanged
      if (method && method.onStepChanged) {
        var oOnStepChanged = method.onStepChanged;
        method.onStepChanged = function(event, currentIndex, priorIndex) {
          // 設定tab的active標籤
          $(event.target).find('li.current').addClass('active').siblings().removeClass('active');

          // 執行原定 onStepChanged
          oOnStepChanged(event, currentIndex, priorIndex);
        }
      }

      // 重新包裝 onInit
      if (method && method.onInit) {
        var oOnIinit = method.onInit;
        method.onInit = function(event, currentIndex) {
          // 設定tab的active標籤
          $(event.target).find('.steps.clearfix').removeClass('steps').find('ul').addClass('nav nav-tabs');

          // 變更tab樣式 原生 => bootstrap
          $(event.target).find('li.current').addClass('active').siblings().removeClass('active');

          // 執行原定 onInit
          oOnIinit(event, currentIndex);
        }
      }

      // Modify Global CSS for jQuery-steps
      var styleTag = $("<style>/* Tab style changed to bootstrap style, need to hide redundant data */\n.wizard .current-info {display : none;}\n/* jquery-steps set height by content */\n.wizard {overflow: visible;}\n/* jquery-steps set height by content */\n.wizard>.content {overflow: visible;position: static;min-height: 200px;height:auto;}\n/* jquery-steps set height by content */\n.wizard>.content>.body {position: static;height:auto;}\n/* jquery-steps set height by content */\n.wizard>.actions {position: static;max-height: 36px;}\n</style>");
      $('html > head').append(styleTag);

      $(this).steps(method);
    }
  };

  // Prototype function alias
  $.extend($.fn.appsteps, $.fn.steps);

  $.widget.bridge( name, constructor );
  
  
})(window, jQuery);
