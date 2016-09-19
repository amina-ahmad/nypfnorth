// JavaScript Document
//Do not allow empty column
function validateField(field, alertMsg)
{
    with (field)
    {
        if (value == null || value == "")
        {
            alert(alertMsg);
            return false;
        }

    }

}

//validate file form
function validate_file(field, alertMsg)
{
    var validFileExtensions = new Array(".jpg", ".jpeg", ".bmp", ".gif", ".png");
    var fileName = field.value;

    //getting the file name
    while (fileName.indexOf("\\") != -1)
    {
        fileName = fileName.slice(fileName.indexOf("\\") + 1);
    }

    //Getting the file extension                     
    var ext = fileName.slice(fileName.indexOf(".")).toLowerCase();

    //matching extension with our given extensions.
    for (var i = 0; i < validFileExtensions.length; i++)
    {
        if (validFileExtensions[i] != ext)
        {
            alert(alertMsg);
            return false;

        }
        else
        {
            return true;
        }
    }
}

//validate the search form
function validateFormSearch(thisform)
{

    with (thisform)
    {
        if (validateField(search_item, "Please enter search criteria.") == false)
        {
            search_item.focus();
            return false;
        }
    }
}
//validate the system settings
function validateFormEmail(thisform)
{
    var illegal = /[\(\)\<\>\,\;\:\\\"\[\]]/; //not allow special character
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/; //must include '@' and '.' and a character must exist between the '@' and '.'


    with (thisform)
    {
        if (validateField(email, "Please enter the email address.") == false)
        {
            email.focus();
            return false;
        }

        else if (!emailFilter.test(email.value))
        {
            email.focus();
            alert("The email address is invalid.");
            return false;
        }
        
    }
}

//validate the banner form
function validateFormBanner(thisform)
{

    with (thisform)
    {
        if (validate_file(picture1, "Please enter file of type: '.jpg', '.jpeg', '.gif' or '.png'.") == false)
        {
            picture1.focus();
            return false;
        }
        else if (validate_file(picture2, "Please enter file of type: '.jpg', '.jpeg', '.gif' or '.png'.") == false)
        {
            picture2.focus();
            return false;
        }
        else if (validate_file(picture3, "Please enter file of type: '.jpg', '.jpeg', '.gif' or '.png'.") == false)
        {
            picture3.focus();
            return false;
        }
        else if (validate_file(picture4, "Please enter file of type: '.jpg', '.jpeg', '.gif' or '.png'.") == false)
        {
            picture4.focus();
            return false;
        }
        else if (validate_file(picture5, "Please enter file of type: '.jpg', '.jpeg', '.gif' or '.png'.") == false)
        {
            picture5.focus();
            return false;
        }
    }
}

//validate the new product form
function validateFormProduct(thisform)
{
    var illegal = /[\(\)\<\>\,\;\:\\\"\[\]]/; //not allow special character

    with (thisform)
    {
        if (validateField(manufacturer, "Please enter the Manufacturer.") == false)
        {
            manufacturer.focus();
            return false;
        }

        else if (validateField(name, "Please enter the name of the car.") == false)
        {
            name.focus();
            return false;
        }
        else if (validateField(model, "Please enter the model of the car.") == false)
        {
            model.focus();
            return false;
        }

        else if (validateField(description, "Please enter the description of the car..") == false)
        {
            description.focus();
            return false;
        }

        else if (validateField(sku, "Please enter Stock Keeping Unit (SKU) of the car.") == false)
        {
            sku.focus();
            return false;
        }

        else if (validateField(price, "Please enter the price.") == false)
        {
            price.focus();
            return false;
        }

        else if (isNaN(price.value))
        {
            price.focus();
            alert("Please enter digits only");
            return false;
        }

        else if (validateField(qty, "Please enter the quantity.") == false)
        {
            qty.focus();
            return false;
        }

        else if (isNaN(qty.value))
        {
            qty.focus();
            alert("Please enter digits only");
            return false;
        }

        else if (validateField(min_qty, "Please enter the minimum quantity.") == false)
        {
            min_qty.focus();
            return false;
        }

        else if (isNaN(min_qty.value))
        {
            min_qty.focus();
            alert("Please enter digits only");
            return false;
        }


    }
}

//validate the system settings
function validateFormSystem(thisform)
{
    var illegal = /[\(\)\<\>\,\;\:\\\"\[\]]/; //not allow special character
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/; //must include '@' and '.' and a character must exist between the '@' and '.'


    with (thisform)
    {
        if (validateField(sname, "Please enter the website's name.") == false)
        {
            sname.focus();
            return false;
        }

        else if (validateField(surl, "Please enter the websites url.") == false)
        {
            surl.focus();
            return false;
        }

        else if (validateField(semail, "Please enter the website's email address.") == false)
        {
            semail.focus();
            return false;
        }

        else if (!emailFilter.test(semail.value))
        {
            semail.focus();
            alert("The email address is invalid.");
            return false;
        }
        else if (validateField(mtdesc, "Please enter the Meta Tag Description.") == false)
        {
            mtdesc.focus();
            return false;
        }

        else if (validateField(mtkey, "Please enter the Meta Tag Key.") == false)
        {
            mtkey.focus();
            return false;
        }

    }
}

//validate the new order form
function validateFormOrder(thisform)
{
    var illegal = /[\(\)\<\>\,\;\:\\\"\[\]]/; //not allow special character
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/; //must include '@' and '.' and a character must exist between the '@' and '.'
    var e = document.getElementById("product");
    var strUser = e.options[e.selectedIndex].text;

    with (thisform)
    {
        if (e.options[e.selectedIndex].text == 'Select')
        {
            alert("Please select the product type.");
            product.focus();
            return false;
        }
        else if (validateField(o_date, "Please enter the order date.") == false)
        {
            o_date.focus();
            return false;
        }
        else if (validateField(s_date, "Please enter the shipping date.") == false)
        {
            s_date.focus();
            return false;
        }

        else if (validateField(qty, "Please enter the quantity.") == false)
        {
            qty.focus();
            return false;
        }

        else if (isNaN(qty.value))
        {
            qty.focus();
            alert("Please enter digits only");
            return false;
        }

        else if (validateField(method, "Please enter the shipping method.") == false)
        {
            method.focus();
            return false;
        }

        else if (validateField(discount, "Please enter the discount(Enter 0 if none).") == false)
        {
            discount.focus();
            return false;
        }

        else if (isNaN(discount.value))
        {
            discount.focus();
            alert("Please enter digits only");
            return false;
        }

        else if (isNaN(shipping.value))
        {
            shipping.focus();
            alert("Please enter digits only");
            return false;
        }

        else if (isNaN(tax.value))
        {
            tax.focus();
            alert("Please enter digits only");
            return false;
        }
        else if (validateField(fname, "Please enter the customer's first name .") == false)
        {
            fname.focus();
            return false;
        }

        else if (validateField(lname, "Please enter the customer's last name.") == false)
        {
            lname.focus();
            return false;
        }

        else if (validateField(phone, "Please enter the customer's phone number.") == false)
        {
            phone.focus();
            return false;
        }

        else if (isNaN(phone.value))
        {
            phone.focus();
            alert("Please enter digits only");
            return false;
        }

        else if (validateField(email, "Please enter the customer's email address.") == false)
        {
            email.focus();
            return false;
        }

        else if (!emailFilter.test(email.value))
        {
            email.focus();
            alert("The email address is invalid.");
            return false;
        }

        else if (validateField(address, "Please enter the customer's address.") == false)
        {
            address.focus();
            return false;
        }
    }
}

//validate the user form
function validateFormUser(thisform)
{
    var illegal = /[\(\)\<\>\,\;\:\\\"\[\]]/; //not allow special character
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/; //must include '@' and '.' and a character must exist between the '@' and '.'

    with (thisform)
    {
        if (validateField(fname, "Please enter your first name.") == false)
        {
            fname.focus();
            return false;
        }

        else if (validateField(lname, "Please enter your last name.") == false)
        {
            lname.focus();
            return false;
        }

        else if (validateField(email, "Please enter your email address.") == false)
        {
            email.focus();
            return false;
        }

        else if (!emailFilter.test(email.value))
        {
            email.focus();
            alert("The email address is invalid.");
            return false;
        }

        else if (validateField(phone, "Please enter your phone number.") == false)
        {
            phone.focus();
            return false;
        }

        else if (isNaN(phone.value))
        {
            phone.focus();
            alert("Please enter digits only.");
            return false;
        }

        else if (validateField(username, "Please enter your username.") == false)
        {
            username.focus();
            return false;
        }
    }
}
//validate the user form
function validateFormPass(thisform)
{

    with (thisform)
    {
        if (validateField(currPass, "Please enter your current password.") == false)
        {
            currPass.focus();
            return false;
        }

        else if (validateField(newPass, "Please enter your new password.") == false)
        {
            newPass.focus();
            return false;
        }

        else if (validateField(reNewPass, "Please re-enter your new password.") == false)
        {
            reNewPass.focus();
            return false;
        }

    }
}
//validate the new order form
function validateFormUserOrder(thisform)
{
    var illegal = /[\(\)\<\>\,\;\:\\\"\[\]]/; //not allow special character
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/; //must include '@' and '.' and a character must exist between the '@' and '.'

    with (thisform)
    {
        if (validateField(fname, "Please enter the customer's first name.") == false)
        {
            fname.focus();
            return false;
        }

        else if (validateField(lname, "Please enter the customer's last name.") == false)
        {
            lname.focus();
            return false;
        }

        else if (validateField(phone, "Please enter the customer's phone number.") == false)
        {
            phone.focus();
            return false;
        }

        else if (isNaN(phone.value))
        {
            phone.focus();
            alert("Please enter digits only");
            return false;
        }

        else if (validateField(email, "Please enter the customer's email address.") == false)
        {
            email.focus();
            return false;
        }

        else if (!emailFilter.test(email.value))
        {
            email.focus();
            alert("The email address is invalid.");
            return false;
        }

        else if (validateField(address, "Please enter the customer's address.") == false)
        {
            address.focus();
            return false;
        }
        else if (validateField(qty, "Please enter the quantity.") == false)
        {
            qty.focus();
            return false;
        }

        else if (isNaN(qty.value))
        {
            qty.focus();
            alert("Please enter digits only");
            return false;
        }
    }
}

function validate_file(field, alertMsg)
{
    var validFileExtensions = new Array(".jpg", ".jpeg", ".bmp", ".gif", ".png");
    var fileName = field.value;

    //getting the file name
    while (fileName.indexOf("\\") != - 1)
        fileName = fileName.slice(fileName.indexOf("\\") + 1);

    //Getting the file extension                     
    var ext = fileName.slice(fileName.indexOf(".")).toLowerCase();

    //matching extension with our given extensions.
    for (var i = 0; i < validFileExtensions.length; i++)
    {
        if (validFileExtensions[i] == ext)
        {
            return true;
        }
    }
    alert(alertMsg);
    return false;
}
$(function(){
  
  //Create variables we will be referencing in our tweens.
  var white = 'rgb(255,255,255)';
  var seafoam = 'rgb(30,205,151)';  
  $buttonShapes = $('rect.btn-shape');
  $buttonColorShape = $('rect.btn-shape.btn-color');
  $buttonText = $('text.textNode');
  $buttonCheck = $('text.checkNode');
  
  //These are the button attributes which we will be tweening
  //This will be used with GSAP and the function below to tween
  var buttonProps = {
    buttonWidth : $buttonShapes.attr('width'),
    buttonX : $buttonShapes.attr('x'),
    buttonY : $buttonShapes.attr('y'),
    textScale : 1,
    textX : $buttonText.attr('x'),
    textY : $buttonText.attr('y')
  };
  
  //This is the update handler that lets us tween attributes
  function onUpdateHandler(){
    $buttonShapes.attr('width', buttonProps.buttonWidth);
    $buttonShapes.attr('x', buttonProps.buttonX);
    $buttonShapes.attr('y', buttonProps.buttonY);
    $buttonText.attr('transform', "scale(" + buttonProps.textScale + ")");
    $buttonText.attr('x', buttonProps.textX);
    $buttonText.attr('y', buttonProps.textY);
  }
  
  //Finally, create the timelines
  var hover_tl = new TimelineMax({
    tweens:[
      TweenMax.to( $buttonText, .15, { fill:white } ),
      TweenMax.to( $buttonShapes, .25, { fill: seafoam })
    ]
  });
  hover_tl.stop();
  
  var tl = new TimelineMax({onComplete:bind_mouseenter});
  //This is the initial transition, from [submit] to the circle
  tl.append( new TimelineMax({
    align:"start",
    tweens:[
      TweenMax.to( $buttonText, .15, { fillOpacity:0 } ),
      TweenMax.to( buttonProps, .25, { buttonX: (190-64)/2, buttonWidth:64, onUpdate:onUpdateHandler } ),
      TweenMax.to( $buttonShapes, .25, { fill: white })
    ], 
    onComplete:function(){ 
      $buttonColorShape.css({
        'strokeDasharray':202,
        'strokeDashoffset':202
      });
    }
  }) );
  
  //The loading dasharray offset animation… 
  tl.append(TweenMax.to($buttonColorShape, 1.2, {
    strokeDashoffset:0, 
    ease:Quad.easeIn,
    onComplete:function(){
      //Reset these values to their defaults.
      $buttonColorShape.css({
        'strokeDasharray':453,
        'strokeDashoffset':0
      });
    }
  }));

  //The Finish - transition to check
  tl.append(new TimelineMax({
    align:"start",
    tweens:[
      TweenMax.to($buttonShapes, .3, {fill:seafoam}),
      TweenMax.to( $buttonCheck, .15, { fillOpacity:1 } ),
      TweenMax.to( buttonProps, .25, { buttonX: 3, buttonWidth:190, onUpdate:onUpdateHandler } )
    ]
  }));
  
  //The Reset - back to the beginning
  //For demo only - probably you would want to remove this.
  tl.append(TweenMax.to($buttonCheck, .1, {delay:1,fillOpacity:0}));

  tl.append(new TimelineMax({
    align:"start",
    tweens:[
      TweenMax.to($buttonShapes, .3, {fill:white}),
      TweenMax.to($buttonText, .3, {fill:seafoam, fillOpacity:1})
    ],
    onComplete:function() {
      $('.colins-submit').removeClass('is-active');
    }
  }));
  tl.stop();
  
  //-- On Click, we launch into the cool transition
  $('.colins-submit').on('click', function(e) {
    //-- Add this class to indicate state
    $(e.currentTarget).addClass('is-active');
    tl.restart();
    $('.colins-submit').off('mouseenter');
    $('.colins-submit').off('mouseleave');
  });
  
  bind_mouseenter();
  
  function bind_mouseenter() {
    $('.colins-submit').on('mouseenter', function(e) {
      hover_tl.restart();
      $('.colins-submit').off('mouseenter');
      bind_mouseleave();
    });
  }
  function bind_mouseleave() {  
    $('.colins-submit').on('mouseleave', function(e) {
      hover_tl.reverse();
      $('.colins-submit').off('mouseleave');
      bind_mouseenter();      
    });
  }
  
});