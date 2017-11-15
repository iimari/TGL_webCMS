<div>
<h1>관리내역 수정</h1>
</div>
<form action="<?php echo site_url('/popup/managerment_modifysave/'.$id.'/'.$homepage.'/'.$mo_m_data->mh_num);?>" method="post">
<div style="visibility:hidden">
    <input type="text" name="id" placeholder="게시글번호" value = "<?=$id?>"></input><br>
    <input type="text" name="homepage" placeholder="홈페이지" value = "<?=$homepage?>"></input><br>
    <input type="text" name="mh_num" placeholder="게시글번호" value = "<?=$mo_m_data->mh_num?>"></input><br>
    <input type="text" name="mh_homepage" placeholder="홈페이지" value = "<?=$mo_m_data->mh_domain?>"></input><br>
</div>

<table border="1">
<tr>
<th><label class="control-label" >작성자</label></th>
<th><textarea name="mh_worker" cols="70" rows="1">
<?=$mo_m_data->mh_worker?></textarea></th>
</tr>

<tr>
<th><label class="control-label">내용</label></th>
<th><textarea name="mh_text" cols="70" rows="20">
<?=$mo_m_data->mh_text?></textarea></th>
</tr>
</table>
<input class ="btn" type="submit" value="등록"/>
<a href="javascript:history.go(-1)">취소</a>

</form>

