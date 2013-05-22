<?php
// =======================================================================================
// == ABOUT ==============================================================================
// =======================================================================================
/*
    
Index.php CMS - lightweight PHP Based CMS based on Twitter Bootstrap and distributed in one PHP file.
Home page http://INDEXPHP.ORG/

Admin page: ?page=admin&pass=admin

Twitter Bootstrap Examples:http://twitter.github.io/bootstrap/getting-started.html#examples
GitHub: https://github.com/SergeyGu/index.phpCMS/blob/master/index.php

SQLite Admin PhpLiteAdmin: https://code.google.com/p/phpliteadmin/downloads/list
*/

$aConfig = array();

// =======================================================================================
// == CONFIGURATION 'RU' =================================================================
// =======================================================================================

// DO NOT REMOVE OR EDIT THIS LINE! MARKER:<CONFIG-RU>
$aConfigAll["ru"] = array(
  'domain' => 'indexphp.org',
  'project_name' => 'index.php CMS v0.3b',
  'company_name' => 'IndexPHP.ORG CMS',
  'email' => 'guschin.sergey@gmail.com',
  'admin_password' => 'poweradmin',
  'multy_languages' => '1',
  'members_login' => 'DUMMY',
  'dummy_message' => '<h1>Большое вам спасибо!</h1><br>За интерес к нашим функциям.<br><br>К сожалению в данный момент данный функционал в процессе разработки,но мы обязательно добавим его в ближайшее время.<br><br>',
  'counters' => '<script>  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');  ga(\'create\', \'UA-39949692-3\', \'indexphp.org\');  ga(\'send\', \'pageview\');</script>',
  'social_buttons' => '<script type="text/javascript">(function() {     if (window.pluso)if (typeof window.pluso.start == "function") return; var d = document, s = d.createElement(\'script\'), g = \'getElementsByTagName\';    s.type = \'text/javascript\'; s.charset=\'UTF-8\'; s.async = true; s.src = (\'https:\' == window.location.protocol ? \'https\' : \'http\')  + \'://share.pluso.ru/pluso-like.js\';    var h=d[g](\'head\')[0] || d[g](\'body\')[0];h.appendChild(s);})();    </script>    <div class="pluso" data-options="medium,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print" data-background="#ebebeb"></div>',
);

//MARKER:</CONFIG-RU> DO NOT REMOVE OR EDIT THIS LINE! 

// DO NOT REMOVE OR EDIT THIS LINE! MARKER:<CONFIG-PAGES-RU>
$aPagesAll['ru'] = array(
    'Главная' => 'index',
    'Документация' => 'DUMMY',
    'Обратная связь' => 'contacts'
);
//MARKER:</CONFIG-PAGES-RU> DO NOT REMOVE OR EDIT THIS LINE! 

// =======================================================================================
// == CONFIGURATION 'EN' =================================================================
// =======================================================================================

// DO NOT REMOVE OR EDIT THIS LINE! MARKER:<CONFIG-EN>
$aConfigAll["en"] = array(
  'domain' => 'indexphp.org',
  'project_name' => 'index.php CMS v0.3b',
  'company_name' => 'IndexPHP.ORG CMS',
  'email' => 'guschin.sergey@gmail.com',
  'admin_password' => 'poweradmin',
  'multi_languages' => '1',
  'members_login' => 'DUMMY',
  'dummy_message' => '<h1>Большое вам спасибо!</h1><br>За интерес к нашим функциям.<br><br>К сожалению в данный момент данный функционал в процессе разработки,но мы обязательно добавим его в ближайшее время.<br><br>',
  'counters' => '<script>  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');  ga(\'create\', \'UA-39949692-3\', \'indexphp.org\');  ga(\'send\', \'pageview\');</script>',
  'social_buttons' => '<script type="text/javascript">(function() {     if (window.pluso)if (typeof window.pluso.start == "function") return; var d = document, s = d.createElement(\'script\'), g = \'getElementsByTagName\';    s.type = \'text/javascript\'; s.charset=\'UTF-8\'; s.async = true; s.src = (\'https:\' == window.location.protocol ? \'https\' : \'http\')  + \'://share.pluso.ru/pluso-like.js\';    var h=d[g](\'head\')[0] || d[g](\'body\')[0];h.appendChild(s);})();    </script>    <div class="pluso" data-options="medium,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print" data-background="#ebebeb"></div>',
);

