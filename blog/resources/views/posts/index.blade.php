<div>
    <a href="{{route('posts.create')}}">
        Add post
    </a>
</div>
<div>
    <table class="table table-bordered">
        <thead>
            <tr>ID</tr>
            <tr>Name</tr>
            <tr>Category</tr>
            <tr>Edit</tr>
            <tr>Show</tr>
            <tr>Delete</tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
            </tr>
            <tr>
                <td>{{$post->title}}</td>
            </tr>
            <tr>
                <td>{{$post->category->name}}</td>
            </tr>
            <td>
                <a href="{{route('posts.edit',$post->id)}}">Edit
                </a>
            </td>
            <td>
                <a href="{{route('posts.show',$post->id)}}">Show
                </a>
            </td>
            @endforeach
        </tbody>
    </table>
</div>