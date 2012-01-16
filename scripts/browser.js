
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
			context: $(this).parent('li'),
			success: function(data){
				this.append('<ul></ul>');
				$(data).appendTo(this.children('ul'));
			}
		});
	}).live('load-files', function(event){
		$.ajax({
			url: '/ajax/getFiles',
			type: 'post',
			data: {path: $(this).data('path')},
			context: $(this).parent('li'),
			success: function(data){
				columnRight = $('#column-right');
				columnRight.children().remove();
				columnRight.append($(data));
			}
		});
	}).live('click', function(event){
		$(this).trigger('open-folder');
	});
	
	$(".show-history").live('click', function(event){
		event.preventDefault();
		$(this).trigger('show-history');
	}).live('show-history', function(event){
		$.ajax({
			url: '/ajax/getHistory',
			type: 'post',
			data: {path: $(this).closest('tr').data('path')},
			success: function(data){
				columnRight = $('#column-right');
				columnRight.children().remove();
				columnRight.append(data);
			}
		});
	});
	
	$('.go-back').live('click', function(event){
		event.preventDefault();
		$(this).trigger('go-back');
	}).live('go-back', function(event){
		$('span.folder.active').trigger('load-files');
	});
	
});