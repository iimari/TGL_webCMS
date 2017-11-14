<body>
<div> 
    <div>
        <h2>대쉬보드입니다.</h2>
       <!-- 유지보수 상태 -->
        <div>     
           
        <?php
       
        for($i = 1; $i<4; $i++)
        {
            if($i == 1)
            {  
                $list = $manager ?>
                <div> <h2>유지보수 1달이내</h2> </div> 
                <div> 업체 수 : <?php echo count($list); ?> </div>
            <?php 
            }else if($i == 2){
                $list = $domain?>
                <div> <h2>도메인 1달이내</h2> </div>        
                <div> 업체 수 : <?php echo count($list); ?> </div>
            <?php 
            }else 
            { 
                $list = $hosting ?>
                <div> <h2>호스팅 1달이내</h2> </div>
                <div> 업체 수 : <?php echo count($list); ?> </div>
      <?php } ?>

            <?php if(empty($list)) {?>
                <a>자료가 없습니다.</a>                   
                <?php }else {                         
                foreach($list as $lt){ ?>                
                <a href="javascript:;" style="text-decoration:none" onclick="window.open(' <?php echo site_url('/popup/detailinfo/'.$lt['c_num'].'');?>','name','resizable=no width=800 height=800');return false">               
                <div style = "text-decoration:none; border-style:solid">
                    <?php 
                        if($lt['c_hosting_check'] == null)
                        { ?>
                            <div>비활성화/호스팅</div> <?php echo "\t";
                        }else 
                        { ?>
                            <div>활성화/호스팅</div> <?php echo "\t";
                        }
                        if($lt['c_domain_check'] == null)
                        { ?>
                            <div>비활성화/도메인</div> <?php echo "\t";                   
                        }else 
                        { ?>
                            <div>활성화/도메인</div> <?php echo "\t";  
                        }
                        if($lt['c_managerment_check'] == null)
                        { ?>
                            <div>비활성화/유지보수</div> <?php echo "\t";
                        }else 
                        { ?>
                            <div>활성화/유지보수</div>                                     
                  <?php } ?>            
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
            }} ?>
        </div>   
           <!-- 유지보수 끝 -->
        </div>
    </div>
</div>
</body>
