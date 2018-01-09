@section('navbar')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="/getUsers" class="navbar-brand" target="popup"
                   onclick="window.open('/getUsers','popup','width=800,height=600'); return false;"><img src="images/sisense_logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Why Sisense</a></li>
                    <li><a href="#">Platform</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Customers</a></li>
                    <li>
                        <button class="btn" type="button" data-toggle="modal" data-target="#myModal">Start Now</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@show