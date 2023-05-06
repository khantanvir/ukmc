<nav id="sidebar">

    <div class="navbar-nav theme-brand flex-row  text-center">
        <div class="nav-logo">
            <div class="nav-item theme-logo">
                <a href="#">
                    <img src="{{ asset('backend/src/assets/img/logo2.svg') }}" class="navbar-logo" alt="logo">
                </a>
            </div>
            <div class="nav-item theme-text">
                <a href="#" class="nav-link"> UKMC </a>
            </div>
        </div>
        <div class="nav-item sidebar-toggle">
            <div class="btn-toggle sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
            </div>
        </div>
    </div>
    <div class="shadow-bottom"></div>
    <ul class="list-unstyled menu-categories" id="accordionExample">
        <li class="menu {{ (!empty($dashboard) && $dashboard==true)?'active':'' }}">
            <a href="{{ URL::to('/') }}" data-bs-toggle="" aria-expanded="true" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span>Dashboard</span>
                </div>
            </a>
        </li>
        
        <li class="menu {{ (!empty($application) && $application==true)?'active':'' }}">
            <a href="#datatables1" data-bs-toggle="collapse" aria-expanded="{{ (!empty($application) && $application==true)?'true':'false' }}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    <span>Application</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="{{ (!empty($application) && $application==true)?'collapse show':'collapse' }} submenu list-unstyled" id="datatables1" data-bs-parent="#accordionExample">
                <li class="{{ (!empty($application_add) && $application_add==true)?'active':'' }}">
                    <a href="{{ URL::to('application-create') }}"> Add Application</a>
                </li>
                <li class="{{ (!empty($application_all) && $application_all==true)?'active':'' }}">
                    <a href="{{ URL::to('all-application') }}"> All Application </a>
                </li>
                <li class="{{ (!empty($application_ongoing) && $application_ongoing==true)?'active':'' }}">
                    <a href="{{ URL::to('ongoing-applications') }}"> Ongoing Application </a>
                </li>
                <li class="{{ (!empty($application_enrolled) && $application_enrolled==true)?'active':'' }}">
                    <a href="{{ URL::to('enrolled-students') }}"> Enrolled Students </a>
                </li>
                <li class="{{ (!empty($application_archived) && $application_archived==true)?'active':'' }}">
                    <a href="{{ URL::to('archive-students') }}"> Archive Students </a>
                </li>
            </ul>
        </li>
        <li class="menu {{ (!empty($campus) && $campus==true)?'active':'' }}">
            <a href="#datatables2" data-bs-toggle="collapse" aria-expanded="{{ (!empty($campus) && $campus==true)?'true':'false' }}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    <span>Campus</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="{{ (!empty($campus) && $campus==true)?'collapse show':'collapse' }} submenu list-unstyled" id="datatables2" data-bs-parent="#accordionExample">
                <li class="{{ (!empty($campus_add) && $campus_add==true)?'active':'' }}">
                    <a href="{{ URL::to('campus-create') }}"> Add Campus</a>
                </li>
                <li class="{{ (!empty($campus_all) && $campus_all==true)?'active':'' }}">
                    <a href="{{ URL::to('all-campus') }}"> All Campus </a>
                </li>
                <li class="{{ (!empty($campus_archive) && $campus_archive==true)?'active':'' }}">
                    <a href="{{ URL::to('archived-campus') }}"> Archive Campus </a>
                </li>
            </ul>
        </li>
        <li class="menu {{ (!empty($course) && $course==true)?'active':'' }}">
            <a href="#datatables3" data-bs-toggle="collapse" aria-expanded="{{ (!empty($course) && $course==true)?'true':'false' }}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    <span>Courses</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="{{ (!empty($course) && $course==true)?'collapse show':'collapse' }} submenu list-unstyled" id="datatables3" data-bs-parent="#accordionExample">
                <li class="{{ (!empty($course_add) && $course_add==true)?'active':'' }}">
                    <a href="{{ URL::to('course-create') }}"> Add Course</a>
                </li>
                <li class="{{ (!empty($course_all) && $course_all==true)?'active':'' }}">
                    <a href="{{ URL::to('all-course') }}"> All Course </a>
                </li>
                <li class="{{ (!empty($course_archive) && $course_archive==true)?'active':'' }}">
                    <a href="{{ URL::to('archived-courses') }}"> Archive Course </a>
                </li>
            </ul>
        </li>
        <li class="menu {{ (!empty($usermanagement) && $usermanagement==true)?'active':'' }}">
            <a href="{{ URL::to('user-list') }}" data-bs-toggle="" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <span>User Management</span>
                </div>
            </a>
        </li>
        <li class="menu {{ (!empty($agent) && $agent==true)?'active':'' }}">
            <a href="{{ URL::to('agents') }}" data-bs-toggle="" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <span>Agent Management</span>
                </div>
            </a>
        </li>
        <li class="menu {{ (!empty($task) && $task==true)?'active':'' }}">
            <a href="#menuLevel1" data-bs-toggle="collapse" aria-expanded="{{ (!empty($course) && $course==true)?'true':'false' }}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                    <span>Task Management</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="{{ (!empty($task) && $task==true)?'collapse show':'collapse' }} submenu list-unstyled" id="menuLevel1" data-bs-parent="#accordionExample">
                <li class="{{ (!empty($task_add) && $task_add==true)?'active':'' }}">
                    <a href="{{ URL::to('task-create') }}"> Create Task </a>
                </li>
                <li class="{{ (!empty($task_all) && $task_all==true)?'active':'' }}">
                    <a href="{{ URL::to('task-list') }}"> All Task </a>
                </li>
                <li class="{{ (!empty($task_my) && $task_my==true)?'active':'' }}">
                    <a href="{{ URL::to('my-tasks') }}"> My Tasks </a>
                </li>
            </ul>
        </li>
        <li class="menu">
            <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    <span>Settings</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                <li>
                    <a href="./user-profile.html">My Profile </a>
                </li>
                <li>
                    <a href="./user-account-settings.html"> Profile Settings </a>
                </li>
                <li>
                    <a href="#"> Software Settings </a>
                </li>
            </ul>
        </li>

    </ul>

</nav>