<?
					// занести в массив значение полей
					$z = array(
					1 => $_POST['name'],
					2 => $_POST['email'],
					3 => $_POST['content']
					);
					$dl = '';

					if($z[1] && $z[2] && $z[3]){

					mail("info@creant.ru", "Отзыв в Urban Aqua", $z[1] . "\n" . $z[2] . "\n" . $z[3]); // сообщение на ваш email о новом отзыве

						$fp = fopen("cmnt/comments_Urban_aqua.txt", "a+"); // режим записи
						$mytext = "<dt><a href='" . $z[2] . "'>" . $z[1] . "</a><dd>" . $z[3] ;
						$save = fwrite($fp, $mytext); // запись в файл
						fclose($fp); // закрытие файла
						Header("Location: ".$_SERVER['PHP_SELF']); // обновить страницу; обновлённая версия содержит опубликованный комментарий
						exit;


					} else { 

					$fp = @fopen("cmnt/comments_Urban_aqua.txt", "r"); // режим чтения
					if ($fp) {
						while (!feof($fp)) {
						$dl .= fgetss($fp, 8000, "<dl>,<dt>,<dd>"); // <dl>,<dt>,<dd> - это список тегов, разрешённых для публикации
						}
					}
					fclose($fp);

					} 
					?>

<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <meta name="author" content="Creant">
        <meta name="copyright" content="Все права принадлежат 'Полезные инновации'">
        <meta http-equiv="content-type" content="text/html; charset=windows-1251">
        <meta name="keywords" content="купить regbnm заказать приобрести Plasmit plasmit скуфтше [bvbxtcrbq fyrth химический анкер Urban Aqua гидроизоляция поверхностей gjdth[yjcntq">
        <meta name="description" content="Покрытие Plasmit Urban Aqua для гидроизоляции поверхностей">
        <title>Покрытие Creant Plasmit™ Urban Aqua</title>
	  
      <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  

      <link href="bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="css/styles.css">
	  
	  <link rel="stylesheet" href="smartbasket/css/smartbasket.min.css">

	  <link rel="stylesheet" type="text/css" href="css/xzoom.css" media="all" />

	  <style type="text/css">
		body 
			{
			font-size: 16px !important;
			}
			   html, body {
    height: 100%;
   }
   body {
    display: flex;
    flex-direction: column;
   }
   .content {
    flex: 1 0 auto;
   }
   .footer {
    flex-shrink: 0;
   }
		.or
			{
			font-size: 2em;
			}
		h2
			{
			font-size: 1.424em;   
			}
		.table td, .table th
			{
			padding: 0rem;	
			}	
		#gallery_01 img
			{
    		border: 2px solid white;
			}
		.active img 
			{
			border: 2px solid #333 !important;
			}
		.parent{
			display: flex;
			}
		.a, .b
			{
			flex-basis: 20%;
			}
		.xzoom3{
            border: 1px solid #cecece;
            box-shadow: none;
            }
ul{ list-style-type:none;}
.js_block, .css_block{
    margin:10px 0px 10px 5%;
    display:inline-block;
    position:relative;
    padding-left: 0px;
    font-size: 1.2em;

}
.js_block a, .css_block a{
    text-decoration:none;
    color:#000;
    margin-top:1px;
    display:block;
    transition:all .5s;

}

img.xzoom {
    max-width: 100%
}

