/**
 * Based On the number choosen, auto generate the assets
 */
$(document).ready(function(){
    $(".nosCreateSale").blur(function(){
      var values = this.value; //quantity
      var productRate = $('.rateCreateSale').val(); //current product rate
      var productTax = $('.taxCreateSale').val(); //current tax
      var totalAmt = parseInt(productRate)*parseInt(values);
      var taxPercentage = (productTax / 100) * totalAmt;
        $('.tax_amtCreateSale').val(taxPercentage);
        $('.total_amtCreateSale').val(parseInt(totalAmt)+parseInt(taxPercentage)); 
    });
});

/**
 * Based on the sale choose type show, cgst, sgst, igst etc
 */
 $('#sale_typechoose').on('change', function() {
    var values = this.value;
    if(values == 1){
      //form8
      $('#form8bid').hide();
      $('#formbid').show();
      $('.igstclick').show();
      $('.ishowigstclick').show();
      $('.clickedigst').hide();
      $('.showigstclick').hide();
      $('.priceSGST').show();
      $('.priceCGST').show();
      $('.priceCESS').show();
      $('.showcess').show();
    }else if(values == 2){
      //form8b 
      $('#form8bid').show();
      $('#formbid').hide();
      $('.igstclick').show();
      $('.ishowigstclick').show();
      $('.clickedigst').hide();
      $('.showigstclick').hide();
      $('.priceSGST').show();
      $('.priceCGST').show();
      $('.priceCESS').show();
      $('.showcess').show();
    }else{
      //igst
      $('#form8bid').show();
      $('#formbid').hide();
      $('.igstclick').hide();
      $('.ishowigstclick').show();
      $('.clickedigst').show();
      $('.showigstclick').show();
      $('.priceSGST').hide();
      $('.priceCGST').hide();
      $('.priceCESS').hide();
      $('.showcess').hide();
    }
  });

  /**
   * Adding multiple products
   */
   $(document).ready(function()

   {
   var x = 0; //Initial field counter
   var sino = 1;
   var list_maxField = 10; //Input fields increment limitation

       //Once add button is clicked
   $('.list_add_button').click(function()
     {
       //Check maximum number of input fields
       if(x < list_maxField){ 
           var si = x;
           var product_code = $('#product_code').val();
           var product_id = $('#product_id').val();
           var product_text = $("#product_id option:selected").text().trim();
           var tax = $('#tax').val();
           var unit = $('#unit').val();
           var nos = $('#nos').val();
           var rate = $('#rate').val();
           var tax_amt = $('#tax_amt').val();
           var total_amt= $('#total_amt').val();
           x++; //Increment field counter
           sino++;

           //summary section.
           //quantity
           if($('.priceQtyTotal').text()){
             priceQtyTotal = parseInt($('.priceQtyTotal').text())+parseInt($('#nos').val());
           }else{
             priceQtyTotal = parseInt($('#nos').val());
           }
           $('.priceQtyTotal').text(priceQtyTotal);
           //subtotatal
           if($('.priceSubTotal').text()){
             priceSubTotal = parseInt($('.priceSubTotal').text())+(parseInt($('#nos').val()))*(parseInt($('#rate').val()));
           }else{
             priceSubTotal = parseInt($('#nos').val())*parseInt($('#rate').val());
           }
           $('.priceSubTotal').text(priceSubTotal);
           // sgst
           if($('.priceSGST').text()){
             priceSGST = parseInt($('.priceSGST').text())+(parseInt($('#tax_amt').val())/2);
           }else{
             priceSGST = parseInt($('#tax_amt').val())/2;
           }
           $('.priceSGST').text(priceSGST);
           // cgst
           if($('.priceCGST').text()){
             priceCGST = parseInt($('.priceCGST').text())+(parseInt($('#tax_amt').val())/2);
           }else{
             priceCGST = parseInt($('#tax_amt').val())/2;
           }
           $('.priceCGST').text(priceCGST);
           //Grand Total

           if($('.priceGrandTotal').text()){
             priceGrandTotal = parseInt($('.priceGrandTotal').text())+parseInt($('#total_amt').val());
           }else{
             priceGrandTotal = parseInt($('#total_amt').val());
           }
           $('.priceGrandTotal').text(priceGrandTotal);
           //igstclick
           
           if($('.clickedigst').text()){
             clickedigst = parseInt($('.clickedigst').text())+(parseInt($('#tax_amt').val()));
           }else{
             clickedigst = parseInt($('#tax_amt').val());
           }
           $('.clickedigst').text(clickedigst);

           var list_fieldHTML = '<div class="row"><div class="col-xs-1 col-sm-1 col-md-2"><div class="form-group"><input name="si[]" type="text" value="'+sino+'" class="form-control"/>   </div></div><div class="col-xs-1 col-sm-1 col-md-2"><div class="form-group"><input name="product_code[]" type="text" value="'+product_code+'"  class="form-control closestpc"/></div></div><div class="col-xs-3 col-sm-2 col-md-2"><div class="form-group"><input type="text" id="showPName" value="'+product_text+'" class="form-control closestpi"><input name="product_id[]" type="hidden" value="'+product_id+'"  class="form-control"/></div></div><div class="col-xs-1 col-sm-1 col-md-2"><div class="form-group"><input name="tax[]" type="text" value="'+tax+'"  class="form-control closesttax"/></div></div><div class="col-xs-1 col-sm-1 col-md-2"><div class="form-group"><input name="unit[]" type="text" value="'+unit+'"  class="form-control closestunit"/></div></div><div class="col-xs-1 col-sm-1 col-md-2"><div class="form-group"><input name="nos[]" type="text" value="'+nos+'"  class="form-control closestnos"/></div></div><div class="col-xs-1 col-sm-1 col-md-2"><div class="form-group"><input name="rate[]" type="text" value="'+rate+'"  class="form-control closestrate"/></div></div><div class="col-xs-1 col-sm-1 col-md-2"><div class="form-group"><input name="tax_amt[]" type="text" value="'+tax_amt+'"  class="form-control closesttaxl"/></div></div><div class="col-xs-1 col-sm-1 col-md-2"><div class="form-group"><input name="total_amt[]" type="text" value="'+total_amt+'"  class="form-control closesttotal"></div></div><div class="col-xs-1 col-sm-1 col-md-2"><a href="javascript:void(0);" class="list_remove_button btn btn-danger">-</a></div></div>'; //New input field html 
           $('.list_wrapper').append(list_fieldHTML); //Add field html
       }
       $('#product_code').val('');$('#product_id').val('');$('#tax').val('');$('#unit').val('');$('#nos').val('');$('#rate').val('');$('#tax_amt').val('0');$('#total_amt').val('0');$('#product_id').prop('selectedIndex',0);;
       $('.list_add_button').prop('disabled', true);
      });

       //Once remove button is clicked
       $('.list_wrapper').on('click', '.list_remove_button', function()
       {
         var cancelTotalAmt = $(this).closest("div.row").find('.closesttotal').val();
         $('.priceGrandTotal').text(parseInt($('.priceGrandTotal').text())-cancelTotalAmt);

         var cancelclosestRate = $(this).closest("div.row").find('.closestrate').val() * $(this).closest("div.row").find('.closestnos').val();
         $('.priceSubTotal').text(parseInt($('.priceSubTotal').text())-cancelclosestRate);
         
         var cancelSGST = $(this).closest("div.row").find('.closesttaxl').val();
         $('.priceSGST').text(parseInt($('.priceSGST').text())-parseInt(cancelSGST/2));
        
         var cancelCGST = $(this).closest("div.row").find('.closesttaxl').val();
         $('.priceCGST').text(parseInt($('.priceCGST').text())-parseInt(cancelCGST/2));
         
         var cancelIGST = $(this).closest("div.row").find('.closesttaxl').val();
         $('.clickedigst').text(parseInt($('.clickedigst').text())-parseInt(cancelIGST));
         
         var cancelClosestNos = $(this).closest("div.row").find('.closestnos').val();
         $('.priceQtyTotal').text(parseInt($('.priceQtyTotal').text())-cancelClosestNos);
         
         $(this).closest('div.row').remove(); //Remove field html
         x--; //Decrement field counter
       });
   });

   /**
    * Customer type dropduowm
    * show choose from or add new
    */
      $('#customer_type').on('change', function() {
        if( this.value == 1){
          //from list
          $("#customer_from_list").show();
          $("#custom_customer").hide();
        }else{
          //custom
          $("#customer_from_list").hide();
          $("#custom_customer").show();
        }
      });

      $('#customer_type2').on('change', function() {
        if( this.value == 1){
          //from list
          $("#customer_from_list").show();
          $("#custom_customer").hide();
        }else{
          //custom
          $("#customer_from_list").hide();
          $("#custom_customer").show();
        }
      });