//MARKER:</CONFIG-EN> DO NOT REMOVE OR EDIT THIS LINE! 

// DO NOT REMOVE OR EDIT THIS LINE! MARKER:<CONFIG-PAGES-EN>
$aPagesAll['en'] = array(
    'Main' => 'index',
    'Documentation' => 'DUMMY',
    'Contacts' => 'contacts'
);
//MARKER:</CONFIG-PAGES-EN> DO NOT REMOVE OR EDIT THIS LINE! 

// =======================================================================================
// == CONFIGURATION HELP =================================================================
// =======================================================================================

$aConfigHelpAll['ru'] = array(
    'domain' => array('Доменное имя', 'Доменное имя, на котором располагается ваш проекта testtest.com'),
    'project_name' => array('Название проекта', 'Название проекта, будет отображаться в том числе в левом верхнем углу и в названии вкладки'),
    'company_name' => array('Название компании/автора', 'Можно указать авторство проекта - будет отображаться в подвале'),
    'email' => array('Email', 'Email для связи с вами, куда будут уходить отправленные пользователями вопросы со страницы контакты'),
    'admin_password' => array('Административный пароль', 'Пароль для доступа к этой странице и статистике'),
    'multi_languages' => array('Многоязычная поддержка','Включение/выключение многоязычной поддержки','select', 
                array('Включена' => true, 'Выключена' => false, 'Заглушка' => 'DUMMY')),
    'social_buttons' => array('Социальные кнопки', 'Код кнопок социальных сетей для вашего проекта, например Pluso.ru или AddThis.com','textarea'),
    'members_login' => array('Пользовательская зона', 'Включить или отключить возможность пользователям авторизоваться на сайт. 
                При установке значения DUMMY возможность логина будет отображаться, но при нажатии на нее вызовется стандартная 
                функция-заглушка и количество кликов можно будет отследить по идентификатору "member"', 'select', 
                array('Включена' => true, 'Выключена' => false, 'Заглушка' => 'DUMMY')),
    'dummy_message' => array('Текст окна-заглушки', 'Текст, возникающий на сайте при обращении к функциям, которых еще нет и которые
                закрыты функциями-заглушками', 'textarea'),
    'counters' => array('Внешние счетчики', 'Сюда можно добавить код внешних счетчиков, например Google Analytics или LiveInternet', 'textarea'),
);

$aConfigHelpAll['en'] = array(
    'domain' => array('Domain name', 'Доменное имя, на котором располагается ваш проекта testtest.com'),
    'project_name' => array('Project name', 'Название проекта, будет отображаться в том числе в левом верхнем углу и в названии вкладки'),
    'company_name' => array('Your company(just your) name', 'Можно указать авторство проекта - будет отображаться в подвале'),
    'email' => array('Email', 'Email для связи с вами, куда будут уходить отправленные пользователями вопросы со страницы контакты'),
    'admin_password' => array('Admin password', 'Пароль для доступа к этой странице и статистике'),
    'multi_languages' => array('Multylanguage','Включение/выключение многоязычной поддержки','select', 
                array('On' => true, 'Off' => false, 'Dummy' => 'DUMMY')),
    'social_buttons' => array('Social buttons', 'Код кнопок социальных сетей для вашего проекта, например Pluso.ru или AddThis.com','textarea'),
    'members_login' => array('Members login', 'Включить или отключить возможность пользователям авторизоваться на сайт. 
                При установке значения DUMMY возможность логина будет отображаться, но при нажатии на нее вызовется стандартная 
                функция-заглушка и количество кликов можно будет отследить по идентификатору "member"', 'select', 
                array('On' => true, 'Off' => false, 'Dummy' => 'DUMMY')),
    'dummy_message' => array('Dummy alert text', 'Текст, возникающий на сайте при обращении к функциям, которых еще нет и которые
                закрыты функциями-заглушками', 'textarea'),
    'counters' => array('External counters', 'Сюда можно добавить код внешних счетчиков, например Google Analytics или LiveInternet', 'textarea'),
);

// =======================================================================================
// == LANGUAGES===========================================================================
// =======================================================================================

session_start();

$aAviableLangs = array('en', 'ru'); // Array of enabled languages
$currentLang = 'en'; 
if(!empty($_GET['lang']) and @in_array($_GET['lang'], $aAviableLangs)){
    $currentLang = $_GET['lang'];
    $_SESSION['lang'] = $currentLang;
}elseif(empty($_SESSION['lang'])){
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if(preg_match('/ru|ua|kz/', $browserLang)){
        $currentLang = 'ru';
    }
    $_SESSION['lang'] = $currentLang;
}else{
    $currentLang = $_SESSION['lang'];
}

$aConfig = $aConfigAll[$currentLang];
$aConfigHelp = $aConfigHelpAll[$currentLang];
$aPages = $aPagesAll[$currentLang];

function l(){global $aAviableLangs, $currentLang; return func_get_arg(array_search($currentLang, $aAviableLangs));}

// =======================================================================================
// == DATABASE FUNCTIONS =================================================================
// =======================================================================================

$bDBEnabled = function_exists('sqlite_open');

if($bDBEnabled){
    $dbFileName = 'database.db';
    $dbhandle = sqlite_open($dbFileName, 0666, $error);

    if(!$dbhandle) die ($error);
    $res = sqlite_query($dbhandle, 
        "SELECT name FROM sqlite_master WHERE type='table' AND name='stats';" , $error);
    if(!sqlite_fetch_all($res)){
        // Installation
        $stm = "CREATE TABLE stats(Id integer PRIMARY KEY," . 
                   "name INTEGER NOT NULL, count INTEGER)";
        $ok = sqlite_exec($dbhandle, $stm, $error);
        $stm = "CREATE TABLE users(Id integer PRIMARY KEY," . 
               "name TEXT UNIQUE NOT NULL, count TEXT)";
        $ok = sqlite_exec($dbhandle, $stm, $error);
    }
}

// =======================================================================================
// == OTHER ==============================================================================
// =======================================================================================

$indexPhpVersion = '0.3b';

// Page routines
$page = 'index';
if(!empty($_REQUEST['page'])){
    $page = $_REQUEST['page'];
}
$currentPage = $page;

// =======================================================================================
// == ADMIN PAGE =========================================================================
// =======================================================================================

// Saving statistics by requesting image like <img src='?stat=1&id=ID'> where id - name of statistics row
// counter will be increased by 1 for corresponding ID
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
        // Saving admin configuration
        if(!empty($_REQUEST['action'] ) && $_REQUEST['action'] == 'save'){
            function updateArray($strStart, $strEnd, $arrayName, $aArray, $text){
            $pos1=stripos($text, $strStart);
            $pos2=stripos($text, $strEnd);
            $newContent = substr($text, 0, $pos1 + strlen($strStart));
            $newContent .= "\n".$arrayName.' = '.var_export($aArray, 1).";\n";
            // echo "\n".$arrayName.' = '.var_export($aArray, 1).";\n";
            $newContent .= substr($text, $pos2-1);
                return $newContent;
            }            

            $selfContent = file_get_contents(__FILE__);
            $newContent = $selfContent;
            foreach($aAviableLangs as $lang){
                $aNewConfig = array();
                foreach($_REQUEST as $key => $value){
                    if(preg_match('/^field_'.$lang.'_(.+)$/', $key, $aMatch)){
                        $aNewConfig[$aMatch[1]] = 
                            str_replace(array("\n", "\r"), '', 
                                    stripslashes(htmlspecialchars_decode($value)));
                    }
                }
                $newContent = updateArray('MARKER:<CONFIG-'.$lang.'>', 
                        '//MARKER:</CONFIG-'.$lang.'>', '$aConfigAll["'.$lang.'"]' ,$aNewConfig, $newContent);
            }
            
            copy(__FILE__, __FILE__.'.bak');
            file_put_contents(__FILE__, $newContent);
            echo '<html><body>Saving...<script>window.location.href = "'.basename(__FILE__).
                '?page=admin&pass='.$_REQUEST['pass']/*.'&rnd='.rand(1,20)*/.'";</script></body></html>';
            exit();
        }
    
        function showContent(){ 
            global $dbhandle, $aConfig, $aConfigHelp, $aConfigAll, $aConfigHelpAll, $bDBEnabled, $currentLang;        
            if($bDBEnabled){
                $res = sqlite_query($dbhandle, "SELECT name,sum(count) as count FROM 'stats' group by name");
                $aStats = sqlite_fetch_all($res);
            }else{
                $aStats = array();
            }

            function showSettings($lang){
                global $aConfig, $aConfigHelp, $aConfigAll, $aConfigHelpAll;
                $aSettings = $aConfigAll[$lang];
                $aSettingsHelp = $aConfigHelpAll[$lang];
                foreach($aSettings as $key => $value){ ?>
                <div class="control-group">
                  <label class="control-label" for="textinput"><b><?=$aSettingsHelp[$key][0]?></b></label>
                  <div class="controls">
                    <?php if(!empty($aSettingsHelp[$key][2]) && $aSettingsHelp[$key][2] == 'select'){?>
                    <select id="selectbasic" name="field_<?=$lang?>_<?=$key?>" class="input-xlarge">
                    <?php foreach($aSettingsHelp[$key][3] as $skey => $svalue){ ?>
                          <option value='<?=$svalue?>' <?=$svalue==$value?'SELECTED':''?>><?=$skey?></option>
                    <?php } ?>
                    </select>
                    <?php }elseif(!empty($aSettingsHelp[$key][2]) && $aSettingsHelp[$key][2] == 'checkbox'){ ?>
                    <input id="textinput" name="field_<?=$lang?>_<?=$key?>" type="checkbox" <?=$value?'checked':''?> class="input-xlarge">
                    <?php }elseif(!empty($aSettingsHelp[$key][2]) && $aSettingsHelp[$key][2] == 'textarea'){ ?>
                    <textarea id="textarea" name="field_<?=$lang?>_<?=$key?>" style="width:500px;height:200px;"><?=htmlspecialchars($value)?></textarea>
                    <?php }else{ ?>
                    <input id="textinput" name="field_<?=$lang?>_<?=$key?>" type="text" value="<?=htmlspecialchars($value)?>" class="input-xlarge">
                    <?php } ?>
                    <p class="help-block"><?=$aSettingsHelp[$key][1]?></p>
                  </div>
                </div>
                <?php }
            }
        ?>
<?php if(!$bDBEnabled){ ?>
<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?=l('SQLite library not found. Internal statistics and Members Login disabled', 
          'SQlite библиотека не обнаружена. Функции, относящиеся к базе данных отключены: Внутренняя статистика, Пользовательский вход.')?>
</div>        
<?php } ?>
<?php if(!is_writable(__FILE__)){ ?>
<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?=l('Can\'t save settings. Please, setup 0x777 permissions for <?=basename(__FILE__)?>',
          'Настройки не доступны для сохранения! <br>Файл <?=basename(__FILE__)?> не доступен для записи и не может быть переписан. Пожалуйста установите для него права 0x777')?>
</div>        
<?php } ?>

<form class="form-horizontal" method=POST action="<?=basename(__FILE__)?>">
    <input type="hidden" name="page" value="admin">
    <input type="hidden" name="pass" value="<?=$_REQUEST['pass']?>">
    <input type="hidden" name="action" value="save">
    <fieldset>
        <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a data-toggle="tab" href="#red"><?=l('Settings Russian','Настройки Русский')?></a></li>
            <li><a data-toggle="tab" href="#yellow"><?=l('Settings English','Настройки English')?></a></li>
            <li><a data-toggle="tab" href="#orange"><?=l('Statistics','Статистика')?></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="red">
            <?=showSettings('ru')?>
            </div>
            <div class="tab-pane" id="yellow">
            <?=showSettings('en')?>
            </div>
            <div class="tab-pane" id="orange">
        <?php
                echo '<table class="table table-hover table-striped"><tr><th>ID</th><th>Count</th></tr>';
                    foreach($aStats as $aStat){
                        echo "<tr><td>".$aStat['name']."</td><td>".$aStat['count']."</td></tr>";
                    }
                echo '</table>';

        ?>
            </div>
        </div>
        <script> $(function () { $('.nav-tabs').tabs() }) </script>
        <!-- Save button -->
        <div class="control-group">
          <div class="controls">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Сохранить</button>
          </div>
        </div>
    </fieldset>
</form>
        <?php
        }
    }else{ // If no password variable in URL
        function showContent(){ 
            ?><script>window.onload = function(){
                bootbox.prompt("<h1>Password</h1>", 
                function(result){window.location.href = "?page=admin&pass=" + result});
            };</script>
            <?php
        }
    } 
}

