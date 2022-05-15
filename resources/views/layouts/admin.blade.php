<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="./Ubold/css/app.min.css" id="app-style">
    <link rel="stylesheet" href="./Ubold/css/icons.min.css">
</head>
<body class="loading" data-layout-mode="default" data-layout-color="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

<div id="wrapper">
      @include('layouts.components.admin.navbar')
      @include('layouts.components.admin.sidebar')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                    <li class="breadcrumb-item active">Buttons</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Buttons</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- content -->
          @include('layouts.components.admin.footer')
    </div>
</div>

<div class="rightbar-overlay"></div>
<script src="./Ubold/js/vendor.min.js"></script>
<script src="./Ubold/js/app.min.js"></script>

</body>
</html>
