<div id="column-wrapper">
	<div id="column-left" class="column">
		<ul id="folder-tree" class="filetree">
		<li class="open"><span class="folder">root</span>
			<ul>
			<?php
				if(isSet($treeEntries))
				{ 
					foreach($treeEntries->children() as $treeEntry)
					{
						if($treeEntry->type == "DIR")
						{
						 echo '<li><span class="folder">'.$treeEntry->name.'</span>';
						 
						 if($treeEntry->hasSubDirs)
						 {
						 	echo '<ul><li class="placeholder"></li></ul>';
						 }
						 
						 echo '</li>';
						}
					}
				}
			?>
			</ul>
		</li>
	</ul>
	</div>
	<div id="column-right" class="column">
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
				<tr class="entry odd">
					<td class="entry-name">nazwaPLiku.txt</td>
					<td class="entry-mod-date">10-12-2012</td>
					<td class="entry-author">psmolenski</td>
					<td class="entry-action">
						<button class="action-button">Pobierz</button>
						<button class="action-button">Historia</button>
						
					</td>
				</tr>
				<tr class="entry even">
					<td class="entry-name">nazwaPLiku.txt</td>
					<td class="entry-mod-date">10-12-2012</td>
					<td class="entry-author">psmolenski</td>
					<td class="entry-action">
						<button class="action-button">Pobierz</button>
						<button class="action-button">Historia</button>
						
					</td>
				</tr>
				<tr class="entry odd">
					<td class="entry-name">nazwaPLiku.txt</td>
					<td class="entry-mod-date">10-12-2012</td>
					<td class="entry-author">psmolenski</td>
					<td class="entry-action">
						<button class="action-button">Pobierz</button>
						<button class="action-button">Historia</button>
						
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>