<!DOCTYPE html>
<html>
@include('sections.head')
<body class="hold-transition sidebar-mini">
  <div class="wrapper" id="app">
      <apps ruta="{{route('basepath')}}"></apps>
  </div>
  @include('sections.script')
</body>
</html>
