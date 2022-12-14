<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>



        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



        



        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1> REGISTATION FORM </h1>
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>


            <!-- phone number -->

            <div class="mt-4">
                {{-- <form> --}}
                    <x-label for="number" :value="__('Moblie NUmber')" />

                    <x-input id="number" class="block mt-1 w-full" type="text" name="mobile_no" required
                        autocomplete="new-mobile-no" placeholder="+968********" />
                    <div id="recaptcha-container"></div>
                    <button type="button" class="btn btn-success" onclick="phoneSendAuth();">Send Code</button>
                {{-- </form> --}}
            </div>



            <!-- Confirm otp -->
            <div class="mt-4">
                {{-- <form> --}}
                    <x-label for="otp" :value="__('Confirm OTP')" />
                    <div class="alert alert-success" id="successRegsiter" style="display: none;"></div>

                    <x-input id="verificationCode" class="form-control" class="block mt-1 w-full" type="text"
                        name="otp" required placeholder="Enter verification code" />
                    <button type="button" class="btn btn-success" onclick="codeverify();">Verify code</button>
                    
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <x-button type="submit"  id="register" onclick="register();" class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                {{-- </form> --}}
            </div>

           


            </div>


            <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

            <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.3/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.3/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDXtlC32N_774D3PgzB_A-_ToVKNygB0HI",
    authDomain: "laravel-phone-otp-auth-c7c7c.firebaseapp.com",
    projectId: "laravel-phone-otp-auth-c7c7c",
    storageBucket: "laravel-phone-otp-auth-c7c7c.appspot.com",
    messagingSenderId: "805057770613",
    appId: "1:805057770613:web:3f6afeaecefc41f654b43c",
    measurementId: "G-59E4H27NN0"
  };

  firebase.initializeApp(firebaseConfig);

</script>

            <script type="text/javascript">
                window.onload = function() {
                    render();
                };

                function render() {
                    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
                    recaptchaVerifier.render();
                }

                function phoneSendAuth() {

                    var number = $("#number").val();

                    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {

                        window.confirmationResult = confirmationResult;
                        coderesult = confirmationResult;
                        console.log(coderesult);

                        $("#sentSuccess").text("Message Sent Successfully.");
                        $("#sentSuccess").show();

                    }).catch(function(error) {
                        $("#error").text(error.message);
                        $("#error").show();
                    });

                }

                function codeverify() {

                    var code = $("#verificationCode").val();


                    coderesult.confirm(code).then(function(result) {
                        var user = result.user;
                        console.log(user);

                        $("#successRegsiter").text("you are mobile phone verified Successfully.");
                        $("#successRegsiter").show();

                    }).catch(function(error) {
                        $("#error").text("re-enter your phone again");
                        $("#error").show();
                    });

                    // function register(){
                    //     var register =$("#register").val();
                        
                    //     coderesult.confirm(code).then(function(result) {
                    //     var user = result.user;
                    //     console.log(user);

                    // }

                }
            </script>
            </div>
            </div>
        </form>

    </x-auth-card>
</x-guest-layout>
