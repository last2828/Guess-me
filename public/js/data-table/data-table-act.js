(function ($) {
 "use strict";
	
	$(document).ready(function() {
		 $('#data-table-basic').DataTable({
       "aoColumnDefs": [
         { 'bSortable': false, 'aTargets': [ 7, 8, 9 ] }
       ]
     });
	});
 
})(jQuery); 