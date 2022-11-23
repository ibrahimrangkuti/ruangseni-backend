@php
    $votePost = new \App\Models\VotePost();
    if(Auth::check()) {
        $checkVote = $votePost->where(['post_id' => $post->id, 'user_id' => Auth::user()->id])->count();
    } else {
        $checkVote = false;
    }
@endphp

<div class="mt-3">
    <form action="{{ route('post.vote', $post->id) }}" method="POST">
        @csrf
        <button type="submit" class="{{ $checkVote ? 'text-primary' : 'text-black' }}"
            style="border: none; background: transparent">
            <i class="{{ $checkVote ? 'fa-solid' : 'fa-regular'}} fa-thumbs-up" style="font-size: 18px"></i>
            <span>{{ $post->vote_post->count() }}</span>
        </button>
    </form>
</div>
