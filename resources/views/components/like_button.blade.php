@php
    $likePost = new \App\Models\LikePost();
    if (Auth::check()) {
        $checkLike = $likePost->where(['post_id' => $post->id, 'user_id' => Auth::user()->id])->count();
    } else {
        $checkLike = false;
    }
@endphp

<div class="mt-3">
    <form action="{{ route('post.like', $post->id) }}" method="POST">
        @csrf
        <button type="submit" id="btn-like" class="{{ $checkLike ? 'text-primary' : 'text-black' }}"
            style="border: none; background: transparent">
            <i class="{{ $checkLike ? 'fas' : 'far' }} fa-heart" style="font-size: 18px"></i>
            <span>{{ $post->like_post->count() }}</span>
        </button>
    </form>
</div>
