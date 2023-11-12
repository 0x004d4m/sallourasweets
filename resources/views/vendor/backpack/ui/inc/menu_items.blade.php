<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
{{-- <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> {{ __('sidebar.authentication') }}</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>{{ __('sidebar.users') }}</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-group"></i> <span>{{ __('sidebar.roles') }}</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>{{ __('sidebar.permissions') }}</span></a></li>
    </ul>
</li> --}}
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-globe"></i> {{ __('sidebar.translations') }}</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('language') }}"><i class="nav-icon la la-flag-checkered"></i> {{ __('sidebar.languages') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('language/texts') }}"><i class="nav-icon la la-language"></i> {{ __('sidebar.site_texts') }}</a></li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('branch') }}'><i class='nav-icon la la-city'></i> {{ __('sidebar.branch') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-tag'></i> {{ __('sidebar.category') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('item') }}'><i class='nav-icon la la-shopping-cart'></i> {{ __('sidebar.item') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('image') }}'><i class='nav-icon la la-facebook'></i> {{ __('sidebar.images') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('testmonial') }}'><i class='nav-icon la la-comments'></i> {{ __('sidebar.testmonial') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('social') }}'><i class='nav-icon la la-facebook'></i> {{ __('sidebar.social') }}</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-globe"></i> {{ __('sidebar.lang') }}</a>
    <ul class="nav-dropdown-items">
        @foreach (Backpack\LangFileManager\app\Models\Language::get() as $Language)
            <li class="nav-item"><a class="nav-link @if ($Language->abbr == Session::get('locale'))active @endif" href="{{url('set-language/'.$Language->abbr)}}">{{$Language->abbr}} - {{$Language->name}}</a></li>
        @endforeach
    </ul>
</li>

{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li> --}}

<x-backpack::menu-item title="Policies" icon="la la-question" :link="backpack_url('policy')" />