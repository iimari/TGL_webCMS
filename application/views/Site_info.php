<div> 
    <div>
        <h2>사이트관리 입니다.</h2>
        <!-- <?php echo $u_id ?> -->
        <a href="<?php echo site_url('/Main/site_info'); ?>">생성</a>
        <a href="<?php echo site_url('/Main/site_info'); ?>">엑셀다운</a>
        <div>
        </br>
        <?php 
        foreach($list as $lt)
        {
            $h_startdate = 0;
            $d_startdate = 0;
            $m_startdate = null;

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
            
            <div>
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
        <div>
    </div>
</div>

