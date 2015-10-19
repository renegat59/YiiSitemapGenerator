<?php


return array(
  'import'=>array(
      //other imports
			'application.components.*',
  ),
	'components'=>array(
    //other components
    'sitemap'=>array(
      'class'=>'SitemapComponent',
  			'protocolPattern'=>'https',
        'sitemapPath'=>'/var/www/mypage'
  			'excludeRegex'=>array(
          //sample exclude the wp-* folders, if we also host w WordPress blog,
          //and don't want to include this URLS to the sitemaps.
  				'/^(.*)wp-(.*)$/',
  			),
    )
  )
);
?>
