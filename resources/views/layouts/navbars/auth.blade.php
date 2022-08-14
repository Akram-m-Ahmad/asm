<style>
    .sidebar {
        direction: ltr
    }

</style>
<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img  src="{{ asset('paper') }}/img/logo.png">
            </div>
        </a>
        <a href="" class="simple-text logo-normal">
            {{ __('بلا قيود') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <!-- <li class="{{ $elementActive == 'countries' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'countries') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('الدول') }}</p>
                </a>
            </li> -->
            <li class="{{ $elementActive == 'about' ? 'active' : '' }}">
                <a href="{{ route('page.index','about') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __(' نظرة عامة') }}</p>
                </a>
            </li>
           
            <li class="{{ $elementActive == 'about_str' ? 'active' : '' }}">
                <a href="{{ route('page.index','about_str') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('(هيكلية) نظرة عامة') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'activities' ? 'active' : '' }}">
                <a href="{{ route('page.index','activities') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('النشاطات') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'domains' ? 'active' : '' }}">
                <a href="{{ route('page.index','domains') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('مجالاتنا') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'catdets' ? 'active' : '' }}">
                <a href="{{ route('page.index','catdets') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('من نحن  تبويب') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'details' ? 'active' : '' }}">
                <a href="{{ route('page.index','details') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('من نحن ') }}</p>
                </a>
            </li>
            
            <li class="{{ $elementActive == 'contact' ? 'active' : '' }}">
                <a href="{{ route('page.index','contact') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('الاتصال') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'media' ? 'active' : '' }}">
                <a href="{{ route('page.index','media') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('ميديا') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'pre_project' ? 'active' : '' }}">
                <a href="{{ route('page.index','pre_project') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('المشاريع السابقة') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'under_project' ? 'active' : '' }}">
                <a href="{{ route('page.index','under_project') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('المشاريع المستقبلية ') }}</p>
                </a>
            </li>
             <li class="{{ $elementActive == 'slider' ? 'active' : '' }}">
                <a href="{{ route('page.index','slider') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __(' الصور المتحركة') }}</p>
                </a>
            </li>
            </li> <li class="{{ $elementActive == 'statistics' ? 'active' : '' }}">
                <a href="{{ route('page.index','statistics') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('  ارقام') }}</p>
                </a>
            </li>
            </li> <li class="{{ $elementActive == 'teams' ? 'active' : '' }}">
                <a href="{{ route('page.index','teams') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __('  فريق العمل') }}</p>
                </a>
            </li>
            <!-- <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                        {{ __('Laravel examples') }}
                        <b class="caret"></b>
                    </p>
                </a> -->
                <!-- <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            
            <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li> -->

        </ul>
    </div>
</div>
