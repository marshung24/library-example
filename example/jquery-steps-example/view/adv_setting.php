<div class="form-group">
  <label class="rwd_title col-lg-3 control-label">上班類型 <i id="history" q_no="6"
    class="fa fa-history fa-lg Link color_orange"></i></label>
  <div class="rwd_content col-lg-9">
    <div class="radio radio-inline">
      <input id="q6_a1" type="radio" name="ans[6][v]" value="0"> <label for="q6_a1">固定時間上下班</label>
    </div>
    <div class="radio radio-inline">
      <input id="q6_a2" type="radio" name="ans[6][v]" value="1"> <label for="q6_a2">非固定時間，採排班制</label>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="rwd_title col-lg-3 control-label">打卡 <i id="history" q_no="1"
    class="fa fa-history fa-lg Link color_orange"></i></label>
  <div class="rwd_content col-lg-9">
    <div class="radio radio-inline">
      <input id="q1_a1" type="radio" name="ans[1][v]" value="1"> <label for="q1_a1">需打卡</label>
    </div>
    <div class="radio radio-inline">
      <input id="q1_a2" type="radio" name="ans[1][v]" value="2"> <label for="q1_a2">免打卡 ( 提醒：適用勞基法之人員應備有出勤紀錄 )</label>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="rwd_title col-lg-3 control-label">打卡設備 <i id="history" q_no="2"
    class="fa fa-history fa-lg Link color_orange"></i></label>

  <div class="rwd_content col-lg-9">
    <div class="checkbox" style="display: inline-block;">
      <input id="q2_a1" type="checkbox" name="ans[2][1]" value="1"><label for="q2_a1">NuEIP 線上打卡：GPS（<a
        class="padding-left-5" href="/gps_management">GPS使用者管理</a> 可開放 GPS 打卡）
      </label>
    </div>
    <br>
    <div class="checkbox" style="display: inline-block;">
      <input id="q2_a2" type="checkbox" name="ans[2][2]" value="1"><label for="q2_a2">NuEIP 線上打卡：IP 位址（<a
        class="padding-left-5" href="/ip_setting">IP位址管理</a> 可限制打卡 IP 範圍）
      </label>
    </div>
    <br>
    <div class="checkbox" style="display: inline-block;">
      <input id="q2_a3" type="checkbox" name="ans[2][3]" value="1"><label for="q2_a3">LINE 打卡：GPS</label>
    </div>
    <br>
    <div class="checkbox" style="display: inline-block;">
      <input id="q2_a4" type="checkbox" name="ans[2][4]" value="1"><label for="q2_a4">LINE 打卡：IP 位址</label>
    </div>
    <br>
    <div class="checkbox" style="display: inline-block;">
      <input id="q2_a5" type="checkbox" name="ans[2][5]" value="1"><label for="q2_a5">使用公司打卡設備，如打卡機、門禁系統</label>
    </div>
    <div class="hide radio">
      <input type="radio" id="old_q2_a2" name="ans[2][v]" value="2"> <label for="old_q2_a2">線上打卡(NuEIP線上打卡) (提醒您記得至 <a
        class="padding-left-5" href="/ip_setting">IP位址管理</a> 設定允許打卡的IP位址)
      </label>
    </div>
    <div class="hide radio">
      <input type="radio" id="old_q2_a1" name="ans[2][v]" value="1" checked=""> <label for="old_q2_a1">公司打卡設備（不使用NuEIP線上打卡）（如欲使用GPS打卡，請至
        <a class="padding-left-5" href="/gps_management">GPS使用者管理</a> 設定）
      </label>
    </div>
  </div>
</div>
