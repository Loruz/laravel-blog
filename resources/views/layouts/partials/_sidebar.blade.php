<div class="column 3 is-narrow">
    <div class="nav-header">
        <h3 class="title is-3">bulma blog.</h3>
        <h4 class="subtitle is-4"><i>it's what you need. probably.</i></h4>
    </div>
    <hr/>

    <aside class="menu">
        <p class="menu-label">
            <a href="{{route('home')}}">Home Page</a>
        </p>
        <p class="menu-label">
            <a href="about.html">About Page</a>
        </p>
        <p class="menu-label">
            <a href="contact.html">Contact Page</a>
        </p>
    </aside>
    <hr/>
    <div class="nav-footer has-text-right">
        @if(Route::is('category'))
            <p><i>Currently in <b><a href="category.html">Field</a></b></i></p>
        @endif
        <p>
            @foreach($categories as $category)
                <i>
                    <b><a href="{{route('category', $category->id)}}">{{$category->title}}</a></b>,
                </i>
            @endforeach
        </p>
    </div>

</div>


