<!DOCTYPE html>
<html>
    <header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container"= "col-xs-12" ></div>
         <div class="container"= "col-sm-offset-2 col-sm-8"></div> 
          <div class="container"= "col-md-offset-2 col-sm-8"></div> 
           <div class=container= "col-lg-offset-3 col-lg-6"></div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">KADAI-TASKLIST</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>{!! link_to_route('tasks.create', 'SUBMIT NEW TASK') !!}</li>
                </ul>
            </div>
        </div>
    </nav>
</header>
</html>