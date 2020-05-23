$(document).ready(function(){

	//Events
	$('.installment_plan').on('click', function(e){
		//e.preventDefault();

		calculateInstallment();
	});

	$('#down_payment_percentage').on('keyup', function(){
		calculateInstallment();
	});

	var calculateInstallment = function(){

		var selected_plan = $('input[name=optradio]:checked');
		var month = parseInt(selected_plan.attr('month'));
		var percentage = parseFloat(selected_plan.val()) | 0;
		var product_price = parseFloat($('#product_price').val()) | 0;
		var leasing_amount = (product_price * (percentage/100)) + product_price;
		var down_payment_percentage = parseFloat($('#down_payment_percentage').val());
		var down_payment = product_price * (down_payment_percentage/100);
		var remaining_amount = leasing_amount - down_payment;
		var monthly_installment = remaining_amount / month;

		$('#leasing_amount').val(leasing_amount);
		$('#leasing_amount_hidden').val(leasing_amount);
		$('#installment_plan_hidden').val(month);

		$('#monthly_installment').text(Math.ceil(monthly_installment));
		$('#monthly_installment_hidden').val(Math.ceil(monthly_installment));

		$('#form').show();
		$('#monthly_installment_box').show();
	}
});