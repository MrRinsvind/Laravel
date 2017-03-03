<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/boot.css')}}">
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>


<body>

    <div id="wrapper">
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/admin')}}">Home</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/logout')}}">
                       Выход
                    </a>
                    
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                   го
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        

                        <li>
                            <a href="{{route('admin.products.index')}}" >Товары</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.products.create')}}">Создать товар</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.products.index')}}">Все товары</a>
                                </li>
                            </ul>
                        
                        </li>
                         <li>
                            <a href="{{route('admin.users.index')}}" >Пользователи</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.users.create')}}">Создать Пользователя</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.users.index')}}">Все Пользователи</a>
                                </li>
                            </ul>
                        
                        </li>
                        <li>
                            <a href="{{route('admin.categories.index')}}"> Категории</a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="{{route('admin.categories.index')}}">Все категории</a>
                                </li>
                            </ul>
                        
                        </li>
                        
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<div  id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>

				@yield('content')
			</div>
		</div>
	</div>
</div>

</div>
<script src="{{asset('js/boot.js')}}"></script>
@yield('footer')
</body>
</html>