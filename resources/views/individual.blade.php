<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/download.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="app-url" content="">

    <title></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    <style>
        .tab {
            display: none;
        }

        .custom-control-label::before,
        .custom-control-label::after {
            top: .8rem;
            width: 1.25rem;
            height: 1.25rem;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #185770;
        }

        input.invalid {
            border-color: #fc0808;
        }

        /* select.invalid {
            background-color: #ffdddd;
        } */
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mt-5">
                                <div class="card-body">
                                    <div class="row mt-5">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">
                                            <form action="" id="regForm">

                                                <!-- {{-- Background Characteristics --}} -->
                                                <div class="row new tab mb-3">
                                                    <p class="text-center h3"> Investment Details </p>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Account
                                                                Number</label>
                                                            <input type="number" min="17" name="accountNumber"
                                                                id="account-number" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">

                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input name="itf" value="itf" type="checkbox"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        ITF
                                                                        (In Trust
                                                                        For) minors
                                                                        (children under 18 years)
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3 pl-3">
                                                        <label class="font-weight-bold ">Name(s)</label>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col">
                                                            <input name="itfName1" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col">
                                                            <input name="itfName2" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col">
                                                            <input name="itfName3" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col">
                                                            <input name="itfName4" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <hr>

                                                    <div class="row mt-5 ">
                                                        <legend class="pl-2 pt-1">Category Of Investment</legend>
                                                    </div>

                                                    <div class="row mt-4 pl-3">

                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="categoryInvestment"
                                                                        value="individualAccount"
                                                                        class="custom-control-input">
                                                                    <span
                                                                        class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                        INDIVIDUAL ACCOUNT
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="categoryInvestment"
                                                                        value="jointAccount"
                                                                        class="custom-control-input">
                                                                    <span
                                                                        class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                        JOINT ACCOUNT
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="categoryInvestment"
                                                                        value="itfAccount" class="custom-control-input">
                                                                    <span
                                                                        class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                        ITF ACCOUNT
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2 pl-3">
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="categoryInvestment"
                                                                        value="investcorpTreasurySecuritiesFund"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2 ">
                                                                        InvestCorp Treasury Securities
                                                                        Fund
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="categoryInvestment"
                                                                        value="investcorpMidtierFund"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2 ">
                                                                        InvestCorp Mid-Tier Fund
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="categoryInvestment"
                                                                        value="investcorpPrivateWealthSuite"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2 ">
                                                                        InvestCorp Private Wealth
                                                                        Suite
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2 pl-3">
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="categoryInvestment"
                                                                        value="investcorpMoneyMarketFund"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2 ">
                                                                        InvestCorp Money Market
                                                                        Fund
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="categoryInvestment"
                                                                        value="investcorpActiveEquityFund"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2 ">
                                                                        InvestCorp Active Equity
                                                                        Fund
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="categoryInvestment"
                                                                        value="other"
                                                                        id="investcorpMoneyMarketFundOther"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2 ">
                                                                        OTHER
                                                                        (PLEASE SPECIFY)
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="row mt-1">
                                                        <div class="col">
                                                            <input type="text" name="categoryInvestment"
                                                                class="form-control " placeholder="If other specify"
                                                                id="">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <hr>


                                                    <div class="row mt-5 ">
                                                        <legend class="pl-2 pt-1">Client Investment Profile</legend>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Investment
                                                                Purpose</label>
                                                            <input name="investmentPurpose" id="" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 pl-3">
                                                        <label class="font-weight-bold  mr-2 ">Risk
                                                            Tolerance</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="riskTolerance"
                                                                        value="high" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        High
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="riskTolerance"
                                                                        value="medium" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Medium
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="riskTolerance"
                                                                        value="low" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Low
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="row mt-4 pl-3">
                                                        <label class=" font-weight-bold  mr-2 ">Investment
                                                            Knowledge: </label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="investmentKnowledge"
                                                                        value="high" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        High
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="investmentKnowledge"
                                                                        value="medium" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Medium
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="investmentKnowledge"
                                                                        value="low" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Low
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="row mt-4 pl-3">
                                                        <label class=" font-weight-bold  mr-2">Investment
                                                            Horizon: </label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="investmentHorizon"
                                                                        value="st1" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Short Term Up to 1 year
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="investmentHorizon"
                                                                        value="mt" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Medium Term 1-3 years
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="investmentHorizon"
                                                                        value="lt" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Long Term more than 3
                                                                        years
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <br>
                                                </div>


                                                <!-- First Applicant -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> First Applicant </p>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Title</label>
                                                            <select name="sig1Title" class="form-control" id="">
                                                                <option value="">--Select--</option>
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                                <option value="Ms">Ms</option>
                                                                <option value="Dr">Dr</option>
                                                                <option value="Prof">Prof</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">TIN</label>
                                                            <input type="text" min="12" max="12" name="sig1Tin"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Surname</label>
                                                            <input type="text" name="sig1Surname" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">First Name & Other
                                                                Names</label>
                                                            <input type="text" name="sig1Name" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Birth</label>
                                                            <input type="date" name="sig1Dob" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Maiden Name</label>
                                                            <input type="text" name="sig1MaidenName"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Birth</label>
                                                            <input type="text" name="sig1Pob" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Marital Status</label>
                                                            <select name="sig1MaritalStatus" class="form-control" id="">
                                                                <option value="">--Select--</option>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                <option value="divorced">Divorced</option>
                                                                <option value="widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- {{-- gender --}} -->
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold " class="mr-2"
                                                                for="">Gender</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="radio" name="sig1Gender" value="M">
                                                            <label class="">Male</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="radio" name="sig1Gender" value="F">
                                                            <label class="" for="">Female</label>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Name Of Spouse If
                                                                Married</label>
                                                            <input type="text" name="sig1Spouse" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Mothers Maiden Name</label>
                                                            <input type="text" name="sig1MotherMaidenName"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 pl-3">
                                                        <label class=" font-weight-bold  mr-2 ">Residential
                                                            Status</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1ResidentialStatus"
                                                                        value="gh" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Resident Ghanaian
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1ResidentialStatus"
                                                                        value="rf" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Resident Foreigner
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="sig1ResidentialStatus"
                                                                    value="nr" class="custom-control-input">
                                                                <span class="custom-control-label pt-3 pl-2">
                                                                    Non-Resident Ghanaian
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <hr>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country of Origin</label>
                                                            <input type="text" name="sig1CountryOfOrigin"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country of
                                                                Residence</label>
                                                            <input type="text" name="sig1CountryOfResidence"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="mt-5">
                                                        <em class="text-danger mt-3">If country of origin is not Ghana,
                                                            please provide the following :</em>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residence Permit
                                                                Number</label>
                                                            <input type="number" min="12" max="12"
                                                                placeholder="Residence permit number must be 12 characters"
                                                                name="sig1ResidencePermitNumber" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place of Issue</label>
                                                            <input type="text" name="sig1PlaceOfIssue"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Permit Issue Date</label>
                                                            <input type="date" name="sig1PermitIssueDate"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Permit Expiry Date</label>
                                                            <input type="date" name="sig1PermitExpiryDate"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Occupation</label>
                                                            <input type="text" name="sig1Occupation"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Profession</label>
                                                            <input type="text" name="sig1Profession"
                                                                class="form-control ">

                                                            <input
                                                                placeholder="Input Professional Licence Number (If Applicable)"
                                                                type="text" name="sig1Applicable" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residential Address</label>
                                                            <input type="text" name="sig1ResidentialAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Nearest Landmark</label>
                                                            <input type="text" name="sig1NearestLandmark"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Digital Address (GhanaPost
                                                                GPS)</label>
                                                            <input type="text" name="sig1GPS" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">City/Town</label>
                                                            <input type="text" name="sig1Town" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Email Address</label>
                                                            <input type="text" name="sig1Email" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Postal Address</label>
                                                            <input type="text" name="sig1Post" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Mobile Number 1</label>
                                                            <input type="text" min="10" name="sig1Phone1"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Mobile Number 2</label>
                                                            <input type="text" min="10" name="sig1Phone2"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Type Of ID</label>
                                                            <input type="number" name="sig1IdType" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">ID Number</label>
                                                            <input type="text" name="sig1ID" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Issue</label>
                                                            <input type="text" name="sig1PlaceOfIssue"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Issue</label>
                                                            <input type="date" name="sig1DateOfIssue"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Expiration</label>
                                                            <input type="date" name="sig1DateExpiry"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="mt-4">
                                                        <legend>Emergency Contact</legend>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Name</label>
                                                            <input type="text" name="sig1ContactName"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Relationship to
                                                                client</label>
                                                            <input type="text" name="sig1RelationToClient"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Number</label>
                                                            <input type="number" name="sig1ContactNumber"
                                                                class="form-control ">
                                                        </div>
                                                    </div>


                                                    <div class="row mt-4 pl-3">
                                                        <label class="pt-3 font-weight-bold  mr-2 mt-1">
                                                            Status</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1Status"
                                                                        value="employed" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Employed
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1Status"
                                                                        value="selfEmp" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Self-employed
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1Status"
                                                                        value="unemployed" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Unemployed
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1Status"
                                                                        value="retired" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Retired
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1Status"
                                                                        value="student" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Student
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <hr>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Total Years of
                                                                Employment</label>
                                                            <input type="number" name="sig1TotalYearsOfEmployment"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Years of Current
                                                                Employment</label>
                                                            <input type="number" name="sig1YearsOfCurrentEmployment"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Years of Previous
                                                                Employment</label>
                                                            <input type="number" name="sig1YearsOfPreviousEmployment"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 pl-3">
                                                        <label class=" font-weight-bold  mr-2 ">
                                                            Total Monthly
                                                            Income:</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1TotalMonthlyIncome"
                                                                        value="1000" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Below 1,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1TotalMonthlyIncome"
                                                                        value="1001-5000" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        1,001 - 5,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1TotalMonthlyIncome"
                                                                        value="5000-10000" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        5,000 - 10,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig1TotalMonthlyIncome"
                                                                        value="10000+" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Above 10,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-5">
                                                        <em class="text-info font-weight-bold mt-3">NB: Income includes
                                                            salary and other income / cash inflow</em>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Employer / Business /
                                                                School Name</label>
                                                            <input type="text" name="sig1EmployerSchoolName"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Employer / Business /
                                                                School Address</label>
                                                            <input type="text" name="sig1EmployerSchoolAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>


                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Nearest Landmark</label>
                                                            <input type="text" name="sig1NearestLandmark"
                                                                class="form-control ">
                                                        </div>

                                                        <div class="col">
                                                            <label class="font-weight-bold ">Digital Address
                                                                (GhanaPost GPS)</label>
                                                            <input type="number" name="sig1DigitalAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">City/Town</label>
                                                            <input type="text" name="sig1City" class="form-control ">
                                                        </div>

                                                        <div class="col">
                                                            <label class="font-weight-bold ">Nature of Business</label>
                                                            <input type="text" name="sig1NatureBusiness"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Business/School/
                                                                Office Contact No. 1</label>
                                                            <input type="number" name="sig1Contact1"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Business/School/
                                                                Office Contact No. 2</label>
                                                            <input type="number" min="13" name="sig1OfficeContact"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                </div>


                                                <!-- Second Applicant -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> Second Applicant </p>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Title</label>
                                                            <select name="sig2Title" class="form-control" id="">
                                                                <option value="">--Select--</option>
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                                <option value="Ms">Ms</option>
                                                                <option value="Dr">Dr</option>
                                                                <option value="Prof">Prof</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">TIN</label>
                                                            <input type="text" min="12" max="12" name="sig2Tin"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Surname</label>
                                                            <input type="text" name="sig2Surname" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">First Name & Other
                                                                Names</label>
                                                            <input type="text" name="sig2Name" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Birth</label>
                                                            <input type="date" name="sig2Dob" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Maiden Name</label>
                                                            <input type="text" name="sig2MaidenName"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Birth</label>
                                                            <input type="text" name="sig2Pob" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Marital Status</label>
                                                            <select name="sig2MaritalStatus" class="form-control" id="">
                                                                <option value="">--Select--</option>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                <option value="divorced">Divorced</option>
                                                                <option value="widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- {{-- gender --}} -->
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold " class="mr-2"
                                                                for="">Gender</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="radio" name="sig2Gender" value="M">
                                                            <label class="">Male</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="radio" name="sig2Gender" value="F">
                                                            <label class="" for="">Female</label>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Name Of Spouse If
                                                                Married</label>
                                                            <input type="text" name="sig2Spouse" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Mothers Maiden Name</label>
                                                            <input type="text" name="sig2MotherMaidenName"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 pl-3">
                                                        <label class=" font-weight-bold  mr-2 ">Residential
                                                            Status</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2ResidentialStatus"
                                                                        value="gh" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Resident Ghanaian
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2ResidentialStatus"
                                                                        value="rf" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Resident Foreigner
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="sig2ResidentialStatus"
                                                                    value="nr" class="custom-control-input">
                                                                <span class="custom-control-label pt-3 pl-2">
                                                                    Non-Resident Ghanaian
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <hr>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country of Origin</label>
                                                            <input type="text" name="sig2CountryOfOrigin"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country of
                                                                Residence</label>
                                                            <input type="text" name="sig2CountryOfResidence"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="mt-5">
                                                        <em class="text-danger mt-3">If country of origin is not Ghana,
                                                            please provide the following :</em>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residence Permit
                                                                Number</label>
                                                            <input type="number" min="12" max="12"
                                                                placeholder="Residence permit number must be 12 characters"
                                                                name="sig2ResidencePermitNumber" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place of Issue</label>
                                                            <input type="text" name="sig2PlaceOfIssue"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Permit Issue Date</label>
                                                            <input type="date" name="sig2PermitIssueDate"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Permit Expiry Date</label>
                                                            <input type="date" name="sig2PermitExpiryDate"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Occupation</label>
                                                            <input type="text" name="sig2Occupation"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Profession</label>
                                                            <input type="text" name="sig2Profession"
                                                                class="form-control ">

                                                            <input
                                                                placeholder="Input Professional Licence Number (If Applicable)"
                                                                type="text" name="sig2Applicable" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residential Address</label>
                                                            <input type="text" name="sig2ResidentialAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Nearest Landmark</label>
                                                            <input type="text" name="sig2NearestLandmark"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Digital Address (GhanaPost
                                                                GPS)</label>
                                                            <input type="text" name="sig2GPS" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">City/Town</label>
                                                            <input type="text" name="sig2Town" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Email Address</label>
                                                            <input type="text" name="sig2Email" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Postal Address</label>
                                                            <input type="text" name="sig2Post" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Mobile Number 1</label>
                                                            <input type="text" min="10" name="sig2Phone1"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Mobile Number 2</label>
                                                            <input type="text" min="10" name="sig2Phone2"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Type Of ID</label>
                                                            <input type="number" name="sig2IdType" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">ID Number</label>
                                                            <input type="text" name="sig2ID" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Issue</label>
                                                            <input type="text" name="sig2PlaceOfIssue"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Issue</label>
                                                            <input type="date" name="sig2DateOfIssue"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Expiration</label>
                                                            <input type="date" name="sig2DateExpiry"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="mt-4">
                                                        <legend>Emergency Contact</legend>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Name</label>
                                                            <input type="text" name="sig2ContactName"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Relationship to
                                                                client</label>
                                                            <input type="text" name="sig2RelationToClient"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Number</label>
                                                            <input type="number" name="sig2ContactNumber"
                                                                class="form-control ">
                                                        </div>
                                                    </div>


                                                    <div class="row mt-4 pl-3">
                                                        <label class="pt-3 font-weight-bold  mr-2 mt-1">
                                                            Status</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2Status"
                                                                        value="employed" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Employed
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2Status"
                                                                        value="selfEmp" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Self-employed
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2Status"
                                                                        value="unemployed" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Unemployed
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2Status"
                                                                        value="retired" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Retired
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2Status"
                                                                        value="student" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Student
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <hr>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Total Years of
                                                                Employment</label>
                                                            <input type="number" name="sig2TotalYearsOfEmployment"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Years of Current
                                                                Employment</label>
                                                            <input type="number" name="sig2YearsOfCurrentEmployment"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Years of Previous
                                                                Employment</label>
                                                            <input type="number" name="sig2YearsOfPreviousEmployment"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 pl-3">
                                                        <label class=" font-weight-bold  mr-2 ">
                                                            Total Monthly
                                                            Income:</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2TotalMonthlyIncome"
                                                                        value="1000" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Below 1,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2TotalMonthlyIncome"
                                                                        value="1001-5000" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        1,001 - 5,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2TotalMonthlyIncome"
                                                                        value="5000-10000" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        5,000 - 10,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig2TotalMonthlyIncome"
                                                                        value="10000+" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Above 10,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-5">
                                                        <em class="text-info font-weight-bold mt-3">NB: Income includes
                                                            salary and other income / cash inflow</em>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Employer / Business /
                                                                School Name</label>
                                                            <input type="text" name="sig2EmployerSchoolName"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Employer / Business /
                                                                School Address</label>
                                                            <input type="text" name="sig2EmployerSchoolAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>


                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Nearest Landmark</label>
                                                            <input type="text" name="sig2NearestLandmark"
                                                                class="form-control ">
                                                        </div>

                                                        <div class="col">
                                                            <label class="font-weight-bold ">Digital Address
                                                                (GhanaPost GPS)</label>
                                                            <input type="number" name="sig2DigitalAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">City/Town</label>
                                                            <input type="text" name="sig2City" class="form-control ">
                                                        </div>

                                                        <div class="col">
                                                            <label class="font-weight-bold ">Nature of Business</label>
                                                            <input type="text" name="sig2NatureBusiness"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Business/School/
                                                                Office Contact No. 1</label>
                                                            <input type="number" name="sig2Contact1"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Business/School/
                                                                Office Contact No. 2</label>
                                                            <input type="number" min="13" name="sig2OfficeContact"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Beneficiaries/Bank details -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> BANK ACCOUNT DETAILS
                                                    </p>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Bank Name</label>
                                                            <input type="text" name="bankName" class="form-control"
                                                                id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Account Name</label>
                                                            <input type="text" name="accountName" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Account Number</label>
                                                            <input type="number" name="accountNumber"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Bank Branch</label>
                                                            <input type="text" name="bankBranch" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="mt-4">
                                                        <legend>Beneficiaries</legend>
                                                    </div>
                                                    <span class="font-weight-bold">1.</span>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Surname</label>
                                                            <input type="text" name="surname1" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">First Name & Other
                                                                Names</label>
                                                            <input type="text" name="name1" class="form-control" id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Relationship with
                                                                Applicant</label>
                                                            <input type="text" name="relationshipApplicant1"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Number</label>
                                                            <input type="number" name="contactNumber1"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Percentage
                                                                Applicant</label>
                                                            <input type="text" name="percentageApplicant1"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Marital Status</label>
                                                            <select name="maritalStatus1" class="form-control ">
                                                                <option value="">--Select--</option>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                <option value="divorced">Divorced</option>
                                                                <option value="widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Birth
                                                            </label>
                                                            <input type="text" name="dob1" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Birth</label>
                                                            <input type="date" name="pob1" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country Of Origin
                                                            </label>
                                                            <input type="text" name="countryOfOrigin1"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country Of
                                                                Residence</label>
                                                            <input type="text" name="countryOfResidence1"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residential Address
                                                            </label>
                                                            <input type="text" name="residentialAddress1"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Type Of ID</label>
                                                            <input type="text" name="typeOfId1" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">ID Number</label>
                                                            <input type="number" name="idNumber1" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5 mb-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Issue</label>
                                                            <input type="text" name="placeOfIssue1"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Issue</label>
                                                            <input type="date" name="dateOfIssue1"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Expiration</label>
                                                            <input type="date" name="dateOfExpiration1"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <!-- 2 of beneficiary-->
                                                    <span class="font-weight-bold">2.</span>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Surname</label>
                                                            <input type="text" name="surname2" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">First Name & Other
                                                                Names</label>
                                                            <input type="text" name="name2" class="form-control" id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Relationship with
                                                                Applicant</label>
                                                            <input type="text" name="relationshipApplicant2"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Number</label>
                                                            <input type="number" name="contactNumber2"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Percentage
                                                                Applicant</label>
                                                            <input type="text" name="percentageApplicant2"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Marital Status</label>
                                                            <select name="maritalStatus2" class="form-control ">
                                                                <option value="">--Select--</option>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                <option value="divorced">Divorced</option>
                                                                <option value="widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Birth
                                                            </label>
                                                            <input type="text" name="dob2" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Birth</label>
                                                            <input type="date" name="pob2" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country Of Origin
                                                            </label>
                                                            <input type="text" name="countryOfOrigin2"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country Of
                                                                Residence</label>
                                                            <input type="text" name="countryOfResidence2"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residential Address
                                                            </label>
                                                            <input type="text" name="residentialAddress2"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Type Of ID</label>
                                                            <input type="text" name="typeOfId2" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">ID Number</label>
                                                            <input type="number" name="idNumber2" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5 mb-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Issue</label>
                                                            <input type="text" name="placeOfIssue2"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Issue</label>
                                                            <input type="date" name="dateOfIssue2"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Expiration</label>
                                                            <input type="date" name="dateOfExpiration2"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <!-- 3 of beneficiary -->
                                                    <span class="font-weight-bold">3.</span>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Surname</label>
                                                            <input type="text" name="surname3" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">First Name & Other
                                                                Names</label>
                                                            <input type="text" name="name3" class="form-control" id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Relationship with
                                                                Applicant</label>
                                                            <input type="text" name="relationshipApplicant3"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Number</label>
                                                            <input type="number" name="contactNumber3"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Percentage
                                                                Applicant</label>
                                                            <input type="text" name="percentageApplicant3"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Marital Status</label>
                                                            <select name="maritalStatus3" class="form-control ">
                                                                <option value="">--Select--</option>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                <option value="divorced">Divorced</option>
                                                                <option value="widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Birth
                                                            </label>
                                                            <input type="text" name="dob3" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Birth</label>
                                                            <input type="date" name="pob3" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country Of Origin
                                                            </label>
                                                            <input type="text" name="countryOfOrigin3"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country Of
                                                                Residence</label>
                                                            <input type="text" name="countryOfResidence3"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residential Address
                                                            </label>
                                                            <input type="text" name="residentialAddress3"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Type Of ID</label>
                                                            <input type="text" name="typeOfId3" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">ID Number</label>
                                                            <input type="number" name="idNumber3" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5 mb-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Issue</label>
                                                            <input type="text" name="placeOfIssue3"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Issue</label>
                                                            <input type="date" name="dateOfIssue3"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Expiration</label>
                                                            <input type="date" name="dateOfExpiration3"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <!-- 4. of beneficiary -->
                                                    <span class="font-weight-bold">4.</span>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Surname</label>
                                                            <input type="text" name="surname4" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">First Name & Other
                                                                Names</label>
                                                            <input type="text" name="name4" class="form-control" id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Relationship with
                                                                Applicant</label>
                                                            <input type="text" name="relationshipApplicant4"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Number</label>
                                                            <input type="number" name="contactNumber4"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Percentage
                                                                Applicant</label>
                                                            <input type="text" name="percentageApplicant4"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Marital Status</label>
                                                            <select name="maritalStatus4" class="form-control ">
                                                                <option value="">--Select--</option>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                <option value="divorced">Divorced</option>
                                                                <option value="widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Birth
                                                            </label>
                                                            <input type="text" name="dob4" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Birth</label>
                                                            <input type="date" name="pob4" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country Of Origin
                                                            </label>
                                                            <input type="text" name="countryOfOrigin4"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country Of
                                                                Residence</label>
                                                            <input type="text" name="countryOfResidence4"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residential Address
                                                            </label>
                                                            <input type="text" name="residentialAddress4"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Type Of ID</label>
                                                            <input type="text" name="typeOfId4" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">ID Number</label>
                                                            <input type="number" name="idNumber4" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5 mb-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Issue</label>
                                                            <input type="text" name="placeOfIssue4"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Issue</label>
                                                            <input type="date" name="dateOfIssue4"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Expiration</label>
                                                            <input type="date" name="dateOfExpiration4"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Disclosure -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> CHECK AND SIGN APPROPRIATE DISCLOSURE
                                                    </p>
                                                    <!-- 1 -->
                                                    <div class="row mt-3 pl-3">

                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="appropriateDisclosure"
                                                                        value="investcorpTreasurySecuritiesFund"
                                                                        class="custom-control-input">
                                                                    <span
                                                                        class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                        PRODUCT AGREEMENT - INVESTCORP
                                                                        TREASURY SECURITIES FUND:
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row pl-3">
                                                        <div class="col">
                                                            <p>A low risk product investing in high quality treasury and
                                                                treasury backed securities</p>
                                                        </div>
                                                    </div>

                                                    <div class="row pl-3">
                                                        <div class="col">
                                                            <p> • Minimum lump sum investment of GH¢ 1,000.00 or minimum
                                                                opening balance of GH¢ 100 for direct debit clients
                                                            </p>
                                                            <p>
                                                                • Unrestricted entry and exit with five (5) working
                                                                days’ notice required for redemptions
                                                            </p>
                                                            <p>
                                                                • Competitive management and expense fees
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- 2 -->
                                                    <div class="row mt-5 pl-3">

                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="appropriateDisclosure"
                                                                        value="investcorpMoneyMarketFund"
                                                                        class="custom-control-input">
                                                                    <span
                                                                        class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                        PRODUCT AGREEMENT - INVESTCORP
                                                                        MONEY MARKET FUND:
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row pl-3">
                                                        <div class="col">
                                                            <p>A low risk product investing in high quality short-term
                                                                securities including treasury bills, commercial paper
                                                                and CDs</p>
                                                        </div>
                                                    </div>

                                                    <div class="row pl-3">
                                                        <div class="col">
                                                            <p> • Unrestricted entry and exit, with just a working days’
                                                                notice required for redemptions
                                                            </p>
                                                            <p>
                                                                • Competitive management and expense fees
                                                            </p>
                                                            <p>
                                                                • Minimum lump sum investment of GH¢ 1,000 or minimum
                                                                opening balance of GH¢100 for direct debit clients
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- 3 -->
                                                    <div class="row mt-5 pl-3">
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="appropriateDisclosure"
                                                                        value="investcorpMidTierFund"
                                                                        class="custom-control-input">
                                                                    <span
                                                                        class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                        PRODUCT AGREEMENT - INVESTCORP
                                                                        MID-TIER FUND:
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row pl-3">
                                                        <div class="col">
                                                            <p>A unique high yielding debt and preferred equity fund
                                                                that combines the features of a traditional asset
                                                                management product with advisory services</p>
                                                        </div>
                                                    </div>

                                                    <div class="row pl-3">
                                                        <div class="col">
                                                            <p> • Competitive management and expense fees
                                                            </p>
                                                            <p>
                                                                • Redemptions are paid within five (5) business days
                                                            </p>
                                                            <p>
                                                                • Minimum lump sum investment of GH¢ 5,000 or minimum
                                                                opening balance of GH¢ 100 for direct debit clients
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- 3 -->
                                                    <div class="row mt-5 pl-3">
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="appropriateDisclosure"
                                                                        value="investcorpActiveEquityFund"
                                                                        class="custom-control-input">
                                                                    <span
                                                                        class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                        PRODUCT AGREEMENT - INVESTCORP
                                                                        ACTIVE EQUITY FUND
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row pl-3">
                                                        <div class="col">
                                                            <p>A unique high yielding debt and preferred equity fund
                                                                that combines the features of a traditional asset
                                                                management product with advisory services</p>
                                                        </div>
                                                    </div>

                                                    <div class="row pl-3">
                                                        <div class="col">
                                                            <p> • Competitive management and expense fees
                                                            </p>
                                                            <p>
                                                                • Redemptions are paid within five (5) business days
                                                            </p>
                                                            <p>
                                                                • Minimum lump sum investment of GH¢ 5,000 or minimum
                                                                opening balance of GH¢ 100 for direct debit clients
                                                            </p>
                                                        </div>
                                                    </div>


                                                    <!-- 5 -->
                                                    <div class="row mt-5 pl-3">
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="appropriateDisclosure"
                                                                        value="investcorpPrivateHealth"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        PRODUCT AGREEMENT - INVESTCORP PRIVATE WEALTH
                                                                        SUITE:
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row pl-3">
                                                        <div class="col">
                                                            <p>Tailored products and investment strategies targeted at
                                                                High Net-Worth Individuals and their Families,
                                                                Foundations and Entrepreneurs
                                                                Individual mandates specify features for each portfolio.
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- MISC -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> MISC
                                                    </p>

                                                    <div class="mt-4">
                                                        <legend>
                                                            <u>Statement Services</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Mode Of Statement
                                                                Delivery</label>
                                                            <select name="modeOfStatementDelivery" class="form-control">
                                                                <option value="">--Select--</option>
                                                                <option value="email">Email</option>
                                                                <option value="collection">Collection</option>
                                                            </select>

                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Statement
                                                                Frequency: Sent Quarterly (default)</label>
                                                            <select name="statementFrequency" class="form-control">
                                                                <option value="">--Select--</option>
                                                                <option value="onDemand">On Demand</option>
                                                            </select>

                                                        </div>
                                                    </div>


                                                    <div class="mt-4">
                                                        <legend>
                                                            <u>Expected Account Activity</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Source Of Funds</label>
                                                            <select name="sourceOfFunds" class="form-control">
                                                                <option value="">--Select--</option>
                                                                <option value="salary">Salary</option>
                                                                <option value="ProceedsFromBusiness">Proceeds from
                                                                    Business</option>
                                                                <option value="inheritanceGifts">Inheritance/Gifts
                                                                </option>
                                                                <option value="personalSavings">Personal Savings
                                                                </option>
                                                                <option value="others">Others</option>
                                                            </select>

                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">If Other, please
                                                                specify:</label>
                                                            <input name="sourceOfFunds" class="form-control">

                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Initial Investment
                                                                Amount:</label>
                                                            <input type="number" name="initialInvestmentAmount"
                                                                class="form-control">

                                                        </div>
                                                    </div>

                                                    <div class="text-info mt-4">
                                                        <em>Anticipated Investment Activity</em>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Top-ups:</label>
                                                            <select name="topUps" class="form-control">
                                                                <option value="">--Select--</option>
                                                                <option value="monthly"> Monthly</option>
                                                                <option value="quarterly">Quarterly</option>
                                                                <option value="biAnnually">Bi-Annually</option>
                                                                <option value="annually">Annually</option>
                                                            </select>

                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Others</label>
                                                            <input name="topUps" class="form-control">

                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Withdrawals:</label>
                                                            <select name="withdrawals" class="form-control">
                                                                <option value="">--Select--</option>
                                                                <option value="monthly"> Monthly</option>
                                                                <option value="quarterly">Quarterly</option>
                                                                <option value="biAnnually">Bi-Annually</option>
                                                                <option value="annually">Annually</option>
                                                            </select>

                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Others</label>
                                                            <input type="text" name="withdrawals" class="form-control">

                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Anticipated Investment
                                                                Amount: Regular Top-up
                                                                Amount (Expected):</label>
                                                            <input type="text" name="anticipatedInvestmentAmount"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Regular Withdrawal
                                                                Amount (Expected)</label>
                                                            <input type="text" name="regularWithdrawal"
                                                                class="form-control">

                                                        </div>
                                                    </div>



                                                    <div class="mt-4">
                                                        <legend>
                                                            <u>Mandate To Operate Account</u>
                                                        </legend>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Account Holder(s)
                                                                    Authorization/
                                                                    Signature(s):</label>
                                                                <select name="accountHolderInformation"
                                                                    class="form-control">
                                                                    <option value="">--Select--</option>
                                                                    <option value="oneToSign"> One To Sign</option>
                                                                    <option value="twoToSign"> Two To Sign</option>
                                                                    <option value="threeToSign"> Three To Sign</option>
                                                                    <option value="fourToSign"> Four To Sign</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Name of Signatory
                                                                    1</label>
                                                                <input type="text" name="nameOfSignatory1"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Name of Signatory
                                                                    2</label>
                                                                <input type="text" name="nameOfSignatory2"
                                                                    class="form-control">

                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Name of Signatory
                                                                    3</label>
                                                                <input type="text" name="nameOfSignatory3"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Name of Signatory
                                                                    4</label>
                                                                <input type="text" name="nameOfSignatory4"
                                                                    class="form-control">

                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="mt-4">
                                                        <legend>
                                                            <u>Approvals</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Relationship
                                                                Manager</label>
                                                            <input type="text" name="relationshipManager"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Processed by</label>
                                                            <input type="text" name="processedBy" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Position</label>
                                                            <input type="text" name="position" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Reviewed and
                                                                Approved by</label>
                                                            <input type="text" name="reviewedApprove"
                                                                class="form-control">
                                                        </div>
                                                    </div>


                                                    <div class="text-info mt-5">
                                                        <em>High Risk Account Authorized / Approved by Executive /
                                                            CEO</em>

                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Name
                                                            </label>
                                                            <input type="text" name="executiveName"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Comments
                                                            </label>
                                                            <textarea name="comments" class="form-control" id=""
                                                                cols="30" rows="5"></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="mt-4">
                                                        <legend>
                                                            <u>For Official Use Only</u>
                                                        </legend>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <p>Do you, your spouse, or any other immediate family member,
                                                            including parents, in-laws, siblings and dependants fall
                                                            under the following</p>
                                                        <span>
                                                            A head of state/government, politician, senior public
                                                            official, senior military official, senior public
                                                            corporation officer, high rank political party official in
                                                            Ghana

                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="headOfState" value="Y"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="headOfState" value="N"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </span>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="">If yes to any above, please specify name (if
                                                                not the applicant)
                                                                and nature of the position:</label>
                                                            <input type="text" name="" class="form-control" id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">

                                                        <span>
                                                            A head of state/government, politician, senior public
                                                            official, senior military official, senior public
                                                            corporation officer, high rank political party official
                                                            outside Ghana

                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="headOfState" value="Y"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="headOfState" value="N"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </span>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="">If yes to any above, please specify name (if
                                                                not the applicant)
                                                                and nature of the position:</label>
                                                            <input type="text" name="" class="form-control" id="">
                                                        </div>
                                                    </div>


                                                    <div class="row mt-5">

                                                        <span>
                                                            Are you a citizen of any foreign country (besides Ghana)?

                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="citizenOfForeignCountry" value="Y"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="citizenOfForeignCountry" value="N"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </span>
                                                    </div>


                                                    <div class="row mt-5">

                                                        <span>
                                                            Do you hold passport of any foreign country
                                                            (besides Ghana)?

                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="passportOfForeignCountry" value="Y"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="passportOfForeignCountry" value="N"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </span>
                                                    </div>

                                                    <div class="row mt-5">

                                                        <span>
                                                            Do you hold green card of any foreign country
                                                            (besides Ghana)?


                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="greencardOfForeignCountry" value="Y"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="greencardOfForeignCountry" value="N"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </span>
                                                    </div>

                                                    <div class="row mt-5">

                                                        <span>
                                                            Are you resident in any foreign country?


                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="residentOfForeignCountry" value="Y"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="residentOfForeignCountry" value="N"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </span>
                                                    </div>


                                                    <div class="row mt-5">

                                                        <span>
                                                            Have you spent more than 183 days in any foreign country?


                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="spentDaysOfForeignCountry" value="Y"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        name="spentDaysOfForeignCountry" value="N"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </span>
                                                    </div>

                                                    <div class="row mt-5 text-info">
                                                        <em> If the responses to any of the above questions is Yes,
                                                            please provide the following information:
                                                        </em>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col">
                                                            <label for="">Full Name</label>
                                                            <input type="text" name="ifYesFullName" class="form-control"
                                                                id="">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="">Foreign Residential Address</label>
                                                            <input type="text" name="ifYesFullName" class="form-control"
                                                                id="">
                                                        </div>
                                                    </div>

                                                </div>


                                                <!-- EMAIL INDEMNITY -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> EMAIL INDEMNITY
                                                    </p>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="">We / I,</label>
                                                            <input type="text" name="" class="form-control" id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col">
                                                            <label for="">Of</label>
                                                            <input type="text" name="" class="form-control" id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <p>
                                                            Authorize InvestCorp Asset Management LTD. InvestCorp of #15
                                                            Wawa Drive, North Dzorwulu, P.O. Box GP 22493 Accra to deal
                                                            with our / my investment
                                                            portfolio at InvestCorp and carry out all investment
                                                            instructions given by us / me through email via the
                                                            following e-mail address only
                                                        </p>
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="" id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <p>
                                                            That we / I shall call you on telephone and confirm our / my
                                                            instruction to you within thirty (30) minutes of giving
                                                            investment instruction to you through
                                                            the above stated e-mail address;
                                                        </p>
                                                        <p>
                                                            We / I authorize you after receiving our / my confirmation
                                                            to deal with our / my investment account and execute all
                                                            instructions given to you by us / me
                                                            through our / my said email address above;
                                                        </p>
                                                        <p>
                                                            That in dealing with our / my investment portfolio and
                                                            carrying out all investment instructions given to you
                                                            through above stated email address;
                                                        </p>
                                                        <p>
                                                            WE / I UNDERTAKE to completely indemnify and hold harmless
                                                            and absolve you InvestCorp, from all forms of loss,
                                                            liability, claim or damage that might be
                                                            incurred by you or made against you and / or us / me as a
                                                            result of authorizing you through email
                                                        </p>
                                                        <p>
                                                            We / I shall at our / my own expense defend any action or
                                                            claim that any third party or person may bring against you
                                                            in the event that you rely on our / my
                                                            instruction and there is any loss.
                                                        </p>
                                                    </div>


                                                    <div class="row mt-5">
                                                        <legend>
                                                            <u>Declaration</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col">
                                                            <label for="">We / I,</label>
                                                            <input type="text" name="" class="form-control" id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <p>
                                                            hereby declare that all the information submitted by us
                                                            / me in this form is correct, true and valid, that by
                                                            our / my request, to open and maintain securities
                                                            account(s) in our / my name and undertake to notify
                                                            InvestCorp of any changes to our / my particulars or
                                                            information as may be necessary.

                                                        </p>
                                                        <p class="mt-2">
                                                            We / I also declare that we have read thoroughly and
                                                            understood the contents of this application and have
                                                            given our / my consent by virtue of our / my
                                                            signature(s) on this form. We / I consent that
                                                            investment decisions are our / my prerogative without
                                                            sole reliance on the investment advice received from
                                                            InvestCorp. InvestCorp accepts no liability for any
                                                            direct or consequential loss arising from my/our
                                                            decision
                                                        </p>
                                                        <p class="mt-3">
                                                            We / I also declare that all debits incurred on our / my
                                                            securities account(s) by virtue of our / my trade orders
                                                            shall be settled by us / me accordingly
                                                        </p>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="">Name</label>
                                                            <input type="text" class="form-control" name="" id="">
                                                        </div>
                                                    </div>


                                                    <div class="row mt-5">
                                                        <legend>
                                                            <u>Mobile Money</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="">Mobile Money Number</label>
                                                            <input type="number" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <legend>
                                                            <u>Customer Risk Analysis</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <p>
                                                            Determining the time frame for your investment is critical
                                                            to making an investment decision, the longer your investment
                                                            horizon, the more aggressive you
                                                            may want to be.
                                                        </p>

                                                    </div>

                                                    <div class="row mt-5">
                                                        <p>
                                                            Your investment time frame
                                                            1. In approximately how many years will you require gains
                                                            from your investment?

                                                        </p>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        o to 1.5 year
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        2 to 3 years
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        4 and above
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mt-5">
                                                        <p>
                                                            2. Do you have an emergency fund (Accumulated savings)?

                                                        </p>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes,but less than six months after-tax income
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes, I have adequate emergency funds
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row mt-5">
                                                        <p>
                                                            3. Have you ever invested in individual stocks or equity
                                                            funds?

                                                        </p>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No, and I would be uncomfortable with the risk
                                                                        if I did
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No, but I would be comfortable with the risk if
                                                                        I did
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes, but I was uncomfortable with the risk
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes, and I felt comfortable with the risk
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <p>
                                                            Your comfort level with investment risk influences how
                                                            aggressively or conservatively you may choose to invest and
                                                            it should be balanced with your desire to
                                                            achieve your investment goals.
                                                        </p>
                                                        <p>
                                                            4. Which one of the following statements best describes your
                                                            feelings about investment risk?
                                                        </p>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        I would only select investments that have a low
                                                                        degree of risk associated with them (i.e. it is
                                                                        unlikely I will lose my
                                                                        original investment)
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        I prefer to select mixed investments with
                                                                        emphasis on those with a low degree of risk and
                                                                        a small portion in others that have
                                                                        a higher degree of risk that may yield greater
                                                                        returns
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        I prefer to select a balanced mix of investments
                                                                        - some that have low degree of risk, others that
                                                                        have a higher degree of risk
                                                                        that may yield greater returns
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        I prefer to select an aggressive mix of
                                                                        investments which exhibit a low degree of risk,
                                                                        but with emphasis on others that have
                                                                        a high degree of risk that may yield greater
                                                                        returns
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        I would select an investment that has only a
                                                                        high degree of risk and a greater potential for
                                                                        higher returns
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row mt-2">
                                                        <p>
                                                            5. Volatility
                                                        </p>
                                                        <p>
                                                            The value of most investments fluctuate over time. How would
                                                            you feel if an investment you had committed to for three
                                                            years or more lost some of its value during the first year
                                                        </p>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        (a) I would be extremely concerned and would
                                                                        sell my investment
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        (b) I would be concerned and may consider
                                                                        selling my investment
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        (c) I would be concerned, but I would not
                                                                        consider selling my investment
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        (d) I would not be overly concerned given my
                                                                        long-term investment philosophy
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row mt-5">
                                                        <legend>
                                                            <u>Customer Risk Profile</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="">Client Verification / Screening</label>
                                                            <input type="text" name="" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col">
                                                            <label for="">Level Of Risk</label>
                                                            <select type="text" name="" class="form-control">
                                                                <option value="">--Select--</option>
                                                                <option value="low">Low</option>
                                                                <option value="medium">Medium</option>
                                                                <option value="high">High</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col">
                                                            <label for="">Nature of High Risk Exposure</label>
                                                            <select type="text" name="" class="form-control">
                                                                <option value="">--Select--</option>
                                                                <option value="pep">PEP</option>
                                                                <option value="nonResident">Non-resident</option>
                                                                <option value="highRiskCountry">High Risk Country
                                                                </option>
                                                                <option value="highRiskBus">High Risk Business</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col">
                                                            <label for="">State nature of
                                                                business:</label>
                                                            <input type="text" name="" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label for="">State Country</label>
                                                            <input type="text" name="" class="form-control">
                                                        </div>
                                                    </div>



                                                    <div class="row mt-5">
                                                        <legend>
                                                            <u>Account Opening Check List</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        1. Completed Account Opening Pack
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        2. Valid national identification document of
                                                                        each signatory to the account
                                                                        (Passport, National ID, Driver Licence, Voter’s
                                                                        ID card)
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        3. Minimum initial investment
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        4. Completed mandate card
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        5. One (1) passport photograph
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        6. Complete verification of account holder’s
                                                                        address
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="text-left text-danger font-weight-bold">
                                                    <p>Please all fields are required</p>
                                                </div>

                                                <!-- BUTTONS -->
                                                <div class="mt-3" style="overflow:auto;">
                                                    <div id="submit-tab" style="float:right;">
                                                        <button type="button" class="btn btn-info" id="prevBtn"
                                                            onclick="nextPrev(-1)">Previous</button>
                                                        <button type="button" class="btn btn-primary" id="revBtn"
                                                            onclick="nextPrev(-6)">Review</button>
                                                        <button type="button" class="btn btn-info" id="nextBtn"
                                                            onclick="nextPrev(1)">Next</button>
                                                        <input value="Submit" type="submit" name="submit" form="regForm"
                                                            class="btn btn-success" id="subBtn">
                                                    </div>
                                                </div>
                                                <div style="text-align:center;margin-top:40px;">
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // document.addEventListener("DOMContentLoaded", () => {

        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");

            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:

            if (n == 0) {

                document.getElementById("nextBtn").style.display = "";
                document.getElementById("nextBtn").style.display = "inline";
                document.getElementById("prevBtn").style.display = "none";
                document.getElementById("revBtn").style.display = "none";
                document.getElementById("subBtn").style.display = "none";

            } else if (n != (x.length - 1)) {

                document.getElementById("subBtn").style.display = "none";
                document.getElementById("revBtn").style.display = "none";
                document.getElementById("prevBtn").style.display = "inline";
                document.getElementById("nextBtn").style.display = "inline";


            } else {
                document.getElementById("prevBtn").style.display = "inline";
                document.getElementById("nextBtn").style.display = "inline";

            }


            if (n == (x.length - 1)) {

                document.getElementById("revBtn").style.display = "inline"
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("subBtn").style.display = "inline";

            } else {
                document.getElementById("nextBtn").innerHTML = "Next";

            }

            fixStepIndicator(n)
        }

        function nextPrev(n) {

            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");

            // if (n == 1 && !validateForm()) return false;

            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;

            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            k = x[currentTab].getElementsByTagName("select");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }

            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                // k.classList.remove("border", "border-danger");

                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }


        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

        let regForm = document.getElementById("regForm");

        regForm.addEventListener("submit", function (e) {
            e.preventDefault();

            let formdata = new FormData(regForm);
            fetch(`${APP_URL}/api/individual_registration`, {
                    method: "POST",
                    body: formdata,

                }).then(res => res.json())
                .then(data => {
                    if (!data.ok) {
                        alert(data.msg)
                    }

                    alert(data.msg);
                    regForm.reset();
                })
        });
    </script>
</body>

</html>