<!DOCTYPE html>
<html>
<head>
	<title>Detail Admin - New User Form</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/bootstrap/bootstrap-responsive.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/bootstrap/bootstrap-overrides.css') }}" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layout.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/elements.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/icons.css') }}" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lib/font-awesome.css') }}" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/new-user.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="brand" href="{{ url('index') }}"><img src="{{ URL::asset('img/logo.png') }}" /></a>

            <ul class="nav pull-right">                
                <li class="hidden-phone">
                    <input class="search" type="text" />
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-warning-sign"></i>
                        <span class="count">8</span>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="notifications">
                                <h3>You have 6 new notifications</h3>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> New user registration
                                    <span class="time"><i class="icon-time"></i> 13 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> New user registration
                                    <span class="time"><i class="icon-time"></i> 18 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-envelope-alt"></i> New message from Alejandra
                                    <span class="time"><i class="icon-time"></i> 28 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> New user registration
                                    <span class="time"><i class="icon-time"></i> 49 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-download-alt"></i> New order placed
                                    <span class="time"><i class="icon-time"></i> 1 day.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">View all notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-envelope-alt"></i>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="messages">
                                <a href="#" class="item">
                                    <img src="{{ URL::asset('img/contact-img.png') }}" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 13 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <img src="img/contact-img2.png" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, have suffered alterations.
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 26 min.</span>
                                </a>
                                <a href="#" class="item last">
                                    <img src="{{ URL::asset('img/contact-img.png') }}" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 48 min.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">View all messages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        Your account
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('personal-info') }}">Personal info</a></li>
                        <li><a href="#">Account settings</a></li>
                        <li><a href="#">Billing</a></li>
                        <li><a href="#">Export your data</a></li>
                        <li><a href="#">Send feedback</a></li>
                    </ul>
                </li>
                <li class="settings hidden-phone">
                    <a href="{{ url('personal-info') }}" role="button">
                        <i class="icon-cog"></i>
                    </a>
                </li>
                <li class="settings hidden-phone">
                    <a href="{{ url('signin') }}" role="button">
                        <i class="icon-share-alt"></i>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li>                
                <a href="{{ url('index') }}">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            <li>
                <a href="{{ url('chart-showcase') }}">
                    <i class="icon-signal"></i>
                    <span>Charts</span>
                </a>
            </li>
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>Users</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="active submenu">
                    <li><a href="{{url('user-list')}}">User list</a></li>
                    <li><a href="{{ url('new-user') }}" class="active">New user form</a></li>
                    <li><a href="{{ url('user-profile') }}">User profile</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-edit"></i>
                    <span>Forms</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('form-showcase') }}">Form showcase</a></li>
                    <li><a href="{{ url('form-wizard') }}">Form wizard</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('gallery') }}">
                    <i class="icon-picture"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href="{{ url('calendar') }}">
                    <i class="icon-calendar-empty"></i>
                    <span>Calendar</span>
                </a>
            </li>
            <li>
                <a href="{{ url('tables') }}">
                    <i class="icon-th-large"></i>
                    <span>Tables</span>
                </a>
            </li>
            <li>
                <a class="dropdown-toggle ui-elements" href="#">
                    <i class="icon-code-fork"></i>
                    <span>UI Elements</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('ui-elements') }}">UI Elements</a></li>
                    <li><a href="{{ url('icons') }}">Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('personal-info') }}">
                    <i class="icon-cog"></i>
                    <span>My Info</span>
                </a>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-share-alt"></i>
                    <span>Extras</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('code-editor') }}">Code editor</a></li>
                    <li><a href="{{ url('grids') }}">Grids</a></li>
                    <li><a href="{{ url('signin') }}">Sign in</a></li>
                    <li><a href="{{ url('signup') }}">Sign up</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">
        
        <!-- settings changer -->
        <div class="skins-nav">
            <a href="#" class="skin first_nav selected">
                <span class="icon"></span><span class="text">Default</span>
            </a>
            <a href="#" class="skin second_nav" data-file="css/skins/dark.css">
                <span class="icon"></span><span class="text">Dark skin</span>
            </a>
        </div>
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="new-user">
                <div class="row-fluid header">
                    <h3>Create a new user</h3>
                </div>

                <div class="row-fluid form-wrapper">
                    <!-- left column -->
                    <div class="span9 with-sidebar">
                        <div class="container">
                            <form class="new_user_form inline-input" />
                                <div class="span12 field-box">
                                    <label>Name:</label>
                                    <input class="span9" type="text" />
                                </div>
                                <div class="span12 field-box">
                                    <label>State:</label>
                                    <div class="ui-select span5">
                                        <select>
                                            <option value="AK" />Alaska
                                            <option value="HI" />Hawaii
                                            <option value="CA" />California
                                            <option value="NV" />Nevada
                                            <option value="OR" />Oregon
                                            <option value="WA" />Washington
                                            <option value="AZ" />Arizona
                                        </select>
                                    </div>
                                </div>
                                <div class="span12 field-box">
                                    <label>Company:</label>
                                    <input class="span9" type="text" />
                                </div>
                                <div class="span12 field-box">
                                    <label>Email:</label>
                                    <input class="span9" type="text" />
                                </div>
                                <div class="span12 field-box">
                                    <label>Phone:</label>
                                    <input class="span9" type="text" />
                                </div>
                                <div class="span12 field-box">
                                    <label>Website:</label>
                                    <input class="span9" type="text" />
                                </div>
                                <div class="span12 field-box">
                                    <label>Address:</label>
                                    <div class="address-fields">
                                        <input class="span12" type="text" placeholder="Street address" />
                                        <input class="span12 small" type="text" placeholder="City" />
                                        <input class="span12 small" type="text" placeholder="State" />
                                        <input class="span12 small last" type="text" placeholder="Postal Code" />
                                    </div>
                                </div>
                                <div class="span12 field-box textarea">
                                    <label>Notes:</label>
                                    <textarea class="span9"></textarea>
                                    <span class="charactersleft">90 characters remaining. Field limited to 100 characters</span>
                                </div>
                                <div class="span11 field-box actions">
                                    <input type="button" class="btn-glow primary" value="Create user" />
                                    <span>OR</span>
                                    <input type="reset" value="Cancel" class="reset" />
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- side right column -->
                    <div class="span3 form-sidebar pull-right">
                        <div class="btn-group toggle-inputs hidden-tablet">
                            <button class="glow left active" data-input="inline">INLINE INPUTS</button>
                            <button class="glow right" data-input="normal">NORMAL INPUTS</button>
                        </div>
                        <div class="alert alert-info hidden-tablet">
                            <i class="icon-lightbulb pull-left"></i>
                            Click above to see difference between inline and normal inputs on a form
                        </div>                        
                        <h6>Sidebar text for instructions</h6>
                        <p>Add multiple users at once</p>
                        <p>Choose one of the following file types:</p>
                        <ul>
                            <li><a href="#">Upload a vCard file</a></li>
                            <li><a href="#">Import from a CSV file</a></li>
                            <li><a href="#">Import from an Excel file</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main container -->


	<!-- scripts -->
    <script src="{{ URL::asset('js/jquery-latest.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme.js') }}"></script>

    <script type="text/javascript">
        $(function () {

            // toggle form between inline and normal inputs
            var $buttons = $(".toggle-inputs button");
            var $form = $("form.new_user_form");

            $buttons.click(function () {
                var mode = $(this).data("input");
                $buttons.removeClass("active");
                $(this).addClass("active");

                if (mode === "inline") {
                    $form.addClass("inline-input");
                } else {
                    $form.removeClass("inline-input");
                }
            });
        });
    </script>

</body>
</html>