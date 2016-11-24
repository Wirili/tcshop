<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{Auth::guard('admin')->user()->name}}</strong>
                            </span> <span class="text-muted text-xs block">个人中心 <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">修改密码</a></li>
                        <li><a href="{{route('admin.logout')}}">退出</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ isActivePRoute('admin.goods') }}">
                <a href="javascript:void(0);"><i class="fa fa-th-large"></i> <span class="nav-label">商品管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ isActiveRoute('admin.admin') }}"><a href="{{route('admin.admin')}}">商品列表</a></li>
                    <li class="{{ isActiveRoute('admin.goods.brand.index') }}"><a href="{{route('admin.goods.brand.index')}}">品牌列表</a></li>
                </ul>
            </li>
            <li class="{{ isActivePRoute('admin.admin') }}">
                <a href="javascript:void(0);"><i class="fa fa-th-large"></i> <span class="nav-label">系统管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ isActiveRoute('admin.admin') }}"><a href="{{route('admin.admin')}}">管理员列表</a></li>
                </ul>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
        </ul>

    </div>
</nav>
