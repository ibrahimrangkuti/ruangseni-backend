@if(session('success'))
<div class="alert alert-success alert-dismissible show fade mb-3">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>x</span>
        </button>
        {{ session('success') }}
    </div>
</div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible show fade mb-3">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>x</span>
            </button>
            {{ session('error') }}
        </div>
    </div>
@endif
