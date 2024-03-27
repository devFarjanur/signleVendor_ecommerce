
<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          single<span>Vendor</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              
              <span class="link-title">Dashboard</span>
            </a>
          </li>
         

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#customer" role="button" aria-expanded="false" aria-controls="customer">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Customers</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#product" role="button" aria-expanded="false" aria-controls="product">
              <i class="link-icon" data-feather="shopping-bag"></i>
              <span class="link-title">Products</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="product">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('admin.product') }}" class="nav-link">All Products</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.add.product') }}" class="nav-link">Add Product</a>
                </li>
                <li class="nav-item">
                  <a href="pages/advanced-ui/sortablejs.html" class="nav-link">Edit Product</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#order" role="button" aria-expanded="false" aria-controls="order">
              <i class="link-icon" data-feather="shopping-cart"></i>
              <span class="link-title">Orders</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Message</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>
          
        </ul>
      </div>
    </nav>