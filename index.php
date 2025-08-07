<?php include 'config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> </title>
</head>

<body>
    <div class="body-div">
        <header>
            <div class="header-inner">
                <div class="logo-div">
                    <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png" alt="logo">
                </div>
                <button class="btn">Admin Login <i class="bi-arrow-right"></i></button>
            </div>
        </header>

        <div class="body-content-div">
            <div class="body-inner">
                <div class="text-div">
                    <h1>
                        <span>Welcome to Afotech</span><br>
                        Student Management Portal
                    </h1>
                    <div class="button-div">
                        <button class="btn">Admin Login <i class="bi-arrow-right"></i></button>
                        <button class="btn transparent">Visit website <i class="bi-box-arrow-right"></i></button>
                    </div>
                </div>

                <div class="image-div">
                    <img src="<?php echo $websiteUrl ?>/all-images/body-pix/bg.png" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>