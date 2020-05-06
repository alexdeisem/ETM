@if (auth()->check() && request()->route()->getName() != null)
    @include('etm_layout.navbars.navs.auth')
@else
    @include('etm_layout.navbars.navs.guest')
@endif
