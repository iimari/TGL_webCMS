<div><h3>업체정보</h3>    
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
<th><label class="control-label">내선</label></th>
<td><?=$c_data->c_tel?></td>
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
<th><label class="control-label">유지보수시작일</label></th>
<td><?=$m_data->m_startdate?></td>
</tr>
<tr>
<th><label class="control-label">유지보수마감일</label></th>
<td><?=$m_data->m_enddate?></td>
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
<th><label class="control-label" >도메인관리 시작일</label></th>
<td><?=$d_data->d_startdate?></td>
</tr>
</tr>
<th><label class="control-label" >도메인관리 만료일</label></th>
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