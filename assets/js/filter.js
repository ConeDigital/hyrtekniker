jQuery(document).ready( function($) {
	$(document).on('change', '.cd-competence input, .cd-location select, .cd-availability input', function(){
		//Get type that was changed
		var input_id = $(this).data('id');
		if ( input_id === 'cd-competence' ) {
			var competences = '';
			//Loop through competences
			$('.cd-competence input').each(function(){
				if ( $(this).is(':checked') ) {
					competences += $(this).val()+';';
				}
			});
			$('#'+input_id).val( competences.slice(0, -1) );
		}
		else if ( input_id === 'cd-location' ) {
			$('#'+input_id).val( $(this).val() );
		}
		else {
			$('#range-value').text( $(this).val() );
			$('#'+input_id).val( $(this).val() );
		}
		//Filter techs
		filterTech();
	});
});

function filterTech() {
	//Show loading
	jQuery('.cd-tekniker-list-section').css('opacity', 0);

	//Get filter values
	var competence = jQuery('#cd-competence').val();
	var location = jQuery('#cd-location').val();
	var availability = jQuery('#cd-availability').val();

	//console.log(competence);
	//console.log(location);
	//console.log(availability);

	jQuery('.cd-single-tech').each(function(){
		var single_competence = jQuery(this).data('competence');
		var single_location = jQuery(this).data('location');
		var single_availability = jQuery(this).data('availability');
		var visible = true;

		if ( competence != '' && ! competence.includes(single_competence) ) {
			visible = false;
		}
		if ( location != '' && location != single_location ) {
			visible = false;
		}

		//Get techs availability in unix
		var tech_available = Date.parse(single_availability);
		//Get todays date and add range input
		var range = new Date();
		range.setMonth(range.getMonth() + parseInt(availability));
		range.setHours(0, 0, 0);
		range.setMilliseconds(0);
		//Convert to unix
		range = Date.parse(range);

		//If tech avail is bigger than range
		if ( tech_available > range ) {
			visible = false;
		}

		visible ? jQuery(this).show() : jQuery(this).hide();  
	});

	jQuery('.cd-tekniker-list-section').css('opacity', 1);

}
