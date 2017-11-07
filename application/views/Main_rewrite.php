<form action="<?php echo site_url('/popup/detail_modifysave');?>" method="post" >
<div style="visibility:hidden">
    <input type="text" name="c_num" placeholder="업체번호" value = "<?=$mo_data->c_num?>"></input><br>  
</div>
<table border="1">
<tr>
<th><label class="control-label">업체명</label></th>
<td><input type="text" name="c_name" placeholder="업체명" value = "<?=$mo_data->c_name?>"></input></td>   
</tr>
<tr>
<th><label class="control-label">담당자</label></th>
<td><input type="text" name="c_manager" placeholder="담당자" value = "<?=$mo_data->c_manager?>"></input></td> 
</tr>
<tr> 
    <th><label class="control-label">휴대폰</label></th>
    <td><input type="text" name="c_phone" placeholder="휴대폰" value = "<?=$mo_data->c_phone?>"></input></td> 
</tr>
<tr>
    <th><label class="control-label">메일</label></th>
    <td><input type="text" name="c_mail" placeholder="메일" value = "<?=$mo_data->c_mail?>"></input></td> 
</tr>
<tr>
    <th><label class="control-label">펙스</label></th>
    <td><input type="text" name="c_fax" placeholder="펙스" value = "<?=$mo_data->c_fax?>"></input></td> 
</tr>
<tr>
   <th><label class="control-label">홈페이지</label></th>
   <td><input type="text" name="c_homepage" placeholder="홈페이지" value = "<?=$mo_data->c_homepage?>"></input></td> 
</tr>
<tr>
    <th><label class="control-label">비고</label></th>
    <td><input type="text" name="c_bigo1" placeholder="비고1" value = "<?=$mo_data->c_bigo1?>"></input></td> 
</tr>
<tr>
    <th><label class="control-label" >업체등록일</label></th>    
    <td><input type="text" name="c_createdate" placeholder="업체등록일" value = "<?=$mo_data->c_createdate?>"></input></td> 
</tr>
</table>

    <input class ="btn" type="submit" value="저장"/>
</form>