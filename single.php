<?php get_header(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">
                <?php breadcrums() ?>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" id="post">

            <div class="row">
                <?php if (get_option('ad_header') != '') : ?>
                    <div class="col-md-12 hidden-xs hidden-sm ad">
                        <?php echo stripslashes(get_option('ad_header')); ?>
                    </div>
                <?php endif; ?>
                <?php if (get_option('ad_header_mobile') != '') : ?>
                    <div class="col-md-12 visible-xs visible-sm ad">
                        <?php echo stripslashes(get_option('ad_header_mobile')); ?>
                    </div>
                <?php endif; ?>
                <!-- /.col -->
                <div class="col-md-9">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="box box-widget">
                            <div class="box-header with-border">
                                <div class="user-block">
                                    <h2><?php the_title(); ?></h2>
                                    <ul class="description list-inline list-unstyled">
                                        <li><i class="fa fa-calendar"></i> <?php the_time('d.m.Y') ?></li>
                                        <li>
                                            <i class="fa fa-user margin-r-5"></i>
                                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                                               class="text-sm">
                                                <?php the_author(); ?>
                                            </a>
                                        </li>
                                        <li><i class="fa fa-folder-open margin-r-5"></i> <?php the_category(', ') ?>
                                        </li>
                                        <li class="pull-right">
                                            <i class="fa fa-comments-o margin-r-5"></i>
                                            Comments (<?php comments_number('0', '1', '%'); ?>)
                                        </li>
                                    </ul>
                                    <ul class="list-inline">
                                        <li><i class="fa fa-share"></i> Share</li>
                                        <li><div class="fb-share-button" data-href="<?php the_permalink() ?>"
                                                 data-layout="button_count"></div></li>
                                        <li><div style="display:inline-block;vertical-align:top">
                                                <a href="https://twitter.com/share" class="twitter-share-button"
                                                   data-url="<?php the_permalink() ?>"
                                                   data-text="<?php the_title(); ?>"> Tweet</a></div></li>
                                        <li><div style="display:inline-block;vertical-align:top"><a href="//www.pinterest.com/pin/create/button/"
                                                    data-pin-do="buttonBookmark" data-pin-color="red">
                                                    <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png"/>
                                                </a></div></li>
                                        <li><div style="display:inline-block;vertical-align:top"><script type="IN/Share" data-counter="right"></script></div>
                                        </li>
                                        <li><a href="//www.reddit.com/submit?url=<?php the_permalink() ?>"
                                               target="_blank"> <img src="//www.redditstatic.com/spreddit7.gif"
                                                                     alt="submit to reddit" border="0"/> </a></li>
                                        <li><div style="display:inline-block;vertical-align:top"><a class="g-plusone" data-size="medium"
                                                    data-href="<?php the_permalink() ?>"></a></div></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), array(1000,1000)); ?>
                                <div class="box box-widget">
                                    <div class="box-body box-profile">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo $img[0]; ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title() ?>"/>
                                        <?php else : ?>
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/default.jpg" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title() ?>"/>
                                        <?php endif ?>
                                        <a class="author-link"
                                           href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                                           rel="author">
                                            <img class="profile-user-img img-responsive img-circle" src="<?php
                                            $author_bio_avatar_size = apply_filters('twentyfifteen_author_bio_avatar_size', 56);
                                            echo get_avatar_url(get_the_author_meta('user_email'), $author_bio_avatar_size);
                                            ?>" alt="User profile picture">

                                            <h3 class="profile-username text-center"><?php echo get_the_author(); ?></h3>

                                            <p class="text-muted text-center"><?php the_author_meta('description'); ?></p>
                                        </a>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                                <div class="post-content">
                                    <?php the_content(); ?>
                                </div>
                                <!-- Social sharing buttons -->
                                <ul class="list-inline">
                                    <li><i class="fa fa-share"></i> Share</li>
                                    <li><div class="fb-share-button" data-href="<?php the_permalink() ?>"
                                             data-layout="button_count"></div></li>
                                    <li><div style="display:inline-block;vertical-align:top">
                                            <a href="https://twitter.com/share" class="twitter-share-button"
                                               data-url="<?php the_permalink() ?>"
                                               data-text="<?php the_title(); ?>"> Tweet</a></div></li>
                                    <li><div style="display:inline-block;vertical-align:top"><a href="//www.pinterest.com/pin/create/button/"
                                               data-pin-do="buttonBookmark" data-pin-color="red">
                                                <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png"/>
                                            </a></div></li>
                                    <li><div style="display:inline-block;vertical-align:top"><script type="IN/Share" data-counter="right"></script></div>
                                    </li>
                                    <li><a href="//www.reddit.com/submit?url=<?php the_permalink() ?>"
                                           target="_blank"> <img src="//www.redditstatic.com/spreddit7.gif"
                                                                 alt="submit to reddit" border="0"/> </a></li>
                                    <li><div style="display:inline-block;vertical-align:top"><a class="g-plusone" data-size="medium"
                                               data-href="<?php the_permalink() ?>"></a></div></li>
                                    <li class="pull-right text-muted">
                                        <i class="fa fa-comments-o margin-r-5"></i>
                                        Comments (<?php comments_number('0', '1', '%'); ?>)
                                    </li>
                                </ul>
                                <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if (comments_open() || '0' != get_comments_number()) :
                                    comments_template();
                                endif;
                                ?>
                            </div>
                            <div class="box box-widget">
                                <div class="box-body">
                                    <div class="box-header with-border">
                                        <h3>Benzer Yazılar</h3>
                                    </div>
                                    <div class="row related-articles clearfix">
                                        <?php $posts = get_posts('orderby=rand&numberposts=8');
                                        foreach ($posts as $post) : ?>
                                            <div class="col-xs-6 col-sm-4 col-md-3">
                                                <div class="caption">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php $resim_yolu = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                                                        if (has_post_thumbnail()) { ?>

                                                            <img src="<?php echo $resim_yolu[0]; ?>"
                                                                 class="img-responsive"
                                                                 alt="<?php the_title(); ?>"
                                                                 title="<?php the_title() ?>"/>

                                                        <?php } ?>
                                                    </a>
                                                </div>
                                                <span class="users-list-date"><a
                                                        href="<?php the_permalink() ?>"
                                                        title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!--/.box -->
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="col-md-3 side-bar hidden-xs hidden-sm">
                    <?php dynamic_sidebar('Side Bar'); ?>
                </div>

                <?php if (get_option('ad_footer') != '') : ?>
                    <div class="col-md-12 hidden-xs hidden-sm ad">
                        <?php echo stripslashes(get_option('ad_footer')); ?>
                    </div>
                <?php endif; ?>
                <?php if (get_option('ad_footer_mobile') != '') : ?>
                    <div class="col-md-12 visible-xs visible-sm ad">
                        <?php echo stripslashes(get_option('ad_footer_mobile')); ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div><!-- /.content-wrapper -->
    <script>!function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + '://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'twitter-wjs');
    </script>
    <script type="text/javascript" async defer
            src="//assets.pinterest.com/js/pinit.js"></script>
    <script src="//platform.linkedin.com/in.js"
            type="text/javascript"> lang: en_US</script>
    <script src="https://apis.google.com/js/platform.js" async
            defer></script>
<?php get_footer(); ?>