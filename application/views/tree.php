<?php
				if(isSet($treeEntries))
				{ 
					foreach($treeEntries->children() as $treeEntry)
					{
						if($treeEntry->type == "DIR")
						{
						 echo '<li><span class="folder" data-path="'.$path.'/'.$treeEntry->name.'" data-has-sub-folders="'.$treeEntry->hasSubFolders.'">'.$treeEntry->name.'</span></li>';
						}
					}
				}
?>