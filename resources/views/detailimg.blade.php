@extends('template.main')

@section('title', 'Home')

@section('body-container')
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="col-md-12" id="fbcomment">
                            <div class="header_comment">
                                <div class="avatar avatar-sm rounded-circle">
                                    <img class="avatar-img" src="https://uifaces.co/our-content/donated/AW-rdWlG.jpg"
                                        alt="">

                                </div>
                                <div class="row">

                                    <img src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/Danau-Toba-edited.jpg"
                                        width="50%">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's.Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's.</p>
                                    <div class="col-md-6 text-left">
                                        <span class="count_comment">264235 Comments</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="sort_title">Sort by</span>
                                        <select class="sort_by">
                                            <option>Top</option>
                                            <option>Newest</option>
                                            <option>Oldest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="body_comment">
                                <div class="row">
                                    <div class="avatar_comment col-md-1">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg"
                                            alt="avatar" />
                                    </div>
                                    <div class="box_comment col-md-11">
                                        <textarea class="commentar" placeholder="Add a comment..."></textarea>
                                        <div class="box_post">
                                            <div class="pull-left">
                                                <input type="checkbox" id="post_fb" />
                                                <label for="post_fb">Also post on Facebook</label>
                                            </div>
                                            <div class="pull-right">
                                                <span>
                                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg"
                                                        alt="avatar" />
                                                    <i class="fa fa-caret-down"></i>
                                                </span>
                                                <button onclick="submit_comment()" type="button" value="1">Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <ul id="list_comment" class="col-md-12">
                                        <!-- Start List Comment 1 -->
                                        <li class="box_result row">
                                            <div class="avatar_comment col-md-1">
                                                <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg"
                                                    alt="avatar" />
                                            </div>
                                            <div class="result_comment col-md-11">
                                                <h4>Nath Ryuzaki</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's.</p>
                                                <div class="tools_comment">
                                                    <a class="like" href="#">Like</a>
                                                    <span aria-hidden="true"> · </span>
                                                    <a class="replay" href="#">Reply</a>
                                                    <span aria-hidden="true"> · </span>
                                                    <i class="fa fa-thumbs-o-up"></i> <span class="count">1</span>
                                                    <span aria-hidden="true"> · </span>
                                                    <span>26m</span>
                                                </div>
                                                <ul class="child_replay">
                                                    <li class="box_reply row">
                                                        <div class="avatar_comment col-md-1">
                                                            <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg"
                                                                alt="avatar" />
                                                        </div>
                                                        <div class="result_comment col-md-11">
                                                            <h4>Sugito</h4>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's.
                                                            </p>
                                                            <div class="tools_comment">
                                                                <a class="like" href="#">Like</a>
                                                                <span aria-hidden="true"> · </span>
                                                                <a class="replay" href="#">Reply</a>
                                                                <span aria-hidden="true"> · </span>
                                                                <i class="fa fa-thumbs-o-up"></i> <span
                                                                    class="count">1</span>
                                                                <span aria-hidden="true"> · </span>
                                                                <span>26m</span>
                                                            </div>
                                                            <ul class="child_replay"></ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <!-- Start List Comment 2 -->
                                        <li class="box_result row">
                                            <div class="avatar_comment col-md-1">
                                                <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg"
                                                    alt="avatar" />
                                            </div>
                                            <div class="result_comment col-md-11">
                                                <h4>Gung Wah</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's.</p>
                                                <div class="tools_comment">
                                                    <a class="like" href="#">Like</a>
                                                    <span aria-hidden="true"> · </span>
                                                    <a class="replay" href="#">Reply</a>
                                                    <span aria-hidden="true"> · </span>
                                                    <i class="fa fa-thumbs-o-up"></i> <span class="count">1</span>
                                                    <span aria-hidden="true"> · </span>
                                                    <span>26m</span>
                                                </div>
                                                <ul class="child_replay"></ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <button class="show_more" type="button">Load 10 more comments</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer text-center">
            <div class="top mt-3">
                <hr class="line-decoration">
                <h4>Contact Us</h4>
            </div>
            <div class="footer-body">
                <p class="footer-body-text text-size">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum,
                    perspiciatis!
                </p>

                <div class="footer-input-area my-4">
                    <input type="text" placeholder="Email Address" class="footer-input"><button class="footer-button"><i
                            class="fa fa-angle-double-right"></i></button>
                </div>
                <div class="row footer-list-group mb-4">
                    <div class="col-5">
                        <div class="footer-list text-size">
                            <b class="b-footer">About</b>
                            <a href="#">Our Story</a>
                            <a href="#">Benefits</a>
                            <a href="#">Teams</a>
                            <a href="#">Careers</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="footer-list text-size">
                            <b class="b-footer">Help</b>
                            <a href="#">FAQ</a>
                            <a href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-end">

        </div>
    </div>
@endsection
