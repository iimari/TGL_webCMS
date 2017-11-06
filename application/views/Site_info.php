<div> 
    <div>
        <h2>사이트관리 입니다.</h2>
        <!-- <?php echo $u_id ?> -->
        <a href="<?php echo site_url('/Main/site_info'); ?>">생성</a>
        <a href="<?php echo site_url('/Main/site_info'); ?>">엑셀다운</a>
        </br>        
        <div>        
            <?php 
                foreach($list as $lt)
                {
                    $h_startdate = 0;
                    $d_startdate = 0;
                    $m_startdate = null;
                    ?>
                    
                    <a href="javascript:;" style="text-decoration:none" 
                    onclick="window.open(' <?php echo site_url('/popup/detailinfo/'.$lt['c_num'].'');?>',
                    'name','resizable=no width=800 height=800');return false">
                 
                    <div style = "text-decoration:none; border-style:solid">
                    <?php 
                   
                    if($h_startdate == null)
                    {
                        echo '호스팅/비활성화';                
                        echo "\t";
                    }else {
                        echo '호스팅';                
                        echo "\t";
                    }
                    if($d_startdate == null)
                    {
                        echo '도메인/비활성화';
                        echo "\t";
                    }else {
                        echo '도메인';                
                        echo "\t";
                    }
                    if($m_startdate == null)
                    {
                        echo '유지보수/비활성화';
                        echo "\t";
                    }else {
                        echo '유지보수';                
                        echo "\t";
                    }
                    ?>

                    <?php
                    echo $lt['c_name'];
                    echo "\t";
                    echo $lt['c_homepage'];            
                    echo $lt['c_manager'];
                    echo "\t";
                    echo $lt['c_phone'];            
                    ?>
                    </br>
                    </br>
                    
                    <?php
                    }
                        
                    ?>                    
            </div> 
            </a>                   
        </div>
        </div>
</div>

