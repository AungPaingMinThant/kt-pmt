<style type="text/css">
    .accept_btn {
        width: 35%;
        background-color: #ae071d !important;
        color: #fff !important;
        font-weight: 300;
        padding: 15px !important;
        border: 1px solid #ae071d !important;
        margin-bottom: 10px;
    }
    .accept_btn:hover {
        background-color: #fff !important;
        color: #ae071d !important;
    }
    .cookie-action-col {
        display: table;
        text-align: right;
    }
    @media only screen and (max-width: 576px){
        .accept_btn {
            margin-top: 20px;
            width: 80%;
        }
        .cookie-action-col {
            text-align: center;
            padding-top: 30px;
        }
    }
</style>

<div class="js-cookie-consent cookie-consent cookie-consent-div" style="position: relative;">
    <div style="background-color: #fff;padding: 50px 0px !important;position: fixed;bottom: 0;width: 100%;box-shadow: 0px -5px 20px 5px rgb(110 109 109 / 20%);">
        <div class="container">
            <div class="row" style="width: 100%;">
                <div class="col-md-6">
                    <p class="cookie-consent__message mb-30">
                        Please click "Accept all cookies" to continue to enjoy our website with all cookies or click "Manage Cookies Settings" to manage your cookie preferences.
                    </p>
                    <p class="cookie-consent__message mb-0">
                        By clicking “Accept All Cookies”, you agree to the storing of cookies on your device to enhance site navigation, analyze site usage, and assist in our marketing efforts. If you would like to know more take a look at our <a class="text-decoration-underline" href="{{ url('/privacy-notice-cookie-policy') }}" target="_blank">Privacy Notice and Cookies </a>
                    </p>
                </div>
                <div class="col-md-6 cookie-action-col">
                    <div class="row" style="display: table-cell;vertical-align: middle;">
                        <a class="text-decoration-underline" href="{{ url('/privacy-notice-cookie-policy#cookie-policy-manage') }}" style="width: 40%">Manage Cookies Settings</a>
                        <button class="btn accept_btn js-cookie-consent-agree cookie-consent__agree">
                            {{ trans('cookieConsent::texts.agree') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(".accept_btn").click(function() {
        $(".cookie-consent-div").css('display','none');
    });
</script>