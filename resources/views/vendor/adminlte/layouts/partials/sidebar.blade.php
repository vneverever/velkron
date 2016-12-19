<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="{{ url('reports') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.reports') }}</span></a></li>
            <li><a href="{{ url('campaigns') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.campaigns') }}</span></a></li>
            <li><a href="{{ url('new_campaigns') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.new_campaigns') }}</span></a></li>
            <li><a href="{{ url('payments') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.payments') }}</span></a></li>
            <li><a href="{{ url('settings') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.settings') }}</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
