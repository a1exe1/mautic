<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if ($tmpl == 'index') {
    $view->extend('MauticInstallBundle:Install:content.html.php');
}

$header = $view['translator']->trans('mautic.install.install.heading.stats.configuration');
$view['slots']->set("headerTitle", $header);
?>

<h2 class="page-header">
	<?php echo $header; ?>
</h2>
<p><?php echo $view['translator']->trans('mautic.install.install.stats.introtext'); ?></p>
<?php echo $view['form']->form($form); ?>