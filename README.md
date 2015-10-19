# YiiSitemapGenerator
The project brings the sitemap generator based on the website crawler.
It is made for Yii 1.1.x. Was not tested and not intended to work on 2.x
It is related on PHP Simple HTML DOM Parser (http://simplehtmldom.sourceforge.net/)

# How To use
To use the generator simply add the SitemapCommand.php to your protected/components
Copy the php-dom folder to protected/vendors (or download the newest version from the project website).
Add configuration following in the protected/config/console.php:

```php
'sitemap'=>array(
  'class'=>'SitemapComponent',
    'protocolPattern'=>'https',
    'sitemapPath'=>'/var/www/mypage'
    'excludeRegex'=>array(
      //sample exclude the wp-* folders, if we also host w WordPress blog,
      //and don't want to include this URLS to the sitemaps.
      '/^(.*)wp-(.*)$/',
    ),
```

The parameters are explained in the comments in the code. The sample configuration file and command is attached with the project.

# TODO
Add the last modification date to the sitemap.
