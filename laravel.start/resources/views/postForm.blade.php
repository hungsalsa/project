<form action= "{{route('postForm')}}" method= "post" >
<label for="">Ten</label>
    <input type= "text" name = "name" >
    <input type= "text" name = "age" >
    <input type= "submit" >

    <!-- Chào bạn, khi bạn muốn gửi dữ liệu lên server thông qua form thì Laravel sẽ yêu cầu bạn phải có một mã xác nhận ( token ) thì Laravel mới cho bạn gửi dữ liệu lên. Token sẽ được cấp khi người dùng mở trang web lên, điều này nhằm mục đích ngăn chặn trường hợp một cái form khác không phải của trang web gửi dữ liệu lên server.﻿ -->
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">﻿
</form>