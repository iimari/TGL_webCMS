<form action="<?php echo site_url('/popup/detail_modifysave');?>" method="post" >
<div style="visibility:hidden">
    <input type="text" name="c_num" placeholder="업체명" value = "<?=$mo_data->c_num?>"></input><br>  
</div>
    <input type="text" name="c_name" placeholder="업체명" value = "<?=$mo_data->c_name?>"></input><br>
    <input type="text" name="c_manager" placeholder="담당자" value = "<?=$mo_data->c_manager?>"></input><br>
    <input type="text" name="c_phone" placeholder="휴대폰" value = "<?=$mo_data->c_phone?>"></input><br>
    <input type="text" name="c_mail" placeholder="메일" value = "<?=$mo_data->c_mail?>"></input><br>
    <input type="text" name="c_fax" placeholder="펙스" value = "<?=$mo_data->c_fax?>"></input><br>
    <input type="text" name="c_homepage" placeholder="홈페이지" value = "<?=$mo_data->c_homepage?>"></input><br>
    <input type="text" name="c_bigo1" placeholder="비고1" value = "<?=$mo_data->c_bigo1?>"></input><br>
    <input type="text" name="c_createdate" placeholder="업체등록일" value = "<?=$mo_data->c_createdate?>"></input><br>
    <input class ="btn" type="submit" value="저장"/>
</form>