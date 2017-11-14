<div><h3>도메인업체정보</h3>   
<div>   
<table border="1">
<tr>
<th><label class="control-label">업체명</label></th>
<td><?=$c_data->c_name?></td>
</tr>
<tr>
<th><label class="control-label">담당자</label></th>
<td><?=$c_data->c_manager?></td>
</tr>
<tr>
<th><label class="control-label">휴대폰</label></th>
<td><?=$c_data->c_phone?></td>
</tr>
<tr>
<th><label class="control-label">메일</label></th>
<td><?=$c_data->c_mail?></td>
</tr>
<tr>
<th><label class="control-label">홈페이지</label></th>
<td><?=$c_data->c_domain?></td>
</tr>
<tr>
<th><label class="control-label">비고</label></th>
<td><?=$c_data->c_memo?></td>
</tr>
<tr>
<th><label class="control-label" >도메인서비스주소</label></th>
<td><?=$d_data->d_servicename?></td>
</tr>
<th><label class="control-label" >도메인 ID</label></th>
<td><?=$d_data->d_id?></td>
</tr>
<th><label class="control-label" >도메인 PW</label></th>
<td><?=$d_data->d_pw?></td>
</tr>
<th><label class="control-label" >도메인관리만료일</label></th>
<td><?=$d_data->d_enddate?></td>
</tr>
</table>
</div>

<form action="<?php echo site_url('/popup/detail_modify/'.$type.'');?>" method="post">
<div style="visibility:hidden">
<input type="text" name="c_num" placeholder="업체번호" value = "<?=$c_data->c_num?>"></input><br>    
</div>
<input class ="btn" type="submit" value="정보수정"/>
</form>

<a href="#" onclick="window.close(); return false;">닫기</a>

<!-- <div>    
<a href = "<?php// echo site_url('/popup/detail_modify');?>">수정</a>
</div> -->
</div>