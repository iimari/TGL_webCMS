<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<title>업체 추가</title>
</head>
<body>
<?php echo form_open('popup/insert_company'); ?>
    <h5>Company 추가</h5>
        <div class="company_input">
            <a>업체명 : </a><input type="text" name="c_name" value="<?php echo set_value('c_name'); ?>" size="25" />
            <?php echo form_error('c_name'); ?>            
            </br>
            <a>담당자 이름 : </a><input type="text" name="c_manager" value="<?php echo set_value('c_manager'); ?>" size="15" />
            <?php echo form_error('c_manager'); ?>
            </br>            
            </br>
            <a>담당자 전화번호 : </a><input type="text" name="c_tel" value="<?php echo set_value('c_tel'); ?>" size="20" />
            </br>
            <a>담당자 핸드폰 : </a><input type="text" name="c_phone" value="<?php echo set_value('c_phone'); ?>" size="20" />
            </br>
            <a>담당자 이메일 : </a><input type="text" name="c_mail" value="<?php echo set_value('c_mail'); ?>" size="15" />
        </br>                                        
        </div>

        </br>
    
        <h5>도메인</h5>        
        <div>
            <a>도메인 URL : </a><input type="text" name="domain_name" id="textTest" value="<?php echo set_value('domain_name'); ?>" size="15" />
            <?php echo form_error('domain_name'); ?>
            </br>
            <a>도메인 등록업체 URL : </a><input type="text" name="domain_servicename" id="textTest" value="<?php echo set_value('domain_servicename'); ?>" size="15" />
            </br>
            <a>도메인 등록업체 ID  : </a><input type="text" name="domain_id" id="textTest" value="<?php echo set_value('domain_id'); ?>" size="15" />
            </br>
            <a>도메인 등록업체 PW : </a><input type="text" name="domain_pw" id="textTest" value="<?php echo set_value('domain_pw'); ?>" size="15" />                    
            </br>
            <a>도메인 시작일 : </a><input type="text" name="domain_st_d" id="textTest" value="<?php echo set_value('domain_st_d'); ?>" size="15" />            
            <a>도메인 종료일 : </a><input type="text" name="domain_ed_d" value="<?php echo set_value('domain_ed_d'); ?>" size="15" />        
        </div>
        </br>                                
        </br>

    <h5>호스팅</h5>
        
        <div>                    
            <a>호스팅 제공업체 URL : </a><input type="text" name="hosting_name" value="<?php echo set_value('hosting_name'); ?>" size="10" />
            </br>    
            <a>호스팅 제공업체 ID : </a><input type="text" name="hosting_id" value="<?php echo set_value('hosting_id'); ?>" size="10" />
            </br>    
            <a>호스팅 제공업체 PW : </a><input type="text" name="hosting_pw" value="<?php echo set_value('hosting_pw'); ?>" size="10" />
            </br>    
            <a>호스팅 시작일 : </a><input type="text" name="hosting_st_d" value="<?php echo set_value('hosting_st_d'); ?>" size="15" />
            <a>호스팅 종료일 : </a><input type="text" name="hosting_ed_d" value="<?php echo set_value('hosting_ed_d'); ?>" size="15" />
        </br>    
            <a>호스팅 FTP ID : </a><input type="text" name="hosting_ftp_id" value="<?php echo set_value('hosting_ftp_id'); ?>" size="15" />
            <a>호스팅 FTP PW : </a><input type="text" name="hosting_ftp_pw" value="<?php echo set_value('hosting_ftp_pw'); ?>" size="15" />
        </br>  
            <a>호스팅 FTP 특이사항 : </a><input type="text" name="hosting_ftp_memo" value="<?php echo set_value('hosting_ftp_memo'); ?>" size="50" />
        </br>    
            <a>호스팅 DB  ID : </a><input type="text" name="hosting_db_id" value="<?php echo set_value('hosting_db_id'); ?>" size="15" />
            <a>호스팅 DB  PW : </a><input type="text" name="hosting_db_pw" value="<?php echo set_value('hosting_db_pw'); ?>" size="15" />          
        </div>
        </br>                    

        <h5>유지보수</h5>
        
        <div>
            <a>유지보수 시작일 : </a><input type="text" name="managerment_st_d" value="<?php echo set_value('managerment_st_d'); ?>" size="15" />
            <a>유지보수 종료일 : </a><input type="text" name="managerment_ed_d" value="<?php echo set_value('managerment_ed_d'); ?>" size="15" />
        </div>
        </br>
        </br>

<div><input type="submit" value="Submit" /></div>
<a href="#" onclick="window.close(); return false;"><div><input type="button" value="Close" /></div></a>



</form>

</body>
</html>
<script type="text/javascript">

</script>