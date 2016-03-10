<?php $post=array( 'date'=> '27 Jan 2014', 'message' => 'Random Post haha!', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'); ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta charset="utf-8"> 2503ICT Web Programming Lab 2
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
</head>

<body>
    <div class="container-fluid">
        <?php echo "Random Number: " . rand(1,10) ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/lab2/">Social Network</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="/lab2/photos">Photos</a></li>
                    <li><a href="/lab2/friends">Friends</a></li>
                    <li><a href="/lab2/login">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="col-sm-3">
            <img src="http://static.sify.com/cms/image/mhysvMeiiahsi.jpg" width="200px" height="200px">
            <h4>Abdul Noll</h4>
            <br>
            <br>
        </div>
        <div class="col-sm-4 text-center">
            <div class="card card-block">
                <h4 class="card-title"><img src="http://www.smh.com.au/ffximage/2005/10/24/shannon_wideweb__430x355,0.jpg" width="125px" height="125px"></h4>
                <p class="card-text">Hey cuz hows it going?</p>
                <p class="card-text"><small class="text-muted">7th September 2015 - 10:00am</small></p>
            </div>
            <div class="card card-block">
                <h4 class="card-title"><img src="http://resources1.news.com.au/images/2011/01/10/1225985/043241-guy-sebastian.jpg" width="125px" height="125px"></h4>
                <p class="card-text">Is it too late to say sorry?</p>
                <p class="card-text"><small class="text-muted">17th September 2015 - 9:31am</small></p>
            </div>
            <div class="card card-block">
                <h4 class="card-title"><img src="http://static.sify.com/cms/image/mhysvMeiiahsi.jpg" width="125px" height="125px"></h4>
                <p class="card-text">Leave my boi alone.</p>
                <p class="card-text"><small class="text-muted">17th September 2015 - 9:32am</small></p>
            </div>
            <?php for ($x=0 ; $x <=rand(1,10); $x++) { ?>
            <div class="card card-block">
                <h4 class="card-title"><img src="<?= $post['image'] ?>" width="125px" height="125px"></h4>
                <p class="card-text"><?= $post['message'] . " " . $x?></p>
                <p class="card-text"><small class="text-muted"><?= $post['date']?></small></p>
            </div>
            <?php } ?>
            <div class="card card-block">
                <h4 class="card-title"><input type="text" class="form-control" id="msg"></h4>
                <p class="card-text">
                    <button class="btn btn-info">Post</button>
                </p>
            </div>
        </div>
        <div class="col-sm-5">
        </div>
    </div>
</body>

</html>