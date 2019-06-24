<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
		
		.dropdown-menu {
    margin-top: 0;
}
.dropdown-menu .dropdown-toggle::after {
    vertical-align: middle;
    border-left: 4px solid;
    border-bottom: 4px solid transparent;
    border-top: 4px solid transparent;
}
.dropdown-menu .dropdown .dropdown-menu {
    left: 100%;
    top: 0%;
    margin:0 20px;
    border-width: 0;
}

.dropdown-menu > li a:hover,
.dropdown-menu > li.show {
	background: #007bff;
	color: white;
}
.dropdown-menu > li.show > a{
	color: white;
}

@media (min-width: 768px) {
    .dropdown-menu .dropdown .dropdown-menu {
        margin:0;
        border-width: 1px;
    }
}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="main_navbar">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
                      @foreach($categories as $category)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{$category->name}}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                @foreach($subcategories as $subCategory)
                                  
                                   	{{ $subCategory->name }} 	
                                </a>
                               @endforeach
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                   
                                    <li class="nav-item dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                             @foreach($products as $product)

                                             {{ $product->name }}
                                            </a>
                               			 @endforeach

                                            
                                        </li>
                                </ul>
                            </li>

                    </ul>
                </li>
               @endforeach
                
            </ul>
          
        </div>
    </nav>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script>
        $(function () {
            $('#main_navbar').bootnavbar();
        })
    </script>
    <script>
    	(function($) {
    var defaults={
        sm : 540,
        md : 720,
        lg : 960,
        xl : 1140,
        navbar_expand: 'lg'
    };
    $.fn.bootnavbar = function() {

        var screen_width = $(document).width();

        if(screen_width >= defaults.lg){
            $(this).find('.dropdown').hover(function() {
                $(this).addClass('show');
                $(this).find('.dropdown-menu').first().addClass('show').addClass('animated fadeIn').one('animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd', function () {
                    $(this).removeClass('animated fadeIn');
                });
            }, function() {
                $(this).removeClass('show');
                $(this).find('.dropdown-menu').first().removeClass('show');
            });
        }

        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
          if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
          }
          var $subMenu = $(this).next(".dropdown-menu");
          $subMenu.toggleClass('show');

          $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
          });

          return false;
        });
    };
})(jQuery);
    </script>
</body>
</html>


