

     @include('admin/inc/header')
     @include('admin/inc/alert')

<body>
       
       @include('admin/inc/top_nav')
        @include('admin/inc/sidebar')

 
                @yield('content')
           
        @include('admin.inc.footer')

        <!-- @include('admin/inc/sweetalert') -->
            
              
    
  
    
</body>
</html>

