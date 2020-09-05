<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2 d-none d-md-inline-block" href="#">
            Home
        </a>

        @guest
            <a class="py-2 d-none d-md-inline-block" href="{{ route('login') }}">
                Login
            </a>
            <a class="py-2 d-none d-md-inline-block" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        @endguest

        @can('manage-hotel-room')
        <a class="py-2 d-none d-md-inline-block" href="{{ route('admin.hotel') }}">
            Gerenciar Quartos e Hotéis
        </a>
        @endcan

        @if (Auth::check())
            {!! Form::open(['route' => 'logout', 'method' => 'post']) !!}
                {{ Form::submit(__('Logout'), ['class' => 'btn btn-link']) }}
            {!! Form::close() !!}
        @endif
    </div>
</nav>
