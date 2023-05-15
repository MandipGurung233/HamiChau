@extends('user.layouts.main')
@section('content')


<div class="container d-flex justify-content-center">
    <button id="payment-button">Pay with Khalti</button>
</div>


<script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_26636c3e2c644eb9a018ed70612fb0a1",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    var url = '/change-payment-status/'+`{{$id}}`
                    window.location.replace(url);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: `{{$amount}}`});
        }
    </script>
@endsection