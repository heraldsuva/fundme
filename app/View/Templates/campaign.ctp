<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FUNDER - Bootstrap Crowdfunding Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,200,300' rel='stylesheet' type='text/css'>
    <?php echo $this->Html->css(array('style','bootstrap','responsive')) ?>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if IE 8]>
    <style type="text/css">
        input[type="checkbox"], input[type="radio"] {
            display: inline;
        }
        input[type="checkbox"] + label, input[type="radio"] + label{
            display: inline;
            background: none;
        }
    </style>
    <![endif]-->

    <script type="text/javascript" src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>
<div id="header" class="header">
    <div class="width titul">
        <div class="reg inline">
            <div class="bleft inline login"><a href="#" id="login-link" class="login-link">Login</a></div>
            <div class="bleft bright inline login"><a href="#" id="reg-link" class="login-link">Register</a></div>
        </div>

        <div class="social inline fright">
            <ul id="social">
                <li class="bleft inline">
                    <ul>
                        <li><a href="https://www.facebook.com" target="_blank"  original-title="twitter"><img src="img/social/icon_header_face.png" alt=""></a></li>
                        <li><a href="https://plus.google.com" target="_blank"  original-title="googleplus"><img src="img/social/icon_header_g.png" alt=""></a></li>
                        <li><a href="https://twitter.com/" title="facebook" target="_blank" ><img src="img/social/icon_header_tw.png" alt=""></a></li>
                        <li><a href="http://www.linkedin.com/" target="_blank" original-title="linkedin"><img src="img/social/icon_header_in.png" alt=""></a></li>
                        <li><a href="johndoe@domainname.com" target="_self" original-title="mail"><img src="img/social/icon_header_p.png" alt=""></a></li>
                        <li><a href="johndoe@domainname.com" target="_self" original-title="mail"><img src="img/social/icon_header_ball.png" alt=""></a></li>
                    </ul>
                </li>

                <li class="bleft first socialz"><a class="active" href="#">EN</a></li>
                <li class="bleft socialz"><a href="#">FR</a></li>
                <li class="bleft socialz"><a href="#">IT</a></li>
                <li class="bleft last socialz"><a href="#">DE</a></li>
            </ul>
        </div>
    </div>

    <div class="clear"></div>
    <div class="navigate">
        <div class="width">
            <div class="logo inline">
                <h1 class="inline fleft">FUNDER</h1>
            </div>

            <div class="navigation inline fright">
                <ul class="nav inline menuleft">
                    <li><a class="bleft" href="index.html">HOME</a></li>
                    <li><a class="bleft" href="index.html#id_about">ABOUT</a></li>
                    <li class="active"><a class="bleft" href="projects.html#id3">PROJECTS</a></li>
                    <li><a class="bleft" href="index.html#registr">REGISTER</a></li>
                    <li><a class="bleft" href="index.html#id_cont">CONTACTS</a></li>
                    <li><a class="bleft last" href="index.html#id_partn">PARTNERS</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div id="header_select">
            <select id="dynamic_select">
                <option value="" selected>Select A Page</option>
                <option value="index.html#id_about">About</option>
                <option value="index.html#id3">Projects</option>
                <option value="index.html#id_reg">Registration</option>
                <option value="index.html#id_cont">Contacts</option>
                <option value="index.html#id_partn">Partners</option>
            </select>
        </div>
    </div>
</div>

<div class="container-fluid line contentt description_page">

<div class="clear"></div>
<div class="content description">
<div class="row-fluid cols">
<div class="left_content_descr span8">
<h1 class="decoration text-center"><span class="nobacgr">Project Name</span></h1>
<div class="video">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner content" style="width: 100%">
            <div class="item">
                <iframe id="player1" src="http://player.vimeo.com/video/47653105?api=1&player_id=player1" width="620" height="380" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/51205913">MotibU</a> from <a href="http://vimeo.com/jamiejessett">MotibU</a> on <a href="http://vimeo.com">Vimeo</a>.</p>

            </div>
            <div class="item active">
                <div>
                    <img src="img/pics_project.png">
                </div>
            </div>
        </div>
        <div id="visiblepanel" class="visiblepanel">
            <a class="left carousel-control" href="#myCarousel" data-slide="prev" id="slide_left"></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" id="slide_rigth"></a>
        </div>
    </div>
