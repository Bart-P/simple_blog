<?php require_once 'includes/header.php' ?>

<?php 

$page_data = new Page('index');
$posts = Post::query_posts_all(); 

?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/<?= $page_data->get_image() ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?= $page_data->get_title() ?></h1>
                    <span class="subheading"><?= $page_data->get_sub_title() ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content-->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
<?php 

foreach ( $posts as $post ): 
$created_on = new DateTime($post->get_created()); 

?> 
            <div class="post-preview">
                <a href="post.html">
                <h2 class="post-title"><?= $post->get_title() ?></h2>
                    <h3 class="post-subtitle"><?= $post->get_sub_title() ?></h3>
                </a>
                <p class="post-meta">
                    Posted by
                        <a href="#!"><?= $post->get_user() ?></a>
                        <?= $created_on->format('d M Y'); ?>
                </p> 
            </div>
            <hr />
<?php endforeach; ?>
            <!-- Pager-->
            <div class="clearfix"><a class="btn btn-primary float-right" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
<hr />
<!-- Footer-->
<?php require_once 'includes/footer.php' ?>
