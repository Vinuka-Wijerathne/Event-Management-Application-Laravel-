<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Your logo code here -->
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" role="button">
                        <i class="mdi mdi-sticker-text-outline"></i>
                        <span data-key="t-pages">Pages</span>
                    </a>
                    <div class="menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <!-- Contact Details -->
                            <li class="nav-item">
                                <a href="{{ url('admin/contact-details') }}" class="nav-link" data-key="t-contact-details">
                                    <i class="mdi mdi-phone-outline"></i>
                                    <span>Contact Details</span>
                                </a>
                            </li>

                            <!-- Services Section -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarServices">
                                    <i class="mdi mdi-briefcase"></i>
                                    <span>Services</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarServices">
                                    <ul class="nav nav-sm flex-column">
                                        <!-- Link to All Services Page -->
                                        <li class="nav-item">
                                            <a href="{{ route('backend.services.list') }}" class="nav-link">
                                                <i class="mdi mdi-table"></i>
                                                <span>All Services</span>
                                            </a>
                                        </li>
                                        <!-- Create New Service -->
                                        <li class="nav-item">
                                            <a href="{{ route('backend.serviceDetails.create') }}" class="nav-link text-success">
                                                <i class="mdi mdi-plus-circle-outline"></i>
                                                Create New Service
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Events Section -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarEvents" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEvents">
                                    <i class="mdi mdi-calendar"></i>
                                    <span>Events</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEvents">
                                    <ul class="nav nav-sm flex-column">
                                        <!-- Link to All Events Page -->
                                        <li class="nav-item">
                                            <a href="{{ route('backend.events.list') }}" class="nav-link">
                                                <i class="mdi mdi-table"></i>
                                                <span>All Events</span>
                                            </a>
                                        </li>
                                        <!-- Create New Event -->
                                        <li class="nav-item">
                                            <a href="{{ route('backend.eventDetails.create') }}" class="nav-link text-success">
                                                <i class="mdi mdi-plus-circle-outline"></i>
                                                Create New Event
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
