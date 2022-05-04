<style>
    body {
        font-family: Helvetica, sans-serif;
        font-size: 13px;
    }

    .container {
        max-width: 680px;
        margin: 0 auto;
    }

    .logotype {
        background: #000;
        color: #fff;
        width: 75px;
        height: 75px;
        line-height: 75px;
        text-align: center;
        font-size: 11px;
    }

    .column-title {
        background: #eee;
        text-transform: uppercase;
        padding: 15px 5px 15px 15px;
        font-size: 11px
    }

    .column-detail {
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .column-header {
        background: #eee;
        text-transform: uppercase;
        padding: 15px;
        font-size: 11px;
        border-right: 1px solid #eee;
    }

    .row {
        padding: 7px 14px;
        border-left: 1px solid #eee;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .alert {
        background: #ffd9e8;
        padding: 20px;
        margin: 20px 0;
        line-height: 22px;
        color: #333
    }

    .socialmedia {
        background: #eee;
        padding: 20px;
        display: inline-block
    }
</style>
<div class="container">

    <table width="100%">
        <tr>
            <td width="75px">
                <div class="logotype">TA</div>
            </td>
            <td width="300px">
                <div style="background: #ffd9e8;border-left: 15px solid #fff;padding-left: 30px;font-size: 26px;font-weight: bold;letter-spacing: -1px;height: 73px;line-height: 75px;">Order invoice</div>
            </td>
            <td></td>
        </tr>
    </table>
    <br><br>
    <h3>Your contact details</h3>
    <p>{{$customer_name}}</p><br>
    <table width="100%" style="border-collapse: collapse;">
        <tr>
            <td widdth="50%" style="background:#eee;padding:20px;">
                <strong>Date:</strong>{{$date}}<br>
                <strong>Payment type:</strong> Offline<br>
            </td>
            <td style="background:#eee;padding:20px;">
                <strong>Order-nr:</strong> {{$invoiceno}}<br>
                <strong>Phone:</strong> {{$contact}}<br>
            </td>
        </tr>
    </table><br>
    <table width="100%">
        <tr>
            <td>
            </td>
        </tr>
    </table><br>
    
    <div style="background: #ffd9e8 url(https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/shopping-cart-shop-drop-trolly-128.png) no-repeat;width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 25px;float: left; margin-bottom: 15px;"></div>
    <h3>Your Product</h3>

    <table width="100%" style="border-collapse: collapse;border-bottom:1px solid #eee;">
        <tr>
            <td width="40%" class="column-header">Product</td>
            <td width="20%" class="column-header">Price</td>
            <td width="20%" class="column-header">Total</td>
        </tr>
        <tr>
            <td class="row">{{$product_name}}</td>
            <td class="row">{{$qty}} <span style="color:#777">X</span> {{$rate}}</td>
            <td class="row">{{$grandtotal - $tottax}}</td>
        </tr>
    </table><br>
    <table width="100%" style="background:#eee;padding:20px;">
        <tr>
            <td>
                <table width="300px" style="float:right">
                    <tr>
                        <td><strong>Sub-total:</strong></td>
                        <td style="text-align:right">{{$grandtotal - $tottax}}</td>
                    </tr>
                    <tr>
                        <td><strong>Tax</strong></td>
                        <td style="text-align:right">{{$tottax}}</td>
                    </tr>
                    <tr>
                        <td><strong>Grand total:</strong></td>
                        <td style="text-align:right">{{$grandtotal}}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table><br>

    <div class="alert">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
</div><!-- container -->