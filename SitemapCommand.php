<?php

/**
 * Runs the sitemap Generator
 *
 * @author Mateusz Piatkowski 2015 https://github.com/renegat59
 */
class SitemapCommand extends CConsoleCommand {
	public function actionGenerate(){
    Yii::app()->sitemap->generateSitemap();
	}

}
