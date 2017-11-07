<div>업체 정보    
<div>   
<table border="1">

<tr>
<th><label class="control-label">업체명</label></th>
<td><?=$data->c_name?></td>
</tr>
<tr>
<th><label class="control-label">담당자</label></th>
<td><?=$data->c_manager?></td>
</tr>
<tr>
<th><label class="control-label">휴대폰</label></th>
<td><?=$data->c_phone?></td>
</tr>
<tr>
<th><label class="control-label">메일</label></th>
<td><?=$data->c_mail?></td>
</tr>
<tr>
<th><label class="control-label">펙스</label></th>
<td><?=$data->c_fax?></td>
</tr>
<tr>
<th><label class="control-label">홈페이지</label></th>
<td><?=$data->c_homepage?></td>
</tr>
<tr>
<th><label class="control-label">비고</label></th>
<td><?=$data->c_bigo1?></td>
</tr>
<tr>
<th><label class="control-label" >업체등록일</label></th>
<td><?=$data->c_createdate?></td>
</tr>
</table>
</div>

<form action="<?php echo site_url('/popup/detail_modify');?>" method="post">
<div style="visibility:hidden">
<input type="text" name="c_num" placeholder="업체번호" value = "<?=$data->c_num?>"></input><br>    
</div>
<input class ="btn" type="submit" value="수정"/>
</form>


<!-- <div>    
<a href = "<?php// echo site_url('/popup/detail_modify');?>">수정</a>
</div> -->
</div>