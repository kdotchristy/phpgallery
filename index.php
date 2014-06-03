<?php
require 'gallery.php';

$gallery = new Gallery();
$gallery->setPath('img/gallery-folder');
$images = $gallery->getImages(array('jpg'));
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Image Gallery</title>
        <link rel="stylesheet" href="css/gallery.css">
    </head>
    <body>
        <div class="container">
            <?php if($images): ?>
                <div class="gallery cf">
                    <?php foreach($images as $image): ?>
                        <div class="gallery-item">
                            <a href="<?php echo $image['full']; ?>">
                                <img alt="" src="<?php echo $image['thumbs']; ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                There are no Images.
            <?php endif; ?>
        </div>
    </body>
</html>
