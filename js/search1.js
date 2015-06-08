$(function(){

$('#searchform').submit(function(e){
e.preventDefault();
	var query = $('input.search').val();
	if (query) {
		$.post(
				"searchword.php",
				{
					query:query,
					
				},
				function suc (data) {
	
				$('#content').html(data);
				}
				

			);
	
	}
});

});
