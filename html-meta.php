<meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="icofont/icofont.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link type="text/css" rel="stylesheet" href="./css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="./js/jquery.mmenu.min.all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    
  <script type="text/javascript" src="./slick/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick/slick-theme.css" />
        
    <!--Menu -->
    <script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
    <script type="text/javascript">
        $(function() {
            $m = $('nav#menu').html();
            $('nav#menu_mobi').append($m);
            
            $('nav#menu_mobi .search').addClass('search_mobi').removeClass('search');
            $('.hien_menu').click(function(){
                $('nav#menu_mobi').css({height: "auto"});
            });
            $('.user .fa-user-plus').toggle(function(){
                $('.user ul').slideDown(300);
            },function(){
                $('.user ul').slideUp(300);
            });
            
            $('nav#menu_mobi').mmenu({
                    extensions	: [ 'effect-slide-menu', 'pageshadow' ],
                    searchfield	: true,
                    counters	: true,
                    navbar 		: {
                        title		: 'Menu'
                    },
                    navbars		: [
                        {
                            position	: 'top',
                            content		: [ 'searchfield' ]
                        }, {
                            position	: 'top',
                            content		: [
                                'prev',
                                'title',
                                'close'
                            ]
                        }
                    ]
                });
        });
    </script>
    <!--Menu -->
