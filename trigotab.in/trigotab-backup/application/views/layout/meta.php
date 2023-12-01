<!--Webmaster code:-->
<meta name="google-site-verification" content="r1vHocNlY8HpvyN4K1GGnb95W9USTt2Hmk0oR4Wf6os" />
<?php if(empty($seo)){	?>
<title>TrigoTab | Hetero Healthcare Ltd.</title>
<meta name="description" content="No Data"/>
<meta name="keywords" content="" />
<meta name="url" content="" />
<meta name="copyright" content="" />
<link rel="canonical" href="" />
<?php }else{ ?>
<title><?php echo $seo[0]->seo_title; ?></title>
<meta name="description" content="<?php echo $seo[0]->seo_description; ?>"/>
<meta name="keywords" content="<?php echo $seo[0]->seo_keywords; ?>" />
<meta name="url" content="<?php echo base_url();?><?php echo $this->uri->segment(1);?>" />
<meta name="copyright" content="<?php echo $seo[0]->seo_metacopyright; ?>" />
<link rel="canonical" href="<?php echo base_url();?><?php echo $this->uri->segment(1);?>" />
<?php } ?>