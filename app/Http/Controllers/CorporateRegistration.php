<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CorporateRegistration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $transactionResult = DB::transaction(function () use ($request) {

                DB::table("corporate")->insert([
                    "productType" => $request->productType,
                    "entityType" => $request->entityType,
                    "businessName" => $request->businessName,
                    "investmentObjective" => $request->investmentObjective,
                    "certificateIncorporationNumber" => $request->certificateIncorporationNumber,
                    "tin" => $request->tin,
                    "dateIncorporationRegistration" => $request->dateIncorporationRegistration,
                    "licenseNumber" => $request->licenseNumber,
                    "jurisdictionIncorporation" => $request->jurisdictionIncorporation,
                    "parentCompanyIncorporation" => $request->parentCompanyIncorporation,
                    "natureOfBusiness" => $request->natureOfBusiness,
                    "industry" => $request->industry,
                    "principalPlaceOfBusiness" => $request->principalPlaceOfBusiness,
                    "gps" => $request->gps,
                    "emailAddress" => $request->emailAddress,
                    "websiteAddress" => $request->websiteAddress,
                    "phone1" => $request->phone1,
                    "phone2" => $request->phone2,
                    "sig1Title" => $request->sig1Title,
                    "sig1Tin" => $request->sig1Tin,
                    "sig1Surname" => $request->sig1Surname,
                    "sig1Name" => $request->sig1Name,
                    "sig1Dob" => $request->sig1Dob,
                    "sig1MaidenName" => $request->sig1MaidenName,
                    "sig1Pob" => $request->sig1Pob,
                    "sig1MaritalStatus" => $request->sig1MaritalStatus,
                    "sig1CountryOfResidence" => $request->sig1CountryOfResidence,
                    "sig1CountryOfOrigin" => $request->sig1CountryOfOrigin,
                    "sig1MaidenContactNumber" => $request->sig1MaidenContactNumber,
                    "sig1MotherMaidenName" => $request->sig1MotherMaidenName,
                    "sig1Spouse" => $request->sig1Spouse,
                    "sig1ResidencePermitNumber" => $request->sig1ResidencePermitNumber,
                    "sig1PlaceOfIssue" => $request->sig1PlaceOfIssue,
                    "sig1PermitIssueDate" => $request->sig1PermitIssueDate,
                    "sig1PermitExpiryDate" => $request->sig1PermitExpiryDate,
                    "sig1EmailAddress" => $request->sig1EmailAddress,
                    "sig2MaidenName" => $request->sig2MaidenName,
                    "sig2MotherMaidenName" => $request->sig2MotherMaidenName,
                    "sig2Spouse" => $request->sig2Spouse,
                    "sig2MaritalStatus" => $request->sig2MaritalStatus,
                    "sig2Pob" => $request->sig2Pob,
                    "sig2MaidenContactNumber" => $request->sig2MaidenContactNumber,
                    "sig2CountryOfOrigin" => $request->sig2CountryOfOrigin,
                    "sig2ResidencePermitNumber" => $request->sig2ResidencePermitNumber,
                    "sig2PlaceOfIssue" => $request->sig2PlaceOfIssue,
                    "sig2PermitIssueDate" => $request->sig2PermitIssueDate,
                    "sig2DateOfIssue" => $request->sig2DateOfIssue,
                    "sig2ID" => $request->sig2ID,
                    "sig2IdType" => $request->sig2IdType,
                    "sig2PermitExpiryDate" => $request->sig2PermitExpiryDate,
                    "sig2DateExpiry" => $request->sig2DateExpiry,
                    "sig2JobTitle" => $request->sig2JobTitle,
                    "sig2EmailAddress" => $request->sig2EmailAddress,
                    "sig3Name" => $request->sig3Name,
                    "sig3Tin" => $request->sig3Tin,
                    "sig3Title" => $request->sig3Title,
                    "sig2ResidentialAddress" => $request->sig2ResidentialAddress,
                    "sig3Dob" => $request->sig3Dob,
                    "sig3Pob" => $request->sig3Pob,
                    "sig3MaritalStatus" => $request->sig3MaritalStatus,
                    "sig3Spouse" => $request->sig3Spouse,
                    "sig3MaidenContactNumber" => $request->sig3MaidenContactNumber,
                    "sig3MotherMaidenName" => $request->sig3MotherMaidenName,
                    "sig3CountryOfOrigin" => $request->sig3CountryOfOrigin,
                    "sig3CountryOfResidence" => $request->sig3CountryOfResidence,
                    "sig3PlaceOfIssue" => $request->sig3PlaceOfIssue,
                    "sig3PermitExpiryDate" => $request->sig3PermitExpiryDate,
                    "sig3PermitIssueDate" => $request->sig3PermitIssueDate,
                    "sig3PermitExpiryDate" => $request->sig3PermitExpiryDate,
                    "sig3IdType" => $request->sig3IdType,
                    "sig3ID" => $request->sig3ID,
                    "sig3DateOfIssue" => $request->sig3DateOfIssue,
                    "sig3DateExpiry" => $request->sig3DateExpiry,
                    "sig3JobTitle" => $request->sig3JobTitle,
                    "sig3EmailAddress" => $request->sig3EmailAddress,
                    "sig3ResidentialAddress" => $request->sig3ResidentialAddress,
                    "bankName" => $request->bankName,
                    "accountName" => $request->accountName,
                    "accountNumber" => $request->accountNumber,
                    "trusteePhone3" => $request->trusteePhone3,
                    "trusteeStatus3" => $request->trusteeStatus3,
                    "trusteeId3" => $request->trusteeId3,
                    "trusteeName3" => $request->trusteeName3,
                    "trusteeSurname3" => $request->trusteeSurname3,
                    "trusteePhone2" => $request->trusteePhone2,
                    "trusteeStatus2" => $request->trusteeStatus2,
                    "trusteeId2" => $request->trusteeId2,
                    "trusteeName2" => $request->trusteeName2,
                    "trusteeSurname2" => $request->trusteeSurname2,
                    "bankBranch" => $request->bankBranch,
                    "trusteeSurname4" => $request->trusteeSurname4,
                    "trusteeName4" => $request->trusteeName4,
                    "trusteeId4" => $request->trusteeId4,
                    "trusteeStatus4" => $request->trusteeStatus4,
                    "trusteePhone4" => $request->trusteePhone4,
                    "beneficialSurname1" => $request->beneficialSurname1,
                    "beneficialName1" => $request->beneficialName1,
                    "beneficialStatus1" => $request->beneficialStatus1,
                    "beneficialOwnership1" => $request->beneficialOwnership1,
                    "beneficialDob1" => $request->beneficialDob1,
                    "beneficialOwnership2" => $request->beneficialOwnership2,
                    "beneficialStatus2" => $request->beneficialStatus2,
                    "beneficialName2" => $request->beneficialName2,
                    "beneficialSurname2" => $request->beneficialSurname2,
                    "beneficialPhone1" => $request->beneficialPhone1,
                    "beneficialId1" => $request->beneficialId1,
                    "beneficialResidence1" => $request->beneficialResidence1,
                    "beneficialCountry1" => $request->beneficialCountry1,
                    "beneficialPob1" => $request->beneficialPob1,
                    "beneficialDob2" => $request->beneficialDob2,
                    "beneficialAddress2" => $request->beneficialAddress2,
                    "beneficialPob2" => $request->beneficialPob2,
                    "beneficialCountry2" => $request->beneficialCountry2,
                    "beneficialResidence2" => $request->beneficialResidence2,
                    "beneficialId2" => $request->beneficialId2,
                    "beneficialPhone2" => $request->beneficialPhone2,
                    "beneficialSurname3" => $request->beneficialSurname3,
                    "beneficialName3" => $request->beneficialName3,
                    "beneficialStatus3" => $request->beneficialStatus3,
                    "modeOfStatementDelivery" => $request->modeOfStatementDelivery,
                    "beneficialPhone3" => $request->beneficialPhone3,
                    "beneficialId3" => $request->beneficialId3,
                    "beneficialResidence3" => $request->beneficialResidence3,
                    "beneficialCountry3" => $request->datebeneficialCountry3,
                    "beneficialPob3" => $request->beneficialPob3,
                    "beneficialAddress3" => $request->beneficialAddress3,
                    "beneficialDob3" => $request->beneficialDob3,
                    "beneficialOwnership3" => $request->beneficialOwnership3,
                    "statementFrequency" => $request->statementFrequency,
                    "sourceOfFunds" => $request->sourceOfFunds,
                    "initialInvestmentAmount" => $request->initialInvestmentAmount,
                    "topUps" => $request->topUps,
                    "withdrawals" => $request->withdrawals,
                    "anticipatedInvestmentAmount" => $request->anticipatedInvestmentAmount,
                    "regularWithdrawal" => $request->regularWithdrawal,
                    "accountHolderInformation" => $request->accountHolderInformation,
                    "nameOfSignatory1" => $request->nameOfSignatory1,
                    "levelOfRisk" => $request->levelOfRisk,
                    "clientVerificationScreening" => $request->clientVerificationScreening,
                    "comments" => $request->comments,
                    "executiveName" => $request->executiveName,
                    "reviewedApprove" => $request->reviewedApprove,
                    "position" => $request->position,
                    "processedBy" => $request->processedBy,
                    "relationshipManager" => $request->relationshipManager,
                    "nameOfSignatory2" => $request->nameOfSignatory2,
                    "sig1IdType" => $request->sig1IdType,
                    "sig1ID" => $request->sig1ID,
                    "sig1DateOfIssue" => $request->sig1DateOfIssue,
                    "sig1DateExpiry" => $request->sig1DateExpiry,
                    "sig1JobTitle" => $request->sig1JobTitle,
                    "sig1ResidentialAddress" => $request->sig1ResidentialAddress,
                    "sig2CountryOfResidence" => $request->sig2CountryOfResidence,
                    "sig3Surname" => $request->sig3Surname,
                    "sig3MaidenName" => $request->sig3MaidenName,
                    "sig3ResidencePermitNumber" => $request->sig3ResidencePermitNumber,
                    "beneficialAddress1" => $request->beneficialAddress1,
                    "nameOfSignatory3" => $request->nameOfSignatory3,

                    "sig2Title" => $request->sig2Title,
                    "sig2Tin" => $request->sig2Tin,
                    "sig2Surname" => $request->sig2Surname,
                    "sig2Name" => $request->sig2Name,
                    "sig2Dob" => $request->sig2Dob,

                    "appropriateDisclosure" => $request->appropriateDisclosure,
                    "headOfState" => $request->headOfState,
                    "treasuryBill" => $request->treasuryBill,
                    "monthlyTurnover" => $request->monthlyTurnover,
                    "annualTurnover" => $request->annualTurnover,
                    "sig3ResidentialStatus" => $request->sig3ResidentialStatus,
                    "sig3Gender" => $request->sig3Gender,
                    "sig2ResidentialStatus" => $request->sig2ResidentialStatus,
                    "sig2Gender" => $request->sig2Gender,
                    "sig1ResidentialStatus" => $request->sig1ResidentialStatus,
                    "riskTolerance" => $request->riskTolerance,
                    "investmentHorizon" => $request->investmentHorizon,
                ]);
            });


            if (!empty($transactionResult)) {
                throw new Exception($transactionResult);
            }
            return response()->json([
                "ok" => true,
                "msg" => "Registered Successfully"
            ]);
        } catch (\Exception $e) {
            Log::error("Failed adding user: " . $e->getMessage());
            return response()->json([
                "ok" => false,
                "msg" => "Adding user failed",
                "error" => [
                    "msg" => $request->e->__toString(),
                    "err_msg" => $request->e->getMessage(),
                    "fix" => "Please complete all required fields",
                ]
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
