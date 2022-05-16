
<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse slimscrollsidebar">
      <ul class="nav" id="side-menu">
          <li style="padding: 10px 0 0;">
              <a href="/" class="waves-effect"><i class="fa fa-home fa-fw"
                      aria-hidden="true"></i><span class="hide-menu"> Home</span></a>
          </li>
          <li>
              <a href="{{ route('app.clients.index') }}" class="waves-effect"><i class="fa fa-user fa-fw"
                      aria-hidden="true"></i><span class="hide-menu">Clientes</span></a>
          </li>
          <li>
              <a href="{{ route('app.products.index') }}" class="waves-effect"><i class="fa fa-shopping-bag fa-fw"
                      aria-hidden="true"></i><span class="hide-menu">Produtos</span></a>
          </li>
          <li>
              <a href="{{ route('app.invoices.index') }}" class="waves-effect"><i class="fa fa-money fa-fw"
                      aria-hidden="true"></i><span class="hide-menu">Faturas</span></a>
          </li>  
          {{-- <li>
            <a href="{{ route('app.invoices.index') }}" class="waves-effect"><i class="fa fa-money fa-fw"
                    aria-hidden="true"></i><span class="hide-menu">Faturas</span></a>
        </li>                    --}}
      </ul>
      
  </div>
</div>
<!-- Left navbar-header end -->


