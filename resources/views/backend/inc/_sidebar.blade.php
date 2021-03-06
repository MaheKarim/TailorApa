<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}"   alt="image profile" class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level"> {{ Auth::user()->role->name }} </span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>


                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a class="btn btn-info" target="_blank" href="{{ url('/') }}">
                        <i style="color: white" class="fas fa-home"></i>
                        <p style="color: white">Go To Site</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Internal Function</h4>
                </li>
                 <li class="nav-item">
                   <a href="{{ route('admin.dashboard') }}">
                       <i class="fas fa-user-md"></i>
                       <p>Dashboard</p>
                   </a>
               </li>
                <li class="nav-item">
                    <a href="{{ route('admin.showAllUser') }}">
                        <i class="fas fa-user-shield"></i>
                        <p>Show All User</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('makingPriceShow') }}">
                        <i class="fa fa-building"></i>
                        <p>Product Making Price</p>

                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Product Sell</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ route('showProduct') }}">
                            <i class="fa fa-window-restore"></i>
                            <p>Product Sell</p>
                            {{-- <span class="badge badge-success">4</span> --}}
                    </a>
                </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Internal Function</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Seetings</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.settings') }}">
                                        <span class="sub-item">Control Panel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/log-reader') }}">
                                        <span class="sub-item">Log Reader</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
            </ul>
        </div>
    </div>
</div>