// =======================================================================================
// == LOGIN & MEMBER AUTHORIZATION =======================================================
// =======================================================================================

$aUser = false;
if(!empty($_POST['token'])){
    $url = 'http://loginza.ru/api/authinfo?token='.$_POST['token'];
        if(function_exists('curl_init')){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $responce = curl_exec($curl);
            curl_close($curl);
        }else{
            $responce = file_get_contents($url);
        }
    $aResponce = json_decode($responce, 1);
    if(!empty($aResponce['uid'])){
        $_SESSION['user'] = $aUser = $aResponce;
        if($bDBEnabled){
            //sqlite_query($dbhandle, 
                // "INSERT into users('name','count') VALUES ('".addslashes($_REQUEST['id'])."','1');" , $error);
       }
   } 
}elseif(!empty($_SESSION['user'])){
    $aUser = $_SESSION['user'];
}

function showLoginButton(){
    global $aConfig, $aUser;
    if($aUser){
    	echo $aUser['email'];
    }else{
?>
                <script src="http://loginza.ru/js/widget.js" type="text/javascript"></script>
                <a href="http://loginza.ru/api/widget?token_url=http://<?=$aConfig['domain']?>" class="loginza">
                    <img src="http://loginza.ru/img/sign_in_button_gray.gif" alt="Войти через loginza"/>
                </a>        
<?php
    }
}

