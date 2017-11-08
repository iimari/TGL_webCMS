<div>
    <a href="<?php echo site_url('/login/sign_out') ?>">Logout</a>
</div>
<?php echo '메뉴 입니다.' ?>
<ul>
    <li><a href="<?php echo site_url('/Main/index') ?>">대시보드<a></li>
    <li><a href="<?php echo site_url('/Main/site_info') ?>">사이트관리<a></li>
    <ul>
        <li><a href="<?php echo site_url('/Main/managerment_info') ?>">유지보수<a></li>
        <li><a href="<?php echo site_url('/Main/domain_info') ?>">도메인<a></li>
        <li><a href="<?php echo site_url('/Main/hosting_info') ?>">호스팅<a></li>
    </ul>
</ul>
