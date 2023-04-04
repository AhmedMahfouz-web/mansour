
    <div class="left_sidebar">
        <nav class="sidebar">
            <div class="user-info">
                <div class="image"><a href="javascript:void(0);"><img src="../assets/images/user.png" alt="User"></a></div>
                <div class="detail mt-3">
                    <h5 class="mb-0">Mike Thomas</h5>
                    <small>Admin</small>
                </div>
                <div class="social">
                    <a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
                    <a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
                    <a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
                </div>
            </div>
            <ul id="main-menu" class="metismenu">
                <li class="g_heading">Main</li>

                <li class="active"><a href="index.html"><i class="ti-home"></i><span>Dashboard</span></a></li>
                <li class="open-top">
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-clipboard"></i><span>Locations</span></a>
                    <ul>
                        <li><a href="{{route('show.locations')}}">Show All</a></li>
                        <li><a href="{{route('add.location')}}">Add New</a></li>
                       
                    </ul>
                </li>
                
                <li class="open-top">
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-clipboard"></i><span>Projects</span></a>
                    <ul>
                        <li><a href="{{route('show.projects')}}">Show All</a></li>
                        <li><a href="{{route('add.project')}}">Add New</a></li>
                       
                    </ul>
                </li>


                {{-- <li class="g_heading">Extra</li>
                <li class="open-top">
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-clipboard"></i><span>Pages</span></a>
                    <ul>
                        <li><a href="page-empty.html">Empty page</a></li>
                        <li><a href="page-pricing.html">Pricing cards</a>
                        <li><a href="page-search.html">Search Results</a></li>
                        <li><a href="page-testimonials.html">Testimonials</a></li>
                        <li><a href="page-maps.html">Maps</a></li>
                        <li><a href="page-icons.html">Icons</a></li>
                        <li><a href="page-carousel.html">Carousel</a></li>
                        <li><a href="page-gallery.html">Gallery</a></li>
                        <li><a href="page-lookup.html">Lookup</a></li>
                    </ul>
                </li>
                <li><a href="docs/introduction.html"><i class="ti-file"></i><span>Documentation</span></a></li> --}}
            </ul>            
        </nav>
    </div>