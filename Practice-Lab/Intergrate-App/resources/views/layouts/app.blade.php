<!DOCTYPE html>
<html lang="en">

<head>
@include('includes.meta')

@include('includes.title')

 @include('includes.styles')
 <!-- Page Header -->
  @include('includes.header')


</head>

<body>

  <!-- Navigation -->
  @include('includes.menu')
 
  <!-- Main Content -->
  <div class="container">
    <div class="row">
    @yield('content')
    </div>      
    </div>

  <!-- Footer -->
@include('includes.footer')

  @include('includes.scripts')
</body>

</html>
