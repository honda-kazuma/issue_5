<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第5回 課題</title>
    <link href="https://fonts.google.com/noto/specimen/Noto+Sans+JP?query=noto">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>

    <?php include "./header.php" ?>

    <main>
        <section data-id="#0" id="0">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/slide_1.jpg" alt=""/>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slide_2.jpg" alt=""/>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slide_3.jpg" alt=""/>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <div>
            <p class="main_logo">今年も始まる<span>夏祭り</span></p>
        </div>
                
        <section data-id="#1" class="main_box1" id="1">
            <p class="main_logo1">スケジュール</p>

            <div class="big_area">
                <div class="big_area_menu">
                    <div class="main_text1">
                        <div class="main_text_menu active">
                            <p id="day1" class="text_content active">9月1日</p>
                        </div>
                        <div class="main_text_menu">
                            <p id="day2" class="text_content">9月2日</p>
                        </div>
                        <div class="main_text_menu">
                            <p id="day3" class="text_content">9月3日</p>
                        </div>
                    </div>
                    
                    <div class="non_text_area">
                        <div class="non_area">
                            <p class="non_area_content"></p>
                        </div>
                        <div class="non_area">
                            <p class="non_area_content"></p>
                        </div>
                        <div class="non_area">
                            <p class="non_area_content"></p>
                        </div>
                    </div>

                    <div class="menu">
                        <div id="day1_content" class="text_box_area active">
                            <div class="text_area">
                                <p class="input_area">9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容</p>
                            </div>
                        </div>
                        <div id="day2_content" class="text_box_area">
                            <div class="text_area">
                                <p class="input_area">9月2日の内容</p>
                            </div>
                        </div>
                        <div id="day3_content" class="text_box_area">
                            <div class="text_area">
                                <p class="input_area">9月3日の内容</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section data-id="#2" class="main_box2" id="2">
            <p class="main_logo2">アクセス</p>
            <p class="main_access">〒771-1154 徳島県徳島市応神町東貞方南川淵</p>
        </section>
        
            <div class="g_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6056.976726673136!2d134.518266630862!3d34.10910079227713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355373f11891368d%3A0x1a09139d44dc859f!2z5ZCJ6YeO5bed5YyX5bK46YGL5YuV5bqD5aC044K944OV44OI44Oc44O844Or5aC0Qemdog!5e0!3m2!1sja!2sjp!4v1729246337013!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>



        <section data-id="#3" class="main_box3" id="3">
            <p class="main_logo3">席予約</p>

            <form action="./conform.php" method="post" name="form">
                <div>
                    <label class="input_text">お名前
                        <span class="span_content">*必須</span>
                        <input type="text" name="name" placeholder="例)田中 太郎"  required>
                    </label>
                </div>

                <div>
                    <dl>
                        <dt>
                            <label class="input_text">席の場所
                                <span class="span_content">*必須</span>
                                <dd>
                                    <select name="seat" id="prefecture"  required>
                                        <option value="">---</option>
                                        <option value="SS席">SS席</option>
                                        <option value="S席">S席</option>
                                        <option value="A席">A席</option> 
                                        <option value="B席">B席</option>
                                        <option value="C席">C席</option> 
                                    </select>
                                </dd>
                            </label>
                        </dt>
                    </dl>
                </div>

                <div>
                    <label class="input_text">メールアドレス
                        <span class="span_content">*必須</span>
                        <input type="email" name="email" pattern=".+@.+\..+" placeholder="例)abcd123@example.com" required>
                    </label>
                </div>

                <div>
                    <label class="input_text">電話番号
                        <span class="span_content2">*任意</span>    
                        <input type="tel" name="tel" pattern="[0~9]{3}[0~9]{4}[0~9]{4}" placeholder="例)09012345678">
                    </label>
                </div>

                <div>
                    <button class="btn">送信</button>
                </div>
            </form>
        </section>
    </main>

    <?php include "./footer.php" ?>

    <script>
        const swiper = new Swiper(".swiper", {
            loop: true,
            slidesPerView: 1.2,
            spaceBetween: 15,
            centeredSlides: true,

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });  
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/index.js"></script>

</body>
</html>