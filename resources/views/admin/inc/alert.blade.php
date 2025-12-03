
<div class="row">
    <div class="col-2 offeset-10">
    <div class="main_alert ">
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('warning'))
        <div class="alert alert-warning">{{Session::get('warning')}}</div>
    @endif
    @if(Session::has('danger'))
        <div class="alert alert-danger">{{Session::get('danger')}}</div>
    @endif
</div>
    </div>
</div>

<script>
  $(document).ready(function(){
    $(".main_alert .alert").delay(1000).fadeOut(3000); 
    // 3 sec baad fadeOut start, 1 sec me khatam
  });

</script>

