 <nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/tasks">ToDoo</a>
    </div>


    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('add') ? "active" : " "}}"><a href="/tasks/create">Add Task</a></li>
        <li class="{{Request::is('Done') ? "active" : " "}}"><a href="/tasks/completed">Done</a></li>
         
          
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="search"><i class = "fa fa-btn fa-user"></i></label>
    <div class="input-group">
      <div class="input-group-addon"><i class = "fa fa-btn fa-search"></i></div>
      <input type="text" class="form-control" id="search" placeholder="search">
    
  </div>
  <button type="submit" class="btn btn-primary"> Search</button>
  </form>
          </ul>
    </div><!-- #.navbar-collapse -->
      </div> <!-- #.container-fluid -->
</nav>

 
