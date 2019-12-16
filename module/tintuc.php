<div class="tintuc">
    <div class="container">
        <div class="tintuc_left col-md-8 -col-xs-8 col-sm-12">
            <div class="title">
                <h3>Tin Tức & Truyền Thông</h3>
            </div>
            <div class="box_tintuc">
                <div class="slider_tin">

                    <?php for($i=0;$i<4;$i++){ ?>
                        <div class="man_news_grid_item">
                                <a href="" class="man_news_item_link"></a>
                                <div class="man_news_item_img">
                                    <img src="./images/tintuc.jpeg" alt="">	
                                    <div class="man_news_item_over"></div>	
                                    <div class="man_news_item_cont">
                                        <div class="man_news_item_title">
                                            <h3>Không gian sàn ITMA 2019 đã bán hết</h3>
                                        </div>
                                        <div class="man_news_item_date"><i class="icofont-clock-time"></i> <span> Ngày 19 tháng 7 năm 2018</span></div>	
                                    </div>
                                </div>
                        </div>
                    <?php }?>

                </div>
            </div>
        </div>
        <div class="tintuc_right col-md-4 -col-xs-4 col-sm-12">
            <div class="title">
                <h3>FeedBack</h3>
            </div>
            <div class="box_feedback">
                <div class="feedback">

                    <?php for($i=0;$i<4;$i++){ ?>
                        <div class="man_testimonials_item">
                            <div class="man_testimonials_item_cont">
                                "I would also like to say thank you to all your staff. I love Textile. I'd be lost without Textile .I would also like to say thank you to all your staff. I love Textile. I'd be lost without Textile I would also like to say thank you to all your staff. I love Textile. I'd be lost without Textile"
                            </div>
                            <div class="man_testimonials_item_desc">
                                <div class="man_testimonials_item_title_cont">
                                    <div class="man_testimonials_item_img man_image_bck">
                                        <img src="./images/feedback.jpeg" alt="">
                                    </div>
                                    <div class="man_testimonials_item_title">
                                            <div class="man_testimonials_item_title_name">John S.Gates</div>					
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
       $(document).ready(function () {
                $('.slider_tin').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    draggable:true,  
                    centerMode:false,
                    arrows:true, 

                    responsive: [                       
                        {
                            breakpoint: 1000,
                            settings: {
                                slidesToShow: 2 ,
                                slidesToScroll: 2,
                                autoplaySpeed: 1000,
                                 infinite: true,
                                dots: true 
                            }
                        },
                        {   
                            breakpoint: 701,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                autoplaySpeed: 1000,
                                infinite: true,
                                dots: true
                            }
                        },                       
                        {
                            breakpoint: 520,
                            settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                            }
                        }
                    ]                   

                });     
            });
        </script>        

        
<script type="text/javascript">
       $(document).ready(function () {
                $('.feedback').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    draggable:true,  
                    centerMode:false,
                    arrows:true,          

                });     
            });
        </script>        