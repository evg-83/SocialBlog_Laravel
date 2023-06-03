  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->

      <!-- Sidebar -->
      <div>
          <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <!-- Добавить значки в ссылки, используя класс .nav-icon
              с шрифтом-удивительной или любой другой библиотекой шрифтов -->
              <li class="nav-item">
                  <a href="{{ route('admin.main.index') }}" class="nav-link">
                      <i class="nav-icon fas fa-home"></i>
                      <p>
                          Главная
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('admin.user.index') }}" class="nav-link">
                      <i class="nav-icon fas fa-solid fa-users"></i>
                      <p>
                          Пользователи
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('admin.post.index') }}" class="nav-link">
                      <i class="nav-icon fas fa-regular fa-clipboard"></i>
                      <p>
                          Посты
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('admin.category.index') }}" class="nav-link">
                      <i class="nav-icon fas fa-solid fa-list"></i>
                      <p>
                          Категории
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('admin.tag.index') }}" class="nav-link">
                      <i class="nav-icon fas fa-solid fa-tags"></i>
                      <p>
                          Тэги
                      </p>
                  </a>
              </li>
          </ul>
      </div>
      <!-- /.sidebar -->
  </aside>
