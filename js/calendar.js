function get(date, days){
	date = new Date(date);
	date.setDate(date.getDate() + days);
	
	var yyyy = date.getFullYear().toString();                                    
	var mm = (date.getMonth()+1).toString(); // getMonth() is zero-based         
	var dd  = date.getDate().toString();             
	
	return yyyy + '-' + (mm[1]?mm:"0"+mm[0]) + '-' + (dd[1]?dd:"0"+dd[0]);
}

$(function(){
	$('#date').daterangepicker({
		singleDatePicker: true,
		locale: {
			format: 'YYYY-MM-DD'
		},
		minDate: get(new Date(), -7),
		maxDate: get(new Date(), 7),
		drops: 'up',
	opens: 'center'
	});
});