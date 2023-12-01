<?php if(empty($news)){ } else {?>
    <?php foreach($news as $news_list){ ?>
        <a href="<?php if(!empty($news_list['dw_n_link'])){ echo $news_list['dw_n_link']; } else{ echo base_url().$news_list['slug']; }?>"><?php echo $news_list['dw_n_title'];?></a>
        <?php if(!empty($news_list['dw_n_image'])){ ?><img src="<?php echo $news_list['dw_n_image'];?>" alt="<?php echo $news_list['dw_n_title'];?>" title="<?php echo $news_list['dw_n_title'];?>"><?php } ?>
        <p><?php echo $news_list['dw_n_description'];?></p>
    <?php } ?>
<?php } ?>