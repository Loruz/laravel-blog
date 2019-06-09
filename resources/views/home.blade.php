@extends('layouts.app')

@section('content')
    <!-- body content -->
    <div class="main-content">
        <div class="container ">
            <div class="columns is-multiline is-mobile is-centered">
                <div class="column 3 is-narrow">
                    <div class="nav-header">
                        <h3 class="title is-3">bulma blog.</h3>
                        <h4 class="subtitle is-4"><i>it's what you need. probably.</i></h4>
                    </div>
                    <hr/>
                    <!-- navigation -->
                    <aside class="menu">
                        <p class="menu-label">
                            <a href="index.html">Home Page</a>
                        </p>
                        <p class="menu-label">
                            <a href="about.html">About Page</a>
                        </p>
                        <p class="menu-label">
                            <a href="contact.html">Contact Page</a>
                        </p>
                    </aside>
                    <!-- end navigation -->
                    <hr/>
                    <!-- post categories -->
                    <div class="nav-footer has-text-right">
                        <p><i><b><a href="category.html">Field</a></b>, <a href="category.html"><b>Category</b></a>, <a href="category.html"><b>Empty</b></a></i></p>
                    </div>
                    <!-- end post categories -->
                </div>

                <!-- posts column -->
                <div class="column is-8 is-offset-1 is-centered">
                    <!-- start of post -->
                    <div class="post-wrapper">
                        <div class="header-content">
                            <img src="http://placehold.it/900x200">
                            <h1 class="title is-4">
                                Leaping Sideways to Make Python Slower
                            </h1>
                            <small><i>Posted in <a href="category.html">Web Design</a> on <a href="post.html">January 20, 2015</a> by <a href="category.html">Author</a></i></small>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac lacinia diam faucibus. Nunc cursus massa eget consectetur laoreet.</p>
                            <div class="content-footer">
                                <hr/>
                                <p><a class="button menu-label" href="post.html">Continue Reading</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end of post -->

                    <!-- start of post -->
                    <div class="post-wrapper">
                        <div class="header-content">
                            <img src="http://placehold.it/900x200">
                            <h1 class="title is-4">
                                Leaping Sideways to Make Python Slower
                            </h1>
                            <small><i>Posted in <a href="category.html">Web Design</a> on <a href="category.html">January 20, 2015</a> by <a href="category.html">Author</a></i></small>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac lacinia diam faucibus. Nunc cursus massa eget consectetur laoreet.</p>
                            <div class="content-footer">
                                <hr/>
                                <p><a class="button menu-label" href="post.html">Continue Reading</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end of post -->

                    <!-- start of post -->
                    <div class="post-wrapper">
                        <div class="header-content">
                            <img src="http://placehold.it/900x200">
                            <h1 class="title is-4">
                                Leaping Sideways to Make Python Slower
                            </h1>
                            <small><i>Posted in <a href="category.html">Web Design</a> on <a href="category.html">January 20, 2015</a> by <a href="category.html">Author</a></i></small>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac lacinia diam faucibus. Nunc cursus massa eget consectetur laoreet.</p>
                            <div class="content-footer">
                                <hr/>
                                <p><a class="button menu-label" href="post.html">Continue Reading</a></p>
                            </div>
                        </div>
                        <!-- end of post -->
                    </div>
                    <!--  end of post column -->

                    <!-- pagination -->
                    <div class="pagination-non-style">
                        <a class="button menu-label">Older Posts</a>
                        <!-- margin-top exists to stop overlap -->
                        <a class="button menu-label" disabled>Newer Posts</a>
                    </div>
                    <!-- pagination -->
                </div>
            </div>
        </div>
    </div>
    <!-- end of body content -->

    <!-- footer: will stick at the bottom -->
    <div class="footer">
        <div class="container has-text-centered">
            <div class="nav-center">
                <a class="nav-item" href="">
	    <span class="icon">
	      <i class="fa fa-twitter"></i>
	    </span>
                </a>
                <a class="nav-item" href="">
	    <span class="icon">
	      <i class="fa fa-facebook"></i>
	    </span>
                </a>
                <a class="nav-item" href="">
	    <span class="icon">
	      <i class="fa fa-instagram"></i>
	    </span>
                </a>
                <a class="nav-item" href="">
	    <span class="icon">
	      <i class="fa fa-linkedin"></i>
	    </span>
                </a>
            </div>
            <p>template by <a href="http://github.com/plasticneko">github.com/plasticneko</a></p>
        </div>
    </div>
    <!-- end of footer -->
@endsection
