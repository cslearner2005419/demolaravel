<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <p><i class="fa fa-phone"></i><span> Phone</span>011-111-1111</p>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <p>
                    <i class="fa fa-envelope-o"></i>
                    <span> Email</span>
                    {{ HTML::link('#', 'xyz@demolaravel.com') }}                   
                </p>
            </div>
            <div class="col-md-5 col-sm-4 col-xs-12">
                <ul class="social-icon">
                    <li><span>Meet us</span></li>
                    <li>{{ HTML::link('#', '', array('class' => 'fa fa-facebook')) }}</li>
                    <li>{{ HTML::link('#', '', array('class' => 'fa fa-twitter')) }}</li>
                    <li>{{ HTML::link('#', '', array('class' => 'fa fa-instagram')) }}</li>
                </ul>
            </div>
        </div>
    </div>
</header>