<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
</head>

<body>
  <div class="container-scroller">
    @include ('admin.sidebar')
    <div class="container-fluid page-body-wrapper">
      @include ('admin.navbar')
    </div>
  </div>
  @include('admin.script')
</body>

</html>