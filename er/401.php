<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/img/logo.png" rel="shortcut icon" type="image/x-icon">
    <title>Creant</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <link rel="stylesheet" href="/smartbasket/css/smartbasket.min.css">
  </head>
  <body  class="dark-bg">

  <nav class="navbar navbar-expand-lg spacer one " style="background-color: black">
      <div class="container" >
          <h1 class="mb-0">
            <a href="/">
                <img src="/img/Logo_write.png" class="align-top" alt="">
          </a>
        </h1>
          <button class="navbar-toggler mt-1 navbar-dark" type="button" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse flex-column align-items-start ml-lg-2 ml-0 text-center" id="navbarCollapse">
              <span class="navbar-text ml-auto py-0 " style="font-size: 1.5em; color:#ffffff;">+7(812)640-91-21</span>

              <span class="navbar-text ml-auto py-0 mr-4 " style="color:#f9ba00;">info@creant.ru</span>
              
          </div>
          
      </div>
    </nav>
    
    <nav class="navbar navbar-expand-lg spacer one">
        <div class="collapse navbar-collapse flex-column " id="navbarCollapse">
            <div class="container nav-justified" >
        <ul class="navbar-nav mb-auto mt-0 ">
            <li class="nav-item nsc ">
                <div class="row">
                    <div class="col-12 ">
                        <form class="card card-sm ob">
                            <div class="card-body row no-gutters align-items-center pc">
                                <div class="col-auto ml-2 och"  >
                              <span class="material-icons vl">search</span>
                                </div>
                                <div class="col">
                              <input class="form-control form-control-borderless pk" type="search" placeholder="Поиск">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-myst " type="submit">Найти</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
      </li>
            <li class="nav-item ">    
                <a class="nav-link pl-2" href="/"><i class=" material-icons vl">home</i> Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-2" href="/obraz.php"><i class="material-icons vl">store</i> Продукция</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-2" href="/service.php"><i class="material-icons vl">work</i> Услуги</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link pl-2" href="/con-t.php"><i class="material-icons vl">assignment_ind</i> Контакты</a>
            </li>
            <li class="nav-item">
		          	<a class="nav-link "> <div class="header__basket-min"> </div> </a>
      			</li>
            <li class="nav-item sc ">
                      <div class="row">
                          <div class="col-12 " >
                              <form class="card card-sm ob">
                                  <div class="card-body row no-gutters align-items-center pc">
                                      <div class="col-auto ml-2">
                                    <span class="material-icons vl">search</span>
                                      </div>
                                      <div class="col">
                                    <input class="form-control form-control-borderless pk" type="search" placeholder="Поиск">
                                      </div>
                                      <div class="col-auto">
                                          <button class="btn btn-myst" type="submit">Найти</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
            </li>
        </ul>
      </div>
        </div>
    </nav>

    <div id="page-preloader"><span class="spinner"></span></div>

      <div class="kek" >
        
      Error 401  / Еслы вы видете это то не паникуйте, а просто зайдите по другим страницам, но если вам скучно то можете поругаться с вебмастером viktiss@mail.ru

      </div>

    </div>

    <footer></footer>
    <script src="/js/jquery-3.4.1.js"></script>
    <script src="/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
    

<div class="smart-basket__wrapper"></div>
<script src="/../smartbasket/smartbasket.min.js"></script>
<script>
    $(function () {
       $('.smart-basket__wrapper').smbasket({
        productElement: 'price',
		buttonAddToBasket: 'add-to-cart',
		countryCode: '+7',
		smartBasketCurrency: '₽',

		productPrice: 'product__price-number',

		smartBasketMinText: '<i class="material-icons vl">shopping_cart</i> Корзина ',
		smartBasketMinIconPath: 'none',
       });
    });
	</script>

  </body>
</html>
