<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        <span>Kodegiri</span>Test
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div class="sidebar-body">
      <ul class="nav">
        {{-- section main --}}
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        {{-- end section main --}}

        {{-- section master data --}}
        <li class="nav-item nav-category">Master Data</li>


        <li class="nav-item">
          <a href="{{route('documentManagement.index')}}" class="nav-link">
            <i class="link-icon" data-feather="book-open"></i>
            <span class="link-title">Document Management</span>
          </a>
        </li>
        {{-- end section master data --}}
      </ul>
    </div>
</nav>
