<?php
$id = get_the_ID();
$audio_meta = get_post_meta($id, 'audio_media', 'true');
$meta_key = get_post_meta($id, 'key', 'true');
$img_src = get_the_post_thumbnail_url($id);
?>
<div class="soundboard">
    <div class="soundboard-container">
        <div class="img-fadder"></div>
        <div class="background-soundboard" style="background: url('<?php echo $img_src ?>');">
            <p><?php echo $meta_key;?></p>
        </div>

    </div>
    <p class="title"><?php the_title();?></p>
    <audio controls src="<?php echo $audio_meta ?>" data-key="<?php echo $meta_key ?>" class="audio">

    </audio>
</div>

