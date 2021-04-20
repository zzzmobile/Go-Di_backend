<!DOCTYPE html>
<html>

<head> 
   

                
</head>

<body>
    @if($divice_type == 'iphone')
<script type="text/javascript">
        setTimeout(function () { window.location.href = "{{ $url }}"; }, 25);
        window.location.href = "com.digitalhole.b2b://{{ $user_id }}/{{ $card_id }}/{{ $first_letter }}";

    </script>
@endif
    @if($divice_type == 'android')
<script type="text/javascript">

    
        setTimeout(function () { window.location.href = "{{ $url }}"; }, 25);
        window.location = "http://app.com/card/{{ $user_id }}/{{ $card_id }}/{{ $first_letter }}";

    </script> 
@endif 
  @if($divice_type == '')
  <script type="text/javascript">
  setTimeout(function () { window.location.href = "{{ $url }}"; }, 5);
   </script>
@endif



</body>
</html>