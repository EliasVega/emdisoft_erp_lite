<script>
    /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/

        //Selecciona el municipio de acuerdo al departamento

    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#payment_form_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#payment_method_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });
    var cont=0;
    var totalpay=0;
    var paycont = [];
    var pendient = 0;
    //form pay
    $("#payCash").hide();
    $("#payTransfer").hide();
    $("#payNequi").hide();
    $("#payCard1").hide();
    $("#payCard2").hide();
    $("#payUndefined").hide();
    $("#payAdvance").hide();
    $("#paypPyment").hide();

    $("#valuePay").hide();
    $("#advancePay").hide();
    $("#advancePayValue").hide();
    $("#transactions").hide();
    $("#banks").hide();
    $("#cards").hide();
    $("#advancePayment").hide();
    $("#types").hide();
    /*
    $("#percentage").val(0);
    */

    //mostrar u ocultar de acuerdo a la forma de pago
    $(document).ready(function(){
        $("#payment_form_id").change(function(){
        form = $("#payment_form_id").val();
        if(form == 1){
            $("#payUndefined").show();
            $("#payCash").show();
            $("#payAdvance").show();
            $("#payTransfer").show();
            $("#payNequi").show();
            $("#payCard1").show();
            $("#payCard2").show();
            $("#payPayment").hide();
        }else{
            $("#payPayment").show();
            $("#payUndefined").hide();
            $("#payCash").hide();
            $("#payAdvance").hide();
            $("#payTransfer").hide();
            $("#payNequi").hide();
            $("#payCard1").hide();
            $("#payCard2").hide();
            $("#payment_method_id").val(1);
            $("#totalpay").val(0);
        }
        });
    });

    $(document).ready(function(){
        $("#addpay").click(function(){
            see();
        });
    });
    function see(){
        $("#payUndefined").show();
        $("#payCash").show();
        $("#payAdvance").show();
        $("#payTransfer").show();
        $("#payNequi").show();
        $("#payCard1").show();
        $("#payCard2").show();
        $("#methodPay").hide();
        $("#payPayment").hide();

    }

    $(document).ready(function(){
        $("#cash").click(function(){
            tpay = $("#pendient").val();
            $("#pay").val(tpay);
            payCash();
        });
    });

    function payCash(){
        $("#pay").val();
        $("#returned").val(0);
        $("#payment_method_id").val(10);
        $("#transaction").val("N/A");
        $("#bank_id").val(1);
        $("#card_id").val(1);
        $("#transactions").hide();
        $("#banks").hide();
        $("#cards").hide();
        $("#valuePay").show();
        $("#advancePay").hide();
        $("#advancePayment").hide();
        $("#payment").val(0);
    }

    $(document).ready(function(){
        $("#transfer").click(function(){
            tpay = $("#pendient").val();
            $("#pay").val(tpay);
            payTransaction();
        });
    });

    function payTransaction(){
        $("#pay").val();
        $("#returned").val(0);
        $("#payment_method_id").val(47);
        $("#card_id").val(1);
        $("#valuePay").show();
        $("#advancePay").hide();
        $("#transactions").show();
        $("#banks").show();
        $("#cards").hide();
        $("#methodPay").hide();
        $("#advancePayment").hide();
        $("#payment").val(0);
    }

    $(document).ready(function(){
        $("#nequi").click(function(){
            tpay = $("#pendient").val();
            $("#pay").val(tpay);
            payNequi();
        });
    });

    function payNequi(){
        $("#pay").val();
        $("#returned").val(0);
        $("#payment_method_id").val(47);
        $("#bank_id").val(2);
        $("#card_id").val(1);
        $("#valuePay").show();
        $("#advancePay").hide();
        $("#transactions").show();
        $("#cards").hide();
        $("#methodPay").hide();
        $("#banks").hide();
        $("#advancePayment").hide();
        $("#payment").val(0);
    }

    $(document).ready(function(){
        $("#card1").click(function(){
            tpay = $("#pendient").val();
            $("#pay").val(tpay);
            payCard1();
        });
    });

    function payCard1(){
        $("#pay").val();
        $("#returned").val(0);
        $("#payment_method_id").val(48);
        $("#advancePay").hide();
        $("#methodPay").hide();
        $("#advancePayment").hide();
        $("#valuePay").show();
        $("#banks").show();
        $("#cards").show();
        $("#transactions").show();
        $("#payment").val(0);
    }

    $(document).ready(function(){
        $("#card2").click(function(){
            tpay = $("#pendient").val();
            $("#pay").val(tpay);
            payCard2();
        });
    });

    function payCard2(){
        $("#pay").val();
        $("#returned").val(0);
        $("#payment_method_id").val(49);
        $("#advancePay").hide();
        $("#methodPay").hide();
        $("#advancePayment").hide();
        $("#valuePay").show();
        $("#banks").show();
        $("#cards").show();
        $("#transactions").show();
        $("#payment").val(0);
    }

    $(document).ready(function(){
        $("#noDefined").click(function(){
            tpay = $("#pendient").val();
            $("#pay").val(tpay);
            noDefined();
        });
    });

    function noDefined(){
        $("#pay").val();
        $("#returned").val(0);
        $("#payment_method_id").val(1);
        $("#transaction").val("N/A");
        $("#bank_id").val(1);
        $("#card_id").val(1);
        $("#transactions").show();
        $("#banks").hide();
        $("#cards").hide();
        $("#valuePay").show();
        $("#advancePay").hide();//valor del anticipo
        $("#advancePayment").hide();//modelo
        $("#payment").val(0);
    }

    $(document).ready(function(){
        $("#advance").click(function(){
            $("#pay").val("");
            advance();
        });
    });

    function advance(){
        $("#pay").val();
        $("#returned").val(0);
        $("#payment_method_id").val(1);
        $("#transaction").val("N/A");
        $("#bank_id").val(1);
        $("#card_id").val(1);
        $("#valuePay").hide();
        $("#advancePay").show();
        $("#transactions").hide();
        $("#cards").hide();
        $("#methodPay").hide();
        $("#banks").hide();
        $("#advancePayment").show();
    }
    $(document).ready(function(){
        $("#pay").keyup(function(){
            $("#pay").val();
            $("#returned").val();
            paymentor();
        });
    });

    function paymentor(){
        ttp = parseFloat($("#pendient").val())
        abn = parseFloat($("#pay").val())
        balancey = ttp - abn;
        if (ttp >= abn) {
            $("#returned").val(balancey);
        } else {
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'El abono supera el valor de la compra',
            })
            $("#pay").val(0)
            paymentor();
        }
    }

    prueba = [];
    $("#provider_id").change(function(event){
        $.get("getPayment/" + event.target.value + "", function(response){
            $("#payment_id").empty();
            $("#payment_id").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#payment_id").append("<option value = '" + response[i].id + "'>" + response[i].origin + response[i].balance + "</option>");
                prueba = response[i].balance;
            }
            $("#payment_id").selectpicker('refresh');
        });
    });

    $(document).ready(function(){
        $("#payment_id").change(function(){
            parseFloat($("#abpayment").val(prueba))
            $("#advancePay").show();
            prepaidnew();
        });
    });

    $(document).ready(function(){
        $("#payment").keyup(function(){
            $("#payment").val();
            prepaid();
        });
    });

    function prepaidnew(){
        ttp = parseFloat($("#total_pay").val())
        abn = parseFloat($("#abpayment").val())

        balancey = ttp - abn;
        if (ttp >= abn) {
            $("#returned").val(balancey);
            $("#pay").val(abn);
            $("#payment").val(abn);
        } else {
            $("#advancePayValue").show();
            //prepaid()
        }
    }

    function prepaid(){
        ttpnew = parseFloat($("#pendient").val())
        abnnew = parseFloat($("#payment").val())
        balanceynew = ttpnew - abnnew;
        if (ttpnew >= abnnew) {
            $("#returned").val(balanceynew);
            $("#payment").val(abnnew);
            $("#pay").val(abnnew);
        } else {
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'El abono supera el valor de la compra',
            })
            $("#payment").val(0)
            prepaid();
        }
    }
    var contpay=0;
    totalpay=0;
    $(document).ready(function(){
        $("#paying").click(function(){
            paying();
        });
    });
    function paying(){

        payment_method_id = $("#payment_method_id").val();
        payment_method = $("#payment_method_id option:selected").text();
        bank_id = $("#bank_id").val();
        bank = $("#bank_id option:selected").text();
        card_id = $("#card_id").val();
        card = $("#card_id option:selected").text();
        pay = $("#pay").val();
        transaction = $("#transaction").val();
        pendient = parseFloat($("#pendient").val());

        if(payment_method_id !="" && bank_id!="" && card_id!=""  && pay!="" && pay>0 && transaction!=""){
            totalpay = parseFloat(totalpay) + parseFloat(pay);
            rbalance = parseFloat(pendient) - parseFloat(pay);
            paycont[contpay] = pay;

            if (pendient >= pay) {
                var rowpay= '<tr class="selected" id="rowpay'+contpay+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="deletepay('+contpay+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="payment_method_id[]" value="'+payment_method_id+'">'+payment_method+'</td> <td><input type="hidden" name="card_id[]" value="'+card_id+'">'+card+'</td> <td><input type="hidden" name="bank_id[]" value="'+bank_id+'">'+bank+'</td> <td><input type="hidden" name="transaction[]" value="'+transaction+'">'+transaction+'</td> <td><input type="hidden" name="pay[]" value="'+pay+'">'+pay+'</td>  </tr>';
                contpay++;

                totalpayment();
                assesspayment();
                $('#payments').append(rowpay);
                clearpay();
            } else {
                totalpay = parseFloat(totalpay) - parseFloat(pay);
                //alert("Rellene todos los campos del detalle de la venta");
                Swal.fire({
                    type: 'error',
                    //title: 'Oops...',
                    text: 'Abono supera el saldo del Pedido',
                });
            }
        } else {
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'Rellene todos los campos del detalle del Apago',
            });
        }
    }
    function clearpay(){
            $("#payment_method_id").val("");
            $("#bank_id").val("");
            $("#card_id").val("");
            $("#pay").val("");
            $("#transaction").val("");
        }
        function totalpayment(){

            $("#totalpay_html").html("$ " + totalpay.toFixed(2));
            $("#totalpay").val(totalpay.toFixed(2));
            $("#pendient").val(rbalance);
        }
        function assesspayment(){

            if(totalpay>0){

            $("#save").show();

        } else{

            $("#save").hide();
        }
    }
    function deletepay(index){
        paydelete = paycont[index];
        pendient = $("#pendient").val();
        newpendient = parseFloat(pendient) + parseFloat(paydelete);


        totalpay = totalpay-paycont[index];
        $("#totalpay_html").html("$ " + totalpay.toFixed(2));
        $("#totalpay").val(totalpay.toFixed(2));

        $("#pendient").val(newpendient);
        $("#rowpay" + index).remove();
        assesspayment();
    }
</script>
