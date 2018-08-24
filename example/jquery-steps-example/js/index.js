$(document).ready(function() {
  
  console.log('Run jQuery-steps...');
  
  // http://www.jquery-steps.com/GettingStarted
  // https://github.com/rstaib/jquery-steps/wiki
  $("#example-basic").steps({
          // 標題標籤
          headerTag : "h3",
          // 內容標籤
          bodyTag : "section",
          autoFocus : true,
          // 啟用取消按鈕
          enableCancelButton : true,
          // 取消事件
          onCanceled : function() {
            // 跳轉到Controller
            window.location.href = window.location.href.replace(/(http[s]?)\:\/\/([^\/]+)\/?([^\/]+)\/?(.*)/g, '$1://$2/$3');
          },
          // 換頁事件
          onStepChanged : function (event, currentIndex, priorIndex) {
            // 設定tab的active標籤
            $(event.target).find('li.current').addClass('active').siblings().removeClass('active');
            
            console.log('Run onStepChanged...');
          },
          // 送出事件
          onFinished : function (event, currentIndex) {
            console.log('Run onFinished...');
          },
          onInit : function (event, currentIndex) {
            // 設定tab的active標籤
            $(event.target).find('li.current').addClass('active').siblings().removeClass('active');
            // 變更tab樣式 原生 => bootstrap
            $(event.target).find('.steps.clearfix').removeClass('steps').find('ul').addClass('nav nav-tabs');
            
            console.log('onInit...');
          },
          // 按鈕文字
          labels : {
                  finish : '送出儲存', //lang.save2,
                  next : '下一步', //lang.v43,
                  previous : '上一步', //lang.v44,
                  cancel : '取消', //lang.v39
          }
  });
});

console.log('index.js');