function showLoginButtonDummy(){
    global $aConfig, $aUser;
?>
                <a href="#" class="loginza" onclick="alertDummy('User')">
                    <img src="http://loginza.ru/img/sign_in_button_gray.gif" alt="Войти через loginza"/>
                </a>        
<?php
}


// ==============================================================================================================
// == MAIN TEMPLATE =============================================================================================
// ==============================================================================================================

function showPage(){ 
    global $aConfig, $aPages, $currentPage, $indexPhpVersion, $currentLang, $aAviableLangs;
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= $aConfig['project_name'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $aConfig['project_name'] ?>">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap.css" rel="stylesheet">

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
    <script src="http://twitter.github.io/bootstrap/assets/js/bootstrap-tab.js"></script> 
    <script src="https://raw.github.com/makeusabrew/bootbox/v3.2.0/bootbox.min.js"></script>
    <script>
        function countDummy($param){
            $(document).append($('<img>', { src : "?stat=1&id=" + $param, }));
        } 
        function alertDummy($id, $text){
            if(!$text) $text = "<?=$aConfig['dummy_message']?>";
            bootbox.alert($text);
            countDummy($id);
            return false;
        }
    </script>
    <!--[if lt IE 9]>
      <script src="http://twitter.github.io/bootstrap/assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="masthead">

        <?php if($aConfig['members_login']){ ?>
        <div class="pull-right" style="margin-top:15px;">
            <?php if(strcasecmp($aConfig['members_login'], 'dummy') === 0){ 
                showLoginButton();
            }else{
                showLoginButtonDummy();
            } ?>
        </div>

    <!-- Languages -->
	<div class="dropdown pull-right"  style="margin-top:15px;margin-right:30px;">
    <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
        Language
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    	<?php foreach($aAviableLangs as $l){echo "<li><a href='?lang=$l'><img src='http://l10n.xwiki.org/xwiki/bin/download/L10N/Flags/$l.png'> $l</a></li>";} ?>
    </ul>
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
        <div class="pull-right"><?=$aConfig['social_buttons']?></div>
        <div class="pull-left">2013 <a href='?page=contacts'>&copy; <?=$aConfig['company_name']?></a></div>
    <br><div class="pull-left">Powered By <a href='http://indexphp.org'>IndexPHP CMS v<?=$indexPhpVersion?></a></div>

      </div>                                                                                                        

    </div> <!-- /container -->
    <script>countDummy('page_<?=$currentPage?>');</script>
    <?=$aConfig['counters']?>
  </body>
</html>

<?php }

// =============================================================================================================
// == INDEX PAGE ===============================================================================================
// =============================================================================================================

if($currentPage == 'index' || $currentPage == '' || !$currentPage){

    function showContent(){ 
        global $indexPhpVersion, $currentLang;
    ?>

      <div class="jumbotron">
        <h1>index.php</h1>                                           
        <h2><?=$currentLang=='ru'?'Бесплатная OpenSource Twitter Bootstrap PHP CMS<br>в одном файле для твоего Стартапа!':'Free OpenSource One-File Twitter Bootstrap based<br>PHP miniCMS for your Startup'?></h2>
        <p><?=$currentLang=='ru'?'Создай <a href="http://en.wikipedia.org/wiki/Minimum_viable_product" target="_blank">Minimal Viable Product</a> за минуту!':'Create your <a href="http://en.wikipedia.org/wiki/Minimum_viable_product" target="_blank">Minimal Viable Product</a> in minute!'?></p>
        <a class="btn btn-large btn-success" href="https://raw.github.com/SergeyGu/index.phpCMS/master/index.php">Download v<?=$indexPhpVersion?></a>
      </div>

      <hr>

      <div class="row-fluid">
        <div class="span4">
    <?php if($currentLang=='ru'){ ?>
          <h2>Возможности</h2>
        <p>
            <ul>
              <li>Вся CMS -30kb в одном файле! <span class="label label-warning">Best!</span> </li>
              <li>Twitter Bootstrap шаблон!</li>
              <li>Функциональный Admin интерфейс!</li>
              <li>Вход для пользователей!</li>
              <li>Не требует MySQL!</li>
              <li>Вход для пользователей!</li>
              <li>Идеально подходит для mini-Стартапов!</li>
            </ul>
        </p>
    <?php }else{ ?>
          <h2>Common features</h2>
            <p>
                <ul>
                  <li>Only one file 30kb size! <span class="label label-warning">Best!</span> </li>
                  <li>Twitter Bootstrap template!</li>
                  <li>Admin interface interface!</li>
                  <li>User Autentification!</li>
                  <li>No MySQL need!</li>
                  <li>Internal statistics!</li>
                  <li>Perfect for mini-Startups!</li>
                </ul>
            </p>

    <?php } ?>
          <p><a class="btn" href="#" onclick='return alertDummy("collumn_1");'>View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>How-To</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#" onclick='return alertDummy("collumn_2");'>View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>News</h2>
	<p>
<a class="twitter-timeline" href="https://twitter.com/search?q=%23girls" data-widget-id="337225335630340099">#indexphpcms</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</p>
          <p><a class="btn" href="#" onclick='return alertDummy("collumn_3");'>View details &raquo;</a></p>

        </div>
      </div>

<?php } 

// =======================================================================================
// == CONTACTS PAGE ======================================================================
// =======================================================================================

}elseif($currentPage == 'contacts'){

    function showContent(){ ?>

    <div class="jumbotron"></div>
        <form method="POST" action="" class="form-horizontal">  
            <input type='hidden' name='page' value='contacts'>
            <div class="control-group">  
                <label class="control-label" for="input_name"><?=l('Name','Имя')?></label>  
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
                <label class="control-label" for="input_message"><?=l('Message','Сообщение')?></label>  
                <div class="controls">  
                    <textarea name="contact_message" id="input3" rows="9" class="span5" placeholder="Текст сообщения"></textarea>  
                </div>  
            </div>  
            <div class="form-actions">  
                <input type="hidden" name="save" value="contact">  
                <button type="submit" class="btn btn-primary"><?=l('Send','Отправить запрос')?></button>  
            </div>  
        </form>  

    
<?php } 

    if(!empty($_POST)){

        $name = addslashes($_POST["contact_name"]);  
        $email = addslashes($_POST["contact_email"]);  
        $message = addslashes($_POST["contact_message"]); 
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

showPage(); // int main(void)
