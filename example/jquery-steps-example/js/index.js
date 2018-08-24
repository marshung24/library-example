$(document).ready(function() {
  console.log('Run jQuery-steps...');
  // https://github.com/rstaib/jquery-steps/wiki
  $("#example-basic").steps({
          headerTag : "h3",
          bodyTag : "section",
          autoFocus : true,
          enableCancelButton : true,
          onCanceled : function() {
            window.location.href = window.location.href.replace(/\/[^\/]+\/?$/g, '');
          },
          onStepChanged : function (event, currentIndex, priorIndex) {},
          onFinished : function (event, currentIndex) {},
          labels : {
                  finish : '送出儲存', //lang.save2,
                  next : '下一步', //lang.v43,
                  previous : '上一步', //lang.v44,
                  cancel : '取消', //lang.v39
          }
  });
});

console.log('index.js');