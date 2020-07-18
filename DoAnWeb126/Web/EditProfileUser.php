<?php 
//cập nhật thông tin người dùng
    include_once __DIR__. "/autoload/autoload.php";
    $id = intval(getInput('id'));
    $user = $db->fetchID("user", $id);
?>
<?php include_once __DIR__."/layouts/header.php" ?>

    <link href="<?php echo public_frontend() ?>css/EditProfileUser.css" rel="stylesheet" /> 
        <title>Trang cá nhân</title> 
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    </head>
<?php include_once __DIR__."/layouts/singleheader.php" ?>
<body> 

</body>
<?php include_once __DIR__."/layouts/footer.php" ?>