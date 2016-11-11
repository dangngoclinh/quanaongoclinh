$(document).ready(function() {
	var sidebar_menu = $('ul.sidebar-menu');
	var url = $url_current;
	var li = $('li a[href="' + url + '"]', sidebar_menu);
	var litreeview = li.closest('li.treeview');
	var ultreeview_menu = li.closest('ul.treeview-menu');
		ultreeview_menu.css('display', 'block');
	if(!litreeview.hasClass('active'))
	{
		$('li.treeview.active', sidebar_menu).removeClass('active');
		litreeview.addClass('active');
	}
})