.js_block a:hover, .css_block a:hover{ border:#FC6; color:#000; }
.css_block .sub_block, .js_block .sub_block{
    position:absolute; display:none; top:31px; right:-60px;
}
.css_block .sub_block a, .js_block .sub_block a{background:#f9ba00;}
.css_block>li:hover .sub_block{display:block;}

      </style>

<script>
var block = document.getElementById("block");
window.onload = function(){
    block = document.getElementById("block");
    block.onmouseover = function(){block.childNodes.item(2).style.display= "block";}
    block.onmouseout = function(){block.childNodes.item(2).style.display = "none";}
}

</script> 

  </head>
  <body  class="dark-bg">
      <div class="content">
 <nav class="navbar navbar-expand-lg spacer one " style="background-color: black">
      <div class="container" >
          <h1 class="mb-0">
            <a href="/">
                <img src="img/Logo_write.png" class="align-top" alt="">
          </a>
        </h1>
          <button class="navbar-toggler mt-1 navbar-dark" type="button" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse flex-column align-items-start ml-lg-2 ml-0 text-center" id="navbarCollapse">
              <a href="tel:+78129071713" class="navbar-text ml-auto py-0 " style="font-size: 1.5em; color:#ffffff;">+7(812)907-17-13</a>
              <a href="mailto:info@creant.ru" class="navbar-text ml-auto py-0 mr-4 " style="color:#f9ba00;">info@creant.ru</a> 
          </div>

          
      </div>
    </nav>
    
    <nav class="navbar navbar-expand-lg spacer one">
        <div class="collapse navbar-collapse flex-column " id="navbarCollapse">
            <div class="container nav-justified" >
        <ul class="navbar-nav mb-auto mt-0 ">
            <li class="nav-item nsc t">
               <div class="row">
                  <div class="col-12 " >
                      <form class="card card-sm ob" action="//google.com/search" target="_blank">
                          <div class="card-body row no-gutters align-items-center pc">
                              <div class="col-auto ml-2">
                            <span class="material-icons vl">search</span>
                              </div>
                              <div class="col">
                                  <input type="hidden" name="as_sitesearch" value="creant.ru">
                            <input class="form-control form-control-borderless pk" type="search" name="q" placeholder="Поиск">
                            
                              </div>
                              <div class="col-auto">
                                  <button class="btn btn-myst" type="submit">Найти</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
      </li>
            <li class="nav-item">    
                <a class="nav-link pl-2" href="/"><i class=" material-icons vl">home</i> Главная</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link pl-2" href="/main.php"><i class="material-icons vl">store</i> Продукция</a>
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
            <li class="nav-item sc b">
                      <div class="row">
                          <div class="col-12 " >
                              <form class="card card-sm ob" action="//google.com/search" target="_blank">
                                  <div class="card-body row no-gutters align-items-center pc">
                                      <div class="col-auto ml-2">
                                    <span class="material-icons vl">search</span>
                                      </div>
                                      <div class="col">
                                          <input type="hidden" name="as_sitesearch" value="creant.ru">
                                    <input class="form-control form-control-borderless pk" type="search" name="q" placeholder="Поиск">
                                    
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
	            <div class="container mt-2">
                    <div class="card">
                        <center>
                            <div class="av" >
                                <ul class="js_block">
                                <li id="block" ><a class="js_bl" href="/main.php#Creanit">Creanit</a>
                                    <ul class="sub_block" style="z-index: 99999;padding-left: 4px;">
                                        <li><a href="/Creanit_Anker.php">Anker EX-385</a></li>
                                        <li><a href="/Anker_EX_Winter.php">Anker ICE-385</a></li>
                                        <li><a href="/Anker_EX_Aqua.php">Anker EXW-385</a></li>
                                        <li><a href="/Creanit_Solution.php">Solution</a></li>
                                        <li><a href="/Creanit_Antic.php">Antic</a></li>
                                    </ul>
                                </li>
                                </ul>
                                
                                <ul class="js_block">
                                <li id="block" ><a class="js_bl" href="/main.php#Plasmit">Plasmit</a>
                                    <ul class="sub_block" style="z-index: 99999;padding-left: 4px;">
                                        <li><a href="/Plasmit_Urban.php">Urban</a></li>
                                        <li><a href="/Plasmit_Urban_Antiskid.php">Urban Antiskid</a></li>
                                        <li><a href="/Plasmit_Urban_Aqua.php" style="text-decoration: underline;">Urban Aqua</a></li>
                                        <li><a href="/Plasmit_Urban_Color.php">Urban Color</a></li>
                                    </ul>
                                </li>
                                </ul>
                                
                                <ul class="js_block">
                                <li id="block" ><a class="js_bl" href="/main.php#Oborud">Оборудование</a>
                                    <ul class="sub_block" style="z-index: 99999;padding-left: 4px;">
                                        <li><a href="/miks_nasad.php">Миксер-насадка</a></li>
                                        <li><a href="/miks_nasad_ydl.php">Удлинитель миксера</a></li>
                                        <li><a href="/ersh.php">Ершики</a></li>
                                        <li><a href="/pistolet.php">Пистолет</a></li>
                                        <li><a href="/nasos.php">Насос</a></li>
                                        <li><a href="/gilz.php">Гильзы</a></li>
                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </center>
                    </div>
                </div>

        <div class="container mt-2">
                  <div class="linetraacard card-deck">
                    <div class="card w-20">
					<h1 class="card-title text-center nsct">Plasmit Urban Aqua</h1>
					
					<div class="container">
                        <div style="text-align:center;">
                                <div class="mt-4">
                                    <div class="a">
                                        <center><img class="xzoom3" src="img/Plasmit/plasmit_aqua_low.jpg" width="210" xoriginal="img/Plasmit/plasmit_aqua.jpg" /></center>
                                    </div>
                                </div>
                                
                                <div class="xzoom-thumbs" style="text-align:center;">
				                    <a href="img/Plasmit/plasmit_aqua.jpg"><img class="xzoom-gallery3" width="100" src="img/Plasmit/plasmit_aqua_low.jpg"  xpreview="img/Plasmit/plasmit_aqua_low.jpg" title="рисунок1"></a>
                                </div>
                        </div>
                    </div>
					

                    <div class="card-body">
					  	Артикул: 476575675
                      </div>
                  </div>
                  <div class="card w-20">

                      <div class="card-title">
                        <h1 class="card-title text-center sct">Plasmit Urban Aqua</h1>
                      </div>
                      <div class="card-body" >
                        <a class="oie">Уникальная гидроизоляционная композиция предназначена для защиты бетонных оснований от коррозии, придания дополнительной прочности,
                        морозостойкости, предотвращения поднятия пыли с бетонных поверхностей. Используется в местах с высокой влажностью (подвалы, тоннельные арки и тп)</a> 
					  </div>
					  						

						<table class="table table-bordered w-100">
							<thead class="thead-dark">
							<tr>
								<th scope="col" style="width: 25%;padding-left:12,5%;padding-right:12,5%">Объем</th>
								<th scope="col" style="width: 25%;padding-left:12,5%;padding-right:12,5%">Цена/шт.</th>
								<th scope="col" style="width: 25%;padding-left:12,5%;padding-right:12,5%">Кол-во</th>
								<th scope="col" style="background-color: #ffffff; border: 1px solid #fff;width: 25%;padding-left:12,5%;padding-right:12,5%"></th>
							</tr>
							</thead>
						</table>
						<div class="price">
						<table>
						<thead class="thead-dark">
							<tr>
								<th scope="col" style="width: 25%"></th>
								<th scope="col" style="width: 25%"></th>
								<th scope="col" style="width: 25%"></th>
								<th scope="col" style="background-color: #ffffff; width: 25%"></th>
							</tr>
							</thead>
							<tbody style="text-align: center; ">
									<tr>
										<td style=" vertical-align: middle; padding-left:12,5%;padding-right:12,5%" >2000 гр</td>						
										<td style=" vertical-align: middle; padding-left:12,5%;padding-right:12,5%" ><div class="product__price"><span class="product__price-number">4000</span> ₽</div></td>
										<td style=" vertical-align: middle; padding-left:12,5%;padding-right:12,5%; " >
											<div class="product__quantity"></div>
										</td>							
										<td style="padding:0px;">
											<a class="add-to-cart btn btn-myst-3" style="width: 125px;  "
											data-sb-id-or-vendor-code="П-01007"
											data-sb-product-name="Plasmit Aqua 2000"
											data-sb-product-price="4000"
											data-sb-product-quantity= "1"
											data-sb-product-img="img/Plasmit/plasmit_aqua.jpg">
											Добавить в корзину
											</a>
										</td>							
                                    </tr>
							</tbody>
						</table>  
						</div>
						<div class="price">
						<table>
						<thead class="thead-dark">
							<tr>
							<th scope="col" style="width: 25%"></th>
								<th scope="col" style="width: 25%"></th>
								<th scope="col" style="width: 25%"></th>
								<th scope="col" style="background-color: #ffffff; width: 25%"></th>
							</tr>
							</thead>
							<tbody style="text-align: center; ">
                                    <tr>
										<td style=" vertical-align: middle; padding-left:12,5%;padding-right:12,5%" >4000 гр</td>						
										<td style=" vertical-align: middle; padding-left:12,5%;padding-right:12,5%" ><div class="product__price"><span class="product__price-number">7800</span> ₽</div></td>
										<td style=" vertical-align: middle; padding-left:12,5%;padding-right:12,5%" >
											<div class="product__quantity"></div>
										</td>							
										<td >
											<a class="add-to-cart btn btn-myst-3" style=" width: 125px;"
											data-sb-id-or-vendor-code="П-01008"
											data-sb-product-name="Plasmit Aqua 4000"
											data-sb-product-price="7800"
											data-sb-product-quantity= "1"
											data-sb-product-img="img/Plasmit/plasmit_aqua.jpg">
											Добавить в корзину
											</a>
										</td>							
                                    </tr>
							</tbody>
						</table>  
						</div>
					</div>	
                  </div>
           
            
            <nav>

			<!---->
    			<div id="page-preloader"><span class="spinner"></span></div>
			<!---->


			<div class="nav nav-tabs mt-3 nav-a" id="nav-tab" role="tablist">
					<a class="btn btn-myst-3 nav-item active mr-2" style="font-size: 1.05rem;padding-top: 0px;padding-bottom: 0px;" id="nav-opis-tab" data-toggle="tab" href="#nav-opis" role="tab" aria-controls="nav-opis" aria-selected="true">Назначение</a>
					<a class="btn btn-myst-3 nav-item mr-2" style="font-size: 1.05rem;padding-top: 0px;padding-bottom: 0px;" id="nav-har-tab" data-toggle="tab" href="#nav-har" role="tab" aria-controls="nav-har" aria-selected="false">Технические характеристии</a>
					<a class="btn btn-myst-3 nav-item mr-2" style="font-size: 1.05rem;padding-top: 0px;padding-bottom: 0px;" id="nav-ser-tab" data-toggle="tab" href="#nav-ser" role="tab" aria-controls="nav-ser" aria-selected="false">Сертификаты</a>
					<a class="btn btn-myst-3 nav-item mr-2" style="font-size: 1.05rem;padding-top: 0px;padding-bottom: 0px;font-size: 1.05rem;" id="nav-otz-tab" data-toggle="tab" href="#nav-otz" role="tab" aria-controls="nav-otz" aria-selected="false">Отзывы</a>
				</div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-opis" role="tabpanel" aria-labelledby="nav-opis-tab">
  <div class="row mb-2">
	  <div class="col-md-12">
                  <div class="card w-100">
                    <div class="card-title my-2">
                    <center><h2>НАЗНАЧЕНИЕ</h2> </center>
						<div class="card-body p-40">
							<p   align="justify" >Гидроизоляционный слой не дает усадки после отверждения, 
							характеризуется высокой адгезией c поверхностью и не боится битумного выделения асфальтабетона
                            </p>
						</div>
           			 </div>

                    <div class="card-title my-2">
                    <center><h2>ОБЛАСТИ ПРИМЕНЕНИЯ</h2> </center>
                    <div class="card-body p-40">
						<ul class="p-40">
							<li>
								<p align="justify"  > Используется как защитное,восстанавливающее, влагоизолирующее покрытие по бетонным и отштукатуренным поверхностям, а также поверхности, подверженные воздействию вибрации.</p>
								<p align="justify"  >
								 Может использоваться даже при наличии водяного давления.  
								 </p>
						</ul>
                    </div>
                  </div>
                  <div class="card-title my-2">
						<center><h2>ПРЕИМУЩЕСТВА</h2> </center>
						<div class="card-body p-40">
							<ul class="p-40">
								<li/>
									<p   align="justify" >
                                    подходит под все типы оснований; </p>
								<li/>
									<p   align="justify"  >
                                    не токсичен;  </p>
                                <li/>
									<p   align="justify"  >
                                    высокая эффективность и превосходные
технические характеристики в соответствии с международными стандартами.</p>
							</ul>
						</div>
            		</div>
		  </div>  		  
</div>

		</div>

</div>

  <div class="tab-pane fade" id="nav-har" role="tabpanel" aria-labelledby="nav-har-tab">

  <div class="row mb-2">
	  <div class="col-md-12">
                  <div class="card w-100">
                    <div class="card-title my-2">
                    <center><h2>ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</h2></center> 
                    <div class="card-body p-40">
                    <ul class="p-40">
	<li>
<p align="justify"  >Температура применения: от + 10 до + 40°С.
	</p>
	<li>
<p align="justify"  >Рабочее время: 20 минут (чем больше объем смеси, тем меньше время жизнеспособности в общей массе).
	</p>
	<li>
<p align="justify"  >
Первичное схватывание происходит
спустя 1 часа после нанесения состава,
полное отверждение состава — 12 часов.
	</p>
	<li>
<li>
<p align="justify"  >
Цвет - серый
</p>
<li>
<p align="justify"  >
Условия эксплуатации: от - 40 до + 50°С.   
</p>
</ul>
                    </div>
            </div>



                    <div class="card-title my-2">
                    <center><h2>УСЛОВИЯ ХРАНЕНИЯ</h2> </center>
                    <div class="card-body p-40">
                        <a>хранить в сухом
месте при температуре от     + 5°С до + 25°С.
Не подвергать воздействию прямого
солнечного света. Срок годности составляет 18 месяцев.</a>
                    </div>
            </div>

                    <div class="card-title my-2">
                    <center><h2>РЕКОМЕНДАЦИИ ПО ИСПОЛЬЗОВАНИЮ</h2> </center>
                    <div class="card-body p-40">
                    <ul  class="p-40">
	<li/>
<p align="justify" >Отмерить нужное количество компонента А и Б.  
	  
	</p>
	<li/>
<p align="justify" > Прогреть компонент А феном.  
	</p>
	<li/>
<p align="justify" >Добавить компонент Б в компонент А. 
	</p>
		<li/>
<p align="justify" >Перемешать два компонента пока состав не станет однородным по цвету и внешнему виду.
При перемешивании рекомендуется использовать низкооборотную мешалку. Время перемешивания не менее 1 минуты.
При перемешивании необходимо захватывать участки около стенок и на дне емкости с клеем.
	</p>
		<li/>
<p align="justify" >Следует избегать образования пузырей.
	</p>
		<li/>
<p align="justify" >Вылить необходимое количество сотстава на поверхность и равномерно распределить его используя шпатель.
	</p>
			<li/>
<p align="justify" >Клеевой состав рекомендуется использовать в течение его жизнеспособности – от 2 до 10 минут. 
	</p>
			<li/>
<p align="justify" >При повышении температуры время жизнеспособности композиции сокращается. 
	</p>
				<li/>
<p align="justify" >При использовании применять средства индивидуальной защиты (перчатки, очки).
	</p>

</ul>
</div>
			</div>
			
		

		  </div>  





		</div>
		
		

		</div>
		
  </div>

  <div class="tab-pane fade" id="nav-ser" role="tabpanel" aria-labelledby="nav-ser-tab">
<div class="row mb-2">
	  <div class="col-md-12 w-100">
                  <div class="card w-100">
                    <div class="card-title my-2">
                    <center><h2>Сертификаты</h2> </center>
						<div class="card-body p-40">
							<p    >  картиночки</p>
							<p style="opacity: 0; width:1">------------------------------------- -- -------- ----------- ----------- ------ ------- ------- --------- ------- --------- ----------- ------------- ------- ----- ------ ----- ---- ----- ------- ----- ------ ---- ------ ------ ---- --- -- -----</p>

						</div>
           			 </div>
		</div>
	</div>
</div>
</div>

<div class="tab-pane fade" id="nav-otz" role="tabpanel" aria-labelledby="nav-otz-tab">
<div class="row mb-2">
	  <div class="col-md-12 w-100">
                  <div class="card w-100">
                    <div class="card-title my-2">
                    <center><h2>Отзывы</h2> </center>
						<div class="card-body p-40">
						


							<dl>
							<? echo $dl; ?> <!-- PHP -->
							</dl>
<p style="opacity: 0; width:1">------------------------------------- -- -------- ----------- ----------- ------ ------- ------- --------- ------- --------- ----------- ------------- ------- ----- ------ ----- ---- ----- ------- ----- ------ ---- ------ ------ ---- --- -- -----</p>

							<center><label>Написать свой отзыв</label></center>

							<form method="post">
							<label>Ваше имя: </label>
							<input class="fo" type='text' name='name' required/>
							<br/>
							<label>Email (не публикуется): </label>
							<input class="fo" type='email' name='email' required/>
							<br/>
							<label>Oтзыв:</label>
							<textarea class="fo" name='content' required rows="3"></textarea>
							<br/>
							<center><input type='submit' value='Публикация'/></center>
							</form>

						</div>
           			 </div>
		</div>
	</div>
</div>
</div>
</div>
 </div>
</div>  
		
	<footer id="myFooter" class="footer navbar-fixed-bottom" style="background-color: black;">
        <div class="container ">
            <div class="row h-100">
           
          <div class="col-md-3">
            <a href="/">
                  <img src="img/w_logo.png" style="width: 79%;" class="d-inline-block align-top" alt="">  
            </a>
          </div>
          

                          <div class="col-md-12 pb-2">
                              <div class="w-100 text-center">
                                  <a href="/">Главная</a>
                        
                                  <a href="/main.php#Creanit">Creanit</a>
                        
                                  <a href="/main.php#Plasmit">Plasmit</a>
                        
                                  <a href="/con-t.php">Контакты</a>
                              </div>
                          </div>
                          
                          <div class="col-md-12 ">
                              <div class="w-100 ">
                                  <div class="text-center">

                                      <a onclick="window.open('//www.youtube.com/channel/UCciD-jQVPMUwyEtXIoj6Y-A?disable_polymer=true','_blank')"  class="youtube" style="cursor: pointer;"><img src="img/soc_icons/youtube.svg" alt="youtube" height="25px"></a>
                                      <a onclick="window.open('//instagram.com/creantpro?igshid=2hxahqzs0808','_blank')" class="instagram" style="cursor: pointer;"><img src="img/soc_icons/instagram.svg" alt="instagram" height="25px"></a>
                                      <a onclick="window.open('//vk.com/creantpro','_blank')"  class="vk"><img src="img/soc_icons/vk.svg" alt="instagram" height="25px" style="cursor: pointer;"></a>
                                      <a onclick="window.open('//www.facebook.com/creant.pro','_blank')" class="facebook" style="cursor: pointer;"><img src="img/soc_icons/facebook.svg" alt="facebook" height="25px"></a>
                                      <a style="font-size: 32px; color: #f9ba00;">creantpro</a>

                                  </div>
                              </div>
                            </div>
                        </div>

                        
              </div>
      </footer>

	<script src="js/jquery-3.4.1.js"></script>

	<script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>

	<script src="js/foundation.min.js"></script>
	<script src="js/setup.js"></script>
	<script type="text/javascript" src="js/xzoom.js"></script>
	
	<script type="text/javascript" src="js/hammer.min.js"></script>
	
    <script>

        (function ($) {
            $(document).ready(function() {
        
                var xzoom = $('.xzoom3, .xzoom-gallery3').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});
        
                //HammerJS v2.0.8
                var isTouchSupported = 'ontouchstart' in window;
        
                if (isTouchSupported) {
                    xzoom.eventunbind();
                    var mc1 = new Hammer($('.xzoom3')[0]);
        
                    mc1.on("tap", function(event) {
                        event.pageX = event.srcEvent.pageX;
                        event.pageY = event.srcEvent.pageY;
        
                        xzoom.eventclick = function(element) {
                            element.css('touch-action', 'pan-x');
                        }
        
                        xzoom.eventmove = function(element) {
                            var mc2 = new Hammer(element[0]);
        
                            mc2.get('pan').set({
                                direction: Hammer.DIRECTION_ALL,
                            });
        
                            mc2.on('pan', function(event) {
                                event.pageX = event.srcEvent.pageX;
                                event.pageY = event.srcEvent.pageY;
                                xzoom.movezoom(event);
                            });
                        }
        
                        xzoom.eventleave = function(element) {
                            var mc3 = new Hammer(element[0]);
                            mc3.on('tap', function(event) {
                                xzoom.closezoom();
                            });
                        }
                        xzoom.openzoom(event);
                    });
                }
        
            });
        })(jQuery);


      	$(function() {
        $('#preloader').delay(9000).fadeOut('slow');
      	});
	
	  	$(window).on('load', function () {
    	var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    	$spinner.fadeOut();
    	$preloader.delay(350).fadeOut('slow');
    	
		if ($(window).width() >= 992)
        {
          $(".align-top").attr("src","img/Logo_write.png");
        } 
        else
        {
          $(".align-top").attr("src","img/Logo_write-1.png");
      	}
      	
      	if ($(window).width() <= 400)
        {
          $(".fd").removeClass('row');
          
        } 
        else
        {
          $('.fd').addClass('row');
      	}
	  	});

	</script>

		<div class="smart-basket__wrapper"></div>

	<script src="smartbasket/smartbasket.min.js"></script>

	<script>

		$(function () {
			$('.smart-basket__wrapper').smbasket({
				productElement: 'price',
				buttonAddToBasket: 'add-to-cart',
				countryCode: '+7',
				smartBasketCurrency: '₽',
				productQuantityWrapper: 'product__quantity',
				productPrice: 'product__price-number',
				smartBasketMinText: '<i class="material-icons vl">shopping_cart</i> Корзина ',
				smartBasketMinIconPath: 'none',
			});
		});

		function resizeScrtov()
        {
        if ($(window).width() >= 992)
        {
          $(".align-top").attr("src","img/Logo_write.png");
        } 
        else
        {
          $(".align-top").attr("src","img/Logo_write-1.png");
      	}	

        if($(window).width() >= 993)
        {
          $(".nsc").css("display","none");
		  $(".sc").css("display","block");

          $(".b").css({"padding-top":"0px"});
		  $(".t").css("padding-bottom","7.5px");
		  
		  $(".sct").css("display","block");
          $(".nsct").css("display","none");

		}
        else
        {
          $(".nsc").css("display","block");
          $(".sc").css("display","none");

          $(".t").css({"padding-top":"0px"});
		  $(".b").css("padding-top","7.5px");
		  
          $(".nsct").css("display","block");
          $(".sct").css("display","none");
		}
		
		if ($(window).width() <= 400)
        {
          $(".fd").removeClass('row');
          
        } 
        else
        {
          $('.fd').addClass('row');
      	}	
        }
    resizeScrtov();
    $(window).resize(function(){
   	resizeScrtov();
    });

        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
             || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) 
        {        }
        else
        {
            $('.av ul li').hover(function(){
               $(this).children('ul').stop(false,true).slideDown(200); 
            }, function(){
               $(this).children('ul').stop(false,true).slideUp(200); 
            })
        }
    </script>
  </body>

</html>
