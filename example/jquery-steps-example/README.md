套件：jQuery-steps
===

:::info
- 時間：2018-08-23
- 作者：洪育昇 Mars.Hung
- 主題：在本系統已存在套件中發掘可用套件，並活用它
:::

# 說明
深度挖掘本系統使用中程式的利用方式

# 套件資訊
## 官方網站
- http://www.jquery-steps.com/
- https://github.com/rstaib/jquery-steps/wiki

## 套件範例
- http://www.jquery-steps.com/Examples

## 相依性
- jQuery - Version 1.9.0 or higher
- jQuery.cookie - Tested with Version 1.3.1 (required if saveState is set to true)

# 範例
## 檔案結構
- index.php
  - css
    - jquery.steps.css
  - js
    - adv_setting.js
    - base_setting.js
    - index.js
    - jquery.steps.min.js
  - view
    - adv_setting.php
    - base_setting.php
## 範例網址
- https://marshung.dev.nueip.com/jquery-steps-example/

## 要點
- 套件將高度限死，解開限制方式在index.php中的css設定
  ```css
  /* jquery-steps set height by content */
  .wizard {
      overflow: visible;
  }
  /* jquery-steps set height by content */
  .wizard>.content {
      overflow: visible;
      position: static;
      min-height: 200px;
  }
  /* jquery-steps set height by content */
  .wizard>.content>.body {
      position: static;
      height:auto;
  }
  ```
- \<form\>需設定於\<div id="example-basic"\>\</div\>外部，或\<section\>內部
- 各自頁面的css, javascript可崁在客自的view中
