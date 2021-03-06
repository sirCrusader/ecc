<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />

		<!-- The following five lines load the Blueprint CSS Framework (http://blueprintcss.org). If you don't want to use this framework, delete these lines. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/print.css" type="text/css" media="print" />
		<!--[if lt IE 8]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/joomla-nav/screen.css" type="text/css" media="screen" />

		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

		<!-- The following four lines load the Blueprint CSS Framework and the template CSS file for right-to-left languages. If you don't want to use these, delete these lines. -->
		<?php if($this->direction == 'rtl') : ?>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/rtl/screen.css" type="text/css" />
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" type="text/css" />
		<?php endif; ?>

		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->

    </head>

    <body>
    <div class="bg_blue"></div>
    <div class="bg_cloud"></div>
    <div class="wrapper">
        <div class="header">
            <a href="index.php" title="Experimental Creative Center"><img src="../../images/logo.png" width="225" height="156" alt="Experimental Creative Center" /></a>
            <!--<ul class="social">
                <li><a class="fb" href="#" title="Facebook">Facebook</a></li>
                <li><a class="vk" href="#" title="Vkontakte">Vkontakte</a></li>
                <li><a class="tw" href="#" title="Twitter">Twitter</a></li>
                <li><a class="yt" href="#" title="YouTube">Youtube</a></li>
                <li><a class="vm" href="#" title="Vimeo">Vimeo</a></li>
            </ul>-->
        </div>
        <div class="buttons">
            <a id="facebook-button" class="fly-button" target="_blank" href="https://www.facebook.com/profile.php?id=100002089503948"></a>
            <a id="twitter-button" class="fly-button" target="_blank" href="https://twitter.com/S_Karpo"></a>
            <a id="vkontakte-button" class="fly-button" target="_blank" href="http://vk.com/s.karpo"></a>
            <a id="odnoklassniki-button" class="fly-button" target="_blank" href="#"></a>
            <a id="youtube-button" class="fly-button" target="_blank" href="#"></a>

        </div>

    <!--navigation-->
        <div class="navbar">
            <?php if ($this->countModules('position-1')): ?>
                <jdoc:include type="modules" name="position-1" style="none" />
            <?php endif; ?>
        </div>
    <!--share social
        <div class="lrsharecontainer">
            <script type="text/javascript">var islrsharing = true; var islrsocialcounter = false;</script>
            <script type='text/javascript' src='//share.loginradius.com/Content/js/LoginRadius.js' id='lrsharescript'></script>
            <script type="text/javascript"> LoginRadius.util.ready(function () { $i = $SS.Interface.Simplefloat; $SS.Providers.Top = ["Facebook","GooglePlus","Vkontakte","Twitter","Email"]; $u = LoginRadius.user_settings;
                $u.apikey= 'e8d6b517-6244-42e3-a578-dfc85988ca2f';
                $i.size = 32; $i.left = '50px'; $i.top = '300px';$i.show("lrsharecontainer"); });
            </script>
 -->





            <div class="content">
                    <jdoc:include type="message" />
			        <jdoc:include type="component" />
                    <div class="map">
                        <?php if ($this->countModules('position-2')): ?>
                        <jdoc:include type="modules" name="position-2" style="none" />
                        <?php endif; ?>
                    </div>
                    <div class="form">
                       <?php if ($this->countModules('position-3')): ?>
                       <jdoc:include type="modules" name="position-3" style="none" />
                       <?php endif; ?>
                    </div>

                <div class="comments">
                    <?php if ($this->countModules('position-4')): ?>
                    <jdoc:include type="modules" name="position-4" style="none" />
                    <?php endif; ?>
                </div>
            </div>

            <div class="sidebar">
                <div class="calendar">
                    <?php if ($this->countModules('position-7')): ?>
                    <jdoc:include type="modules" name="position-7" style="none" />
                    <?php endif; ?>
                </div>
                <div class="voting">
                    <?php if ($this->countModules('position-8')): ?>
                    <jdoc:include type="modules" name="position-8" style="none" />
                    <?php endif; ?>
                </div>
                <div class="partners">
                    <?php if ($this->countModules('position-9')): ?>
                    <jdoc:include type="modules" name="position-9" style="none" />
                    <?php endif; ?>
                </div>

            </div>


		<div class="footer">
            <div>
                <?php if ($this->countModules('position-10')): ?>
                <jdoc:include type="modules" name="position-10" style="none" />
                <?php endif; ?>
            </div>
			<p>&copy;<?php echo date('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?></p>
		</div>

		<jdoc:include type="modules" name="debug" />
	<div/>
    </body>
</html>
