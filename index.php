<?php

// =======================================================================================
// == CONFIGURATION ======================================================================
// =======================================================================================

// DO NOT REMOVE THIS LINE! MARKER:<CONFIG>


$aConfig = array (
  'domain' => 'test.test.tst',
  'project_name' => 'index.php CMS - Test site 5',
  'company_name' => 'MVP Lovers Inc',
  'email' => '8901000@gmail.com',
  'admin_password' => 'admin',
  'members_login' => 'DUMMY',
  'dummy_message' => '<h1>Большое вам спасибо!</h1><br>За интерес к нашим функциям.<br><br>К сожалению в данный момент данный функционал в процессе разработки,но мы обязательно добавим его в ближайшее время.<br><br>',
);
// DO NOT REMOVE THIS LINE! MARKER:</CONFIG>

/*

'members_login' // TRUE - , FALSE, 'DUMMY' - Пользователь видет возможность залогинится, 
но при клике возникает 'dummy_message' текст и событие падает в статистику под именем "User"

*/

$aConfigHelp = array(

	'domain' => array('Доменное имя', 'Доменное имя, на котором вашего проекта testtest.com'),
	'project_name' => array('Название проекта', 'Название проекта, будет отображаться в том числе в левом верхнем углу и в названии вкладки'),
	'company_name' => array('Название компании/автора', 'Можно указать авторство проекта - будет отображаться в подвале'),
	'email' => array('Email', 'Email для связи с вами, куда будут уходить отправленные пользователями вопросы со страницы контакты'),
	'admin_password' => array('Административный пароль', 'Пароль для доступа к этой странице и статистике'),

	//-- SOCIAL ----------------------------------------------------

	'social_buttons' => array('Социальные кнопки', 'Включить или отключить кнопки социальных сетей для вашего проекта', 'checkbox'),

	//-- MEMBERS ---------------------------------------------------

	'members_login' => array('Пользовательская зона', 'Включить или отключить возможность пользователям авторизоваться на сайт. 
				При установке значения DUMMY возможность логина будет отображаться, но при нажатии на нее вызовется стандартная 
				функция-заглушка и количество кликов можно будет отследить по идентификатору "member"', 'select', 
				array('Включена' => true, 'Выключена' => false, 'Заглушка' => 'DUMMY')),

	//-- MESSAGES ---------------------------------------------------

	'dummy_message' => array('Текст окна-заглушки', 'Текст, возникающий на сайте при обращении к функциям, которых еще нет и которые
				закрыты функциями-заглушками', 'textarea'),

);

// =======================================================================================
// == PAGES LIST =========================================================================
// =======================================================================================

$aPages = array(
	'Главная' => 'index',
	'Видео' => 'DUMMY',
	'Обратная связь' => 'contacts'
);

// =======================================================================================
// == COUNTERS ===========================================================================
// =======================================================================================

$counters = '';

// =======================================================================================
// == DATABASE FUNCTIONS =================================================================
// =======================================================================================

$bDBEnabled = function_exists('sqlite_open');

if($bDBEnabled){
$dbFileName = 'database.db';
$dbhandle = sqlite_open($dbFileName, 0666, $error);

if (!$dbhandle) die ($error);
$res = sqlite_query($dbhandle, 
	"SELECT name FROM sqlite_master WHERE type='table' AND name='stats';" , $error);
if(!sqlite_fetch_all($res)){
	// Installation
	$stm = "CREATE TABLE stats(Id integer PRIMARY KEY," . 
       		"name INTEGER NOT NULL, count INTEGER)";
	$ok = sqlite_exec($dbhandle, $stm, $error);
	if (!$ok)die("Cannot execute query. $error");

	$stm = "CREATE TABLE users(Id integer PRIMARY KEY," . 
       		"name TEXT UNIQUE NOT NULL, count TEXT)";
	$ok = sqlite_exec($dbhandle, $stm, $error);
	if (!$ok)die("Cannot execute query. $error");

}
}

// =======================================================================================
// == OTHER ==============================================================================
// =======================================================================================

$page = 'index';
if(!empty($_REQUEST['page'])){
	$page = $_REQUEST['page'];
}
$currentPage = $page;

// =======================================================================================
// == ADMIN PAGE =========================================================================
// =======================================================================================


if(!empty($_REQUEST['stat']) && !empty($_REQUEST['id'])){

	if($bDBEnabled){
		sqlite_query($dbhandle, 
		"INSERT into stats ('name','count') VALUES ('".addslashes($_REQUEST['id'])."','1');" , $error);
	}
	header('Content-Type:image/gif');
	header('Content-Length: 0');
	exit();

}elseif($currentPage == 'admin'){

	if(!empty($_REQUEST['pass'] ) && $_REQUEST['pass'] == $aConfig['admin_password']){
	           
		if(!empty($_REQUEST['action'] ) && $_REQUEST['action'] == 'save'){
			$aNewConfig = array();
			foreach($_REQUEST as $key => $value){
		        	if(preg_match('/^field_(.+)$/', $key, $aMatch)){
					$aNewConfig[$aMatch[1]] = 
						str_replace(array("\n", "\r"), '', stripslashes(htmlspecialchars_decode($value)));	
				}
			}
			
			$selfContent = file_get_contents(__FILE__);
			$pos1=stripos($selfContent, 'MARKER:<CONFIG>');
			$pos2=stripos($selfContent, 'MARKER:</CONFIG>');
			//echo $pos1.' '.$pos2;
			$newContent = substr($selfContent, 0, $pos1 + 17);
			$newContent .= "\n".'$aConfig = '.var_export($aNewConfig, 1).";\n";
			$newContent .= substr($selfContent, $pos2-28);
			copy(__FILE__, __FILE__.'.bak');
			file_put_contents(__FILE__, $newContent);
			echo '<html><body>Saving...<script>window.location.href = "'.basename(__FILE__).
				'?page=admin&pass='.$_REQUEST['pass'].'&rnd='.rand(1,20).'";</script></body></html>';
			exit();
			

		}
	
		function showContent(){ 
		global $dbhandle,$aConfig,$aConfigHelp,$bDBEnabled;		
		if($bDBEnabled){
			$res = sqlite_query($dbhandle, "SELECT name,sum(count) as count FROM 'stats' group by name");
			$aStats = sqlite_fetch_all($res);
		}else{
			$aStats = array();
		}

		?>
<?php if(!$bDBEnabled){ ?>
<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  SQlite библиотека не обнаружена. Функции, относящиеся к базе данных отключены: Внутренняя статистика, Пользовательский вход.
</div>		
<?php } ?>
<?php if(!is_writable(__FILE__)){ ?>
<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  Настройки не доступны для сохранения! <br>Файл <?=basename(__FILE__)?> не доступен для записи и не может быть переписан. Пожалуйста установите для него права 0x777
</div>		
<?php } ?>


<form class="form-horizontal" method=POST action="<?=basename(__FILE__)?>">
<input type="hidden" name="page" value="admin">
<input type="hidden" name="pass" value="<?=$_REQUEST['pass']?>">
<input type="hidden" name="action" value="save">

<fieldset>

<!-- Form Name -->
<legend>Настройки</legend>

<?php
foreach($aConfig as $key => $value){
?>
<div class="control-group">
  <label class="control-label" for="textinput"><b><?=$aConfigHelp[$key][0]?></b></label>
  <div class="controls">
    <?php if(!empty($aConfigHelp[$key][2]) && $aConfigHelp[$key][2] == 'select'){?>
    <select id="selectbasic" name="field_<?=$key?>" class="input-xlarge">
	<?php foreach($aConfigHelp[$key][3] as $skey => $svalue){ ?>
	      <option value='<?=$svalue?>' <?=$svalue==$value?'SELECTED':''?>><?=$skey?></option>
	<?php } ?>
    </select>
    <?php }elseif(!empty($aConfigHelp[$key][2]) && $aConfigHelp[$key][2] == 'checkbox'){ ?>
    <input id="textinput" name="field_<?=$key?>" type="checkbox" <?=$value?'checked':''?> class="input-xlarge">
    <?php }elseif(!empty($aConfigHelp[$key][2]) && $aConfigHelp[$key][2] == 'textarea'){ ?>
    <textarea id="textarea" name="field_<?=$key?>" style="width:500px;height:200px;"><?=htmlspecialchars($value)?></textarea>
    <?php }else{ ?>
    <input id="textinput" name="field_<?=$key?>" type="text" value="<?=htmlspecialchars($value)?>" class="input-xlarge">
    <?php } ?>
    <p class="help-block"><?=$aConfigHelp[$key][1]?></p>
  </div>
</div>

<?php
}

?>

<!-- Button -->
<div class="control-group">
  <div class="controls">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Сохранить</button>
  </div>
</div>

</fieldset>
</form>
		<?php
		echo '<h3>Статистика</h3>';
		echo '<table class="table table-hover table-striped"><tr><th>ID</th><th>Count</th></tr>';
		foreach($aStats as $aStat){
			echo "<tr><td>".$aStat['name']."</td><td>".$aStat['count']."</td></tr>";
		}
		echo '</table>';
		}
	}else{
		function showContent(){ 

			echo '<script>window.onload = function(){
				bootbox.prompt("<h1>Password</h1>", 
				function(result){window.location.href = "?page=admin&pass=" + result});
			};</script>';
		}

	} 

}

