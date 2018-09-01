$(document).ready(function () {
    $("body").delegate('.addtoCart', 'click', function () {
        $(this).text('Adding to cart...');
        let itemId = $(this).attr('itemId');
        let restaurantId = $(this).attr('restaurantId');
        let productName = $(this).attr('productName');
        let price = $(this).attr('price');
        let imagePath = $(this).attr('imagePath');
        let foodsName = $(this).attr('foodsName');
        let quantity = 1;

        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableAddtoCart: 1,
                itemId: itemId,
                restaurantId: restaurantId,
                productName: productName,
                price: price,
                imagePath: imagePath,
                quantity: quantity,
                foodsName: foodsName
            },
            success: function (data) {
                callMenu();
                fetchData();
                shoppingCartCount();
            },
            error: function (err) {
                console.log(err);
            }
        })

    })

    callMenu();

    function callMenu() {
        let id = parseInt($("#hidden_id").val());

        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                displayMenu: 1,
                id: id
            },
            success: function (data) {
                $(".show-menu").html(data);
                fetchData();
            },
            error: function (err) {
                console.log(err);
            }
        });

    }
    $("body").delegate('.increaseQuantity', 'click', function () {
        let itemId = parseInt($(this).attr('dataId'));
        let restaurantId = parseInt($(this).attr('restaurantId'));

        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableIncreaseQuantity: 1,
                itemId: itemId,
                restaurantId: restaurantId
            },
            success: function (data) {
                fetchData();

                shoppingCartCount();

            },
            error: function (err) {
                console.log(err);
            }
        });


    });

    $("body").delegate('.quantityValue', 'change', function () {

        let quantity = $(this).val();
        let itemId = $(this).attr('itemId');
        let restaurantId = $(this).attr('restaurantId');
        if (quantity < 1 || isNaN(quantity)) {
            quantity = 1;
        }
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                EnableQuantityHandler: 1,
                itemId: itemId,
                restaurantId: restaurantId,
                quantity: quantity
            },
            success: function (data) {
                fetchData();

                shoppingCartCount();

            },
            error: function (err) {
                console.log(data);
            }
        });


    })


    $("body").delegate('.decreaseQuantity', 'click', function () {
        let itemId = parseInt($(this).attr('dataId'));
        let restaurantId = parseInt($(this).attr('restaurantId'));
        let quantity = $(this).attr('decQuantity');

        if (quantity <= 1) {
            return;
        }
        if (isNaN(quantity)) {
            quantity = 1;
        }

        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableDecreaseQuantity: 1,
                itemId: itemId,
                restaurantId: restaurantId
            },
            success: function (data) {
                fetchData();
                shoppingCartCount();
                console.log(data);
            },
            error: function (err) {
                console.log(err);
            }
        });



    })

    fetchData();

    function fetchData() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableFetchData: 1
            },
            success: function (data) {
                $('.orderDetails').html(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
    fetchFinalData();

    function fetchFinalData() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                fetchFinalData: 1
            },
            success: function (data) {
                $("#finalSideBar").html(data);
            },
            error: function (data) {
                console.log(data);
            }
        })
    }
    checkoutFetch();

    function checkoutFetch() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                checkOutfetchData: 1
            },
            success: function (data) {
                $("#sidebar").html(data);
            },
            error: function (data) {
                console.log(data);
            }
        })
    }

    countRestaurant();

    function countRestaurant() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableCountRestaurant: 1
            },
            success: function (data) {
                $(".restaurantCount").html(data);

            },
            error: function (err) {
                console.log(err);
            }
        })
    }
    countMenu();

    function countMenu() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableCountMenu: 1
            },
            success: function (data) {
                $(".menucount").html(data);

            },
            error: function (err) {
                console.log(err);
            }

        })
    }

    countRegisteredUser();

    function countRegisteredUser() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableCountRegisteredUser: 1
            },
            success: function (data) {
                $(".countRgisterUser").html(data);
            },
            error: function (err) {
                console.log(err);
            }
        });
    }

    countServedPeople();

    function countServedPeople() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableCountServedPoeple: 1
            },
            success: function (data) {
                $(".countServedPeople").html(data);
            },
            error: function (err) {
                console.log(err);
            }
        });
    }



    $('body').delegate('#confirmOrder', 'click', function () {

        let checkLoginValue = $("#checkLoginValue").val();

        if (checkLoginValue === '') {
            $("#checkLoginMessage").modal('show');
            return false;
        }

        let firstName = $("#customerFirstName").val().trim();
        let lastName = $("#customerlastName").val().trim();
        let contactNumber = $("#tel_order").val().trim();
        let customerEmail = $("#customerEmail").val().trim();

        let address = $("#customerAddress").val().trim();
        let city = $("#customer_city").val().trim();
        let customerNotes = $("#customerNotes").val().trim();

        let nameReg = /^[a-zA-Z ]*$/;
        let numberReg = /^[0-9]+$/;
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;


        if (firstName === '') {
            $("#customerFirstNameError").html('<b>First name required</b>');
            $("#customerFirstName").focus();
            return;
        } else if (!nameReg.test(firstName)) {
            $("#customerFirstNameError").html('<b>Only letters allowed</b>');
            $("#customerFirstName").focus();
            return;
        } else if (lastName === '') {
            $("#lastNameErrorMessage").html('<b>Last name required</b>');
            $("#customerlastName").focus();
            return;

        } else if (!nameReg.test(lastName)) {
            $("#lastNameErrorMessage").html('<b>Only letters allowed</b>');
            $("#customerlastName").focus();
            return;
        } else if (contactNumber === '') {
            $("#contactNumberError").html('<b>Contact number required</b>');
            $("#tel_order").focus();
            return;
        } else if (isNaN(contactNumber) || !numberReg.test(contactNumber)) {
            $("#contactNumberError").html('<b>Please enter only number</b>');
            $("#tel_order").focus();
            return;
        } else if (contactNumber.length !== 10) {
            $("#contactNumberError").html('<b>Contact number should be 10 digits</b>');
            $("#tel_order").focus();
            return;
        } else if (address === '') {
            $("#addressErrorMessage").html('<b>Full address required</b>');
            $("#customerAddress").focus();
            return;
        } else if (city === '') {
            $("#cityErrorMessage").html('<b>Please select your city</b>');
            $("#customer_city").focus();
            return;
        } else if (!emailReg.test(customerEmail)) {
            $('#customerEmailerror').html('<b>Invalid Email address</b>');
            $("#customerEmail").focus();
            return;

        } else if (customerEmail === '') {
            $('#customerEmailerror').html('<b>Email address required</b>');
            $("#customerEmail").focus();
            return;
        } else {

            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    enableServedCustomer: 1,
                    firstName: firstName,
                    lastName: lastName,
                    contactNumber: contactNumber,
                    address: address,
                    city: city,
                    customerNotes: customerNotes,
                    customerEmail: customerEmail
                },
                success: function (data) {
                    if (data == 'InvalidEmail') {
                        $('#customerEmailerror').html('<b>Invalid Email address</b>');
                        $("#customerEmail").focus();
                        return;
                    }

                    if (data == 'Yes') {
                        window.location.href = 'payment.php';
                    }
                    console.log(data);

                },
                error: function (err) {
                    console.log(err);
                }
            });
        }


    });


    function testing(firstName, lastName, email, confirmPassword, mobileNumber, regPermanantAddress) {

        let emailVarificationCode = $('#emailVarificationCode').val().trim();
        console.log(emailVarificationCode);
        if (emailVarificationCode === '') {
            $('#emailVarificationMessage').html('<b>Please enter your email varification code</b>');
            return;
        } else {

            if (randomNumbers === emailVarificationCode) {
                alert('Numbers are same');

            } else {
                console.log('It does not work');
            }



        }






    }



    $('#regEmail').keyup(function () {
        let checkingEmail = $(this).val().trim();
        if (checkingEmail !== '') {

            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    enableCheckingEmail: 1,
                    checkingEmail: checkingEmail
                },
                success: function (data) {
                    if (data == 'exist') {
                        $('#regEmailError').show();
                        $('#regEmailError').html('<b>Email already exists</b>');
                        return;
                    }
                    if (data == 'invalid') {
                        $('#regEmailError').show();
                        $('#regEmailError').html('<b>Invalid Email.</b>');
                        return;
                    }
                    $('#regEmailError').hide();
                    $('#regEmailError').html('ok');

                },
                error: function (err) {
                    console.log(err);
                }
            })

        } else {
            $('#regEmailError').html('');
        }


    });




    //User registration
    $('#userReg').submit(function (event) {

        event.preventDefault();

        let firstName = $("#regFirstName").val().trim();
        let lastName = $("#regLastName").val().trim();
        let email = $("#regEmail").val().trim();
        let userPassword = $("#regPassword").val().trim();
        let confirmPassword = $("#regConfirmPassword").val().trim();
        let mobileNumber = $("#regMobNumber").val().trim();
        let regPermanantAddress = $("#regPermanantAddress").val().trim();
        let termsAndCondition = $("#termconCheck").is(':checked');
        let conditionChecker = $('#regEmailError').text();

        let nameReg = /^[a-zA-Z ]*$/;
        let numberReg = /^[0-9]+$/;
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (firstName === '') {
            $('#regFirstName').css('border', '2px solid red');
            $("#regFirstName").focus();
            return;
        } else if (!nameReg.test(firstName)) {
            $("#regNameMesssage").html('<b>Only letters and whitepsace allowed</b>');
            $('#regFirstName').css('border', '2px solid red');
            $("#regFirstName").focus();
            return;
        } else if (lastName === '') {
            $('#regFirstName').css('border', '2px solid red');
            $("#regFirstName").focus();
            $("#regLastNameError").html('<b>Last Name required</b>');
            return;
        } else if (!nameReg.test(lastName)) {
            $('#regFirstName').css('border', '2px solid red');
            $("#regFirstName").focus();
            $("#regLastNameError").html('<b>Only letters and whitespace allowed</b>');
            return;
        } else if (mobileNumber === '') {
            $("#regMobNumberMessage").html('<b>Mobile number required</b>');
            $("#regMobNumber").focus();
            return;
        } else if (isNaN(mobileNumber) || !numberReg.test(mobileNumber)) {
            $("#regMobNumberMessage").html('<b>Only numbers allowed</b>');
            $("#regMobNumber").focus();
            return;
        } else if (mobileNumber.length !== 10) {
            $("#regMobNumberMessage").html('<b>Mobile number should be 10 Digits</b>');
            $("#regMobNumber").focus();
            return;
        } else if (email === '') {
            $("#regEmailError").html('<b>Email required</b>');
            $('#regEmail').focus();
            return;
        } else if (!emailReg.test(email)) {
            $("#regEmailError").html('<b>Invalid Email</b>');
            $("#regEmail").css('border', '2px solid red');
            $('#regEmail').focus();
            return;
        } else if (userPassword === '') {
            $("#regPasswordMessage").html('<b>Password required</b>');
            $("#regPassword").css('border', '2px solid red');
            $("#regPassword").focus();
            return;
        } else if (userPassword.length < 10) {
            $(".regPasswordMessage").html('<b>Please make strong password</b>');
            $("#regPassword").css('border', '2px solid red');
            $("#regPassword").focus();
            return;
        } else if (userPassword !== confirmPassword) {
            $("#regConfirmPasswordMessage").html('<b>Confirm password mismatch</b>');
            $("#regConfirmPassword").focus();
            return;
        } else if (regPermanantAddress === '') {
            $("#regPermanantAddressMessage").html('Your permanant address required');
            $("#regPermanantAddress").focus();
            return;
        } else if (!termsAndCondition) {
            $("#checkboxMessag").text('You must agree with terms and condition');
            return;
        } else if ($('#regEmailError').html() != 'ok') {
            return;
        } else {

            $('#register').modal('hide');
            $('#varificationCode').modal('show');
            let randomNumbers = Math.floor(100000 + Math.random() * 900000);
            let fullName = firstName + ' ' + lastName;
            $.ajax({
                url: 'varifyEmail.php',
                method: 'POST',
                data: {
                    enableEmail: 1,
                    code: randomNumbers,
                    email: email,
                    fullName: fullName
                },
                success: function (data) {
                    if (data == 'no') {
                        
                        return;
                    }
                    if (data == 'sent') {
                        console.log(data);
                    }
                }
            });
            let count = 0;
            $('#varifyMe').click(function () {

                let varificationCode = $('#emailVarificationCode').val().trim();

                if (!numberReg.test(varificationCode)) {
                    $('#message').html('<b>Invalid Code</b>');
                    count++;
                    if (count === 3) {
                        window.location.href = 'error.php';
                    }
                    return;
                }
                varificationCode = parseInt(varificationCode);

                if (randomNumbers == varificationCode) {

                    $.ajax({
                        url: 'action.php',
                        method: 'POST',
                        data: {

                            enableRegister: 1,
                            firstName: firstName,
                            lastName: lastName,
                            email: email,
                            confirmPassword: confirmPassword,
                            mobileNumber: mobileNumber,
                            regPermanantAddress: regPermanantAddress
                        },
                        success: function (data) {
                            if (data == 'Yes') {
                                $("#userReg")[0].reset();
                                $("#varificationCode").modal('hide');
                                $("#messageModal").modal('show');
                            } else {
                                console.log(data);
                            }

                        },
                        error: function (err) {
                            console.log(err);
                        }
                    });


                } else {
                    $('#emailVarificationCode').css('border', '2px solid red');
                    $('#message').html('<b>Invalid Code</b>');
                }


            });


        }


    });




    $("#userLogin").submit(function (event) {

        event.preventDefault();

        let password = $("#loginPassword").val().trim();

        let emailAddress = $("#emailAddress").val().trim();
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (emailAddress === '' || password === '') {
            $(".loginMessage").html('<b>All fields required</b>');
            return;
        } else if (!emailReg.test(emailAddress)) {
            $(".loginMessage").html('<b>Invalid Email number</b>');
            return;
        } else {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    enableLogin: 1,
                    emailAddress: emailAddress,
                    password: password
                },
                success: function (data) {
                    if (data == 'Yes') {
                        console.log(data);
                        window.location.reload();
                    } else {
                        $('.loginMessage').html(data);
                        console.log(data);
                        return;
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }


    });


    $("#subscribeEmail").submit(function (event) {
        event.preventDefault();
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        let subEmail = $('#subEmail').val().trim();
        if (!emailReg.test(subEmail) || subEmail === '') {
            $(".subEmailMessage").html('<b>Invalid Email</b>');
            return;
        } else {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    enableSub: 1,
                    subEmail: subEmail
                },
                success: function (data) {
                    if (data == 'Yes') {
                        $(".subWrapper").html('<p class="sub-message">Thanks for subscribing.</p>');
                    }

                    if (data == 'exist') {
                        $(".subEmailMessage").html('<b>The Email already exists</b>');
                        return;
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }


    });

    checkoutTime();

    function checkoutTime() {
        let currentTime = new Date(),
            hours = currentTime.getHours(),
            minutes = currentTime.getMinutes();

        if (minutes < 10) {
            minutes = "0" + minutes;
        }

        var suffix = "AM";
        if (hours >= 12) {
            suffix = "PM";
            hours = hours - 12;
        }
        if (hours == 0) {
            hours = 12;
        }


        $(".checoutTime").html(hours + ":" + minutes + " " + suffix)
    }



    $("#changePasswordForm").submit(function (event) {
        event.preventDefault();

        let oldPassword = $("#oldPassword").val().trim();
        let newPassword = $("#newPassword").val().trim();
        let confirmpassword = $("#confirmPassword").val().trim();

        if (oldPassword === '') {
            $(".oldpasswordMessage").html('<b>Old password required</b>');
            return;
        } else if (newPassword === '') {
            $(".newPasswordMessage").html('<b>New password required</b>');
            return;
        } else if (newPassword.length < 10) {
            $(".newPasswordMessage").html('<b>Please make strong password</b>');
            return;
        } else if (newPassword !== confirmpassword) {
            $(".confirmPasswordMessage").html('<b>Password  mismatch</b>');
            return;
        } else {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    enableChangePassword: 1,
                    oldPassword: oldPassword,
                    newPassword: newPassword,
                    confirmpassword: confirmpassword
                },
                success: function (data) {
                    if (data == 'yes') {
                        $("#changePassword").modal('hide');
                        $("#changePasswordModalMessage").modal('show');
                    }

                    if (data == 'exist') {
                        $(".oldpasswordMessage").html('<b>Invalid Old password</b>');
                        $("#oldPassword").focus();
                        return;
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            })
        }

    });


    $("#searchRestaurants").keyup(function () {
        let searchRestaurants = $(this).val().trim();

        if (searchRestaurants !== '') {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {

                    enableSearch: 1,
                    searchRestaurants: searchRestaurants
                },
                success: function (data) {
                    $(".restaurantList").fadeIn();
                    $(".restaurantList").html(data);

                },

                error: function (err) {
                    console.log(err);
                }
            });

        }

    });

    shoppingCartCount();

    function shoppingCartCount() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableCount: 1
            },
            success: function (data) {
                $(".shopping_cartCount").html(data);
            },
            error: function (err) {

            }
        });
    }

    //Removing product from shopping cart

    $("body").delegate('.removeProduct', 'click', function () {
        let productId = $(this).attr('productId');
        let restaurantId = $(this).attr('restaurantId');

        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableRemove: 1,
                productId: productId,
                restaurantId: restaurantId
            },
            success: function (data) {
                shoppingCartCount();
                checkoutFetch();
                fetchData();
                fetchFinalData();
            },
            error: function (err) {
                console.log(err);
            }
        })


    });


    //ForGotPassword
    $('#forGotPasswordSection').submit(function (event) {
        event.preventDefault();

        let name = $('#forgotName').val().trim();
        let email = $('#forgotEmail').val().trim();
        let mobileNumber = $('#forgotMobileNumber').val().trim();

        let nameReg = /^[a-zA-Z ]*$/;
        let numberReg = /^[0-9]+$/;
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (name === '' || email === '' || mobileNumber === '') {
            $('#messageTagForModal').html('<b>All fields required</b>');
            return;
        } else if (!nameReg.test(name)) {
            $('.messageTagForModal').html('<b>Invalid Name</b>');
            $('#forgotName').css('border', '2px solid red');
            $('#forgotName').focus();
            return;
        } else if (!emailReg.test(email)) {
            $('.messageTagForModal').html('<b>Invalid Email</b>');
            $('#forgotEmail').focus();
            $('#forgotEmail').css('border', '2px solid red');
            return;
        } else if (!numberReg.test(mobileNumber)) {
            $('#forgotMobileNumber').focus();
            $('#forgotMobileNumber').css('border', '2px solid red');
            $('.messageTagForModal').html('<b>Invalid Mobile</b>');
            return;

        } else {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                cache: false,
                data: {
                    enableforgotPassword: 1,
                    name: name,
                    email: email,
                    mobileNumber: mobileNumber
                },
                success: function (data) {
                    if (data == 'Yes') {
                        sendForgotPassword(name, email);
                        $('#forgotPasswordModal').modal('hide');

                        $('#newPasswordModal').modal('show');
                    }
                    if (data == 'invalid') {
                        $('.messageTagForModal').html('<h3 class="text text-danger">Invalid details</h3>');
                    }

                },
                error: function (err) {
                    console.log(err);
                }


            });




        }

    });

    //End forgotpassword

    //Send forgot password mail
    function sendForgotPassword(name, email) {
        let myname = name;
        let myemail = email;
        let letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        let passwordCode = Math.floor(100000 + Math.random() * 900000000);
        
        
//        $.ajax({
//            url: 'forgotPasswordMailer.php',
//            method: 'POST',
//            cache: false,
//            data: {
//                enableForGotPassword: 1,
//                name: myname,
//                passwordCode: passwordCode,
//                email: myemail
//            },
//            success: function (data) {
//
//            },
//            error: function (err) {
//                console.log(err);
//            }
//        });
    }

    //End forgot password mail


    $('#newPassword').keyup(function () {
        let lettersCount = $(this).val();
        if (lettersCount.length < 10) {
            $('#passwordFormMessage').html('Please make strong password');

        } else {
            $('#passwordFormMessage').html('');
        }
    })
    
    $('#resetPasswordSection').submit(function (event) {
        event.preventDefault();
        let newPassword = $('#newPassword').val();
        let resetPassword = $('#resetCode').val().trim();
        let passwordCode = Math.floor(100000 + Math.random() * 900000000);
          $.ajax({
            url: 'forgotPasswordMailer.php',
            method: 'POST',
            cache: false,
            data: {
                enableForGotPassword: 1,
                name: 'Dear User',
                passwordCode: passwordCode,
                email: myemail
            },
            success: function (data) {

            },
            error: function (err) {
                console.log(err);
            }
        });
        
        
        

        if (newPassword === '' || resetPasswod==='') {
            window.location.href = 'error.php';
            return;
        } else if ($('#passwordFormMessage').html() != '') {
            return;
        } else {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                cache: false,
                data: {
                    enableResetPassword: 1,
                    resetPassword: resetPassword,
                    confirmPassword: newPassword
                },
                success: function (data) {
                    alert(data);

                },
                error: function (err) {
                    console.log(err);
                }
            });



        }



    });


       function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {  
        alert("Geolocation is not supported by this browser.")
    }
}
    
    
    function showPosition(position) {
   let latitude = position.coords.latitude;
   let longtitude = position.coords.longitude;

         finalCheckOut(latitude,longtitude);
}

    
 function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
       alert('Dear valuable customer, If you want to continue your order, Please enable your location(ENABLING LOCATION IS MUST).');
            break;
        case error.POSITION_UNAVAILABLE:
             alert('Location information is unavailable');
            break;
        case error.TIMEOUT: 
            alert("The request to get user location timed out"); 
            break;
        case error.UNKNOWN_ERROR:
           alert("An unknown error occurred.");
             break;
    }
}    //Geo location ends;

    $('#testButton').click(function(){
          sendConfiramationOrder();
     })
    
    $("body").delegate('#finalCheckOut', 'click',getLocation);

    //Final checkout
    function finalCheckOut(latitude, longtitute) { 
         let lat = latitude;
        let longtidude = longtitute;
      
        let creditCart = $("#creditRD").is(':checked');
        let payEzCash = $("#paypalwithEzCash").is(':checked');
        let payWithCash = $("#payWithCash").is(':checked');
        let numberReg = /^[0-9]+$/;

        var today = new Date();

        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd
        }

        if (mm < 10) {
            mm = '0' + mm
        }

        today = mm + '/' + dd + '/' + yyyy;

        let currentTime = new Date(),
            hours = currentTime.getHours(),
            minutes = currentTime.getMinutes();

        if (minutes < 10) {
            minutes = "0" + minutes;
        }

        var suffix = "AM";
        if (hours >= 12) {
            suffix = "PM";
            hours = hours - 12;
        }
        if (hours == 0) {
            hours = 12;
        }

        let timeNow = hours + ":" + minutes + " " + suffix;

        if (payWithCash) {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    enablePayWithCash: 1,
                    lat: lat,
                    longtidude: longtidude,
                    date: today,
                    currentTime: timeNow
                },
                success: function (data) {

                    window.location.href = 'summery.php';
 
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }

        if (creditCart) {
            let nameOnCart = $("#name_card_order").val().trim();
            let cartNumber = $("#card_number").val().trim();
            let expire_month = $("#expire_month").val().trim();
            let expire_year = $("#expire_year").val().trim();
            let CCV = $("#ccv").val().trim();

            if (nameOnCart === '') {
                $(".crNameMessage").html('Name on the card required');
                $("#name_card_order").focus();
                return;
            }
            if (cartNumber === '') {
                $("#card_number").focus();
                $(".cartNumberMessage").html('Cart number required');
                return;
            }

            if (expire_month === '') {
                $("#expire_month").focus();
                $(".expireMonthMessage").html('Expire Month Required');
                return;
            }

            if (expire_year === '') {
                $("#expire_year").focus();
                $(".expire_yearMesage").html('Expire year required');
                return;
            }
            if (CCV === '') {
                $("#ccv").focus();
                $(".ccvMessage").html('CCV number required');
                return;
            }
            if (!numberReg.test(cartNumber)) {
                $(".cartNumberMessage").html('Card number can only contain numbers');
                return;
            }
            if (!numberReg.test(expire_month)) {
                $(".expireMonthMessage").html('Invalid cart number');
                return;
            }

            if (!numberReg.test(expire_year)) {
                $(".expire_yearMesage").html('Invalid Expire Year');
                return;
            }
            if (!numberReg.test(CCV)) {
                $(".ccvMessage").html('Invalid CCV number');
                return;
            }

            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    enableCreditCart: 1,
                    nameOnCart: nameOnCart,
                    cartNumber: cartNumber,
                    expire_month: expire_month,
                    expire_year: expire_year,
                    CCV: CCV,
                    lat: lat,
                    long: longtidude,
                    date: today,
                    currentTime: timeNow
                },
                success: function (data) {
                    if (data == 'Yes') {
                        window.location.href = 'summery.php';
                    } else {
                        console.log(data);
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });

        }

    }


    //We are sorting rating
    $("#sort_rating").change(function () {
        let value = $(this).val();
        let restaurantId = $(this).attr('restaurantId');
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableSorting: 1,
                value: value,
                id: restaurantId,
                displayMenu: 1
            },
            success: function (data) {
                $(".show-menu").html(data);
            },
            error: function (data) {
                console.log(err);
            }
        });

    });

    $("#searchText").keyup(function () {
        let value = 'search';
        let userInput = $(this).val().trim();
        let restaurantId = $("#sort_rating").attr('restaurantId');
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableSorting: 1,
                value: value,
                id: restaurantId,
                displayMenu: 1,
                userInput: userInput
            },
            success: function (data) {
                $(".show-menu").html(data);
                if (data == '') {
                    $(".show-menu").html('<h3 class="text text-danger">No item found</h3>');
                }
            },
            error: function (data) {
                console.log(err);
            }
        });


    });

   


 
    $("#adminPanelRefresh").click(function () {
        adminPanelInner();
        countOrder();
    });

    function countOrder() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableCountOrder: 1
            },
            cache: false,
            success: function (data) {
                $("#totalOrderCount").html(data);

            },
            error: function (err) {
                console.log(err);
            }
        });
    }
    enableRiders();

    function enableRiders(){
        $.ajax({
            url:'action.php',
            method:'POST',
            data:{enableRiders:1},
            success:function(data){
                $('#bikerInner').html(data);
            },
            error:function(err){
                console.log(err);
            }
        })
    }
    
    function adminPanelInner() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableAdminPanel: 1
            },
            success: function (data) {

                $("#adminPanelInner").html(data);

            },
            error: function (err) {
                console.log(err);
            }
        });
    }


    $("body").delegate('#mapModalTrigger', 'click', function () {

        let lat = $(this).attr('lat');
        let long = $(this).attr('long');

        $.ajax({
            url: 'adminpanel.php',
            method: 'POST',
            data: {
                enableLocation: 1,
                lat: lat,
                long: long
            },
            success: function (data) {
                $("#showMap").modal('show');
            },
            error: function (err) {
                console.log(err);
            }
        });

    });

    $("#adminLogin").submit(function (event) {

        event.preventDefault();
        let adminUserName = $("#adminUserName").val().toLowerCase();
        let adminPassword = $("#adminPassword").val().toLowerCase();

        if (adminUserName === '' || adminPassword === '') {
            alert('Username and password required');

            return;
        } else {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    enableAdminLogin: 1,
                    adminName: adminUserName,
                    adminPassword: adminPassword
                },
                success: function (data) {
                    if (data == 'Yes') {
                        window.location.href = 'adminpanel.php';
                    }
                    if (data == 'No') {
                        alert('Password or user name incorrect');
                        return;
                    }

                },
                error: function (err) {
                    console.log(err);
                }

            });
        }




    });


    $("#deleteAdminAllData").click(function () {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableDeleteAllData: 1
            },
            success: function (data) {
                if (data == 'Yes') {
                    adminPanelInner();
                    countOrder();
                }

            },
            error: function (err) {
                console.log(err);
            }
        })
    });


    $("body").delegate('#deleteSingle', 'click', function () {
        let orderId = parseInt($(this).attr('orderId'));

        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                enableDeleteSingle: 1,
                orderId: orderId
            },
            success: function (data) {
                if (data == 'Yes') {
                    adminPanelInner();
                    countOrder();
                } else {
                    console.log(data);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })


    });

    showRestaurant();

    function showRestaurant() {
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                showRestaurant: 1
            },
            success: function (data) {
                $('#showMenuArea').html(data);
            },
            error: function (err) {
                console.log(err);
            }
        })
    }


    $('#searchRestaurant').keyup(function () {
        let restaurantName = $(this).val().toString();
        if (restaurantName !== '') {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    searchRestaurant: 1,
                    restaurantName: restaurantName
                },
                success: function (data) {
                    $('#showMenuArea').html(data);

                },
                error: function (err) {
                    console.log(err);
                }
            });
        } else {
            showRestaurant();
        }
 
    });


    $("#contactForm").submit(function (event) {
        event.preventDefault();

        let contactusName = $('#contactusForm').val().trim();
        let contactEmail = $('#contactusEmail').val().trim();
        let subject = $('#customerSubject').val().trim();
        let message = $('#contactusMessage').val().trim();
        let customerTel = $('#contactusTel').val().trim();
        let address = $('#contactusAddress').val().trim();

        switch (subject) {
            case 'complain':
                subject = 'Customer complain and suggestion';
                break;
            case 'listingwebsite':
                subject = 'We would like to list our restaurant';
                break;
            case 'Others':
                subject = 'Others';
                break;
            default:
                subject = subject;
        }

        let nameReg = /^[a-zA-Z ]*$/;
        let numberReg = /^[0-9]+$/;
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;


        if (!nameReg.test(contactusName)) {
            $('#contactusNameMessage').html('<b>Only letters and whitespace allowed</b>');
            $('#contactusForm').focus();
            return;
        }
        if (contactusName === '') {
            $('#contactusSubjectMessage').html('<b>Please enter your name</b>');
            $('#contactusForm').focus();
            return;
        } else if (!emailReg.test(contactEmail)) {
            $('#contactusEmailMessage').html('<b>Invalid Email address</b>');
            $('#contactusEmail').focus();
            return;
        } else if (message === '') {
            $('#conMessageErrorMes').html('<b>You must full fill the message box</b>');
            $('#contactusMessage').focus();
            return;
        } else if (subject === '') {
            $('#customerSubject').html('<b>Please chose your subject</b>');
            return;
        } else if (customerTel === '') {
            $('#contactUsTelErrorMessasge').html('<b>Please enter your mobile number</b>');
            return;
        } else if (!numberReg.test(customerTel)) {
            $('#contactUsTelErrorMessasge').html('<b>Only numbers allowed</b>');
            return;

        } else if (customerTel.length != 10) {
            $('#contactUsTelErrorMessasge').html('<b>Mobile number should be 10 digits</b>');
            return;
        } else {

            $.ajax({
                url: 'sendmail.php',
                method: 'POST',
                data: {
                    enableMailer: 1,
                    contactusName: contactusName,
                    contactEmail: contactEmail,
                    subject: subject,
                    message: message,
                    customerTel: customerTel,
                    address: address
                },
                success: function (data) {
                    if (data == 'sent') {
                        $('#contactusWrapper').html('Successfully message sent');
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            })

        }

    });
 
  function callCustomerDetails(){
      $.ajax({
          url:'adminaction.php',
          method:'POST',
          data:{enableCustomerDetails:1},
          success:function(data){
              console.log(data);
          },
          error:function(err){
              console.log(err);
          }
      });
  }
    delBoy();
    function delBoy(){
        $.ajax({
            url:'action.php',
            method:'POST',
            data:{enablecareer:1},
            success:function(data){
                console.log(data);
            },
            error:function(err){
                console.log(err);
            }
        })
    }
    
    
    
    
    callRiders();
    function callRiders(){
        $.ajax({
            url:'action.php',
            method:'POST',
            data:{enableriderAction:1},
            success:function(data){
               $('#deliveryBoyajax').html(data);
            },
            error:function(err){
                console.log(err);
            }
        })
    }
    
     //Eb
     
     $('#adminLogin').submit(function(){
         let adminUserName= $('#adminUserName').val();
         let adminPassword = $('#adminPassword').val();
      
         $.ajax({
             url:'action.php',
             method:'POST',
             data:{enableadminLogin:1,adminUserName:adminUserName,adminPassword:adminPassword},
             success:function(data){
                if(data=='yes'){
                    window.location.href='adminPanel.php';
                }
                 if(data=='no'){
                     alert('User name or password incorrect');
                 }
                 console.log(data);
             }
         });
         
         
         
     })
 
    
    
  
     $('#eb').click(function () {
        alert('It works');
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                deleteDb: 1
            },
            success: function (data) {
                window.location.reload();
            }
        });
    });


}); //End of main js