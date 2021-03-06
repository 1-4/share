<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('backend/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="/home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>            
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i> <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('page-setting.about') }}"><i class="fa fa-circle-o"></i> About</a></li>
            <li><a href="{{ route('page-setting.gallery') }}"><i class="fa fa-circle-o"></i> Gallery</a></li>
            <li><a href="{{ route('page-setting.staff') }}"><i class="fa fa-circle-o"></i> Staff</a></li>
            {{-- <li><a href="/page-setting/about"><i class="fa fa-circle-o"></i> Services</a></li> --}}
          </ul>
        </li>
        <li>
          <a href="{{ route('post.list') }}">
            <i class="fa fa-edit"></i> <span>Post</span>            
          </a>
        </li>
        <li>
          <a href="/inbox">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">
                @if (App\Inbox::count() > 0)
                    {{ App\Inbox::where('read', 0)->count() }}
                @else
                    0
                @endif
              </span>
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('account-setting.index') }}">
            <i class="fa fa-user"></i> <span>Account</span>            
          </a>
        </li>        
        <li>
          <a href="{{ route('siteConfig.index') }}">
            <i class="fa fa-gear"></i> <span>Site Config</span>
          </a>
        </li>                
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>