</div>

<div class="tabbable" style="margin-bottom: 18px;">
    <div id="tabs_pages">
        <ul class=" tabs_pages_ul row-fluid">
            <li class="active span4"><a href="#tab1" data-toggle="tab">DESCRIPTION</a></li>
            <li class="span4"><a href="#tab2" data-toggle="tab">BACKERS</a></li>
            <li class="span4"><a href="#tab3" data-toggle="tab">UPDATES</a></li>
        </ul>
    </div>
    <div class="tab-content" style="padding-bottom: 9px;">
        <div class="tab-pane active" id="tab1">
            <div id="description_content">
                <div class="title_description_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien. Nullam ac nisi vel augue ultrices venenatis sed sed felis.</div>
                <div class="text_description_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien. Nullam ac nisi vel augue ultrices venenatis sed sed felis. Quisque velit tortor, suscipit et auctor tempus, pretium eu velit. Vestibulum vitae ligula sapien. Donec et felis lorem. Vestibulum non feugiat risus. Sed malesuada nisl vel lorem rhoncus feugiat. Proin pellentesque velit nec metus tincidunt quis egestas tortor venenatis. Phasellus mattis sapien suscipit massa suscipit placerat. Vestibulum semper laoreet tempus. Curabitur ac sagittis urna. Sed rhoncus massa vel lorem lobortis sit amet adipiscing nunc aliquet. Quisque metus velit, mattis a vehicula sed, hendrerit sed leo. Donec aliquet molestie semper. Donec ac condimentum nisl. Ut bibendum scelerisque turpis vitae porttitor. Maecenas eget nisi nulla. Pellentesque sed congue nulla. Etiam magna massa, tempus quis accumsan sit amet, posuere eget odio. Suspendisse pellentesque odio id nunc tempor placerat. Pellentesque ipsum mauris, ultrices ut rhoncus id, vehicula eget est. Sed turpis tortor, accumsan eu ultrices et, egestas eget diam. Praesent ligula felis, varius vitae mollis at, cursus at massa. Sed consequat semper sagittis. Vivamus ultricies massa a urna interdum ultrices. </div>
                <div class="text_description_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien. Nullam ac nisi vel augue ultrices venenatis sed sed felis. Quisque velit tortor, suscipit et auctor tempus, pretium eu velit. Vestibulum vitae ligula sapien. Donec et felis lorem. Vestibulum non feugiat risus. Sed malesuada nisl vel lorem rhoncus feugiat. Proin pellentesque velit nec metus tincidunt quis egestas tortor venenatis. Phasellus mattis sapien suscipit massa suscipit placerat. </div>
                <div class="text_description_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien. Nullam ac nisi vel augue ultrices venenatis sed sed felis. Quisque velit tortor, suscipit et auctor tempus, pretium eu velit. Vestibulum vitae ligula sapien.</div>
            </div>
        </div>
        <div class="tab-pane" id="tab2">
            <div id="backers_content">
                <div class="row-fluid">
                    <div class=" span6">
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                        <div class="backers_block_text">
                            <div class="image_face_backers_content"><div class="face_backers_content"></div></div>
                            <div class="text_backers_content">
                                <div class="backer_name">Backer</div>
                                <div class="backer_date">April 2, 2013 at 8:45 pm</div>
                                <div class="number_project">Backed 5 project</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="btn-toolbar text-center">
                            <div class="decoration text-center proj">
                                <div class="btn-group nobacgr">
                                    <button class="btn"><span class="gray">1</span></button>
                                    <button class="btn mleft10">2</button>
                                    <button class="btn mleft10">3</button>
                                    <button class="btn mleft10">4</button>
                                    <button class="btn mleft10">5</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab3">
            <div id="updates_content">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="updates_block_text">
                            <h4>Update 3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien. Nullam ac nisi vel augue ultrices venenatis sed sed felis. Quisque velit tortor, suscipit et auctor tempus, pretium eu velit. Vestibulum vitae ligula sapien. Donec et felis lorem. Vestibulum non feugiat risus. Sed malesuada nisl vel lorem rhoncus feugiat. Proin pellentesque velit nec metus tincidunt quis egestas tortor venenatis. Phasellus mattis sapien suscipit massa suscipit placerat. Vestibulum semper laoreet tempus. Curabitur ac sagittis urna. Sed rhoncus massa vel lorem lobortis sit amet adipiscing nunc aliquet.  accumsan sit amet, posuere eget odio. Suspendisse pellentesque odio id nunc tempor placerat. Pellentesque ipsum mauris, ultrices ut rhoncus id, vehicula eget est. </p>
                        </div>
                        <div class="updates_block_text">
                            <h4>Update 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien. Nullam ac nisi vel augue ultrices venenatis sed sed felis. Quisque velit tortor, suscipit et auctor tempus, pretium eu velit. Vestibulum vitae ligula sapien. Donec et felis lorem. Vestibulum non feugiat risus. Sed malesuada nisl vel lorem rhoncus feugiat. Proin pellentesque velit nec metus tincidunt quis egestas tortor venenatis. Phasellus mattis sapien suscipit massa suscipit placerat. Vestibulum semper laoreet tempus. Curabitur ac sagittis urna. Sed rhoncus massa vel lorem lobortis sit amet adipiscing nunc aliquet. Quisque metus velit, mattis a vehicula sed, hendrerit sed leo. Donec aliquet molestie semper. Donec ac condimentum nisl. Ut bibendum scelerisque turpis vitae porttitor. </p>
                        </div>
                        <div class="updates_block_text">
                            <h4>Update 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien. Nullam ac nisi vel augue. Nullam ac nisi vel augue.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="social_uncategorized">
    <div class="left_social_uncategorized"><span>Uncategorized</span></div>
    <div class="social inline fright">
        <ul id="social_mid" class="bleft_social">
            <li><a href="https://twitter.com/" target="_blank"  original-title="twitter"><img src="img/social/icon_header_face.png" alt=""></a></li>
            <li><a href="https://plus.google.com" target="_blank"  original-title="googleplus"><img src="img/social/icon_header_g.png" alt=""></a></li>
            <li><a href="https://www.facebook.com" title="facebook" target="_blank" ><img src="img/social/icon_header_tw.png" alt=""></a></li>
            <li><a href="http://www.linkedin.com/" target="_blank" original-title="linkedin"><img src="img/social/icon_header_in.png" alt=""></a></li>
            <li><a href="johndoe@domainname.com" target="_self" original-title="mail"><img src="img/social/icon_header_p.png" alt=""></a></li>
            <li><a href="johndoe@domainname.com" target="_self" original-title="mail"><img src="img/social/icon_header_ball.png" alt=""></a></li>
        </ul>
    </div>
