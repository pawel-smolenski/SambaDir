<div class="header">
<h2>Historia</h2>
<span class="path"><?=$path?></span>
<a class="action-button go-back" href="#">wróć</a>
</div>
<div id="history">
	<?php foreach($historyEntries as $history):?>
	<div class="history-entry <?=strtolower($history->type)?>">
		<span class="action-date"><?=$history->date?></span>
		<span class="action-name"><?=Translator::action($history->type)?></span>
		<span class="action-username"><?=$history->username?></span>
		<span class="action-filesize"><?=Translator::filesize($history->size)?></span>
		<?php if($history->type != 'DELETE' && $history->type != 'RENAME'):?>
			<a class="action-button" href="#">pobierz</a>
		<?php endif;?>
	</div>
	<?php endforeach;?>
</div>