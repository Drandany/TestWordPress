<!DOCTYPE html>
<html lang="sv-SE">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Logga in &lsaquo; Test wordpress &mdash; WordPress</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="stylesheet" id="dashicons-css" href="/https://drandany.github.io/TestWordPress/wp-includes/css/dashicons.min.css?ver=6.0.2" media="all">
<link rel="stylesheet" id="buttons-css" href="/https://drandany.github.io/TestWordPress/wp-includes/css/buttons.min.css?ver=6.0.2" media="all">
<link rel="stylesheet" id="forms-css" href="/https://drandany.github.io/TestWordPress/wp-admin/css/forms.min.css?ver=6.0.2" media="all">
<link rel="stylesheet" id="l10n-css" href="/https://drandany.github.io/TestWordPress/wp-admin/css/l10n.min.css?ver=6.0.2" media="all">
<link rel="stylesheet" id="login-css" href="/https://drandany.github.io/TestWordPress/wp-admin/css/login.min.css?ver=6.0.2" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-sv-se">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://sv.wordpress.org/">Drivs med WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="/wp-login.php" method="post">
			<p>
				<label for="user_login">Användarnamn eller e-postadress</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Lösenord</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Visa lösenord">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Kom ihåg mig</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Logga in">
									<input type="hidden" name="redirect_to" value="/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
								<a href="/https://drandany.github.io/TestWordPress/wp-login.php?action=lostpassword">Glömt ditt lösenord?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog">
			<a href="/https://drandany.github.io/TestWordPress/">&larr; Gå till Test wordpress</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">Språk</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="sv_SE" lang="sv" selected data-installed="1">Svenska</option></select>
					
					
					
						<input type="submit" class="button" value="Ändra">

					</form>
				</div>
				<script src="/https://drandany.github.io/TestWordPress/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script src="/https://drandany.github.io/TestWordPress/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script id="zxcvbn-async-js-extra">
var _zxcvbnSettings = {"src":"\/wp-includes\/js\/zxcvbn.min.js"};
</script>
<script src="/https://drandany.github.io/TestWordPress/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script src="/https://drandany.github.io/TestWordPress/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script src="/https://drandany.github.io/TestWordPress/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="/https://drandany.github.io/TestWordPress/wp-includes/js/dist/hooks.min.js?ver=c6d64f2cb8f5c6bb49caca37f8828ce3" id="wp-hooks-js"></script>
<script src="/https://drandany.github.io/TestWordPress/wp-includes/js/dist/i18n.min.js?ver=ebee46757c6a411e38fd079a7ac71d94" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script id="password-strength-meter-js-extra">
var pwsL10n = {"unknown":"Lösenordets styrka är okänd","short":"Mycket svagt","bad":"Svagt","good":"Medium","strong":"Starkt","mismatch":"Inte matchande"};
</script>
<script id="password-strength-meter-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-09-05 13:34:36+0000","generator":"GlotPress\/4.0.0-alpha.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"sv_SE"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s är taget ur bruk sedan version %2$s! Använd %3$s i stället. Överväg att skriva mer inkluderande kod."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
</script>
<script src="/https://drandany.github.io/TestWordPress/wp-admin/js/password-strength-meter.min.js?ver=6.0.2" id="password-strength-meter-js"></script>
<script src="/https://drandany.github.io/TestWordPress/wp-includes/js/underscore.min.js?ver=1.13.3" id="underscore-js"></script>
<script id="wp-util-js-extra">
var _wpUtilSettings = {"ajax":{"url":"\/TestWordPress\/wp-admin\/admin-ajax.php"}};
</script>
<script src="/https://drandany.github.io/TestWordPress/wp-includes/js/wp-util.min.js?ver=6.0.2" id="wp-util-js"></script>
<script id="user-profile-js-extra">
var userProfileL10n = {"user_id":"0","nonce":"db07587f23"};
</script>
<script id="user-profile-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-09-05 13:34:36+0000","generator":"GlotPress\/4.0.0-alpha.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"sv_SE"},"Your new password has not been saved.":["Ditt nya lösenord har inte sparats."],"Hide":["Dölj"],"Show":["Visa"],"Confirm use of weak password":["Bekräfta användning av svagt lösenord"],"Hide password":["Dölj lösenord"],"Show password":["Visa lösenord"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
</script>
<script src="/https://drandany.github.io/TestWordPress/wp-admin/js/user-profile.min.js?ver=6.0.2" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>