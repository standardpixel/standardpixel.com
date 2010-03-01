<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?=$this->sp_media_path;?>favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?=$this->sp_media_path;?>apple-touch-icon.png" />
	<link href="http://feeds.feedburner.com/StandardPixel" rel="alternate" type="application/rss+xml" title="StandardPixel RSS Feed" />
	<title>StandardPixel.com - <?= $this->title ?></title>
	<link rel="stylesheet" type="text/css" href="<?=$this->sp_media_path;?><?=$this->sp_config['filenames']['style'][$this->sp_config['environment']];?>" />
</head>

<body>

<? if( !$this->sp_is_production ) { ?>
<textarea style="height:5px;width:15px;position:absolute;top:0;left:0;background-color:#fff;z-index:100;">
Backend Debug Output
---------------------------------------

//////////   StandardPixel   \\\\\\\\\\
<?print_r($this->sp_config);?>


//////////   Code Ignighter   \\\\\\\\\\
<?print_r($this);?>
</textarea>
<? } ?>