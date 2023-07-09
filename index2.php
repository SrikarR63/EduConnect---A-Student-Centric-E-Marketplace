<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form>
    <input type="textbox" name="name" id="name" placeholder="Enter your name"/><br/><br/>
    <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()"/>
</form>

<script>
    function pay_now(){
        var name=jQuery('#name').val();
        var amt= "30";
        
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&name="+name,
               success:function(result){
                   var options = {
                        "key": "rzp_test_UY1y7bu0apmIK4", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "EduConnect",
                        "description": "Test Transaction",
                        "image": "https://play-lh.googleusercontent.com/jAWsI9YltNUkBo1jvCfDwkCTNzRrc_-_R91PBZelimK2MtyAjnUmGaZOSIBxS1kmkIc",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="detailsdisp.php";//Enter the details page php
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>