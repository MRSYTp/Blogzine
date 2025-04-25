<div class="mailWrapper" style="background:#fdfdfd;width: 800px;height: 300px;border: 1px solid #efefef;border-radius: 5px;
margin: 0 auto;box-shadow: 0 0 5px 1px #f1eeee;overflow: hidden">
    <h1 class="mailHeader" style="text-align: center;color: #343434;margin: 40px 0">بازیابی رمز عبور</h1>
    <div class="mailBody" style="direction: rtl;padding:0 20px;">
        <p class="title"><span>{{$user->name}}</span> بازیابی رمز عبور با موفقیت انجام شد و رمز عبور فعلی شما و ایمیل شما به شرح زیر میباشد برای بازیابی دوباره ی رمز عبور خود میتوانید به پنل مدیریت خود مراجعه کنید 

            موفق باشین.</p>
        <p> ایمیل : <span style="font-weight: bold">{{$user->email}}</span></p>
        <p> کلمه عبور : <span style="font-weight: bold">{{$password}}</span></p>
    </div>
    <div class="mailFooter" style="display:flex;justify-content:center;align-items:center;height:48px;padding:0 20px;background: #f7f7f7;">
        <a href="www.blogzin.com" style="text-decoration: none">www.blogzin.com</a>
    </div>
</div>
