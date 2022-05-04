/**
 * Validation
 * Create Product
 */
$(document).ready(function() {
    $('#myform').validate({
        rules: {
            product_name: {
                required: true,
            },
            unit: {
                required: true,
            },
            product_code: {
                required: true,
            },
            price: {
                required: true,
            },
            sale_price: {
                required: true,
            },
            hsnc: {
                required: true,
            },
            igst: {
                required: true,
            },
            cgst: {
                required: true,
            },
            sgst: {
                required: true,
            },
            inventory: {
                required: true,
            },
            cess: {
                required: true,
            }
        },
        messages: {
            product_name: {
                required: 'Enter product name.',
            },
            unit: {
                required: 'Select unit.',
            },
            product_code: {
                required: 'Enter product code.',
            },
            price: {
                required: 'Enter product rate.',
            },
            sale_price: {
                required: 'Enter sales rate.',
            },
            hsnc: {
                required: 'Enter HSNC.',
            },
            igst: {
                required: 'Enter 0, dont have IGST value.',
            },
            cgst: {
                required: 'Enter CGST.',
            },
            sgst: {
                required: 'Enter SGST.',
            },
            inventory: {
                required: 'Enter inventory.',
            },
            cess: {
                required: 'Enter 0, dont have CESS value.',
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    jQuery.validator.addMethod('selectcheck', function(value) {
        return (value != '0');
    }, "Select your refference subject");
});

/**
 * Validation Customer
 */
$(document).ready(function() {
    $('#myformcustomer').validate({
        rules: {
            customer_name: {
                required: true,
            },
            customer_code: {
                required: true,
            },
            shop_name: {
                required: true,
            },
            house_code: {
                required: true,
            },
            lane: {
                required: true,
            },
            area: {
                required: true,
            },
            op_balance: {
                required: true,
            },
            credit_balance: {
                required: true,
            },
            gstin: {
                required: true,
            },
            pincode: {
                required: true,
            },
            phone1: {
                required: true,
            },
            phone2: {
                required: true,
            }
        },
        messages: {
            customer_name: {
                required: 'Enter customer name.',
            },
            customer_code: {
                required: 'Enter custoner code.',
            },
            shop_name: {
                required: 'Enter shop name.',
            },
            house_code: {
                required: 'Enter house name.',
            },
            lane: {
                required: 'Enter lane.',
            },
            area: {
                required: 'Enter area.',
            },
            op_balance: {
                required: 'Enter OP Balance.',
            },
            credit_balance: {
                required: 'Enter Credit Balance.',
            },
            phone1: {
                required: 'Enter Phone1.',
            },
            phone2: {
                required: 'Enter Phone2.',
            },
            gstin: {
                required: 'Enter GSTIN.',
            },
            pincode: {
                required: 'Enter Pincode.',
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    jQuery.validator.addMethod('selectcheck', function(value) {
        return (value != '0');
    }, "Select your refference subject");
});


/**
 * Validation Update Sale
 */
$(document).ready(function() {
    $('#chooseFROMTO').validate({
        rules: {
            from: {
                required: true,
            },
            to: {
                required: true,
            }
        },
        messages: {
            from: {
                required: 'From Date Required.',
            },
            to: {
                required: 'To Date Required.',
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    jQuery.validator.addMethod('selectcheck', function(value) {
        return (value != '0');
    }, "Select your refference subject");
});

/**
 * updateScriptForm
 */
$(document).ready(function() {
    $('#updateScriptForm').validate({
        rules: {
            updatePrice: {
                required: true,
            },
            updateQuantity: {
                required: true,
            }
        },
        messages: {
            updatePrice: {
                required: 'Price Required.',
            },
            updateQuantity: {
                required: 'Quantity Required.',
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    jQuery.validator.addMethod('selectcheck', function(value) {
        return (value != '0');
    }, "Select your refference subject");
});