@include('navbar.head')
@include('navbar.script')
<!------ Include the above in your HEAD tag ---------->

<div class="container">    

    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 

        <div class="row">                
            <div class="icon text-center">
                <a href="\"><img width="90%" src="{{('assets/img/baru.jpg')}}"><a>
            </div>
        </div>


        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">Sign In</div>
            </div>     

            <div class="panel-body" >
               

                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" type="text" class="form-control" name="email" value="" placeholder="Email">    
                        
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                        
                    </div>                                                                 
                    <br>
                    <br>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                        </div>
                        <div class="card-footer">
                            <div class="text-center small">
                                Don't have an account?<a href="">  Sign Up</a>
                            </div>
                            <div class="text-center small">
                                <a href="">Forgot your password?</a>
                            </div>
                        </div>
                    </div>
                </form>     

            </div>                     
        </div>  
    </div>
</div>

<div id="particles"></div>