</div>
<div class="clear"></div>
<div id="author_review">
    <h3 class="decoration text-center"><span class="nobacgr">Author</span></h3>
    <div id="face_social_text">
        <div class="left_face_social_text span4">
            <div class="face_big span9"><div class="pix_author"></div></div>
            <div class="social_link_author">
                <div class="social_bord"><a href="#" >
                    <img class="social_decc" src="img/description/facebook_author_icon.png" alt="">
                </a></div>
                <div class="social_bord"><a href="#" >
                    <img class="social_decc" src="img/description/twitter_author_icon.png" alt="">
                </a></div>
                <div class="social_bord_last"><a href="#" >
                    <img class="social_decc" src="img/description/google_author_icon.png" alt="">
                </a></div>
            </div>
        </div>
        <div class="right_face_social_text span8">
            <div class="name_surname">John Doe</div>
            <div class="proff">CEO</div>
            <div class="text_author_right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien.</div>
        </div>
    </div>
</div>
<div class="clear"></div>
<h4 class="decoration text-center"><span class="nobacgr">Ask a Question</span></h4>
<div id="asc_a_question">

    <div class="reply_user main_reply">
        <div class="row-fluid">
            <div class="span2">
                <div class="image_face"></div>
            </div>
            <div class="span10">
                <div class="name_and_date"><span class="user_name">User</span> - April 10, 2013 at 7:34 pm - <span class="reply_t">Reply</span></div>
                <div class="text_reply">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien.</div>

            </div>
        </div>
    </div>

    <div class="reply_user subreply">
        <div class="row-fluid">
            <div class="span2">
                <div class="image_face"></div>
            </div>
            <div class="span10">
                <div class="name_and_date"><span class="user_name">Admin</span> - April 10, 2013 at 7:34 pm - <span class="reply_t">Reply</span></div>
                <div class="text_reply">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec massa ut justo accumsan malesuada ut pharetra sapien.</div>

            </div>
        </div>
    </div>
