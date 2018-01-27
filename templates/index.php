<?php
script('myscan','grid');
script('myscan','version');
script('myscan','detector');
script('myscan','formatinf');
script('myscan','errorlevel');
script('myscan','bitmat');
script('myscan','datablock');
script('myscan','bmparser');
script('myscan','datamask');
script('myscan','rsdecoder');
script('myscan','gf256poly');
script('myscan','gf256');
script('myscan','decoder');
script('myscan','qrcode');
script('myscan','findpat');
script('myscan','alignpat');
script('myscan','databr');
style('myscan', 'style');
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('navigation/index')); ?>
		<?php print_unescaped($this->inc('settings/index')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('content/index')); ?>
		</div>
	</div>
</div>
<?php
script('myscan','main');
?>