<?php echo $type; ?>

<form action="<?php echo site_url('/popup/detail_modifysave/'.$type.'');?>" method="post" >
<div style="display:none">
    <input type="text" name="m_num" placeholder="업체번호" value = "<?=$mo_m_data->m_num?>"></input><br>
    <input type="text" name="c_num" placeholder="업체번호" value = "<?=$mo_c_data->c_num?>"></input><br>
    <input type="text" name="d_num" placeholder="업체번호" value = "<?=$mo_d_data->d_num?>"></input><br>
    <input type="text" name="h_num" placeholder="업체번호" value = "<?=$mo_h_data->h_num?>"></input><br>  
</div>
<table border="1">
<tr>
<th><label class="control-label">업체명</label></th>
<td><input type="text" name="c_name" placeholder="업체명" value = "<?=$mo_c_data->c_name?>"></input></td>   
</tr>
<tr>
<th><label class="control-label">담당자</label></th>
<td><input type="text" name="c_manager" placeholder="담당자" value = "<?=$mo_c_data->c_manager?>"></input></td> 
</tr>
<tr> 
    <th><label class="control-label">휴대폰</label></th>
    <td><input type="text" name="c_phone" placeholder="휴대폰" value = "<?=$mo_c_data->c_phone?>"></input></td> 
</tr>
<tr>
    <th><label class="control-label">메일</label></th>
    <td><input type="text" name="c_mail" placeholder="메일" value = "<?=$mo_c_data->c_mail?>"></input></td> 
</tr>
<tr>
    <th><label class="control-label">펙스</label></th>
    <td><input type="text" name="c_fax" placeholder="펙스" value = "<?=$mo_c_data->c_fax?>"></input></td> 
</tr>
<tr>
   <th><label class="control-label">홈페이지</label></th>
   <td><input type="text" name="c_homepage" placeholder="홈페이지" value = "<?=$mo_c_data->c_homepage?>"></input></td> 
</tr>
<tr>
    <th><label class="control-label">비고</label></th>
    <td><input type="text" name="c_bigo1" placeholder="비고1" value = "<?=$mo_c_data->c_bigo1?>"></input></td> 
</tr>
<?php if($type == 'hosting_detailinfo' or $type == 'detailinfo') {?>
<!-- 호스팅 시작 -->
        <tr>
            <th><label class="control-label" >호스팅업체</label></th>
            <td><input type="text" name="h_name" placeholder="호스티업체" value = "<?=$mo_h_data->h_name?>"></input></td>
        </tr>
        <tr>
            <th><label class="control-label" >호스팅시작일</label></th>
            <td><input type="text" name="h_startdate" placeholder="호스팅시작일" value = "<?=$mo_h_data->h_startdate?>"></input></td>
        </tr>
        <tr>
            <th><label class="control-label" >호스팅종료일</label></th>
            <td><input type="text" name="h_enddate" placeholder="호스팅종료일" value = "<?=$mo_h_data->h_enddate?>"></input></td>
        </tr>
        <tr>
            <th><label class="control-label" >FTP ID</label></th>
            <td><input type="text" name="h_ftpid" placeholder="FTP ID" value = "<?=$mo_h_data->h_ftpid?>"></input></td>
        </tr>
        <tr>
            <th><label class="control-label" >FTP PW</label></th>
            <td><input type="text" name="h_ftppw" placeholder="FTP PW" value = "<?=$mo_h_data->h_ftppw?>"></input></td>
        </tr>
        <tr>
            <th><label class="control-label" >DB ID</label></th>
            <td><input type="text" name="h_dbid" placeholder="DB ID" value = "<?=$mo_h_data->h_dbid?>"></input></td>
        </tr>
        <tr>
            <th><label class="control-label" >DB PW</label></th>
            <td><input type="text" name="h_dbpw" placeholder="DB PW" value = "<?=$mo_h_data->h_dbpw?>"></input></td>
        </tr>
        </tr>
            <th><label class="control-label" >메모</label></th>
            <td><input type="text" name="h_memo" placeholder="메모" value = "<?=$mo_h_data->h_memo?>"></input></td>
        </tr>
<?php } if($type == 'domain_detailinfo' or $type == 'detailinfo' ) {?>
<!-- 호스팅 끝 -->
<!-- 도메인 시작 -->
        <tr>
            <th><label class="control-label" >도메인서비스주소</label></th>
            <td><input type="text" name="d_servicename" placeholder="도메인서비스주소" value = "<?=$mo_d_data->d_servicename?>"></input></td>
        </tr>
            <th><label class="control-label" >도메인 ID</label></th>
            <td><input type="text" name="d_id" placeholder="도메인 ID" value = "<?=$mo_d_data->d_id?>"></input></td>
        </tr>
            <th><label class="control-label" >도메인 PW</label></th>
            <td><input type="text" name="d_pw" placeholder="도메인 PW" value = "<?=$mo_d_data->d_pw?>"></input></td>
        </tr>
            <th><label class="control-label" >도메인 만료일</label></th>
            <td><input type="text" name="d_enddate" placeholder="도메인 만료일" value = "<?=$mo_d_data->d_enddate?>"></input></td>
        </tr>
        </tr>
            <th><label class="control-label" >메모</label></th>
            <td><input type="text" name="d_memo" placeholder="메모" value = "<?=$mo_d_data->d_memo?>"></input></td>
        </tr>
        
        
        <!-- 도메인 끝 -->
        <!-- 유지보수 시작 -->

<?php } if($type == 'manager_detailinfo' or $type == 'detailinfo') {?>
        <tr>
            <th><label class="control-label" >유지보수 시작일</label></th>
            <td><input type="text" name="m_startdate" placeholder="도메인서비스주소" value="<?=$mo_m_data->m_startdate?>"></input></td>
        </tr>
            <th><label class="control-label" >유지보수 종료일</label></th>
            <td><input type="text" name="m_enddate" placeholder="도메인 ID" value="<?=$mo_m_data->m_enddate?>"></input></td>
        </tr>
<?php } ?>
<!-- 유지보수 끝 -->       
</table>

    <input class ="btn" type="submit" value="저장"/>
</form>
<a href="javascript:history.go(-1)">취소</a>
    