</div>
<div id="asc_a_question_form">
    <h3 class="text-center asc_question_form_name">Ask a <span class="h3_quest">Question</span></h3>
    <div class="form_question">
        <div class="row-fluid">
            <div class="controls controls-row message">
                <input class="inputp search-query span4" type="text" placeholder="Name*">
                <input class="inputp search-query span4" type="text" placeholder="Email*">
                <input class="inputp search-query span4" type="text" placeholder="Website*">
                <div class="clear"></div>
                <textarea id="redex" class="inputp search-query span12"  rows="5" placeholder="Project description"></textarea>
                <div class="clear"></div>
                <div class="tmargin20">
                    <button type="submit" class="btn"><strong>Send Message</strong></button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="sidebar_descr span4">
    <div id="back_this_project_block">
        <div class="backers_days_blocks first">
            <div class="row-fluid">
                <div class="span1" style="margin-right: 10px"><div class="image_first"></div></div>
                <div class="text_backers_days_blocks span10">
                    <div class="top_text_backers_days_blocks">480</div>
                    <div class="bottom_text_backers_days_blocks">Backers</div>
                </div>
            </div>
        </div>
        <div class="backers_days_blocks">
            <div class="row-fluid">
                <div class="span1" style="margin-right: 10px"><div class="image_second"></div></div>
                <div class="text_backers_days_blocks span10">
                    <div class="top_text_backers_days_blocks">25,000</div>
                    <div class="bottom_text_backers_days_blocks">pledged of $50,000 goal</div>
                </div>
            </div>
        </div>
        <div class="backers_days_blocks">
            <div class="row-fluid">
                <div class="span1" style="margin-right: 10px"><div class="image_third"></div></div>
                <div class="text_backers_days_blocks span10">
                    <div class="top_text_backers_days_blocks">60</div>
                    <div class="bottom_text_backers_days_blocks">days to go</div>
                </div>
            </div>
        </div>
    </div>
    <div class="back_this_project_button">
        <button class="btn btn-large back_project" type="button">
            <small>BACK THIS PROJECT</small>
        </button>
    </div>
    <div id="pledges_block">
        <h3 class="decoration text-center"><span class="nobacgr_desc">Pledges</span></h3>
        <div class="pledges_block_info">
            <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_1">Pledge $5 or more</a></div>
            <div id="pledges_block_info_1">
                <div class="pledges_block_info_backers">10 backers</div>
                <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="pledges_block_info_estimate_delivery">Estimate delivery: Jan 2013</div>
            </div>
        </div>
        <div class="pledges_block_info">
            <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_2">Pledge $10 or more</a></div>
            <div id="pledges_block_info_2">
                <div class="pledges_block_info_backers">15 backers</div>
                <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="pledges_block_info_estimate_delivery">Estimate delivery: Feb 2013</div>
            </div>
        </div>
        <div class="pledges_block_info">
            <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_3">Pledge $15 or more</a></div>
            <div id="pledges_block_info_3">
                <div class="pledges_block_info_backers">20 backers</div>
                <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="pledges_block_info_estimate_delivery">Estimate delivery: Mar 2013</div>
            </div>
        </div>
        <div class="pledges_block_info">
            <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_4">Pledge $20 or more</a></div>
            <div id="pledges_block_info_4">
                <div class="pledges_block_info_backers">5 backers</div>
                <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="pledges_block_info_estimate_delivery">Estimate delivery: Jan 2013</div>
            </div>
        </div>
        <div class="pledges_block_info">
            <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_5">Pledge $25 or more</a></div>
            <div id="pledges_block_info_5">
                <div class="pledges_block_info_backers">20 backers</div>
                <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="pledges_block_info_estimate_delivery">Estimate delivery: Feb 2013</div>
            </div>
        </div>
        <div class="pledges_block_info">
            <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_6">Pledge $30 or more</a></div>
            <div id="pledges_block_info_6">
                <div class="pledges_block_info_backers">30 backers</div>
                <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="pledges_block_info_estimate_delivery">Estimate delivery: Mar 2013</div>
            </div>
        </div>
        <div class="pledges_block_info">
            <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_7">Pledge $35 or more</a></div>
            <div id="pledges_block_info_7">
                <div class="pledges_block_info_backers">20 backers</div>
                <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="pledges_block_info_estimate_delivery">Estimate delivery: Jan 2013</div>
            </div>
        </div>
    </div>
    <div id="payment_getaway">
        <!--<h3 class="text-center payment_getaway_name"><span class="title_h3 left_t"></span>Payment Getaway<span class="title_h3 right_t"></span></h3>-->
        <h3 class="decoration text-center"><span class="nobacgr_desc">Payment Getaway</span></h3>
        <div class="payment_getaway_block">
            <div class="payment_cost">$15</div>
            <div class="your_card">
                <h3>Choose Your Card:</h3>

                <ul class="choose">
                    <li>
                        <input id="rfirst" type="radio" name="radio" checked hidden />
                        <label for="rfirst">Visa</label>
                    </li>
                    <li>
                        <input id="rsecond" type="radio" name="radio" hidden />
                        <label for="rsecond">MasterCard</label>
                    </li>
                    <li>
                        <input id="re" type="radio" name="radio" hidden />
                        <label for="re">American Express</label>
                    </li>
                </ul>
            </div>
            <div class="payment_getaway_button">
                <button class="btn btn-large make_payment" type="button">
                    <small>Make Payment</small>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div id="footer">
    <div class="footer">
        <div class="row-fluid">
            <div class="span3">
                <h3>FUNDER</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu mauris venenapus</p>
            </div>
            <div class="span3 foot">
                <h4>Recent Tweets</h4>
                <div class="tmargin20">
                    <img class="fleft tw" src="img/social_tweet.png" alt="">
                    <div class="mleft40">
                        <span>1234 Street </span>
                        <span>4r6yg 456hv  </span>
                        <span>Lorem ipus ex vixc ilflf nfnfoof wrfoo rcgetg  erger </span>
                        <br>
                        <a class="green">http://www.envato.com</a>
                    </div>
                    <div class="clear foot"></div>
                    <img class="fleft tw" src="img/social_tweet.png" alt="">
                    <div class=" mleft40">
                        <span>1234 Street </span>
                        <span>4r6yg 456hv  </span>
                        <span>Lorem ipus ex vixc ilflf n </span>
                        <br>
                        <a class="green">http://www.envato.com</a>
                    </div>
                </div>
            </div>
            <div class="span3 foot">
                <h4>Recent Posts</h4>
                <div class="tmargin20">
                    <div class="recents">
                        <p class="green"><a href="#">Lorem ipsus dolor sit amet</a></p>
                        <p class="green"><a href="#">Proin nibh aufu suscript</a></p>
                        <p class="green"><a href="#">Lorem ipsus dolor sit amet</a></p>
                    </div>
                    <p class="green recents"><a href="#">LQuri wfcw ertvc</a></p>
                </div>
            </div>
            <div class="span3 foot">
                <h4>Flickr Feed</h4>
                <div class="flckr">
                    <div>
                        <div class="flickr"></div>
                        <div class="flickr"></div>
                        <div class="flickr"></div>
                        <div class="flickrl"></div>

                        <div class="flickr"></div>
                        <div class="flickr"></div>
                        <div class="flickr"></div>
                        <div class="flickrl"></div>

                        <div class="flickr"></div>
                        <div class="flickr"></div>
                        <div class="flickr"></div>
                        <div class="flickrl"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bot">
        <div class="footer_bott">
            <div class="fleft">© All Rights Reserved. Design by UOU Design.</div>
            <div class="fright">
                <ul id="social_b" class="socialbott inline">
                    <li><a href="https://twitter.com/" target="_blank" original-title="twitter"><img src="img/social/icon_footer_face.png" alt=""></a></li>
                    <li><a href="https://plus.google.com" target="_blank" original-title="googleplus"><img src="img/social/icon_footer_g.png" alt=""></a></li>
                    <li><a href="https://www.facebook.com" title="facebook" target="_blank"><img src="img/social/icon_footer_tw.png" alt=""></a></li>
                    <li><a href="http://www.linkedin.com/" target="_blank" original-title="linkedin"><img src="img/social/icon_footer_in.png" alt=""></a></li>
                    <li><a href="http://www.linkedin.com/" target="_self" original-title="mail"><img src="img/social/icon_footer_p.png" alt=""></a></li>
                    <li><a href="http://www.linkedin.com/" target="_self" original-title="mail"><img src="img/social/icon_footer_ball.png" alt=""></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php echo $this->Html->script(array('jquery.min','bootstrap.min','ie10-viewport-bug-workaround','jquery.placeholder','css3-mediaqueries')) ?>
