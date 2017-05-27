<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 19,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'login',
    'longtitle' => '',
    'description' => '',
    'alias' => 'login',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 18,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 4,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1433341402,
    'editedby' => 1,
    'editedon' => 1433342110,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1433341380,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'user/login.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => '{"stercseo":{"index":"1","follow":"1","sitemap":"1","priority":"0.5","changefreq":"weekly","urls":null}}',
    '_content' => '<!DOCTYPE>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <title>login - Кондиционеры в Екатеринбурге</title>
  <base href="http://air66.ru/">
  <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="assets/css/non-responsiv.css" rel="stylesheet">
  <link type="text/css" href="assets/css/style.css" rel="stylesheet">
  <link type="text/css" href="assets/css/dop-style.css" rel="stylesheet">
  <style>
    div.central-banner{height:[[!pdoField? &id=`1` &field=`heightbanner` &includeTVs=`heightbanner`]];}
    .central-banner td {vertical-align:top;}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script>
    (function($) {
    $(function() {
        $(\'ul.tabsm\').delegate(\'li:not(.current)\', \'click\', function() {
            $(this).addClass(\'current\').siblings().removeClass(\'current\')
                .parents(\'div.tabs\').find(\'div.box\').hide().eq($(this).index()).fadeIn(150);
        })
    })

    })(jQuery)
  </script>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44105699 = new Ya.Metrika({
                    id:44105699,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44105699" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
  <body>
<div id="wrapper">
	<div class="layout">
		<div class="user-panel"> 
	<ul>
		<li class="user-info">
			[[!HybridAuth?]]
		</li>
		<li class="order-info">
			<div>
				<div id="orderLink" umi:element-id="6248" umi:field-name="top_seo_block">Кондиционеры в Екатеринбурге с установкой. Цена купить!</div>
			</div>
		</li>
	</ul>
</div>
	<div class="header">
		<div class="logo-row"><table border="0" width="100%">
			<tbody>
				<tr>
					<td class="logo" valign="top">
						<a id="logo" href="/" style="width:100%; height: 100%">
							<div style="" umi:element-id="6248" umi:field-name="site_logo">
								<img src="assets/images/logo.jpg">
							</div>
						</a>
					</td>
  				<td valign="top" style="width: 275px;">
            <div class="head_contact">
                <p class="slogan"></p>
                <p class="adr"></p>
                <div class="phone">
                	<p class="tel"> +7(343)344-83-04<span class="ya-phone"></span></p>
                </div>
                <p class="time" style="font-size: 7pt;" umi:element-id="6248" umi:field-name="work_time"><nobr>Пн-Сб: 9:00— 20:00</nobr></p>
            </div>
          </td>
  				<td style="vertical-align:top;padding-top:6px;padding-left:0;">
  					<span umi:element-id="6248" umi:field-name="slogan" class="cityName">— Кондиционеры с установкой </span>
  					[[!msMiniCart?]]
  				</td>
    				<td class="search" style="width:250px;">
    				  [[!mSearchForm? &autocomplete=`queries` &pageId=`24`]]
    				</td>
  			  </tr>
  		  </tbody>
      </table>
    </div>
		<div class="clear"></div>
		[[!pdoMenu? 
		  &parents=`0` 
		  &level=`2`
		  &tplInner=`@INLINE <p>[[+wrapper]]</p>` 
		  &tplInnerRow=`@INLINE <a href="[[+link]]">[[+menutitle]]</a>`
		  &tplInnerHere
		]]
	  
</div>
		
		<div class="layout">
			[[!officeAuth?]]
		</div>
	</div>
	<div class="footer_wrapper"><div class="footer"><div class="footer-row">
		<div class="clear"></div>
		<div class="copy">
			<div id="footer_content" umi:field-name="footer_content" umi:element-id="6248" umi:empty="Пусто">
				
			</div>
			<a href="/content/sitemap">Карта сайта</a>
			<div class="product_code_search">
				<span>Поиск по коду товара:</span>
			  [[!mSearchForm? &minQuery=`4` &element=`msProducts` &tplForm=`tpl.mSearch2.form.foot` &tpl=`tpl.mSearch2.ac.foot` &pageId=`24` &fields=`article`]]
			</div>
		</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>',
    '_isForward' => true,
    '_sjscripts' => 
    array (
      0 => '<!-- This site is optimized with the Sterc seoPro plugin 1.0.3 - http://www.sterc.nl/modx/seopro -->',
    ),
    '_loadedjscripts' => 
    array (
      '<!-- This site is optimized with the Sterc seoPro plugin 1.0.3 - http://www.sterc.nl/modx/seopro -->' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*description]]' => '',
    '[[*pagetitle]]' => 'login',
    '[[$head]]' => '<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <title>login - Кондиционеры в Екатеринбурге</title>
  <base href="http://air66.ru/">
  <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="assets/css/non-responsiv.css" rel="stylesheet">
  <link type="text/css" href="assets/css/style.css" rel="stylesheet">
  <link type="text/css" href="assets/css/dop-style.css" rel="stylesheet">
  <style>
    div.central-banner{height:[[!pdoField? &id=`1` &field=`heightbanner` &includeTVs=`heightbanner`]];}
    .central-banner td {vertical-align:top;}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script>
    (function($) {
    $(function() {
        $(\'ul.tabsm\').delegate(\'li:not(.current)\', \'click\', function() {
            $(this).addClass(\'current\').siblings().removeClass(\'current\')
                .parents(\'div.tabs\').find(\'div.box\').hide().eq($(this).index()).fadeIn(150);
        })
    })

    })(jQuery)
  </script>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44105699 = new Ya.Metrika({
                    id:44105699,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44105699" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>',
    '[[$header]]' => '<div class="user-panel"> 
	<ul>
		<li class="user-info">
			[[!HybridAuth?]]
		</li>
		<li class="order-info">
			<div>
				<div id="orderLink" umi:element-id="6248" umi:field-name="top_seo_block">Кондиционеры в Екатеринбурге с установкой. Цена купить!</div>
			</div>
		</li>
	</ul>
</div>
	<div class="header">
		<div class="logo-row"><table border="0" width="100%">
			<tbody>
				<tr>
					<td class="logo" valign="top">
						<a id="logo" href="/" style="width:100%; height: 100%">
							<div style="" umi:element-id="6248" umi:field-name="site_logo">
								<img src="assets/images/logo.jpg">
							</div>
						</a>
					</td>
  				<td valign="top" style="width: 275px;">
            <div class="head_contact">
                <p class="slogan"></p>
                <p class="adr"></p>
                <div class="phone">
                	<p class="tel"> +7(343)344-83-04<span class="ya-phone"></span></p>
                </div>
                <p class="time" style="font-size: 7pt;" umi:element-id="6248" umi:field-name="work_time"><nobr>Пн-Сб: 9:00— 20:00</nobr></p>
            </div>
          </td>
  				<td style="vertical-align:top;padding-top:6px;padding-left:0;">
  					<span umi:element-id="6248" umi:field-name="slogan" class="cityName">— Кондиционеры с установкой </span>
  					[[!msMiniCart?]]
  				</td>
    				<td class="search" style="width:250px;">
    				  [[!mSearchForm? &autocomplete=`queries` &pageId=`24`]]
    				</td>
  			  </tr>
  		  </tbody>
      </table>
    </div>
		<div class="clear"></div>
		[[!pdoMenu? 
		  &parents=`0` 
		  &level=`2`
		  &tplInner=`@INLINE <p>[[+wrapper]]</p>` 
		  &tplInnerRow=`@INLINE <a href="[[+link]]">[[+menutitle]]</a>`
		  &tplInnerHere
		]]
	  
</div>',
    '[[$footer]]' => '<div class="footer_wrapper"><div class="footer"><div class="footer-row">
		<div class="clear"></div>
		<div class="copy">
			<div id="footer_content" umi:field-name="footer_content" umi:element-id="6248" umi:empty="Пусто">
				
			</div>
			<a href="/content/sitemap">Карта сайта</a>
			<div class="product_code_search">
				<span>Поиск по коду товара:</span>
			  [[!mSearchForm? &minQuery=`4` &element=`msProducts` &tplForm=`tpl.mSearch2.form.foot` &tpl=`tpl.mSearch2.ac.foot` &pageId=`24` &fields=`article`]]
			</div>
		</div>
		</div>
		</div>
	</div>',
    '[[~19]]' => 'user/login.html',
    '[[~25]]' => 'korzina.html',
    '[[%ms2_frontend_count_unit]]' => 'шт.',
    '[[%ms2_frontend_currency]]' => 'руб.',
    '[[~24]]' => 'rezultatyi-poiska.html',
    '[[%search]]' => 'Поиск',
    '[[%office_auth_login]]' => 'Авторизация',
    '[[%office_auth_login_username]]' => 'Логин',
    '[[%office_auth_login_username_desc]]' => 'Укажите логин или email, которые вы использовали при регистрации.',
    '[[%office_auth_login_password]]' => 'Пароль',
    '[[%office_auth_login_password_desc]]' => 'Если вы не помните свой пароль - просто оставьте это поле пустым и вы получите новый, вместе со ссылкой на активацию.',
    '[[%office_auth_login_btn]]' => 'Вход',
    '[[%office_auth_login_ha]]' => 'Социальные сети',
    '[[%office_auth_login_ha_desc]]' => 'Вы можете использовать быстрый вход через социальные сети, при условии, что вы уже зарегистрировались через почту и привязали какой-то из сервисов к своей учётной записи.',
    '[[%office_auth_register]]' => 'Регистрация',
    '[[%office_auth_register_email]]' => 'Email',
    '[[%office_auth_register_email_desc]]' => 'На указанный email придёт письмо со ссылкой для активации.',
    '[[%office_auth_register_password]]' => 'Пароль',
    '[[%office_auth_register_password_desc]]' => 'Вы можете указать свой пароль, или оставить это поле пустым и тогда он будет сгенерирован автоматически.',
    '[[%office_auth_register_username]]' => 'Логин',
    '[[%office_auth_register_username_desc]]' => 'Вы можете указать отдельный логин, чтобы не использовать email для входа.',
    '[[%office_auth_register_fullname]]' => 'Имя',
    '[[%office_auth_register_fullname_desc]]' => 'Ваше имя, для отображения на сайте.',
    '[[%office_auth_register_btn]]' => 'Регистрация',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 59,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="[[+seoPro.keywords]]" />
  <meta name="description" content="[[*description]]" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <title>[[*pagetitle]] - [[++site_name]]</title>
  <base href="[[++site_url]]">
  <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="assets/css/non-responsiv.css" rel="stylesheet">
  <link type="text/css" href="assets/css/style.css" rel="stylesheet">
  <link type="text/css" href="assets/css/dop-style.css" rel="stylesheet">
  <style>
    div.central-banner{height:[[!pdoField? &id=`1` &field=`heightbanner` &includeTVs=`heightbanner`]];}
    .central-banner td {vertical-align:top;}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script>
    (function($) {
    $(function() {
        $(\'ul.tabsm\').delegate(\'li:not(.current)\', \'click\', function() {
            $(this).addClass(\'current\').siblings().removeClass(\'current\')
                .parents(\'div.tabs\').find(\'div.box\').hide().eq($(this).index()).fadeIn(150);
        })
    })

    })(jQuery)
  </script>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44105699 = new Ya.Metrika({
                    id:44105699,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44105699" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="[[+seoPro.keywords]]" />
  <meta name="description" content="[[*description]]" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <title>[[*pagetitle]] - [[++site_name]]</title>
  <base href="[[++site_url]]">
  <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="assets/css/non-responsiv.css" rel="stylesheet">
  <link type="text/css" href="assets/css/style.css" rel="stylesheet">
  <link type="text/css" href="assets/css/dop-style.css" rel="stylesheet">
  <style>
    div.central-banner{height:[[!pdoField? &id=`1` &field=`heightbanner` &includeTVs=`heightbanner`]];}
    .central-banner td {vertical-align:top;}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script>
    (function($) {
    $(function() {
        $(\'ul.tabsm\').delegate(\'li:not(.current)\', \'click\', function() {
            $(this).addClass(\'current\').siblings().removeClass(\'current\')
                .parents(\'div.tabs\').find(\'div.box\').hide().eq($(this).index()).fadeIn(150);
        })
    })

    })(jQuery)
  </script>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44105699 = new Ya.Metrika({
                    id:44105699,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44105699" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 49,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<div class="user-panel"> 
	<ul>
		<li class="user-info">
			[[!HybridAuth?]]
		</li>
		<li class="order-info">
			<div>
				<div id="orderLink" umi:element-id="6248" umi:field-name="top_seo_block">[[++slogan]]</div>
			</div>
		</li>
	</ul>
</div>
	<div class="header">
		<div class="logo-row"><table border="0" width="100%">
			<tbody>
				<tr>
					<td class="logo" valign="top">
						<a id="logo" href="/" style="width:100%; height: 100%">
							<div style="" umi:element-id="6248" umi:field-name="site_logo">
								<img src="assets/images/logo.jpg">
							</div>
						</a>
					</td>
  				<td valign="top" style="width: 275px;">
            <div class="head_contact">
                <p class="slogan"></p>
                <p class="adr"></p>
                <div class="phone">
                	<p class="tel"> +7(343)344-83-04<span class="ya-phone"></span></p>
                </div>
                <p class="time" style="font-size: 7pt;" umi:element-id="6248" umi:field-name="work_time"><nobr>Пн-Сб: 9:00— 20:00</nobr></p>
            </div>
          </td>
  				<td style="vertical-align:top;padding-top:6px;padding-left:0;">
  					<span umi:element-id="6248" umi:field-name="slogan" class="cityName">— Кондиционеры с установкой </span>
  					[[!msMiniCart?]]
  				</td>
    				<td class="search" style="width:250px;">
    				  [[!mSearchForm? &autocomplete=`queries` &pageId=`24`]]
    				</td>
  			  </tr>
  		  </tbody>
      </table>
    </div>
		<div class="clear"></div>
		[[!pdoMenu? 
		  &parents=`0` 
		  &level=`2`
		  &tplInner=`@INLINE <p>[[+wrapper]]</p>` 
		  &tplInnerRow=`@INLINE <a href="[[+link]]">[[+menutitle]]</a>`
		  &tplInnerHere
		]]
	  
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="user-panel"> 
	<ul>
		<li class="user-info">
			[[!HybridAuth?]]
		</li>
		<li class="order-info">
			<div>
				<div id="orderLink" umi:element-id="6248" umi:field-name="top_seo_block">[[++slogan]]</div>
			</div>
		</li>
	</ul>
</div>
	<div class="header">
		<div class="logo-row"><table border="0" width="100%">
			<tbody>
				<tr>
					<td class="logo" valign="top">
						<a id="logo" href="/" style="width:100%; height: 100%">
							<div style="" umi:element-id="6248" umi:field-name="site_logo">
								<img src="assets/images/logo.jpg">
							</div>
						</a>
					</td>
  				<td valign="top" style="width: 275px;">
            <div class="head_contact">
                <p class="slogan"></p>
                <p class="adr"></p>
                <div class="phone">
                	<p class="tel"> +7(343)344-83-04<span class="ya-phone"></span></p>
                </div>
                <p class="time" style="font-size: 7pt;" umi:element-id="6248" umi:field-name="work_time"><nobr>Пн-Сб: 9:00— 20:00</nobr></p>
            </div>
          </td>
  				<td style="vertical-align:top;padding-top:6px;padding-left:0;">
  					<span umi:element-id="6248" umi:field-name="slogan" class="cityName">— Кондиционеры с установкой </span>
  					[[!msMiniCart?]]
  				</td>
    				<td class="search" style="width:250px;">
    				  [[!mSearchForm? &autocomplete=`queries` &pageId=`24`]]
    				</td>
  			  </tr>
  		  </tbody>
      </table>
    </div>
		<div class="clear"></div>
		[[!pdoMenu? 
		  &parents=`0` 
		  &level=`2`
		  &tplInner=`@INLINE <p>[[+wrapper]]</p>` 
		  &tplInnerRow=`@INLINE <a href="[[+link]]">[[+menutitle]]</a>`
		  &tplInnerHere
		]]
	  
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 91,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<div class="footer_wrapper"><div class="footer"><div class="footer-row">
		<div class="clear"></div>
		<div class="copy">
			<div id="footer_content" umi:field-name="footer_content" umi:element-id="6248" umi:empty="Пусто">
				
			</div>
			<a href="/content/sitemap">Карта сайта</a>
			<div class="product_code_search">
				<span>Поиск по коду товара:</span>
			  [[!mSearchForm? &minQuery=`4` &element=`msProducts` &tplForm=`tpl.mSearch2.form.foot` &tpl=`tpl.mSearch2.ac.foot` &pageId=`24` &fields=`article`]]
			</div>
		</div>
		</div>
		</div>
	</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="footer_wrapper"><div class="footer"><div class="footer-row">
		<div class="clear"></div>
		<div class="copy">
			<div id="footer_content" umi:field-name="footer_content" umi:element-id="6248" umi:empty="Пусто">
				
			</div>
			<a href="/content/sitemap">Карта сайта</a>
			<div class="product_code_search">
				<span>Поиск по коду товара:</span>
			  [[!mSearchForm? &minQuery=`4` &element=`msProducts` &tplForm=`tpl.mSearch2.form.foot` &tpl=`tpl.mSearch2.ac.foot` &pageId=`24` &fields=`article`]]
			</div>
		</div>
		</div>
		</div>
	</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'tpl.HybridAuth.provider' => 
      array (
        'fields' => 
        array (
          'id' => 25,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tpl.HybridAuth.provider',
          'description' => 'Chunk for authorization provider',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '<a href="[[+login_url]]&amp;provider=[[+title]]" class="ha-icon [[+provider]]" rel="nofollow" title="[[+title]]">[[+title]]</a>
',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => 'core/components/hybridauth/elements/chunks/chunk.provider.tpl',
          'content' => '<a href="[[+login_url]]&amp;provider=[[+title]]" class="ha-icon [[+provider]]" rel="nofollow" title="[[+title]]">[[+title]]</a>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tpl.HybridAuth.login' => 
      array (
        'fields' => 
        array (
          'id' => 22,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tpl.HybridAuth.login',
          'description' => 'Chunk for guest',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '<a class="reg" href="[[~19]]"><b>Регистрация</b> | Войти с паролем</a>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => 'core/components/hybridauth/elements/chunks/chunk.login.tpl',
          'content' => '<a class="reg" href="[[~19]]"><b>Регистрация</b> | Войти с паролем</a>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tpl.msMiniCart' => 
      array (
        'fields' => 
        array (
          'id' => 31,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tpl.msMiniCart',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '
<div id="msMiniCart" [[+total_count:isnot=`0`:then=`class="full cart-out"`:else=`class="cart-out"`]] class="cart-out">
  <a href="[[~25]]">
    <div class="cart empty">
    	Вы еще ничего не добавили в корзину
    </div>
	  <div class="cart not_empty">
			<span class="basket_info_summary"><span class="ms2_total_count">[[+total_count]]</span>[[%ms2_frontend_count_unit]]<span class="ms2_total_cost">[[+total_cost]]</span>[[%ms2_frontend_currency]]</span>
		</div>
	</a>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_minicart.tpl',
          'content' => '
<div id="msMiniCart" [[+total_count:isnot=`0`:then=`class="full cart-out"`:else=`class="cart-out"`]] class="cart-out">
  <a href="[[~25]]">
    <div class="cart empty">
    	Вы еще ничего не добавили в корзину
    </div>
	  <div class="cart not_empty">
			<span class="basket_info_summary"><span class="ms2_total_count">[[+total_count]]</span>[[%ms2_frontend_count_unit]]<span class="ms2_total_cost">[[+total_cost]]</span>[[%ms2_frontend_currency]]</span>
		</div>
	</a>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tpl.Office.auth.login' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tpl.Office.auth.login',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '<div class="row" id="office-auth-form">
	<div class="col-md-6 office-auth-login-wrapper">
		<h4>[[%office_auth_login]]</h4>

		<form method="post" class="form-horizontal" id="office-auth-login">
			<div class="form-group">
				<label for="office-auth-login-email" class="col-md-3 control-label">[[%office_auth_login_username]]&nbsp;<span class="red">*</span></label>
				<div class="col-md-8">
					<input type="text" name="username" placeholder="" class="form-control" id="office-auth-login-username" value="" />
					<p class="help-block"><small>[[%office_auth_login_username_desc]]</small></p>
				</div>

				<label for="office-auth-login-password" class="col-md-3 control-label">[[%office_auth_login_password]]</label>
				<div class="col-md-8">
					<input type="password" name="password" placeholder="" class="form-control" id="office-login-form-password" value="" />
					<p class="help-block"><small>[[%office_auth_login_password_desc]]</small></p>
				</div>

				<input type="hidden" name="action" value="auth/formLogin" />
				<input type="hidden" name="return" value="" />
				<div class="col-sm-offset-3 col-sm-8">
					<button type="submit" class="btn btn-primary">[[%office_auth_login_btn]]</button>
				</div>
			</div>
		</form>

		<label>[[%office_auth_login_ha]]</label>
		<div>[[+providers]]</div>
		<p class="help-block"><small>[[%office_auth_login_ha_desc]]</small></p>

		[[+error:notempty=`
		<div class="alert alert-block alert-danger alert-error">[[+error]]</div>
		`]]
	</div>

	<div class="col-md-6 office-auth-register-wrapper">
		<h4>[[%office_auth_register]]</h4>
		<form method="post" class="form-horizontal" id="office-auth-register">
			<div class="form-group">
				<label for="office-auth-register-email" class="col-md-3 control-label">[[%office_auth_register_email]]&nbsp;<span class="red">*</span></label>
				<div class="col-md-8">
					<input type="email" name="email" placeholder="" class="form-control" id="office-auth-register-email" value="" />
					<p class="help-block"><small>[[%office_auth_register_email_desc]]</small></p>
				</div>

				<label for="office-auth-register-password" class="col-md-3 control-label">[[%office_auth_register_password]]</label>
				<div class="col-md-8">
					<input type="password" name="password" placeholder="" class="form-control" id="office-register-form-password" value="" />
					<p class="help-block"><small>[[%office_auth_register_password_desc]]</small></p>
				</div>

				<label for="office-auth-register-username" class="col-md-3 control-label">[[%office_auth_register_username]]</label>
				<div class="col-md-8">
					<input type="text" name="username" placeholder="" class="form-control" id="office-register-form-username" value="" />
					<p class="help-block"><small>[[%office_auth_register_username_desc]]</small></p>
				</div>

				<label for="office-auth-register-fullname" class="col-md-3 control-label">[[%office_auth_register_fullname]]</label>
				<div class="col-md-8">
					<input type="text" name="fullname" placeholder="" class="form-control" id="office-register-form-fullname" value="" />
					<p class="help-block"><small>[[%office_auth_register_fullname_desc]]</small></p>
				</div>

				<input type="hidden" name="action" value="auth/formRegister" />
				<div class="col-sm-offset-3 col-sm-8">
					<button type="submit" class="btn btn-danger">[[%office_auth_register_btn]]</button>
				</div>
			</div>
		</form>
	</div>
</div>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => 'core/components/office/elements/chunks/chunk.auth.login.tpl',
          'content' => '<div class="row" id="office-auth-form">
	<div class="col-md-6 office-auth-login-wrapper">
		<h4>[[%office_auth_login]]</h4>

		<form method="post" class="form-horizontal" id="office-auth-login">
			<div class="form-group">
				<label for="office-auth-login-email" class="col-md-3 control-label">[[%office_auth_login_username]]&nbsp;<span class="red">*</span></label>
				<div class="col-md-8">
					<input type="text" name="username" placeholder="" class="form-control" id="office-auth-login-username" value="" />
					<p class="help-block"><small>[[%office_auth_login_username_desc]]</small></p>
				</div>

				<label for="office-auth-login-password" class="col-md-3 control-label">[[%office_auth_login_password]]</label>
				<div class="col-md-8">
					<input type="password" name="password" placeholder="" class="form-control" id="office-login-form-password" value="" />
					<p class="help-block"><small>[[%office_auth_login_password_desc]]</small></p>
				</div>

				<input type="hidden" name="action" value="auth/formLogin" />
				<input type="hidden" name="return" value="" />
				<div class="col-sm-offset-3 col-sm-8">
					<button type="submit" class="btn btn-primary">[[%office_auth_login_btn]]</button>
				</div>
			</div>
		</form>

		<label>[[%office_auth_login_ha]]</label>
		<div>[[+providers]]</div>
		<p class="help-block"><small>[[%office_auth_login_ha_desc]]</small></p>

		[[+error:notempty=`
		<div class="alert alert-block alert-danger alert-error">[[+error]]</div>
		`]]
	</div>

	<div class="col-md-6 office-auth-register-wrapper">
		<h4>[[%office_auth_register]]</h4>
		<form method="post" class="form-horizontal" id="office-auth-register">
			<div class="form-group">
				<label for="office-auth-register-email" class="col-md-3 control-label">[[%office_auth_register_email]]&nbsp;<span class="red">*</span></label>
				<div class="col-md-8">
					<input type="email" name="email" placeholder="" class="form-control" id="office-auth-register-email" value="" />
					<p class="help-block"><small>[[%office_auth_register_email_desc]]</small></p>
				</div>

				<label for="office-auth-register-password" class="col-md-3 control-label">[[%office_auth_register_password]]</label>
				<div class="col-md-8">
					<input type="password" name="password" placeholder="" class="form-control" id="office-register-form-password" value="" />
					<p class="help-block"><small>[[%office_auth_register_password_desc]]</small></p>
				</div>

				<label for="office-auth-register-username" class="col-md-3 control-label">[[%office_auth_register_username]]</label>
				<div class="col-md-8">
					<input type="text" name="username" placeholder="" class="form-control" id="office-register-form-username" value="" />
					<p class="help-block"><small>[[%office_auth_register_username_desc]]</small></p>
				</div>

				<label for="office-auth-register-fullname" class="col-md-3 control-label">[[%office_auth_register_fullname]]</label>
				<div class="col-md-8">
					<input type="text" name="fullname" placeholder="" class="form-control" id="office-register-form-fullname" value="" />
					<p class="help-block"><small>[[%office_auth_register_fullname_desc]]</small></p>
				</div>

				<input type="hidden" name="action" value="auth/formRegister" />
				<div class="col-sm-offset-3 col-sm-8">
					<button type="submit" class="btn btn-danger">[[%office_auth_register_btn]]</button>
				</div>
			</div>
		</form>
	</div>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'pdoField' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoField',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/* @var array $scriptProperties */
if (!empty($input)) {$id = $input;}
if (!isset($default)) {$default = \'\';}
if (!isset($output)) {$output = \'\';}
$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\', true);
$isResource = $class == \'modResource\' || in_array($class, $modx->getDescendants(\'modResource\'));

if (empty($field)) {$field = \'pagetitle\';}
$top = isset($top) ? intval($top) : 0;
$topLevel = isset($topLevel) ? intval($topLevel) : 0;
if (!empty($options)) {
	$options = trim($options);
	if ($options[0] == \'{\') {
		$tmp = $modx->fromJSON($options);
		if (is_array($tmp)) {
			extract($tmp);
			$scriptProperties = array_merge($scriptProperties, $tmp);
		}
	}
	else {
		$field = $options;
	}
}
if (empty($id)) {
	if (!empty($modx->resource)) {
		$id = $modx->resource->id;
	}
	else {
		return \'You must specify an id of \'.$class;
	}
}
if (!isset($context)) {$context = \'\';}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
	// Select needed context for parents functionality
	if (empty($context)) {
		$q = $modx->newQuery($class, $id);
		$q->select(\'context_key\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->queryTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$context = $q->stmt->fetch(PDO::FETCH_COLUMN);
		}
	}
	// Original pdoField logic
	if (empty($ultimate)) {
		if ($topLevel) {
			$pids = $modx->getChildIds(0, $topLevel, array(\'context\' => $context));
			$pid = $id;
			while (true) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				elseif (in_array($pid, $pids)) {
					$id = $pid;
					break;
				}
			}
		}
		elseif ($top) {
			$pid = $id;
			for ($i = 1; $i <= $top; $i++) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				$id = $pid;
			}
		}
	}
	// UltimateParent logic
	// https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
	elseif ($id != $top) {
		$pid = $id;
		$pids = $modx->getParentIds($id, 10, array(\'context\' => $context));
		if (!$topLevel || count($pids) >= $topLevel) {
			while ($parentIds= $modx->getParentIds($id, 1, array(\'context\' => $context))) {
				$pid = array_pop($parentIds);
				if ($pid == $top) {
					break;
				}
				$id = $pid;
				$parentIds = $modx->getParentIds($id, 10, array(\'context\' => $context));
				if ($topLevel && count($parentIds) < $topLevel) {
					break;
				}
			}
		}
	}
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$where = array($class.\'.id\' => $id);
// Add custom parameters
foreach (array(\'where\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
	$scriptProperties[\'select\'] = array($class => $field);
	$scriptProperties[\'includeTVs\'] = \'\';
}
elseif ($isResource) {
	$scriptProperties[\'select\'] = array($class => \'id\');
	$scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
	$default = strtolower($default);
	if (in_array($default, $resourceColumns)) {
		$scriptProperties[\'select\'][$class] .= \',\'.$default;
	}
	elseif ($isResource) {
		$scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
			? $default
			: $scriptProperties[\'includeTVs\'] . \',\' . $default;
	}
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getObject($class, $where, $scriptProperties)) {
	foreach ($row as $k => $v) {
		if (strtolower($k) == $field && $v != \'\') {
			$output = $v;
			break;
		}
	}

	if (empty($output) && !empty($default)) {
		foreach ($row as $k => $v) {
			if (strtolower($k) == $default && $v != \'\') {
				$output = $v;
				break;
			}
		}
	}
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'id' => 
            array (
              'name' => 'id',
              'desc' => 'pdotools_prop_id',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор ресурса.',
              'area_trans' => '',
            ),
            'field' => 
            array (
              'name' => 'field',
              'desc' => 'pdotools_prop_field',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 'pagetitle',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле ресурса.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_field_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Контекст ресурса, для выборки его родителей. Нужен для работы параметров "&top" и "&topLevel".',
              'area_trans' => '',
            ),
            'top' => 
            array (
              'name' => 'top',
              'desc' => 'pdotools_prop_top',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выбирает родителя указанного "&id" на уровне "&top".',
              'area_trans' => '',
            ),
            'topLevel' => 
            array (
              'name' => 'topLevel',
              'desc' => 'pdotools_prop_topLevel',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выбирает родителя указанного "&id" на уровне "&topLevel" от корня контекста.',
              'area_trans' => '',
            ),
            'default' => 
            array (
              'name' => 'default',
              'desc' => 'pdotools_prop_field_default',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите дополнительное поле ресурса, которое вернётся, если "&field" окажется пуст.',
              'area_trans' => '',
            ),
            'output' => 
            array (
              'name' => 'output',
              'desc' => 'pdotools_prop_field_output',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Указанная здесь строка вернётся, если и "&default" и "&field" оказались пусты.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'ultimate' => 
            array (
              'name' => 'ultimate',
              'desc' => 'pdotools_prop_ultimate',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Параметры &top и &topLevel работают как в сниппете UltimateParent.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdofield.php',
          'content' => '/* @var array $scriptProperties */
if (!empty($input)) {$id = $input;}
if (!isset($default)) {$default = \'\';}
if (!isset($output)) {$output = \'\';}
$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\', true);
$isResource = $class == \'modResource\' || in_array($class, $modx->getDescendants(\'modResource\'));

if (empty($field)) {$field = \'pagetitle\';}
$top = isset($top) ? intval($top) : 0;
$topLevel = isset($topLevel) ? intval($topLevel) : 0;
if (!empty($options)) {
	$options = trim($options);
	if ($options[0] == \'{\') {
		$tmp = $modx->fromJSON($options);
		if (is_array($tmp)) {
			extract($tmp);
			$scriptProperties = array_merge($scriptProperties, $tmp);
		}
	}
	else {
		$field = $options;
	}
}
if (empty($id)) {
	if (!empty($modx->resource)) {
		$id = $modx->resource->id;
	}
	else {
		return \'You must specify an id of \'.$class;
	}
}
if (!isset($context)) {$context = \'\';}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
	// Select needed context for parents functionality
	if (empty($context)) {
		$q = $modx->newQuery($class, $id);
		$q->select(\'context_key\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->queryTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$context = $q->stmt->fetch(PDO::FETCH_COLUMN);
		}
	}
	// Original pdoField logic
	if (empty($ultimate)) {
		if ($topLevel) {
			$pids = $modx->getChildIds(0, $topLevel, array(\'context\' => $context));
			$pid = $id;
			while (true) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				elseif (in_array($pid, $pids)) {
					$id = $pid;
					break;
				}
			}
		}
		elseif ($top) {
			$pid = $id;
			for ($i = 1; $i <= $top; $i++) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				$id = $pid;
			}
		}
	}
	// UltimateParent logic
	// https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
	elseif ($id != $top) {
		$pid = $id;
		$pids = $modx->getParentIds($id, 10, array(\'context\' => $context));
		if (!$topLevel || count($pids) >= $topLevel) {
			while ($parentIds= $modx->getParentIds($id, 1, array(\'context\' => $context))) {
				$pid = array_pop($parentIds);
				if ($pid == $top) {
					break;
				}
				$id = $pid;
				$parentIds = $modx->getParentIds($id, 10, array(\'context\' => $context));
				if ($topLevel && count($parentIds) < $topLevel) {
					break;
				}
			}
		}
	}
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$where = array($class.\'.id\' => $id);
// Add custom parameters
foreach (array(\'where\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
	$scriptProperties[\'select\'] = array($class => $field);
	$scriptProperties[\'includeTVs\'] = \'\';
}
elseif ($isResource) {
	$scriptProperties[\'select\'] = array($class => \'id\');
	$scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
	$default = strtolower($default);
	if (in_array($default, $resourceColumns)) {
		$scriptProperties[\'select\'][$class] .= \',\'.$default;
	}
	elseif ($isResource) {
		$scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
			? $default
			: $scriptProperties[\'includeTVs\'] . \',\' . $default;
	}
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getObject($class, $where, $scriptProperties)) {
	foreach ($row as $k => $v) {
		if (strtolower($k) == $field && $v != \'\') {
			$output = $v;
			break;
		}
	}

	if (empty($output) && !empty($default)) {
		foreach ($row as $k => $v) {
			if (strtolower($k) == $default && $v != \'\') {
				$output = $v;
				break;
			}
		}
	}
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'HybridAuth' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'HybridAuth',
          'description' => 'Social authorization',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

$modx->error->message = null;
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
	return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
	return $modx->error->message;
}
// For compatibility with old snippet
elseif (!empty($action)) {
	$tmp = strtolower($action);
	if ($tmp == \'getprofile\' || $tmp == \'updateprofile\') {
		return $modx->runSnippet(\'haProfile\', $scriptProperties);
	}
}

if (empty($loginTpl)) {
	$loginTpl = \'tpl.HybridAuth.login\';
}
if (empty($logoutTpl)) {
	$logoutTpl = \'tpl.HybridAuth.logout\';
}
if (empty($providerTpl)) {
	$providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
	$activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}

$url = $HybridAuth->getUrl();
$error = \'\';
if (!empty($_SESSION[\'HA\'][\'error\'])) {
	$error = $_SESSION[\'HA\'][\'error\'];
	unset($_SESSION[\'HA\'][\'error\']);
}

if ($modx->user->isAuthenticated($modx->context->key)) {
	$add = array();
	if ($services = $modx->user->getMany(\'Services\')) {
		/* @var haUserService $service */
		foreach ($services as $service) {
			$add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
		}
	}

	$user = $modx->user->toArray();
	$profile = $modx->user->Profile->toArray();
	unset($profile[\'id\']);
	$arr = array_merge(
		$user,
		$profile,
		$add,
		array(
			\'login_url\' => $url . \'login\',
			\'logout_url\' => $url . \'logout\',
			\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
			\'error\' => $error,
			\'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
		)
	);

	return $modx->getChunk($logoutTpl, $arr);
}
else {
	$arr = array(
		\'login_url\' => $url . \'login\',
		\'logout_url\' => $url . \'logout\',
		\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
		\'error\' => $error,
	);

	return $modx->getChunk($loginTpl, $arr);
}',
          'locked' => false,
          'properties' => 
          array (
            'providers' => 
            array (
              'name' => 'providers',
              'desc' => 'ha.providers',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Список провайдеров авторизации, через запятую. Все доступные провайдеры находятся тут {core_path}components/hybridauth/model/hybridauth/lib/Providers/. Например, &providers=`Google,Twitter,Facebook`.',
              'area_trans' => '',
            ),
            'rememberme' => 
            array (
              'name' => 'rememberme',
              'desc' => 'ha.rememberme',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Запомниает пользователя на долгое время. По умолчанию - включено.',
              'area_trans' => '',
            ),
            'loginTpl' => 
            array (
              'name' => 'loginTpl',
              'desc' => 'ha.loginTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.HybridAuth.login',
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Этот чанк будет показан анонимному пользователю, то есть любому гостю.',
              'area_trans' => '',
            ),
            'logoutTpl' => 
            array (
              'name' => 'logoutTpl',
              'desc' => 'ha.logoutTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.HybridAuth.logout',
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Этот чанк будет показан авторизованному пользователю.',
              'area_trans' => '',
            ),
            'providerTpl' => 
            array (
              'name' => 'providerTpl',
              'desc' => 'ha.providerTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.HybridAuth.provider',
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Чанк для вывода ссылки на авторизацию или привязку сервиса к учетной записи.',
              'area_trans' => '',
            ),
            'activeProviderTpl' => 
            array (
              'name' => 'activeProviderTpl',
              'desc' => 'ha.activeProviderTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.HybridAuth.provider.active',
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Чанк для вывода иконки привязанного сервиса.',
              'area_trans' => '',
            ),
            'groups' => 
            array (
              'name' => 'groups',
              'desc' => 'ha.groups',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Список групп для регистрации пользователя, через запятую. Можно указывать роль юзера в группе через двоеточие. Например, &groups=`Users:1` добавит юзера в группу "Users" с ролью "member".',
              'area_trans' => '',
            ),
            'loginContext' => 
            array (
              'name' => 'loginContext',
              'desc' => 'ha.loginContext',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Основной контекст для авторизации. По умолчанию - текущий.',
              'area_trans' => '',
            ),
            'addContexts' => 
            array (
              'name' => 'addContexts',
              'desc' => 'ha.addContexts',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Дополнительные контексты, через запятую. Например, &addContexts=`web,ru,en`',
              'area_trans' => '',
            ),
            'loginResourceId' => 
            array (
              'name' => 'loginResourceId',
              'desc' => 'ha.loginResourceId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор ресурса, на который отправлять юзера после авторизации. По умолчанию, это 0 - обновляет текущую страницу.',
              'area_trans' => '',
            ),
            'logoutResourceId' => 
            array (
              'name' => 'logoutResourceId',
              'desc' => 'ha.logoutResourceId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор ресурса, на который отправлять юзера после завершения сессии. По умолчанию, это 0 - обновляет текущую страницу.',
              'area_trans' => '',
            ),
            'redirectUri' => 
            array (
              'name' => 'redirectUri',
              'desc' => 'ha.redirectUri',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'hybridauth:properties',
              'area' => '',
              'desc_trans' => 'Вы можете указать "redirect_uri", на который вас отправит удалённый сервис. По умолчанию, это корень текущего контекста.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/hybridauth/elements/snippets/snippet.hybridauth.php',
          'content' => '/** @var array $scriptProperties */

$modx->error->message = null;
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
	return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
	return $modx->error->message;
}
// For compatibility with old snippet
elseif (!empty($action)) {
	$tmp = strtolower($action);
	if ($tmp == \'getprofile\' || $tmp == \'updateprofile\') {
		return $modx->runSnippet(\'haProfile\', $scriptProperties);
	}
}

if (empty($loginTpl)) {
	$loginTpl = \'tpl.HybridAuth.login\';
}
if (empty($logoutTpl)) {
	$logoutTpl = \'tpl.HybridAuth.logout\';
}
if (empty($providerTpl)) {
	$providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
	$activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}

$url = $HybridAuth->getUrl();
$error = \'\';
if (!empty($_SESSION[\'HA\'][\'error\'])) {
	$error = $_SESSION[\'HA\'][\'error\'];
	unset($_SESSION[\'HA\'][\'error\']);
}

if ($modx->user->isAuthenticated($modx->context->key)) {
	$add = array();
	if ($services = $modx->user->getMany(\'Services\')) {
		/* @var haUserService $service */
		foreach ($services as $service) {
			$add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
		}
	}

	$user = $modx->user->toArray();
	$profile = $modx->user->Profile->toArray();
	unset($profile[\'id\']);
	$arr = array_merge(
		$user,
		$profile,
		$add,
		array(
			\'login_url\' => $url . \'login\',
			\'logout_url\' => $url . \'logout\',
			\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
			\'error\' => $error,
			\'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
		)
	);

	return $modx->getChunk($logoutTpl, $arr);
}
else {
	$arr = array(
		\'login_url\' => $url . \'login\',
		\'logout_url\' => $url . \'logout\',
		\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
		\'error\' => $error,
	);

	return $modx->getChunk($loginTpl, $arr);
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'msMiniCart' => 
      array (
        'fields' => 
        array (
          'id' => 26,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'msMiniCart',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '/* @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'minishop2\');
$miniShop2->initialize($modx->context->key);

$cart = $miniShop2->cart->status();
$cart[\'total_cost\'] = $miniShop2->formatPrice($cart[\'total_cost\']);
$cart[\'total_weight\'] = $miniShop2->formatWeight($cart[\'total_weight\']);

return !empty($tpl) ? $modx->getChunk($tpl, $cart) : print_r($cart,1);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'ms2_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.msMiniCart',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления для каждого результата',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minishop2/elements/snippets/snippet.ms_minicart.php',
          'content' => '/* @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'minishop2\');
$miniShop2->initialize($modx->context->key);

$cart = $miniShop2->cart->status();
$cart[\'total_cost\'] = $miniShop2->formatPrice($cart[\'total_cost\']);
$cart[\'total_weight\'] = $miniShop2->formatWeight($cart[\'total_weight\']);

return !empty($tpl) ? $modx->getChunk($tpl, $cart) : print_r($cart,1);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'mSearchForm' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mSearchForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var pdoTools $pdoTools */
$fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdofetch\', true);
if (!$pdoClass = $modx->loadClass($fqn, \'\', false, true)) {return false;}
$pdoTools = new $pdoClass($modx, $scriptProperties);
$pdoTools->addTime(\'pdoTools loaded.\');

/** @var mSearch2 $mSearch2 */
if (!$modx->loadClass(\'msearch2\', MODX_CORE_PATH . \'components/msearch2/model/msearch2/\', false, true)) {return false;}
$mSearch2 = new mSearch2($modx, array(), $pdoFetch);
$mSearch2->initialize($modx->context->key);

$config = array(
	\'autocomplete\' => !empty($autocomplete) ? $autocomplete : \'\',
	\'queryVar\' => !empty($queryVar) ? $queryVar : \'query\',
	\'minQuery\' => !empty($minQuery) ? (integer) $minQuery : 3,
	\'pageId\' => !empty($pageId) ? (integer) $pageId : $modx->resource->id,
);
$scriptProperties = array_merge($scriptProperties, $config);

if (empty($tplForm)) {$tplForm = \'tpl.mSearch2.form\';}
$form = $pdoTools->getChunk($tplForm, $scriptProperties);

if (!empty($config[\'autocomplete\'])) {
	$hash = sha1(serialize($scriptProperties));
	$_SESSION[\'mSearch2\'][$hash] = $scriptProperties;

	$form = str_ireplace(\'<form\', \'<form data-key="\'.$hash.\'"\', $form);
	// Place for enabled log
	if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
		$form = str_ireplace(\'</form>\', "</form>\\n<pre class=\\"mSearchFormLog\\"></pre>", $form);
	}

	// Setting values for frontend javascript
	$main_config = array(
		\'cssUrl\' => $mSearch2->config[\'cssUrl\'].\'web/\',
		\'jsUrl\' => $mSearch2->config[\'jsUrl\'].\'web/\',
		\'actionUrl\' => $mSearch2->config[\'actionUrl\'],
	);

	$modx->regClientStartupScript(\'
	<script type="text/javascript">
		if (typeof mse2Config == "undefined") {mse2Config = \'.$modx->toJSON($main_config).\';}
		if (typeof mse2FormConfig == "undefined") {mse2FormConfig = {};}
		mse2FormConfig["\'.$hash.\'"] = \'.$modx->toJSON($config).\';
	</script>\'
	, true);
}

return $form;',
          'locked' => false,
          'properties' => 
          array (
            'pageId' => 
            array (
              'name' => 'pageId',
              'desc' => 'mse2_prop_pageId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Id страницы, на которую будет отправлен поисковый запрос. По умолчанию - текущая страница.',
              'area_trans' => '',
            ),
            'tplForm' => 
            array (
              'name' => 'tplForm',
              'desc' => 'mse2_prop_tplForm',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.mSearch2.form',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Чанк с формой для вывода.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'mse2_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.mSearch2.ac',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления для каждого результата',
              'area_trans' => '',
            ),
            'element' => 
            array (
              'name' => 'element',
              'desc' => 'mse2_prop_element',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'mSearch2',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Сниппет, который будет вызываться для вывода результатов работы. По умолчанию - "mSearch2".',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'mse2_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 5,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Лимит выборки результатов',
              'area_trans' => '',
            ),
            'autocomplete' => 
            array (
              'name' => 'autocomplete',
              'desc' => 'mse2_prop_autocomplete',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'Disabled',
                  'value' => 0,
                  'name' => 'Disabled',
                ),
                1 => 
                array (
                  'text' => 'Results',
                  'value' => 'results',
                  'name' => 'Results',
                ),
                2 => 
                array (
                  'text' => 'Queries',
                  'value' => 'queries',
                  'name' => 'Queries',
                ),
              ),
              'value' => 'results',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Настройка автодополнения. Возможные варианты: "results" - поиск по сайту (для вывода результатов будет вызван сниппет, указанный в "element"), "queries" - поиск по таблице запросов, "0" - выключить автодополнение.',
              'area_trans' => '',
            ),
            'queryVar' => 
            array (
              'name' => 'queryVar',
              'desc' => 'mse2_prop_queryVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'query',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Имя переменной для получения поискового запроса из $_REQUEST. По умолчанию - "query"',
              'area_trans' => '',
            ),
            'minQuery' => 
            array (
              'name' => 'minQuery',
              'desc' => 'mse2_prop_minQuery',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 3,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Минимальная длина поискового запроса.',
              'area_trans' => '',
            ),
            'fields' => 
            array (
              'name' => 'fields',
              'desc' => 'mse2_prop_fields',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Список проиндексированных полей ресурса для поиска. Каждому полю можно указывать поисковый вес через двоеточие.',
              'area_trans' => '',
            ),
            'onlyIndex' => 
            array (
              'name' => 'onlyIndex',
              'desc' => 'mse2_prop_onlyIndex',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Искать только по индексу слов, без добавления бонусов за точное совпадение фразы в простом поиске через LIKE.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/msearch2/elements/snippets/snippet.msearchform.php',
          'content' => '/** @var array $scriptProperties */
/** @var pdoTools $pdoTools */
$fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdofetch\', true);
if (!$pdoClass = $modx->loadClass($fqn, \'\', false, true)) {return false;}
$pdoTools = new $pdoClass($modx, $scriptProperties);
$pdoTools->addTime(\'pdoTools loaded.\');

/** @var mSearch2 $mSearch2 */
if (!$modx->loadClass(\'msearch2\', MODX_CORE_PATH . \'components/msearch2/model/msearch2/\', false, true)) {return false;}
$mSearch2 = new mSearch2($modx, array(), $pdoFetch);
$mSearch2->initialize($modx->context->key);

$config = array(
	\'autocomplete\' => !empty($autocomplete) ? $autocomplete : \'\',
	\'queryVar\' => !empty($queryVar) ? $queryVar : \'query\',
	\'minQuery\' => !empty($minQuery) ? (integer) $minQuery : 3,
	\'pageId\' => !empty($pageId) ? (integer) $pageId : $modx->resource->id,
);
$scriptProperties = array_merge($scriptProperties, $config);

if (empty($tplForm)) {$tplForm = \'tpl.mSearch2.form\';}
$form = $pdoTools->getChunk($tplForm, $scriptProperties);

if (!empty($config[\'autocomplete\'])) {
	$hash = sha1(serialize($scriptProperties));
	$_SESSION[\'mSearch2\'][$hash] = $scriptProperties;

	$form = str_ireplace(\'<form\', \'<form data-key="\'.$hash.\'"\', $form);
	// Place for enabled log
	if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
		$form = str_ireplace(\'</form>\', "</form>\\n<pre class=\\"mSearchFormLog\\"></pre>", $form);
	}

	// Setting values for frontend javascript
	$main_config = array(
		\'cssUrl\' => $mSearch2->config[\'cssUrl\'].\'web/\',
		\'jsUrl\' => $mSearch2->config[\'jsUrl\'].\'web/\',
		\'actionUrl\' => $mSearch2->config[\'actionUrl\'],
	);

	$modx->regClientStartupScript(\'
	<script type="text/javascript">
		if (typeof mse2Config == "undefined") {mse2Config = \'.$modx->toJSON($main_config).\';}
		if (typeof mse2FormConfig == "undefined") {mse2FormConfig = {};}
		mse2FormConfig["\'.$hash.\'"] = \'.$modx->toJSON($config).\';
	</script>\'
	, true);
}

return $form;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		if (!empty($scriptProperties[\'showDeleted\'])) {
			$pdoFetch = $modx->getService(\'pdoFetch\');
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		else {
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}

//---

/** @var pdoMenu $pdoMenu */
if (!$modx->loadClass(\'pdotools.pdoMenu\', MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu = new pdoMenu($modx, $scriptProperties);
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$output = !empty($cache) || !$modx->user->id && !empty($cacheAnonymous)
	? $output = $pdoMenu->pdoTools->getCache($scriptProperties)
	: \'\';

if (empty($output)) {
	$rows = $pdoMenu->pdoTools->run();
	$tmp = $pdoMenu->pdoTools->buildTree($rows);
	$tree = array();
	foreach ($tmp as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}

	$output = $pdoMenu->templateTree($tree);
	if (!empty($cache) || !$modx->user->id && !empty($cacheAnonymous)) {
		$pdoMenu->pdoTools->setCache($output, $scriptProperties);
	}
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша, в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пунтка меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертки внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка активного пунка меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, каеи разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования url, передаётся в modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		if (!empty($scriptProperties[\'showDeleted\'])) {
			$pdoFetch = $modx->getService(\'pdoFetch\');
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		else {
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}

//---

/** @var pdoMenu $pdoMenu */
if (!$modx->loadClass(\'pdotools.pdoMenu\', MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu = new pdoMenu($modx, $scriptProperties);
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$output = !empty($cache) || !$modx->user->id && !empty($cacheAnonymous)
	? $output = $pdoMenu->pdoTools->getCache($scriptProperties)
	: \'\';

if (empty($output)) {
	$rows = $pdoMenu->pdoTools->run();
	$tmp = $pdoMenu->pdoTools->buildTree($rows);
	$tree = array();
	foreach ($tmp as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}

	$output = $pdoMenu->templateTree($tree);
	if (!empty($cache) || !$modx->user->id && !empty($cacheAnonymous)) {
		$pdoMenu->pdoTools->setCache($output, $scriptProperties);
	}
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'officeAuth' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'officeAuth',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
$scriptProperties[\'action\'] = \'Auth\';

/** @var modSnippet $snippet */
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'Office\'))) {
	$snippet->_cacheable = false;
	$snippet->_processed = false;

	return $snippet->process($scriptProperties);
}',
          'locked' => false,
          'properties' => 
          array (
            'tplLogin' => 
            array (
              'name' => 'tplLogin',
              'desc' => 'office_prop_tplLogin',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Office.auth.login',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Этот чанк будет показан анонимному пользователю, то есть любому гостю.',
              'area_trans' => '',
            ),
            'tplLogout' => 
            array (
              'name' => 'tplLogout',
              'desc' => 'office_prop_tplLogout',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Office.auth.logout',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Этот чанк будет показан авторизованному пользователю.',
              'area_trans' => '',
            ),
            'tplActivate' => 
            array (
              'name' => 'tplActivate',
              'desc' => 'office_prop_tplActivate',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Office.auth.activate',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Чанк для оформления письма активации.',
              'area_trans' => '',
            ),
            'tplRegister' => 
            array (
              'name' => 'tplRegister',
              'desc' => 'office_prop_tplRegister',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Office.auth.register',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Чанк для оформления письма регистрации.',
              'area_trans' => '',
            ),
            'linkTTL' => 
            array (
              'name' => 'linkTTL',
              'desc' => 'office_prop_linkTTL',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 600,
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Время жизни ссылки активации профиля.',
              'area_trans' => '',
            ),
            'groups' => 
            array (
              'name' => 'groups',
              'desc' => 'office_prop_groups',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Список групп для регистрации пользователя, через запятую. Можно указывать роль юзера в группе через двоеточие. Например, &groups=`Users:1` добавит юзера в группу "Users" с ролью "member".',
              'area_trans' => '',
            ),
            'rememberme' => 
            array (
              'name' => 'rememberme',
              'desc' => 'office_prop_rememberme',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Запомниает пользователя на долгое время. По умолчанию - включено.',
              'area_trans' => '',
            ),
            'loginContext' => 
            array (
              'name' => 'loginContext',
              'desc' => 'office_prop_loginContext',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Основной контекст для авторизации. По умолчанию - текущий.',
              'area_trans' => '',
            ),
            'addContexts' => 
            array (
              'name' => 'addContexts',
              'desc' => 'office_prop_addContexts',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Дополнительные контексты, через запятую. Например, &addContexts=`web,ru,en`',
              'area_trans' => '',
            ),
            'loginResourceId' => 
            array (
              'name' => 'loginResourceId',
              'desc' => 'office_prop_loginResourceId',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор ресурса, на который отправлять юзера после авторизации. По умолчанию, это 0 - обновляет текущую страницу.',
              'area_trans' => '',
            ),
            'logoutResourceId' => 
            array (
              'name' => 'logoutResourceId',
              'desc' => 'office_prop_logoutResourceId',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор ресурса, на который отправлять юзера после завершения сессии. По умолчанию, это 0 - обновляет текущую страницу.',
              'area_trans' => '',
            ),
            'HybridAuth' => 
            array (
              'name' => 'HybridAuth',
              'desc' => 'office_prop_HybridAuth',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Включить интеграцию с HybridAuth, если он установлен.',
              'area_trans' => '',
            ),
            'providers' => 
            array (
              'name' => 'providers',
              'desc' => 'office_prop_providers',
              'type' => '',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Список провайдеров авторизации HybridAuth, через запятую. Все доступные провайдеры находятся тут {core_path}components/hybridauth/model/hybridauth/lib/Providers/. Например, &providers=`Google,Twitter,Facebook`.',
              'area_trans' => '',
            ),
            'providerTpl' => 
            array (
              'name' => 'providerTpl',
              'desc' => 'office_prop_providerTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.HybridAuth.provider',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Чанк для вывода ссылки на авторизацию или привязку сервиса HybridAuth к учетной записи.',
              'area_trans' => '',
            ),
            'activeProviderTpl' => 
            array (
              'name' => 'activeProviderTpl',
              'desc' => 'office_prop_activeProviderTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.HybridAuth.provider.active',
              'lexicon' => 'office:properties',
              'area' => '',
              'desc_trans' => 'Чанк для вывода иконки привязанного сервиса HybridAuth.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/office/elements/snippets/snippet.office.auth.php',
          'content' => '/** @var array $scriptProperties */
$scriptProperties[\'action\'] = \'Auth\';

/** @var modSnippet $snippet */
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'Office\'))) {
	$snippet->_cacheable = false;
	$snippet->_processed = false;

	return $snippet->process($scriptProperties);
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);