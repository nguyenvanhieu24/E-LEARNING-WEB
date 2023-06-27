<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/PersonalDetails.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Responsive Regisration Form </title>
    <script type="text/javascript">
    function Learning(){
        location.href="Learning.php";
    }
    function goBack() {
        window.history.back()
    }
</script>
<script src="https://kit.fontawesome.com/36eb573868.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition site-body skin-sku-light layout-top-nav modal-open" data-new-gr-c-s-check-loaded="14.1057.0" data-gr-ext-installed="" style="padding-right: 8px;">
    <div class="container">
        <header><i class="fa-solid fa-rotate-left" onclick="goBack()" style="color: #0cd1e8; font-size: 25px;"></i><a style="font-family:codelearn-font;" >BACK TO PAGE</a></header>

        <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/mbjwqobl"  method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" id="full-name" placeholder="Enter your name" required="">
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="birth date" id="birth date" placeholder="Enter birth date" required="">
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="_replyto" id="email-address" placeholder="Enter Email@domain.tld" required="">
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile number" id="mobile number" placeholder="Enter mobile number" required="">
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" name="ccupation" id="ccupation" placeholder="Enter your ccupation" required="">
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <input type="text" name="ID type" id="ID type" placeholder="Enter ID type" required="">
                        </div>

                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" name="ID number" id="ID number" placeholder="Enter ID number" required="">
                        </div>

                        <div class="input-field">
                            <label>Issued Authority</label>
                            <input type="text" name="issued authority" id="issued authority" placeholder="Enter issued authority" required="">
                        </div>

                        <div class="input-field">
                            <label>Issued State</label>
                            <input type="text" name="issued state" id="issued state" placeholder="Enter issued state" required="">
                        </div>

                        <div class="input-field">
                            <label>Issued Date</label>
                            <input type="date" name="issued date" id="issued date" placeholder="Enter your issued date" required="">
                        </div>

                        <div class="input-field">
                            <label>Expiry Date</label>
                            <input type="date" name="expiry date" id="expiry date" placeholder="Enter expiry date" required="">
                        </div>
                    </div>
                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator" style="margin-top:2px; font-size: 15px; font-weight: 600;"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <input type="text" name="Permanent or Temporary" id="Permanent or Temporary" placeholder="Permanent or Temporary" required="">
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nationality" id="nationality" placeholder="Enter nationality" required="">
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" name="state" id="state" placeholder="Enter your state" required="">
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" name="district" id="district"  placeholder="Enter your district" required="">
                        </div>

                        <div class="input-field">
                            <label>Block Number</label>
                            <input type="number" name="block number" id="block number" placeholder="Enter block number" required="">
                        </div>

                        <div class="input-field">
                            <label>Ward Number</label>
                            <input type="number" name="ward number" id="ward number" placeholder="Enter ward number" required="">
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="father name" id="father name" placeholder="Enter father name" required="">
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" name="mother name" id="mother name" placeholder="Enter mother name" required="">
                        </div>

                        <div class="input-field">
                            <label>Grandfather</label>
                            <input type="text" name="grandfther name" id="grandfther name" placeholder="Enter grandfther name" required="">
                        </div>

                        <div class="input-field">
                            <label>Spouse Name</label>
                            <input type="text" name="spouse name" id="spouse name" placeholder="Enter spouse name" required="">
                        </div>

                        <div class="input-field">
                            <label>Father in Law</label>
                            <input type="text" name="Father in law name" id="Father in law name" placeholder="Father in law name" required="">
                        </div>

                        <div class="input-field">
                            <label>Mother in Law</label>
                            <input type="text" name="Mother in law name" id="Mother in law name" placeholder="Mother in law name" required="">
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator" style="margin-top:-1.9px;font-size: 15px; font-weight: 600;"></i>
                            <span class="btnText">Back</span>
                        </div>
                        <button class="sumbit">
                            <span class="btnText" type="Submit" value="Submit">Submit</span>
                            <i class="uil uil-navigator" style="margin-top:2px;font-size: 15px; font-weight: 600;"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="js/PersonalDetails.js"></script>
</body>
</html>