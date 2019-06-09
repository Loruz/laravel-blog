<div class="post-wrapper">
    <div class="header-content">
{{--        <img src="http://placehold.it/900x200">--}}
        <a href="{{route('posts.show', $post->id)}}">
            <h1 class="title is-4">
                {{$post->title}}
            </h1>
        </a>
        <small><i>Posted in <a href="category.html">Web Design</a> on <a href="post.html">January 20, 2015</a> by <a href="category.html">Author</a></i></small>
    </div>
    <div class="content">
        <p>{{$post->description}}</p>
        <div class="content-footer">
            <hr/>
            <p><a class="button menu-label" href="post.html">Continue Reading</a></p>
        </div>
    </div>
</div>
