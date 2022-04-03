    <footer class="py-5 bg-dark">
      <div class="container">
         <div class="login-box">
                <h2>Theo dõi News trên</h2>
                <a href="https://www.facebook.com/" class="social-button" id="facebook-connect"> <span> Facebook</span></a>
                <a href="https://www.plus.google.com/" class="social-button" id="google-connect"> <span> Google</span></a>
                <a href="https://twitter.com/" class="social-button" id="twitter-connect"> <span> Twitter</span></a>
                <div class="thongtin">
                    <h4>Báo tiếng Việt nhiều người xem nhất</h4>
                    <h4>Thuộc Bộ Khoa Công Nghệ Thông Tin</h4>
                    <h4>ngày 22/03/2022</h4>
                    <h4>Phó Tổng Biên tập phụ trách: Trần Huy Hoàng - Trần Công Tuấn Anh</h4>
                    <h4>Địa chỉ: abc/xyz- NamDinhCity</h4>
                </div>
          </div>
        <p class="m-0 text-center text-white">©2022. Toàn bộ bản quyền thuộc News &copy; Tran Huy Hoang</p>
      </div>
      <style>
        .social-button {
    background-position: 25px 0px;
  box-sizing: border-box;
  color: rgb(255, 255, 255);
  cursor: pointer;
  display: inline-block;
  height: 50px;
    line-height: 50px;
  text-align: left;
  text-decoration: none;
  text-transform: uppercase;
  vertical-align: middle;
  width: 200px;
    border-radius: 3px;
  margin: 10px auto;
  outline: rgb(255, 255, 255) none 0px;
  padding-left: 5%;
  transition: all 0.2s cubic-bezier(0.72, 0.01, 0.56, 1) 0s;
    -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#facebook-connect {
  background: rgb(255, 255, 255) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/facebook.svg?sanitize=true') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
  border: 1px solid rgb(60, 90, 154);
}

#facebook-connect:hover {
    border-color: rgb(60, 90, 154);
    background: rgb(60, 90, 154) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/facebook-white.svg?sanitize=true') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
    -webkit-transition: all .8s ease-out;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease-out;
}

#facebook-connect span {
    box-sizing: border-box;
  color: rgb(60, 90, 154);
  cursor: pointer;
  text-align: center;
  text-transform: uppercase;
  border: 0px none rgb(255, 255, 255);
  outline: rgb(255, 255, 255) none 0px;
    -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#facebook-connect:hover span {
    color: #FFF;
    -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#google-connect {
  background: rgb(255, 255, 255) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/google-plus.png') no-repeat scroll 5px 0px / 50px 50px padding-box border-box;
  border: 1px solid rgb(220, 74, 61);
}

#google-connect:hover {
    border-color: rgb(220, 74, 61);
    background: rgb(220, 74, 61) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/google-plus-white.png') no-repeat scroll 5px 0px / 50px 50px padding-box border-box;
    -webkit-transition: all .8s ease-out;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease-out;
}

#google-connect span {
    box-sizing: border-box;
  color: rgb(220, 74, 61);
  cursor: pointer;
  text-align: center;
  text-transform: uppercase;
  border: 0px none rgb(220, 74, 61);
  outline: rgb(255, 255, 255) none 0px;
    -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#google-connect:hover span {
    color: #FFF;
    -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#twitter-connect {
  background: rgb(255, 255, 255) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/twitter.png') no-repeat scroll 5px 1px / 45px 45px padding-box border-box;
  border: 1px solid rgb(85, 172, 238);
}

#twitter-connect:hover {
    border-color: rgb(85, 172, 238);
    background: rgb(85, 172, 238) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/twitter-white.png') no-repeat scroll 5px 1px / 45px 45px padding-box border-box;
    -webkit-transition: all .8s ease-out;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease-out;
}

#twitter-connect span {
    box-sizing: border-box;
  color: rgb(85, 172, 238);
  cursor: pointer;
  text-align: center;
  text-transform: uppercase;
  border: 0px none rgb(220, 74, 61);
  outline: rgb(255, 255, 255) none 0px;
    -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#twitter-connect:hover span {
    color: #FFF;
    -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

.thongtin h4{
   color : white;
   font-size : 15px;
}
 </style>
      <!-- /.container -->
</footer>