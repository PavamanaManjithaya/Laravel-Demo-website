<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">Laravel</a>
      </div>
      
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li class="{{Request::is('/')?'active':''}}">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="{{Request::is('about')?'active':''}}">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="{{Request::is('contact')? 'active':''}}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>