<script>
    /* <![CDATA[ */
    $("#link_pledges_block_info_link_1").click(function() {
        if ($('#pledges_block_info_1').is(':visible'))
        {
            $('#link_pledges_block_info_link_1').addClass('not_active');
            $("#pledges_block_info_1").toggle();
        }
        else
        {
            $('#link_pledges_block_info_link_1').removeClass('not_active');
            $("#pledges_block_info_1").toggle();
        }
    });

    $("#link_pledges_block_info_link_2").click(function() {
        if ($('#pledges_block_info_2').is(':visible'))
        {
            $('#link_pledges_block_info_link_2').addClass('not_active');
            $("#pledges_block_info_2").toggle();
        }
        else
        {
            $('#link_pledges_block_info_link_2').removeClass('not_active');
            $("#pledges_block_info_2").toggle();
        }
    });

    $("#link_pledges_block_info_link_3").click(function() {
        if ($('#pledges_block_info_3').is(':visible'))
        {
            $('#link_pledges_block_info_link_3').addClass('not_active');
            $("#pledges_block_info_3").toggle();
        }
        else
        {
            $('#link_pledges_block_info_link_3').removeClass('not_active');
            $("#pledges_block_info_3").toggle();
        }
    });

    $("#link_pledges_block_info_link_4").click(function() {
        if ($('#pledges_block_info_4').is(':visible'))
        {
            $('#link_pledges_block_info_link_4').addClass('not_active');
            $("#pledges_block_info_4").toggle();
        }
        else
        {
            $('#link_pledges_block_info_link_4').removeClass('not_active');
            $("#pledges_block_info_4").toggle();
        }
    });

    $("#link_pledges_block_info_link_5").click(function() {
        if ($('#pledges_block_info_5').is(':visible'))
        {
            $('#link_pledges_block_info_link_5').addClass('not_active');
            $("#pledges_block_info_5").toggle();
        }
        else
        {
            $('#link_pledges_block_info_link_5').removeClass('not_active');
            $("#pledges_block_info_5").toggle();
        }
    });

    $("#link_pledges_block_info_link_6").click(function() {
        if ($('#pledges_block_info_6').is(':visible'))
        {
            $('#link_pledges_block_info_link_6').addClass('not_active');
            $("#pledges_block_info_6").toggle();
        }
        else
        {
            $('#link_pledges_block_info_link_6').removeClass('not_active');
            $("#pledges_block_info_6").toggle();
        }
    });

    $("#link_pledges_block_info_link_7").click(function() {
        if ($('#pledges_block_info_7').is(':visible'))
        {
            $('#link_pledges_block_info_link_7').addClass('not_active');
            $("#pledges_block_info_7").toggle();
        }
        else
        {
            $('#link_pledges_block_info_link_7').removeClass('not_active');
            $("#pledges_block_info_7").toggle();
        }
    });

    $(function(){
        var iframe = $('#player1')[0];
        var player = $f(iframe);
        var $myCarousel = $('#myCarousel');

        player.addEvent('ready', function() {
            // player.addEvent('pause', onPause);
            player.addEvent('play', onPlay);
            //player.addEvent('playProgress', onPlayProgress);
        });


        $('#myCarousel').bind('slide', function(){
            player.api('pause');
            $('#myCarousel').carousel({
                interval: 6000
            })
        });


        function onPlay(id) {
            $myCarousel.carousel('pause');
        }


    });

    /* ]]> */


</script>
<script>
    /* <![CDATA[ */
    var a = $('.left_content_descr').height();
    $('.sidebar_descr').height(a - 70);
    /* ]]> */

</script>

<script>
    /* <![CDATA[ */
    $('#myCarousel').hover(function() {
        $('#visiblepanel').toggle();
    });
    /* ]]> */


</script>
<script>
    /* <![CDATA[ */
    $(function(){
        // bind change event to select
        $('#dynamic_select').bind('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
    /* ]]> */

</script>
</body>
</html>
