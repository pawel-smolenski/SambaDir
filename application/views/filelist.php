<table id="entries">

<thead>
<tr>
<th class="entry-name">Nazwa pliku</th>
<th class="entry-mod-date">Data modyfikacji</th>
<th class="entry-author">Autor</th>
<th class="entry-action"></th>
</tr>
</thead>
<tbody>
<?php 
if(!isSet($path)) $path = '';
$even = false; 
foreach($entries as $entry):?>
	<?php if($entry->type == 'FILE'):?>
		<tr class="entry <?=($even == true) ? 'even' : 'odd'; $even = !$even;?>" data-path="<?=$path.'/'.$entry->name?>">
			<td class="entry-name"><?=$entry->name?></td>
			<td class="entry-mod-date"><?=$entry->latestVersion?></td>
			<td class="entry-author"><?=$entry->lastModifyUsername?></td>
			<td class="entry-action">
				<a class="action-button" target="_blank" href="/downloadFile<?=URL::query(array('path' => $path.'/'.$entry->name))?>">Pobierz</a>
				<a class="action-button">Historia</a>
			</td>
		</tr>
	<?php endif;?>
<?php endforeach;?>
</tbody>
</table>
