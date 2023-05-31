
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        {{-- <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav --> --}}


        <li class="nav-heading">Pages</li>


        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('statisticPage') }}">
                <i class="ri-line-chart-line"></i>
                <span>Dashboard</span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('profileUserPage') }}">
                <i class="ri-account-box-line"></i>
                <span>Profile</span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link collapsed d-flex align-items-center justify-content-between"
                href="{{ route('inboxPage') }}">
                <div>
                    <i class="ri-inbox-line"></i>
                    <span class="mr-2">Inbox</span>
                </div>
                <button class="btn btn-danger btn-sm">
                    <span class="badge badge-light"></span>
                </button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('teamPage') }}">
                <i class="ri-team-line"></i>
                <span>Team</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('produkPage') }}">
                <i class="ri-archive-line"></i>
                <span>Product</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('catalogPage') }}">
                <i class="ri-book-open-line"></i>
                <span>Catalog</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('usersPage') }}">
                <i class="ri-group-line"></i>
                <span>User</span>
            </a>
        </li>



        {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Login</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Logout</span>
        </a>
      </li> --}}

    </ul>

</aside><!-- End Sidebar-->

<script>
    window.addEventListener('DOMContentLoaded', function() {
        // Make an AJAX request to the countUnreadInbox route
        fetch("{{ route('countUnreadInbox') }}")
            .then(response => response.json())
            .then(data => {
                // Update the unread message count in the button
                const unreadMessageCount = data.unreadMessageCount;
                const badge = document.querySelector('.btn-danger .badge');
                if (badge) {
                    badge.textContent = unreadMessageCount;
                }
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
