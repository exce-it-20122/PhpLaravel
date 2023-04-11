
<h2 class="text-xl text-gray">Post create
</h2>
<div class="bg-black border-b">
    <form method="POST" action="{{ route('posts.update',$post->id) }}">
        @csrf
        @method('put')
        <div class="mb=6">
            <label class="block">
                <span>Title</span>
                <input type="text" name="title" placeholder="" value="{{old('title',$post->title)}}">
            </label>

        </div>
        <div class="mb=6">
            <label class="block">
                <span>Note</span>
                <input type="text" name="note" placeholder="" value="{{old('note',$post->note)}}">
            </label>
        </div>
        <div class="mb=6">
            <label class="block">
                <span>Select category</span>
                <select name="category_id">
                    @foreach ($categories as $category)
                    <option @selected($category->id == $post->category_id)
                    value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

            </label>
        </div>

        <div class="mb=6">
            <label class="block">
                <span>Desc</span>
                <input type="text" name="description" placeholder="" value="{{old('description',$post->description)}}">
            </label>
        </div>
        <button type="submit" class="text-black rounded">Submit</button>
    </form>
</div>
