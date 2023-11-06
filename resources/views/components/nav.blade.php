 <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="#"><img src="{{asset('assets/images/dashboard/multikart-logo.png')}}" alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <div class="sidebar-user">
                        <img class="img-60" src="{{asset('assets/images/dashboard/user3.jpg')}}" alt="#">
                        <div>
                            <h6 class="f-14">{{ auth()->user()->name }}</h6>
                            <p>general manager.</p>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li>
                            <a class="sidebar-header" href="userlogin">

                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li >
                            <a class="sidebar-header" href="/admin/list-categories">
                                <span>Category</span>
                               
                            </a>

                            
                        </li>
                           <li >
                            <a class="sidebar-header" href="/admin/list-subcategories">
                                <span>Sup Category</span>
                               
                            </a>

                            
                        </li>
                            <li >
                            <a class="sidebar-header" href="/admin/list-products">
                                <span>product</span>
                               
                            </a>

                            
                        </li>



                       

                     

                      
                           

                    </ul>
                </div>
            </div>
