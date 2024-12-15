<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt text-success"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('agents.index') }}" class="nav-link {{ Request::is('agents*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie text-success"></i>
        <p>Agents</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('appointments.index') }}" class="nav-link {{ Request::is('appointments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-check text-success"></i>
        <p>Appointments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('clients.index') }}" class="nav-link {{ Request::is('clients*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users text-success"></i>
        <p>Clients</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('features.index') }}" class="nav-link {{ Request::is('features*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cogs text-success"></i>
        <p>Features</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('images.index') }}" class="nav-link {{ Request::is('images*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-images text-success"></i>
        <p>Images</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('leases.index') }}" class="nav-link {{ Request::is('leases*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-contract text-success"></i>
        <p>Leases</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('properties.index') }}" class="nav-link {{ Request::is('properties*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-building text-success"></i>
        <p>Properties</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('transactions.index') }}" class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-exchange-alt text-success"></i>
        <p>Transactions</p>
    </a>
</li>

@if(auth()->user()->hasRole('super admin'))
    <li class="nav-item has-treeview {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users-cog" style="color: green;"></i>
            <p>
                Users and Controls
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users-cog" style="color: green;"></i>
                    <p>Roles</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-key" style="color: green;"></i>
                    <p>Permissions</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users" style="color: green;"></i>
                    <p>Users</p>
                </a>
            </li>
        </ul>
    </li>
@endif