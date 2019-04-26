<?php include_once 'functions.php' ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">Company Logo</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <nav class="nav flex-column">
                <a class="nav-link active" href="#">Video</a>
                <a class="nav-link" href="#">Photo</a>
                <a class="nav-link" href="#">Documents</a>
            </nav>
        </div>
        <div class="col-9">
            <div class="container">
                <div class="row">
                    <?php
                    $category_folder = 'video';
                    $path = BASE_PATH.'/'.UPLOAD.'/'.$category_folder;
                    $videos = getFilesInPath($path);
                    foreach ($videos as $f){
                        $is_link = is_link($path . '/' . $f);
                        $img = $is_link ? 'fa fa-file-text-o' : fm_get_file_icon_class($path . '/' . $f);
                        $file_url = BASE_UPLOAD_URL.'/'.$category_folder.'/'.$f;
                        $thumb_url = getVideoThumb($is_link);
                    ?>
                        <div class="col-sm-4">
                            <div class="imagebox">
                                <div class="filename">
                                    <a href="<?php echo $file_url ?>" title="File info">
                                        <img src="<?php echo $thumb_url ?>"  class="category-banner img-responsive">
                                        <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
                                        <i class="<?php echo $img ?>"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>