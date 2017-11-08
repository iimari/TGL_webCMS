<body>
<?php 
   $h_startdate = 1;
   $d_startdate = 1;
   $m_startdate = null;
?>
<div> 
    <div>
        <h2>사이트관리 입니다.</h2>
        <!-- <?php echo $u_id ?> -->
            <!-- <a href="<?php echo site_url('/Main/site_info'); ?>">등록</a> -->            
            <a href="javascript:;" style="text-decoration:none" onclick="window.open(' <?php echo site_url('/popup/insert_company');?>','name','resizable=no width=800 height=800');return false">등록</a>
            <!-- <a href="<?php echo site_url('/Main/site_info'); ?>">등록</a>     -->
            <a href="<?php echo site_url('/Main/site_info'); ?>">엑셀다운</a>
            </br>            
            </br>    
        <div>
            <?php if(empty($list)) {?>
                <a>자료가 없습니다.</a>                   
                <?php }else {                         
                foreach($list as $lt){ ?>                
                <a href="javascript:;" style="text-decoration:none" onclick="window.open(' <?php echo site_url('/popup/detailinfo/'.$lt['c_num'].'');?>','name','resizable=no width=800 height=800');return false">               
                <div style = "text-decoration:none; border-style:solid">
                    <?php 
                        if($lt['c_hosting_check'] == null){
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
                        if($lt['c_domain_check'] == null){
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
                        if($lt['c_managerment_check'] == null){
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
                </div>
                </a>
            <?php }
            } ?>
        </div>                
    </div>
</div>
</body>
