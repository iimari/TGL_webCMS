<body>
<div> 
    <div>
        <h2>유지보수 정보</h2>        
    </div>
    <div>
        <a href="javascript:;" style="text-decoration:none" onclick="window.open(' <?php echo site_url('/popup/insert_company');?>','name','resizable=no width=800 height=800');return false">등록</a>            
        <a href="<?php echo site_url('/Main/site_info'); ?>">엑셀다운</a>
    </div>
    <div>
        <?php if(empty($company_info_data)) {?>
                    <a>자료가 없습니다.</a>                   
                    <?php }else {
                            foreach($company_info_data as $lt){
                                if($lt['c_managerment_check'] == null){
                                    //return true;
                                }else{ ?>                                            
                            <a href="javascript:;" style="text-decoration:none" onclick="window.open(' <?php echo site_url('/popup/manager_detailinfo/'.$lt['c_num'].'/'.$lt['c_homepage'].'');?>','name','resizable=no width=800 height=800');return false">               
                            <div style = "text-decoration:none; border-style:solid">
                                <?php if($lt['c_hosting_check'] == null){ ?>
                                        <div>비활성화/호스팅</div> <?php echo "\t";
                                    }else { ?>
                                        <div>활성화/호스팅</div> <?php echo "\t";
                                    }
                                    if($lt['c_domain_check'] == null){ ?>
                                        <div>비활성화/도메인</div> <?php echo "\t";                   
                                    }else { ?>
                                        <div>활성화/도메인</div> <?php echo "\t";  
                                    }
                                    if($lt['c_managerment_check'] == null){ ?>
                                        <div>비활성화/유지보수</div> <?php echo "\t";
                                    }else { ?>
                                        <div>활성화/유지보수</div> <?php  } ?>            
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
                                </div>
                            </div>
                            </a>
                      <?php }                         
                        }
                    } ?>
    </div>
</div>
<a>////////////////////////////////////////////////////////////////////</a>
<div>
    <div>
        <h2>유지보수 만료</h2>        
    </div>
    <div>
    <?php 
        if(empty($tabledata)) {?>
            <a>자료가 없습니다.</a>                   
            <?php } else {
        foreach($tabledata as $tdata){
            if($tdata['c_managerment_check'] == null){
                //return true;
            }else{ ?>                                            
        <a href="javascript:;" style="text-decoration:none" onclick="window.open(' <?php echo site_url('/popup/manager_detailinfo/'.$tdata['c_num'].'/'.$tdata['c_homepage'].'');?>','name','resizable=no width=800 height=800');return false">               
        <div style = "text-decoration:none; border-style:solid">
            <?php if($tdata['c_hosting_check'] == null){ ?>
                    <div>비활성화/호스팅</div> <?php echo "\t";
                }else { ?>
                    <div>활성화/호스팅</div> <?php echo "\t";
                }
                if($tdata['c_domain_check'] == null){ ?>
                    <div>비활성화/도메인</div> <?php echo "\t";                   
                }else { ?>
                    <div>활성화/도메인</div> <?php echo "\t";  
                }
                if($tdata['c_managerment_check'] == null){ ?>
                    <div>비활성화/유지보수</div> <?php echo "\t";
                }else { ?>
                    <div>활성화/유지보수</div> <?php  } ?>            
            <div>
                <?php  
                    echo $tdata['c_name'];
                    echo "\t";
                    echo $tdata['c_homepage'];            
                    echo "\t";
                    echo $tdata['c_manager'];
                    echo "\t";
                    echo $tdata['c_phone']; 
                ?>                                        
            </div>
        </div>
        </a>
  <?php }   
    }} ?> 
    </div>
</div>
</body>
