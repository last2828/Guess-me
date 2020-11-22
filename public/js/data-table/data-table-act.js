(function ($) {
 "use strict";
	
	$(document).ready(function() {
		 $('#data-table-basic').DataTable({
       "aoColumnDefs": [
         { 'bSortable': false, 'aTargets': [ 3, 4, 5 ] }
       ]
     });
	});
 
})(jQuery); 