// =======================================================================================
// == MAIN TEMPLATE ======================================================================
// =======================================================================================

function showPage(){ 
	global $aConfig, $aPages, $currentPage, $counters;
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= $aConfig['project_name'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $aConfig['project_name'] ?>">
    <meta name="author" content="">

    <!-- Le styles -->
<!--    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap.css" rel="stylesheet"> -->
    <link href="http://raw.github.com/thomaspark/bootswatch/gh-pages/cerulean/bootstrap.css" rel="stylesheet">

    <!-- Fav and touch icons -->
    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://twitter.github.io/bootstrap/assets/ico/favicon.png">

    <style type="text/css">
    body{padding-top:20px;padding-bottom:60px}.container{margin:0 auto;max-width:1000px}.container>hr{margin:60px 0}.jumbotron{margin:80px 0;text-align:center}.jumbotron h1{font-size:100px;line-height:1}.jumbotron .lead{font-size:24px;line-height:1.25}.jumbotron .btn{font-size:21px;padding:14px 24px}.marketing{margin:60px 0}.marketing p+h4{margin-top:28px}.navbar .navbar-inner{padding:0}.navbar .nav{margin:0;display:table;width:100%}.navbar .nav li{display:table-cell;width:1%;float:none}.navbar .nav li a{font-weight:700;text-align:center;border-left:1px solid rgba(255,255,255,.75);border-right:1px solid rgba(0,0,0,.1)}.navbar .nav li:first-child a{border-left:0;border-radius:3px 0 0 3px}.navbar .nav li:last-child a{border-right:0;border-radius:0 3px 3px 0}
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
    <script src="http://twitter.github.io/bootstrap/assets/js/bootstrap.min.js"></script> 
    <script src="https://raw.github.com/makeusabrew/bootbox/v3.2.0/bootbox.min.js"></script>
    <script>
    	function countDummy($param){
		$(document).append($('<img>', { src : "?stat=1&id=" + $param, }));
	} 
	function alertDummy($id, $text){
		if(!$text) $text = "<?=$aConfig['dummy_message']?>";
		bootbox.alert($text);
		countDummy($id);
	}
    </script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://twitter.github.io/bootstrap/assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">

      <div class="masthead">
	<?php if($aConfig['members_login']){ ?>
		<div class="pull-right" style="margin-top:15px;">
			<?php if(strcasecmp($aConfig['members_login'], 'dummy') === 0 ){ ?>
				<a href="#" class="loginza" onclick="alertDummy('User')">
				    <img src="http://loginza.ru/img/sign_in_button_gray.gif" alt="Войти через loginza"/>
				</a>		
			<?php }else{ ?>
				<script src="http://loginza.ru/js/widget.js" type="text/javascript"></script>
				<a href="http://loginza.ru/api/widget?token_url=http://<?=$aConfig['domain']?>" class="loginza">
				    <img src="http://loginza.ru/img/sign_in_button_gray.gif" alt="Войти через loginza"/>
				</a>		
			<?php } ?>

	        </div>
		<div class="pull-right" style="margin:5px;">
			<h5>Войти на сайт:</h5> 	
		</div>
	<?php } ?>
        <h3 class="muted"><?= $aConfig['project_name'] ?></h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
		<?php foreach($aPages as $name => $link){ ?>
			<?php if(preg_match('/^DUMMY$/ism', $link)){ ?>
				<li><a href="#" onclick='alertDummy("<?=$name?>");'><?=$name?></a></li>
			<?php }else{ ?>
        		        <li <?=($currentPage==$link?'class="active"':'')?>><a href="?page=<?=$link?>"><?=$name?></a></li>
			<?php } ?>
		<?php } ?>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
      <?php  showContent(); ?>

      <hr>

      <div class="footer">
        <div class="pull-left">2013 <a href='?page=contacts'>&copy; <?=$aConfig['company_name']?></a></div>

	<script type="text/javascript">(function() {
 	if (window.pluso)if (typeof window.pluso.start == "function") return; var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
	s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true; s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
	var h=d[g]('head')[0] || d[g]('body')[0];h.appendChild(s);})();
	</script>
	<div class="pluso pull-right" data-options="medium,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print" data-background="#ebebeb"></div>

      </div>

    </div> <!-- /container -->
    <script>countDummy('page_<?=$currentPage?>');</script>
    <?=$counters?>
  </body>
</html>

<?php }

// =======================================================================================
// == INDEX PAGE =========================================================================
// =======================================================================================

if($currentPage == 'index' || $currentPage == '' || !$currentPage){

function showContent(){ ?>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <a class="btn btn-large btn-success" href="#">Get started today</a>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

<?php } 

// =======================================================================================
// == CONTACTS PAGE ======================================================================
// =======================================================================================

}elseif($currentPage == 'contacts'){

function showContent(){ ?>

	<div class="jumbotron"></div>
        <form method="POST" action="?" class="form-horizontal">  
            <input type='hidden' name='page' value='contacts'>
            <div class="control-group">  
                <label class="control-label" for="input_name">Имя</label>  
                <div class="controls">  
                    <input type="text" name="contact_name" id="input1" placeholder="Ваше имя">  
                </div>  
            </div>  
            <div class="control-group">  
                <label class="control-label" for="input_email">Email</label>  
                <div class="controls">  
                    <input type="text" name="contact_email" id="input2" placeholder="Ваш email">  
                </div>  
            </div>  
            <div class="control-group">  
                <label class="control-label" for="input_message">Сообщение</label>  
                <div class="controls">  
                    <textarea name="contact_message" id="input3" rows="9" class="span5" placeholder="Текст сообщения"></textarea>  
                </div>  
            </div>  
            <div class="form-actions">  
                <input type="hidden" name="save" value="contact">  
                <button type="submit" class="btn btn-primary">Отправить запрос</button>  
            </div>  
        </form>  

	
<?php } 

if($_POST){

	$name = $_POST["contact_name"];  
	$email = $_POST["contact_email"];  
	$message = $_POST["contact_message"]; 
	$headers = 'From: webmaster@'.$aConfig['domain'];

	$email_content = "Name: $name\n";  
	$email_content .= "Email Address: $email\n";  
	$email_content .= "Message:\n\n$message"; 

	@mail($aConfig['email'], $aConfig['project_name'].": Вопрос с сайта", $email_content, $headers);

	echo '<script>window.onload = function(){bootbox.alert("<h1>Спасибо!</h1>Мы постараемся ответить вам как можно скорее!", 
		function(){window.location.href = "?page=index"});
	};</script>';
}

// =======================================================================================
// == / PAGES ============================================================================
// =======================================================================================

}

showPage();
