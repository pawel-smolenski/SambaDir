<div id="column-wrapper">
	<div id="column-left" class="column">
		<ul id="folder-tree" class="filetree">
		<li class="open"><span class="folder opened">root</span>
			<ul>
			<?
			
				$tree = new View('tree');
				$tree->treeEntries = $treeEntries;
				
				
				echo $tree->render();
			?>
			</ul>
		</li>
	</ul>
	</div>
	<div id="column-right" class="column">
		<?php 
			$fileList = new View("filelist");
			$fileList->entries = $entries;
			echo $fileList->render();
		?>
	</div>
</div>