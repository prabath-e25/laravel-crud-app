<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{$title or 'App'}}</title>
    @include('includes.head')
  </head>
  <body class="cbp-spmenu-push">
  	<div class="main-content">
      @include('includes.sidebar-left')
      @include('includes.header')
    		<div id="page-wrapper">
    			<div class="main-page">
            @if(Session::has('message'))
              <div class="alert alert-success" role="alert">
    						<strong>Well done!</strong> {{Session::get('message')}}
    					</div>
            @endif
            @yield('content')
    			</div>
    		</div>
      @include('includes.footer')
    </div>
  @include('includes.scripts')
  </body>
</html>
