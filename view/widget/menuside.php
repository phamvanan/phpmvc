<div class="site-menubar">
  <div class="site-menubar-body">
    <div>
      <div>
        <ul class="site-menu" data-plugin="menu">
          <li class="site-menu-category">Hệ thống quản lý</li>
          <li class="site-menu-item">
            <a href="?controller=home">
              <i class="site-menu-icon wb-home" aria-hidden="true"></i>
              <span class="site-menu-title">Trang chủ</span>
            </a>

          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
              <i class="site-menu-icon wb-library" aria-hidden="true"></i>
              <span class="site-menu-title">Quản lý danh mục</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="?controller=user">
                  <span class="site-menu-title">User</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="?controller=category">
                  <span class="site-menu-title">Category</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="<?= href("product", "index") ?>">
                  <span class="site-menu-title">Product</span>
                </a>
              </li>
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </div>