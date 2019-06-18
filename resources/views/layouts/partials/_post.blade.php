<div class="post-wrapper">
    <div class="header-content">
{{--        <img src="http://placehold.it/900x200">--}}
        <a href="{{route('posts.show', $post->id)}}">
            <h1 class="title is-4">
                {{$post->title}}
            </h1>
        </a>
        <small><i>Posted in
                <a href="{{route('category', $post->category->id)}}">{{$post->category->title}}</a>
                on <a href="{{route('posts.show', $post->id)}}">
                    {{$post->formattedDate}}
                </a> by
                <a href="#">{{$post->author->name}}</a>
            </i>
        </small>
    </div>
    <div class="content">
        <p>{{$post->description}}</p>
        <div class="content-footer">
            <hr/>
            <p><a class="button menu-label" href="{{route('posts.show', $post->id)}}">Continue Reading</a></p>
        </div>
    </div>
</div>
