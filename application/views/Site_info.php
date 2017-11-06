<?php 
   $h_startdate = 1;
   $d_startdate = 1;
   $m_startdate = null;
?>
<div> 
    <div>
        <h2>사이트관리 입니다.</h2>
        <!-- <?php echo $u_id ?> -->
            <a href="<?php echo site_url('/Main/site_info'); ?>">생성</a>
            <a href="<?php echo site_url('/Main/site_info'); ?>">엑셀다운</a>
            </br>            
            </br>    
        <div>
            <?php foreach($list as $lt){         
                    if($lt['c_hosting_check'] == '0'){
                        ?>
                        <div>비활성화/호스팅</div>
                        <?php
                        echo "\t";
                    }else {
                        ?>
                        <div>활성화/호스팅</div>
                        <?php
                        echo "\t";
                    }
                    if($lt['c_domain_check'] == '0'){
                        ?>
                        <div>비활성화/도메인</div>
                        <?php     
                        echo "\t";                   
                    }else {
                        ?>
                        <div>활성화/도메인</div>
                        <?php                      
                        echo "\t";  
                    }
                    if($lt['c_managerment_check'] == '0'){
                        ?>
                        <div>비활성화/유지보수</div>
                        <?php                        
                        echo "\t";
                    }else {
                        ?>
                        <div>활성화/유지보수</div>                                     
                        <?php                        
                    } 
                ?>            
            <div>
                <?php
                    echo $lt['c_name'];
                    echo "\t";
                    echo $lt['c_homepage'];            
                    echo "\t";
                    echo $lt['c_manager'];
                    echo "\t";
                    echo $lt['c_phone'];            
                ?>
                </br>
                </br>
            </div>

            <?php } ?>
        </div>                
    </div>
</div>

