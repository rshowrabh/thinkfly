<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
            <li> <a href="/" target="_blank"><i class="fas fa-home"></i> <span>Home Page</span></a> </li>
            <li class="{{ set_active(['admin']) }}"> <a href="{{route('admin.index')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="{{ set_active(['admin/appointment']) }}"> <a href="{{route('appointment.index')}}"><i class="fas fa-suitcase"></i> <span>Appointment</span></a> </li>
                <li class="submenu"> <a href="#"><i class="fas fa-edit"></i> <span> Frontend </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['admin/banner']) }}" href={{route('banner.index')}}> Banner </a></li>
                    </ul>
                </li>
                {{-- <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allcustomers/page']) }}" href="#"> All customers </a></li>
                        <li><a class="{{ request()->is('form/customer/edit/*') ? 'active' : '' }}"> Edit Customer </a></li>
                        <li><a class="{{ set_active(['form/addcustomer/page']) }}" href="#"> Add Customer </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allrooms/page']) }}" href="#">All Rooms </a></li>
                        <li><a class="{{ request()->is('form/room/edit/*') ? 'active' : '' }}"> Edit Rooms </a></li>
                        <li><a class="{{ set_active(['form/addroom/page']) }}" href="#"> Add Rooms </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a  class="{{ set_active(['form/emplyee/list']) }}" href="#">Employees List </a></li>
                        <li><a  class="{{ set_active(['form/employee/add']) }}" href="#">Employees Add </a></li>
                        <li><a  class="{{ set_active(['form/leaves/page']) }}" href="{#">Leaves </a></li>
                        <li><a href="holidays.html">Holidays </a></li>
                        <li><a href="attendance.html">Attendance </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="invoices.html">Invoices </a></li>
                        <li><a href="payments.html">Payments </a></li>
                        <li><a href="expenses.html">Expenses </a></li>
                        <li><a href="taxes.html">Taxes </a></li>
                        <li><a href="provident-fund.html">Provident Fund </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="salary.html">Employee Salary </a></li>
                        <li><a href="salary-veiw.html">Payslip </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-user-plus"></i> 
                        <span> User Management </span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['users/add/new']) }}" href="#">Add User</a></li>
                        <li><a class="{{ set_active(['users/list/page']) }}" href="#">All User</a></li>
                        <li><a href="">User Log Activity </a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>