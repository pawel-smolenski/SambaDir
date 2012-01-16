<div id="column-wrapper">
	<div id="column-left" class="column">
		<ul id="folder-tree" class="filetree">
		<li><span class="folder opened active" data-path="" data-has-sub-folders="true">root</span>
			<ul>
			<?
			
				$tree = new View('tree');
				$tree->treeEntries = $treeEntries;
				$tree->path = $path;
				
				
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