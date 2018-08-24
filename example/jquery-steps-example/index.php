<!-- Bootstrap 3.3 Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
<link rel="stylesheet" href="css/jquery.steps.css">


<style>
<!--
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
-->
</style>
<div style="margin-left: auto;margin-right:auto;width:1024px;">
<form class="formContent">
  <div id="example-basic">
    <h3>基本資料</h3>
    <section>
        <?php
        // echo $this->load->view('base_setting', [], true);
        require_once ('view/base_setting.php');
        ?>
        
    </section>
    <h3>規則設定</h3>
    <section>
        <?php
        // $this->load->view('perfect_attendance/adv_setting', [], true);
        require_once ('view/adv_setting.php');
        ?>
    </section>
  </div>
</form>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<!-- Bootstrap 3.3 Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php
// echo $this->layout->js('base_setting');
// echo $this->layout->js('adv_setting');

echo '<script type="text/javascript" src="js/jquery.steps.min.js"></script>';
echo '<script type="text/javascript" src="js/index.js"></script>';
echo '<script type="text/javascript" src="js/base_setting.js"></script>';
echo '<script type="text/javascript" src="js/adv_setting.js"></script>';
?>