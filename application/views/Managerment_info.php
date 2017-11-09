<div><h3>유지보수업체정보</h3>   
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

<form action="<?php echo site_url('/popup/detail_modify');?>" method="post">
<div style="visibility:hidden">
<input type="text" name="c_num" placeholder="업체번호" value = "<?=$c_data->c_num?>"></input><br>    
</div>
<input class ="btn" type="submit" value="수정"/>
</form>

<a href="#" onclick="window.close(); return false;">닫기</a>


</div>

<div><h3>관리내역</h3>    
<div>
<table border="1">
<tr>
<th><label class="control-label" >업체 홈페이지</label></th>
<th><label class="control-label" >제목</label></th>
<th><label class="control-label" >관리내역 작성내용</label></th>
<th><label class="control-label" >관리내역 작성자</label></th>
<th><label class="control-label" >관리내역 작성시간</label></th>
</tr>
<?php foreach($mh_data as $mh) { ?>

<tr>
<td><?=$mh->mh_homepage?></td>
<td><a href= "<?php echo site_url('/popup/managerment_modify/'.$c_data->c_num.'/'.$c_data->c_homepage.'/'.$mh->mh_num);?>"><?=$mh->mh_title?></td>
<td><?=$mh->mh_text?></td>
<td><?=$mh->mh_worker?></td>
<td><?=$mh->mh_createdate?></td>
</tr>
<?php } ?>
</table>

<form action="<?php echo site_url('/popup/managerment_insert/'.$c_data->c_num.'/'.$c_data->c_homepage);?>" method="post">
<table border="1">
<tr>
<th><label class="control-label" >작성자</label></th>
<th><textarea name="mh_worker" cols="70" rows="1" ></textarea></th>
</tr>
<tr>
<th><label class="control-label" >제목</label></th>
<th><textarea name="mh_title" cols="70" rows="2" ></textarea></th>
</tr>
<tr>
<th><label class="control-label">내용</label></th>
<th><textarea name="mh_text" cols="70" rows="20"></textarea></th>
</tr>
</table>
<input class ="btn" type="submit" value="등록"/>
</form>



