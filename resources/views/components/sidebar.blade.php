<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route(Auth::user()->role === 'admin' ? 'admin.dashboard' : 'user.dashboard') }}">RuangSeni</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route(Auth::user()->role === 'admin' ? 'admin.dashboard' : 'user.dashboard') }}">RS</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        @if (Auth::user()->role == 'admin')
            <li><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
        @else
            <li><a class="nav-link" href="{{ route('user.dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
        @endif
        @if (Auth::user()->role == 'admin')
            <li><a class="nav-link" href="{{ route('admin.user.index') }}"><i class="fas fa-user"></i> <span>Data User</span></a>
            <li><a class="nav-link" href="{{ route('admin.post.index') }}"><i class="fas fa-th"></i> <span>Data Postingan</span></a>
            <li><a class="nav-link" href="{{ route('admin.category.index') }}"><i class="fas fa-th"></i> <span>Data Kategori</span></a>
            <li><a class="nav-link" href="blank.html"><i class="fas fa-calendar-alt"></i> <span>Data Event</span></a>
        @else
            <li><a class="nav-link" href="{{ route('user.post.index') }}"><i class="fas fa-calendar-alt"></i> <span>Data Postingan</span></a>
        @endif
        </li>
        </li>
    </ul>
</div>
