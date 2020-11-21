<html>

<body>
    <div class="find-us">
        <div class="container"> <!--khung chứa-->
            <div class="row"> <!-- tạo dòng -->
                <div class="col-md-12"> <!-- chia 12 cột trong 1 dòng-->
                    <div class="section-heading">
                        <h2>Địa chỉ doanh nghiệp của tôi</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="map">  
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7446.055092098303!2d105.77446!3d21.071562!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2sHanoi%20University%20of%20Mining%20and%20Geology!5e0!3m2!1sen!2s!4v1605862459818!5m2!1sen!2s"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>Địa chỉ của tôi</h4>
                        <p>Số 18 Phố Viên, Đông Ngạc, Bắc Từ Liêm, Hà Nội 100000</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Gửi tin nhắn cho Car rental</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="concatQL.php" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset> <!-- tạo bo khung -->
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" >
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                            placeholder="Subject" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" name="btnSub" class="filled-button">Send
                                            Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/ngocduc.jpg" class="img-fluid" alt="">

                    <h5 class="text-center" style="margin-top: 15px;">Ngọc Đức</h5>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</body>

</html>