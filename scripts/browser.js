$(function() {
	$("#column-wrapper").splitter({
		outline : true,
		sizeLeft : true,
		minRight: 450,
		minLeft: 100
	});
	$("#folder-tree").treeview({
		animated : 'fast',
		collapsed: true
	});
	
});