<div>호스팅 업체 정보    
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
<th><label class="control-label">펙스</label></th>
<td><?=$c_data->c_fax?></td>
</tr>
<tr>
<th><label class="control-label">홈페이지</label></th>
<td><?=$c_data->c_homepage?></td>
</tr>
<tr>
<th><label class="control-label">비고</label></th>
<td><?=$c_data->c_bigo1?></td>
</tr>
<tr>
<th><label class="control-label" >호스팅업체</label></th>
<td><?=$h_data->h_name?></td>
</tr>
<tr>
<th><label class="control-label" >호스팅시작일</label></th>
<td><?=$h_data->h_startdate?></td>
</tr>
<tr>
<th><label class="control-label" >호스팅종료일</label></th>
<td><?=$h_data->h_enddate?></td>
</tr>
<tr>
<th><label class="control-label" >FTP ID</label></th>
<td><?=$h_data->h_ftpid?></td>
</tr>
<tr>
<th><label class="control-label" >FTP PW</label></th>
<td><?=$h_data->h_ftppw?></td>
</tr>
<tr>
<th><label class="control-label" >DB ID</label></th>
<td><?=$h_data->h_dbid?></td>
</tr>
<tr>
<th><label class="control-label" >DB PW</label></th>
<td><?=$h_data->h_dbpw?></td>
</tr>
</table>
</div>

<form action="<?php echo site_url('/popup/detail_modify');?>" method="post">
<div style="visibility:hidden">
<input type="text" name="c_num" placeholder="업체번호" value = "<?=$c_data->c_num?>"></input><br>    
</div>
<input class ="btn" type="submit" value="수정"/>
</form>

<a href="#" onclick="window.close(); return false;">닫기</a>

<!-- <div>    
<a href = "<?php// echo site_url('/popup/detail_modify');?>">수정</a>
</div> -->
</div>