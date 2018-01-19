<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-tabs pull-right">
            <li role="presentation"><a href="galeri">Gallery <span class="badge">6</span></a></li>
            <li role="presentation"><a href="data">Siswa <span class="badge">2</span></a></li>
            <li role="presentation"><a href="paragrap">Paragrap</a></li>
            <li role="presentation"><a href="quote">Quote <span class="badge">5</span></a></li>
            <li role="presentation"><a href="biodata">Biodata <span class="badge">1</span></a></li>
          </ul>
        
        <h4 class="text-muted">Login Sebagai : <font face="Comic Sans MS" color="blue">{{ Auth::user()->name }}</font> </h4>
        
      </div>   
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
        </li></div><hr></nav>