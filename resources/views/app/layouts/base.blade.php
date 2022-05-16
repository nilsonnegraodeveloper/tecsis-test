<!DOCTYPE html>
<html lang="pt-br">

<!-- HEADER-->
@include ('app.layouts._includes.header')
<!-- END HEADER-->

<body>
    <!-- Preloader -->
   
    <div id="wrapper">

        <!-- NAVBAR-->
        @include ('app.layouts._includes.navBar')
        <!-- END NAVBAR-->

        <!-- MENU-->
        @include ('app.layouts._includes.menu')
        <!-- END MENU-->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

                        <!-- TITLE-->
                        @yield('title')
                        <!-- END TITLE-->
                                                
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>  
                
                 <!-- MESSAGES-->
                 @include('app.layouts._includes.messages')
                 <!-- END MESSAGES-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">

                            <!-- CONTENT-->
                            @yield('content')
                            <!-- END CONTENT -->

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- FOOTER -->
            @include ('app.layouts._includes.footer')
            <!-- END FOOTER -->

        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- SCRIPTS -->
    @include ('app.layouts._includes.scriptsRodape')
    <!-- END SCRIPTS -->
</body>

<!-- PLUGIN DATATABLES -->
@include ('app.layouts._includes.datatables')
<!-- END PLUGINS DATATABLES -->

</html>
