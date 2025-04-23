<div class="mailWrapper" style="background:#fdfdfd;width: 800px;height: 300px;border: 1px solid #efefef;border-radius: 5px;
margin: 0 auto;box-shadow: 0 0 5px 1px #f1eeee;overflow: hidden">
    <h1 class="mailHeader" style="text-align: center;color: #343434;margin: 40px 0">به بلاگ زین خوش آمدید</h1>
    <div class="mailBody" style="direction: rtl;padding:0 20px;">
        <p class="title"><span>{{$user->name}}</span> عزیز : ضمن عرض خوش آمد گویی خوش حالیم که پذیرای شما در خانواده بزرگ بلاگ زین هستیم.</p>
        <p>اطلاعات کاربری شما به شرح زیر می باشد</p>
        <p>نام کاربری : <span style="font-weight: bold">{{$user->email}}</span></p>
        <p> کلمه عبور : <span style="font-weight: bold">{{$password}}</span></p>
        <div class="alert alert-info my-4">کاربر گرامی : کلمه عبور شما به صورت خودکار توسط سیستم ایجاد شده است در صورت تمایل با مراجعه به پروفایل خود می توانید نسبت به تغیر آن اقدام نمایید.</div>
    </div>
    <div class="mailFooter" style="display:flex;justify-content:center;align-items:center;height:48px;padding:0 20px;background: #f7f7f7;">
        <a href="www.blogzin.com" style="text-decoration: none">www.blogzin.com</a>
    </div>
</div>
