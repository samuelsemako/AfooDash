<?php include '../config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Admin Portal</title>
</head>

<body>
    <div class="body-div">
        <div class="body-inner-div">
            <div class="image-div">
                <img src="images/bg.png" alt="Login Image">
            </div>

            <div class="content-div">
                <h1>Reset Password</h1>
                <div class="form-div">
                    <div class="text_field_container" id="emailAddress_container" title="Field for phone number">
                        <script>
                            textField({
                                id: 'emailAddress',
                                title: 'Enter email address'
                            });
                        </script>
                    </div>

                </div>
                <button class="btn"><i class="bi-check"></i>Log-In</button>
                <div class="reset-password-div">
                    <span>Existing User?</span>
                    <a href="<?php echo $websiteUrl ?>/admin/index">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>