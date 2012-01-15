
$(function() {
	$("#column-wrapper").splitter({
		sizeLeft : true,
		minRight: 500,
		minLeft: 100
	});

	
	$("span.folder").live('open-folder', function(event){			
			$("span.folder").removeClass("active");
			
			node = $(this);
			node.addClass("active");
			
			node.trigger('load-files');
			
			if(node.data('has-sub-folders') == true)
			{
				node.toggleClass("opened").next('ul').toggle();
				
				if(node.parent('li').children('ul').length == 0){
					$(this).trigger('load-subfolders');
				}
			}
			
	}).live('load-subfolders', function(event){
		$.ajax({
			url: '/ajax/getTree',
			type: 'post',
			data: {path: node.data('path')},
			dataType: 'json',
			context: $(this).parent('li'),
			success: function(data){
				var list = "";
				$.each(data.subEntry, function(index, entry){
					if(entry.type == "DIR"){
						list += '<li><span class="folder" data-has-sub-folders="'+entry.hasSubFolders+'">'+entry.name+'</span> </li>';
					}
					
				});
				
				
				newList = $(list);
				this.append('<ul></ul');
				newList.appendTo(this.children('ul'));
			}
		});
	}).live('load-files', function(event){
		$.ajax({
			url: '/ajax/getFiles',
			type: 'post',
			data: {path: node.data('path')},
			context: $(this).parent('li'),
			success: function(data){
				columnRight = $('#column-right')
				columnRight.children('table').remove();
				columnRight.append(data);
			}
		});
	}).live('click', function(event){
		$(this).trigger('open-folder');
	});
	
});