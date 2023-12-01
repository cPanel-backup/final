
<?php if(!empty($newsinfo[0]['dw_n_title'])){ echo $newsinfo[0]['dw_n_title']; } ?><br>
<?php if(!empty($newsinfo[0]['dw_n_date'])){ echo date('d.M.Y',strtotime($newsinfo[0]['dw_n_date'])); }?><br>
<?php if(!empty($newsinfo[0]['dw_n_venue'])){ echo $newsinfo[0]['dw_n_venue']; } ?><br>
<?php if(!empty($newsinfo[0]['dw_n_description'])){ echo $newsinfo[0]['dw_n_description']; } ?><br>
<?php if(!empty($newsinfo[0]['dw_n_image'])){ echo $newsinfo[0]['dw_n_image']; } ?><br>

<?php if(empty($recentnews)){ } else {?>
    <?php foreach($recentnews as $recentnews_list){ ?>
        <a href="<?php if(!empty($recentnews_list['dw_n_link'])){ echo $recentnews_list['dw_n_link']; } else{ echo base_url().$recentnews_list['slug']; }?>"><?php echo $recentnews_list['dw_n_title'];?></a>
        <?php if(!empty($recentnews_list['dw_n_image'])){ ?><img src="<?php echo $recentnews_list['dw_n_image'];?>" alt="<?php echo $recentnews_list['dw_n_title'];?>" title="<?php echo $recentnews_list['dw_n_title'];?>"><?php } ?>
        <p><?php echo $recentnews_list['dw_n_description'];?></p>
    <?php } ?>
<?php } ?>