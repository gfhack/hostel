@if (session('message-error'))
    <div class="alert alert-danger" role="alert">
        {{ session('message-error') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('message-success'))
    <div class="alert alert-success" role="alert">
        {{ session('message-success') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
