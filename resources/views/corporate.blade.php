<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    {{-- <link rel="icon" type="image/png" href="{{asset('img/download.png')}}"> --}}
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

<script>
    var APP_URL = '{{config("app.url")}}';
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
            border-color: #eb1212;
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

                                                <!-- {{-- Account Details --}} -->
                                                <div class="row new tab mb-3">
                                                    <p class="text-center h3"> Account Details </p>

                                                    <div class="product-type">
                                                        <div class="row mt-5 ">
                                                            <legend class="pl-2 pt-1">Product Type</legend>
                                                        </div>

                                                        <div class="row mt-2 pl-3">
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="productType"
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
                                                                        <input type="checkbox" name="productType"
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
                                                                        <input type="checkbox" name="productType"
                                                                            value="investCorpWelfare/BenefitsFund"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2 ">
                                                                            InvestCorp Welfare / Benefits Fund
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2 pl-3">
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="productType"
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
                                                                        <input type="checkbox" name="productType"
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
                                                                        <input type="checkbox" name="productType"
                                                                            value="other"
                                                                            id="institutionalFundManagement"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2 ">
                                                                            Institutional Fund Management
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="row mt-1">
                                                            <div class="col pl-4">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="productType"
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
                                                            <div class="col-9">
                                                                <input type="text" name="productType"
                                                                    class="form-control " placeholder="If other specify"
                                                                    id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <hr>
                                                    <div class="entity-type">
                                                        <div class="row mt-5 ">
                                                            <legend class="pl-2 pt-1">Entity Type</legend>
                                                        </div>

                                                        <div class="row mt-2 pl-3">
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="entityType"
                                                                            value="privateLimitedLiabilityCompany"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2 ">
                                                                            Private Limited Liability Company
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="entityType"
                                                                            value="publicLimitedLiabilityCompany"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2 ">
                                                                            Public Limited Liability Company
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="entityType"
                                                                            value="Partnership"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2 ">
                                                                            Partnership
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="entityType"
                                                                            value="soleProprietor"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2 ">
                                                                            Sole Proprietor
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2 pl-3">

                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="entityType"
                                                                            value="companyLimitedbyGuarantee"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2 ">
                                                                            Company Limited by Guarantee
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="entityType"
                                                                            value="other"
                                                                            id="managedInvestmentFund/Pensions"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2 ">
                                                                            Managed Investment fund/Pensions
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="entityType"
                                                                            value="other"
                                                                            id="stateOwned/Government/Ministry/Agency"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2 ">
                                                                            State Owned / Government / Ministry / Agency
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="row mt-1">
                                                            <div class="col pl-4">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="entityType"
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
                                                            <div class="col-9">
                                                                <input type="text" name="entityType"
                                                                    class="form-control " placeholder="If other specify"
                                                                    id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="client-investment">
                                                        <div class="row mt-5 ">
                                                            <legend class="pl-2 pt-1">Client Investment Profile</legend>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Investment
                                                                    Objective:</label>
                                                                <input name="investmentObjective" id=""
                                                                    class="form-control">
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
                                                                        <input type="checkbox"
                                                                            name="investmentKnowledge" value="high"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2">
                                                                            High
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            name="investmentKnowledge" value="medium"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label pt-3 pl-2">
                                                                            Medium
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            name="investmentKnowledge" value="low"
                                                                            class="custom-control-input">
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

                                                    <div class="account-details">
                                                        <div class="row mt-5 ">
                                                            <legend class="pl-2 pt-1">Account Details</legend>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <label for="">Company /
                                                                    Business Name:</label>
                                                                <input type="text" class="form-control"
                                                                    name="businessName">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Certificate of
                                                                    Incorporation Number</label>
                                                                <input type="text" class="form-control"
                                                                    name="certificateIncorporationNumber" id="">
                                                            </div>
                                                            <div class="col">
                                                                <label for="">TIN</label>
                                                                <input type="text" class="form-control" name="tin">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Date of Incorporation/
                                                                    Registration</label>
                                                                <input type="date" class="form-control"
                                                                    name="dateIncorporationRegistration" id="">
                                                            </div>
                                                            <div class="col">
                                                                <label for=""> License Number</label>
                                                                <input type="number" class="form-control"
                                                                    name="licenseNumber">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Jurisdiction of
                                                                    Incorporation:
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="jurisdictionIncorporation">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Parent Company’s
                                                                    Country of
                                                                    Incorporation (if any)
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="parentCompanyIncorporation">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Type / Nature of
                                                                    Business
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="natureOfBusiness">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Sector / Industry
                                                                </label>
                                                                <input type="text" class="form-control" name="industry">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Principal Place of
                                                                    Business
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="principalPlaceOfBusiness">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Company Postal
                                                                    Address:
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="principalPlaceOfBusiness">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Digital Address
                                                                    (GhanaPost GPS)
                                                                </label>
                                                                <input type="text" class="form-control" name="gps">
                                                            </div>

                                                            <div class="col">
                                                                <label for="">Email Address
                                                                </label>
                                                                <input type="email" class="form-control"
                                                                    name="emailAddress">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Website Address
                                                                    (if any):
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="websiteAddress">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <label for="">Contact Number 1
                                                                </label>
                                                                <input type="number" class="form-control" name="phone1">
                                                            </div>

                                                            <div class="col">
                                                                <label for="">Contact Number 2
                                                                </label>
                                                                <input type="number" class="form-control" name="phone2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Signatory 1 -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> Signatory 1 </p>

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
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Number</label>
                                                            <input type="text" name="sig1MaidenContactNumber"
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
                                                        <div class="form-group">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="sig1ResidentialStatus"
                                                                    value="nrf" class="custom-control-input">
                                                                <span class="custom-control-label pt-3 pl-2">
                                                                    Non-Resident Foreigner
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
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
                                                        <em class="text-info mt-3">If country of origin is not Ghana,
                                                            please provide the following :</em>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residence Permit
                                                                Number</label>
                                                            <input type="number"
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
                                                            <label class="font-weight-bold ">Type Of ID</label>
                                                            <input type="number" name="sig1IdType"
                                                                class="form-control ">
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

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Job Title</label>
                                                            <input type="text" name="sig1JobTitle"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Email Address</label>
                                                            <input type="text" name="sig1EmailAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residential Address</label>
                                                            <input type="text" name="sig1ResidentialAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Signatory 2 -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> Signatory 2 </p>

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
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Number</label>
                                                            <input type="text" name="sig2MaidenContactNumber"
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
                                                        <div class="form-group">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="sig2ResidentialStatus"
                                                                    value="nrf" class="custom-control-input">
                                                                <span class="custom-control-label pt-3 pl-2">
                                                                    Non-Resident Foreigner
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
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
                                                        <em class="text-info mt-3">If country of origin is not Ghana,
                                                            please provide the following :</em>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residence Permit
                                                                Number</label>
                                                            <input type="text" name="sig2ResidencePermitNumber" class="form-control ">
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
                                                            <label class="font-weight-bold ">Type Of ID</label>
                                                            <input type="number" name="sig2IdType"
                                                                class="form-control ">
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

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Job Title</label>
                                                            <input type="text" name="sig2JobTitle"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Email Address</label>
                                                            <input type="text" name="sig2EmailAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residential Address</label>
                                                            <input type="text" name="sig2ResidentialAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Signatory 3 -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> Signatory 3 </p>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Title</label>
                                                            <select name="sig3Title" class="form-control" id="">
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
                                                            <input type="text" min="12" max="12" name="sig3Tin"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Surname</label>
                                                            <input type="text" name="sig3Surname" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">First Name & Other
                                                                Names</label>
                                                            <input type="text" name="sig3Name" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Birth</label>
                                                            <input type="date" name="sig3Dob" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Maiden Name</label>
                                                            <input type="text" name="sig3MaidenName"
                                                                class="form-control ">
                                                        </div>

                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Birth</label>
                                                            <input type="text" name="sig3Pob" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Marital Status</label>
                                                            <select name="sig3MaritalStatus" class="form-control" id="">
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
                                                            <input type="radio" name="sig3Gender" value="M">
                                                            <label class="">Male</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="radio" name="sig3Gender" value="F">
                                                            <label class="" for="">Female</label>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Name Of Spouse If
                                                                Married</label>
                                                            <input type="text" name="sig3Spouse" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Mothers Maiden Name</label>
                                                            <input type="text" name="sig3MotherMaidenName"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Contact Number</label>
                                                            <input type="text" name="sig3MaidenContactNumber"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 pl-3">
                                                        <label class=" font-weight-bold  mr-2 ">Residential
                                                            Status</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="sig3ResidentialStatus"
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
                                                                    <input type="checkbox" name="sig3ResidentialStatus"
                                                                        value="rf" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Resident Foreigner
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="sig3ResidentialStatus"
                                                                    value="nr" class="custom-control-input">
                                                                <span class="custom-control-label pt-3 pl-2">
                                                                    Non-Resident Ghanaian
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="sig3ResidentialStatus"
                                                                    value="nrf" class="custom-control-input">
                                                                <span class="custom-control-label pt-3 pl-2">
                                                                    Non-Resident Foreigner
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country of Origin</label>
                                                            <input type="text" name="sig3CountryOfOrigin"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Country of
                                                                Residence</label>
                                                            <input type="text" name="sig3CountryOfResidence"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="mt-5">
                                                        <em class="text-info mt-3">If country of origin is not Ghana,
                                                            please provide the following :</em>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residence Permit
                                                                Number</label>
                                                            <input type="number"
                                                                placeholder="Residence permit number must be 12 characters"
                                                                name="sig3ResidencePermitNumber" class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place of Issue</label>
                                                            <input type="text" name="sig3PlaceOfIssue"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Permit Issue Date</label>
                                                            <input type="date" name="sig3PermitIssueDate"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Permit Expiry Date</label>
                                                            <input type="date" name="sig3PermitExpiryDate"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Type Of ID</label>
                                                            <input type="number" name="sig3IdType"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">ID Number</label>
                                                            <input type="text" name="sig3ID" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Place Of Issue</label>
                                                            <input type="text" name="sig3PlaceOfIssue"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Issue</label>
                                                            <input type="date" name="sig3DateOfIssue"
                                                                class="form-control ">
                                                        </div>
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Date Of Expiration</label>
                                                            <input type="date" name="sig3DateExpiry"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Job Title</label>
                                                            <input type="text" name="sig3JobTitle"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Email Address</label>
                                                            <input type="text" name="sig3EmailAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Residential Address</label>
                                                            <input type="text" name="sig3ResidentialAddress"
                                                                class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 pl-3">
                                                        <label class=" font-weight-bold  mr-2 ">Monthly
                                                            Turnover (GHS):</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="monthlyTurnover"
                                                                        value="below10,000"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Below 10,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="monthlyTurnover"
                                                                        value="10,000-100,000"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        10,000-100,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="monthlyTurnover"
                                                                        value="100,000" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        100,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="monthlyTurnover"
                                                                        value="above10Million"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Above 10 million
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 pl-3">
                                                        <label class=" font-weight-bold  mr-2 ">Annual
                                                            Turnover (GHS):</label>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="annualTurnover"
                                                                        value="below10,000"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Below 10,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="annualTurnover"
                                                                        value="10,000-100,000"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        10,000-100,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="annualTurnover"
                                                                        value="100,000" class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        100,000
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="annualTurnover"
                                                                        value="above10Million"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Above 10 million
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>



                                                <!-- Beneficiaries/Bank details -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> BANK ACCOUNT DETAILS
                                                    </p>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Bank Name</label>
                                                            <input type="text" name="bankName" class="form-control"
                                                                id="">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label class="font-weight-bold ">Account Name</label>
                                                            <input type="text" name="accountName" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
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
                                                        <legend> Directors / Executive / Trustee / Admin</legend>
                                                    </div>

                                                    <div class="jumbotron mt-4">
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Surname</label>
                                                                <input type="text" name="trusteeSurname2"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">First Name & Other
                                                                    Names</label>
                                                                <input type="text" name="trusteeName2"
                                                                    class="form-control" id="">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col-5">
                                                                <label class="font-weight-bold ">Type of ID/
                                                                    Number:</label>
                                                                <input type="text" name="trusteeId2"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col-2">
                                                                <label for="">PPE Status</label>
                                                                <input type="text" class="form-control"
                                                                    name="trusteeStatus2" placeholder="YES/NO">
                                                            </div>
                                                            <div class="col-5">
                                                                <label class="font-weight-bold ">Contact Number</label>
                                                                <input type="number" name="trusteePhone2"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="jumbotron mt-4">
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Surname</label>
                                                                <input type="text" name="trusteeSurname3"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">First Name & Other
                                                                    Names</label>
                                                                <input type="text" name="trusteeName3"
                                                                    class="form-control" id="">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col-5">
                                                                <label class="font-weight-bold ">Type of ID/
                                                                    Number:</label>
                                                                <input type="text" name="trusteeId3"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col-2">
                                                                <label for="">PPE Status</label>
                                                                <input type="text" class="form-control"
                                                                    name="trusteeStatus3" placeholder="YES/NO">
                                                            </div>
                                                            <div class="col-5">
                                                                <label class="font-weight-bold ">Contact Number</label>
                                                                <input type="number" name="trusteePhone3"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="jumbotron mt-4">
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Surname</label>
                                                                <input type="text" name="trusteeSurname4"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">First Name & Other
                                                                    Names</label>
                                                                <input type="text" name="trusteeName4"
                                                                    class="form-control" id="">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col-5">
                                                                <label class="font-weight-bold ">Type of ID/
                                                                    Number:</label>
                                                                <input type="text" name="trusteeId4"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col-2">
                                                                <label for="">PPE Status</label>
                                                                <input type="text" class="form-control"
                                                                    name="trusteeStatus4" placeholder="YES/NO">
                                                            </div>
                                                            <div class="col-5">
                                                                <label class="font-weight-bold ">Contact Number</label>
                                                                <input type="number" name="trusteePhone4"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="mt-5">
                                                        <legend> Beneficial Ownership</legend>
                                                    </div>

                                                    <div class="jumbotron mt-4">
                                                        <em class="text-info">Beneficial Owner 1</em>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Surname</label>
                                                                <input type="text" name="beneficialSurname1"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">First Name & Other
                                                                    Names</label>
                                                                <input type="text" name="beneficialName1"
                                                                    class="form-control" id="">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col-2 font-weight-bold">
                                                                <label for="">PPE Status</label>
                                                                <input type="text" name="beneficialStatus1"
                                                                    class="form-control" placeholder="YES/NO">
                                                            </div>
                                                            <div class="col-2">
                                                                <label class="font-weight-bold ">Ownership</label>
                                                                <input type="text" placeholder="%"
                                                                    name="beneficialOwnership1" class="form-control ">
                                                            </div>
                                                            <div class="col-8">
                                                                <label class="font-weight-bold ">Date Of Birth</label>
                                                                <input type="date" name="beneficialDob1"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Residential
                                                                    Address</label>
                                                                <input type="text" name="beneficialAddress1"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Place of Birth:</label>
                                                                <input type="text" name="beneficialPob1"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Country of
                                                                    Origin:</label>
                                                                <input type="text" name="beneficialCountry1"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Country of
                                                                    Residence:</label>
                                                                <input type="text" name="beneficialResidence1"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Type of ID/
                                                                    Number:</label>
                                                                <input type="text" name="beneficialId1"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Contact Number</label>
                                                                <input type="number" name="beneficialPhone1"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="jumbotron mt-4">
                                                        <em class="text-info">Beneficial Owner 2</em>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Surname</label>
                                                                <input type="text" name="beneficialSurname2"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">First Name & Other
                                                                    Names</label>
                                                                <input type="text" name="beneficialName2"
                                                                    class="form-control" id="">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col-2 font-weight-bold">
                                                                <label for="">PPE Status</label>
                                                                <input type="text" name="beneficialStatus2"
                                                                    class="form-control" placeholder="YES/NO">
                                                            </div>
                                                            <div class="col-2">
                                                                <label class="font-weight-bold ">Ownership</label>
                                                                <input type="text" placeholder="%"
                                                                    name="beneficialOwnership2" class="form-control ">
                                                            </div>
                                                            <div class="col-8">
                                                                <label class="font-weight-bold ">Date Of Birth</label>
                                                                <input type="date" name="beneficialDob2"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Residential
                                                                    Address</label>
                                                                <input type="text" name="beneficialAddress2"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Place of Birth:</label>
                                                                <input type="text" name="beneficialPob2"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Country of
                                                                    Origin:</label>
                                                                <input type="text" name="beneficialCountry2"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Country of
                                                                    Residence:</label>
                                                                <input type="text" name="beneficialResidence2"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Type of ID/
                                                                    Number:</label>
                                                                <input type="text" name="beneficialId2"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Contact Number</label>
                                                                <input type="number" name="beneficialPhone2"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="jumbotron mt-4">
                                                        <em class="text-info">Beneficial Owner (Sole Proprietor &
                                                            Others)</em>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Surname</label>
                                                                <input type="text" name="beneficialSurname3"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">First Name & Other
                                                                    Names</label>
                                                                <input type="text" name="beneficialName3"
                                                                    class="form-control" id="">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col-2 font-weight-bold">
                                                                <label for="">PPE Status</label>
                                                                <input type="text" name="beneficialStatus3"
                                                                    class="form-control" placeholder="YES/NO">
                                                            </div>
                                                            <div class="col-2">
                                                                <label class="font-weight-bold ">Ownership</label>
                                                                <input type="text" placeholder="%"
                                                                    name="beneficialOwnership3" class="form-control ">
                                                            </div>
                                                            <div class="col-8">
                                                                <label class="font-weight-bold ">Date Of Birth</label>
                                                                <input type="date" name="beneficialDob3"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Residential
                                                                    Address</label>
                                                                <input type="text" name="beneficialAddress3"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Place of Birth:</label>
                                                                <input type="text" name="beneficialPob3"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Country of
                                                                    Origin:</label>
                                                                <input type="text" name="beneficialCountry3"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Country of
                                                                    Residence:</label>
                                                                <input type="text" name="beneficialResidence3"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-5">
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Type of ID/
                                                                    Number:</label>
                                                                <input type="text" name="beneficialId3"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col">
                                                                <label class="font-weight-bold ">Contact Number</label>
                                                                <input type="number" name="beneficialPhone3"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Disclosure -->
                                                <div class="row tab mb-3">
                                                    <p class="text-center h3"> CHECK AND SIGN APPROPRIATE DISCLOSURE
                                                    </p>
                                                    <!-- 1 -->
                                                    <div class="div">
                                                        <div class="row mt-3 pl-3">

                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            name="appropriateDisclosure"
                                                                            value="investcorpTreasurySecuritiesFund"
                                                                            class="custom-control-input">
                                                                        <span
                                                                            class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                            PRODUCT AGREEMENT - INVESTCORP ACTIVE EQUITY
                                                                            FUND:
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row pl-3">
                                                            <div class="col">
                                                                <p>A low risk product investing in high quality Treasury
                                                                    securities</p>
                                                            </div>
                                                        </div>

                                                        <div class="row pl-3">
                                                            <div class="col">
                                                                <p> • Minimum lump sum investment of GH¢ 1,000.00 or
                                                                    minimum
                                                                    opening balance of GH¢ 100 for direct debits
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
                                                    </div>

                                                    <!-- 2 -->
                                                    <div class="div">
                                                        <div class="row mt-5 pl-3">
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            name="appropriateDisclosure"
                                                                            value="investcorpMoneyMarketFund"
                                                                            class="custom-control-input">
                                                                        <span
                                                                            class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                            PRODUCT AGREEMENT - INVESTCORP MONEY MARKET
                                                                            FUND:
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row pl-3">
                                                            <div class="col">
                                                                <p>A low risk product investing in high quality
                                                                    short-term securities including treasury bills,
                                                                    commercial paper and CDs</p>
                                                            </div>
                                                        </div>

                                                        <div class="row pl-3">
                                                            <div class="col">
                                                                <p> • Unrestricted entry and exit, with just a working
                                                                    days’
                                                                    notice required for redemptions
                                                                </p>
                                                                <p>
                                                                    • Competitive management and expense fees
                                                                </p>
                                                                <p>
                                                                    • Minimum lump sum investment of GH¢ 1,000 or
                                                                    minimum
                                                                    opening balance of GH¢100 for direct debit clients
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- 3 -->
                                                    <div class="div">
                                                        <div class="row mt-5 pl-3">
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            name="appropriateDisclosure"
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
                                                                    • Minimum lump sum investment of GH¢ 5,000 or
                                                                    minimum
                                                                    opening balance of GH¢ 100 for direct debit clients
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- 4 -->
                                                    <div class="div">
                                                        <div class="row mt-5 pl-3">
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            name="appropriateDisclosure"
                                                                            value="investcorpWelfareBenefitsFund"
                                                                            class="custom-control-input">
                                                                        <span
                                                                            class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                            PRODUCT AGREEMENT - INVESTCORP WELFARE /
                                                                            BENEFITS FUND:
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row pl-3">
                                                            <div class="col">
                                                                <p>Managed investment schemes for employees, groups and
                                                                    associations</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 5 -->
                                                    <div class="div">
                                                        <div class="row mt-5 pl-3">
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            name="appropriateDisclosure"
                                                                            value="institutionalFundManagement"
                                                                            class="custom-control-input">
                                                                        <span
                                                                            class="custom-control-label font-weight-bold pt-3 pl-2">
                                                                            PRODUCT AGREEMENT - INSTITUTIONAL FUND
                                                                            MANAGEMENT:
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row pl-3">
                                                            <div class="col">
                                                                <p>An investment portfolio that is managed according to
                                                                    an agreed mandate
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 6 -->
                                                    <div class="div">
                                                        <div class="row mt-5 pl-3">
                                                            <div class="col pl-3">
                                                                <div class="form-group">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            name="appropriateDisclosure"
                                                                            value="investcorpActiveEquityFund"
                                                                            class="custom-control-input">
                                                                        <span
                                                                            class="custom-control-label pt-3 pl-2 font-weight-bold">
                                                                            PRODUCT AGREEMENT - INVESTCORP ACTIVE EQUITY
                                                                            FUND:
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row pl-3">
                                                            <div class="col">
                                                                <p>A Fund that tracks the performance of a model
                                                                    portfolio that is constructed based on carefully
                                                                    selected stocks that trade on the Ghana Stock
                                                                    Exchange (GSE)</p>
                                                            </div>
                                                        </div>

                                                        <div class="row pl-3">
                                                            <div class="col">
                                                                <p> • Minimum lump sum investment of GH¢ 1,000 or
                                                                    minimum opening balance of GH¢200 for direct debit
                                                                    clients
                                                                </p>
                                                                <p>
                                                                    • Unrestricted entry and exit with five (5) working
                                                                    days notice required for redemptions
                                                                </p>
                                                                <p>
                                                                    • Competitive management and expense fees
                                                                </p>
                                                            </div>
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

                                                    <div class="div">
                                                        <div class="mt-5">
                                                            <legend>
                                                                <u>Expected Account Activity</u>
                                                            </legend>
                                                        </div>

                                                        <div class="row mt-3">
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
                                                                <input type="text" name="withdrawals"
                                                                    class="form-control">

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

                                                    </div>


                                                    <div class="div">
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
                                                                        <option value="threeToSign"> Three To Sign
                                                                        </option>
                                                                        <option value="fourToSign"> Four To Sign
                                                                        </option>
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
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="div">
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
                                                                <input type="text" name="processedBy"
                                                                    class="form-control">
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
                                                    </div>




                                                    <div class="mt-4">
                                                        <legend>
                                                            <u>For Official Use Only</u>
                                                        </legend>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <p>Does the shareholders, directors, executives, senior
                                                            management, administrators, trustees and signatories fall
                                                            under the following:</p>
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
                                                            Have you bought a security such as Treasury bill, bond
                                                            shares etc before?

                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="treasuryBill" value="Y"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        Yes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="treasuryBill" value="N"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        No
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </span>
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
                                                            <u>Customer Risk Profile</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="">Client Verification / Screening</label>
                                                            <input type="text" name="clientVerificationScreening"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col">
                                                            <label for="">Level Of Risk</label>
                                                            <select type="text" name="levelOfRisk" class="form-control">
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
                                                                    <input type="checkbox" name=""
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        1. A copy of the regulations of the company duly
                                                                        certified
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
                                                                        2. A signed Board resolution that a specific
                                                                        account e.g. investment account, be opened
                                                                          with InvestCorp Asset Management Limited
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
                                                                        3. A copy of the company’s certificate of
                                                                        incorporation duly certified
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
                                                                        4. . A copy of company’s certificate to commence
                                                                        business duly certified
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
                                                                        5. A copy of Form 3 (particulars of the
                                                                        directors) of the company
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
                                                                        6. An official personal identification number or
                                                                        other unique identifier contained in an
                                                                        unexpired
                                                                         official document (e.g. Passport, National ID,
                                                                        Voter’s ID card, Residence Permit, Driver
                                                                        Licence) of signatories
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
                                                                        7. Completed mandate card of the company’s
                                                                        representative/signatory to the account
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="row mt-5">
                                                        <legend>
                                                            <u>SOLE PROPRIETOR</u>
                                                        </legend>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name=""
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label pt-3 pl-2">
                                                                        1. Certificate of registration
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
                                                                        2. Completed signature cards (enclosed)
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
                                                                        3. One recent passport sized photograph
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
                                                                        4. Utility bills (Or any other form of document
                                                                        identifying/establishing residential location)
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
                                                                        5. Power of Attorney
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
                                                                        6. An official personal identification number or
                                                                        other unique identifier contained in an
                                                                        unexpired
                                                                         official document (e.g. Passport, National ID,
                                                                        Voter’s ID card, Residence Permit, Driver
                                                                        Licence) of signatories
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
                                                                        7. Completed mandate card of the company’s
                                                                        representative/signatory to the account
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
                                                            onclick="nextPrev(-8)">Review</button>
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

            if (n == 1 && !validateForm()) return false;

            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;

            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, cb, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            k = x[currentTab].getElementsByTagName("select");
            cb = x[currentTab].querySelector('input[type="checkbox"]');
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }

                // cb.addEventListener('change', () => {
                //     if (cb.checked) {
                //         otherText.style.visibility = 'visible';
                //         otherText.value = '';
                //         valid = false;
                //     } else {
                //         otherText.style.visibility = 'hidden';
                //     }
                // });
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
            fetch(`${APP_URL}/api/corporate_registration`, {
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