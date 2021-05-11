<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class IndividualController extends Controller
{
    /**
     * Display a lisitfName4g of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creaitfName4g a new resource.
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

                DB::table("individual")->insert([
                    "accountNumber" => $request->accountNumber,
                    "itf" => $request->itf,
                    "itfName1" => $request->itfName1,
                    "itfName2" => $request->itfName2,
                    "itfName3" => $request->itfName3,
                    "itfName4" => $request->itfName4,
                    "categoryInvestment" => $request->categoryInvestment,
                    "investmentPurpose" => $request->investmentPurpose,
                    "riskTolerance" => $request->riskTolerance,
                    "parentCompanyIncorporation" => $request->parentCompanyIncorporation,
                    "investmentKnowledge" => $request->investmentKnowledge,
                    "investmentHorizon" => $request->investmentHorizon,


                    "sig1Title" => $request->sig1Title,
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
                    "sig1ResidentialStatus" => $request->sig1ResidentialStatus,
                    "sig1Occupation" => $request->sig1Occupation,
                    "sig1Profession" => $request->sig1Profession,
                    "sig1Applicable" => $request->sig1Applicable,
                    "sig1ResidentialAddress" => $request->sig1ResidentialAddress,
                    "sig1NearestLandmark" => $request->sig1NearestLandmark,
                    "sig1GPS" => $request->sig1GPS,
                    "sig1Town" => $request->sig1Town,
                    "sig1Email" => $request->sig1Email,
                    "sig1Post" => $request->sig1Post,
                    "sig1Phone1" => $request->sig1Phone1,
                    "sig1Phone2" => $request->sig1Phone2,
                    "sig1IdType" => $request->sig1IdType,
                    "sig1ID" => $request->sig1ID,
                    "sig1PlaceOfIssue" => $request->sig1PlaceOfIssue,
                    "sig1DateOfIssue" => $request->sig1DateOfIssue,
                    "sig1DateExpiry" => $request->sig1DateExpiry,
                    "sig1ContactName" => $request->sig1ContactName,
                    "sig1RelationToClient" => $request->sig1RelationToClient,
                    "sig1ContactNumber" => $request->sig1ContactNumber,
                    "sig1Status" => $request->sig1Status,
                    "sig1TotalYearsOfEmployment" => $request->sig1TotalYearsOfEmployment,
                    "sig1YearsOfCurrentEmployment" => $request->sig1YearsOfCurrentEmployment,
                    "sig1TotalMonthlyIncome" => $request->sig1TotalMonthlyIncome,
                    "sig1EmployerSchoolName" => $request->sig1EmployerSchoolName,
                    "sig1YearsOfPreviousEmployment" => $request->sig1YearsOfPreviousEmployment,
                    "sig1EmployerSchoolAddress" => $request->sig1EmployerSchoolAddress,
                    "sig1NearestLandmark" => $request->sig1NearestLandmark,
                    "sig1DigitalAddress" => $request->sig1DigitalAddress,
                    "sig1City" => $request->sig1City,
                    "sig1NatureBusiness" => $request->sig1NatureBusiness,
                    "sig1Contact1" => $request->sig1Contact1,
                    "sig1OfficeContact" => $request->sig1OfficeContact,
                    "sig1Gender" => $request->sig1Gender,
                    "sig1Tin" => $request->sig1Tin,

                   
                    "sig2Title" => $request->sig2Title,
                    "sig2Surname" => $request->sig2Surname,
                    "sig2Name" => $request->sig2Name,
                    "sig2Dob" => $request->sig2Dob,
                    "sig2MaidenName" => $request->sig2MaidenName,
                    "sig2Pob" => $request->sig2Pob,
                    "sig2MaritalStatus" => $request->sig2MaritalStatus,
                    "sig2CountryOfResidence" => $request->sig2CountryOfResidence,
                    "sig2CountryOfOrigin" => $request->sig2CountryOfOrigin,
                    "sig2MaidenContactNumber" => $request->sig2MaidenContactNumber,
                    "sig2MotherMaidenName" => $request->sig2MotherMaidenName,
                    "sig2Spouse" => $request->sig2Spouse,
                    "sig2ResidencePermitNumber" => $request->sig2ResidencePermitNumber,
                    "sig2PlaceOfIssue" => $request->sig2PlaceOfIssue,
                    "sig2PermitIssueDate" => $request->sig2PermitIssueDate,
                    "sig2PermitExpiryDate" => $request->sig2PermitExpiryDate,
                    "sig2EmailAddress" => $request->sig2EmailAddress,
                    "sig2ResidentialStatus" => $request->sig2ResidentialStatus,
                    "sig2Occupation" => $request->sig2Occupation,
                    "sig2Profession" => $request->sig2Profession,
                    "sig2Applicable" => $request->sig2Applicable,
                    "sig2ResidentialAddress" => $request->sig2ResidentialAddress,
                    "sig2NearestLandmark" => $request->sig2NearestLandmark,
                    "sig2GPS" => $request->sig2GPS,
                    "sig2Town" => $request->sig2Town,
                    "sig2Email" => $request->sig2Email,
                    "sig2Post" => $request->sig2Post,
                    "sig2Phone1" => $request->sig2Phone1,
                    "sig2Phone2" => $request->sig2Phone2,
                    "sig2IdType" => $request->sig2IdType,
                    "sig2ID" => $request->sig2ID,
                    "sig2PlaceOfIssue" => $request->sig2PlaceOfIssue,
                    "sig2DateOfIssue" => $request->sig2DateOfIssue,
                    "sig2DateExpiry" => $request->sig2DateExpiry,
                    "sig2ContactName" => $request->sig2ContactName,
                    "sig2RelationToClient" => $request->sig2RelationToClient,
                    "sig2ContactNumber" => $request->sig2ContactNumber,
                    "sig2Status" => $request->sig2Status,
                    "sig2TotalYearsOfEmployment" => $request->sig2TotalYearsOfEmployment,
                    "sig2YearsOfCurrentEmployment" => $request->sig2YearsOfCurrentEmployment,
                    "sig2TotalMonthlyIncome" => $request->sig2TotalMonthlyIncome,
                    "sig2EmployerSchoolName" => $request->sig2EmployerSchoolName,
                    "sig2YearsOfPreviousEmployment" => $request->sig2YearsOfPreviousEmployment,
                    "sig2EmployerSchoolAddress" => $request->sig2EmployerSchoolAddress,
                    "sig2NearestLandmark" => $request->sig2NearestLandmark,
                    "sig2DigitalAddress" => $request->sig2DigitalAddress,
                    "sig2City" => $request->sig2City,
                    "sig2NatureBusiness" => $request->sig2NatureBusiness,
                    "sig2Contact1" => $request->sig2Contact1,
                    "sig2OfficeContact" => $request->sig2OfficeContact,
                    "sig2Gender" => $request->sig2Gender,
                    "sig2Tin" => $request->sig2Tin,


                    "bankName" => $request->bankName,
                    "accountName" => $request->accountName,
                    "accountNumber" => $request->accountNumber,
                    "bankBranch" => $request->bankBranch,

                    "surname1" => $request->surname1,
                    "name1" => $request->name1,
                    "relationshipApplicant1" => $request->relationshipApplicant1,
                    "contactNumber1" => $request->contactNumber1,
                    "percentageApplicant1" => $request->percentageApplicant1,
                    "maritalStatus1" => $request->maritalStatus1,
                    "dob1" => $request->dob1,
                    "pob1" => $request->pob1,
                    "countryOfOrigin1" => $request->countryOfOrigin1,
                    "countryOfResidence1" => $request->countryOfResidence1,
                    "residentialAddress1" => $request->residentialAddress1,
                    "typeOfId1" => $request->typeOfId1,
                    "idNumber1" => $request->idNumber1,
                    "placeOfIssue1" => $request->placeOfIssue1,
                    "dateOfIssue1" => $request->dateOfIssue1,
                    "dateOfExpiration1" => $request->dateOfExpiration1,
                    "surname2" => $request->surname2,
                    "name2" => $request->name2,
                    "relationshipApplicant2" => $request->relationshipApplicant2,
                    "contactNumber2" => $request->contactNumber2,
                    "percentageApplicant2" => $request->percentageApplicant2,
                    "maritalStatus2" => $request->maritalStatus2,
                    "dob2" => $request->dob2,
                    "pob2" => $request->pob2,
                    "countryOfOrigin2" => $request->countryOfOrigin2,
                    "countryOfResidence2" => $request->countryOfResidence2,
                    "residentialAddress2" => $request->residentialAddress2,
                    "typeOfId2" => $request->typeOfId2,
                    "idNumber2" => $request->idNumber2,
                    "placeOfIssue2" => $request->placeOfIssue2,
                    "dateOfIssue2" => $request->dateOfIssue2,
                    "dateOfExpiration2" => $request->dateOfExpiration2,
                    "surname3" => $request->surname3,
                    "name3" => $request->name3,
                    "relationshipApplicant3" => $request->relationshipApplicant3,
                    "contactNumber3" => $request->contactNumber3,
                    "percentageApplicant3" => $request->percentageApplicant3,
                    "maritalStatus3" => $request->maritalStatus3,
                    "dob3" => $request->dob3,
                    "pob3" => $request->pob3,
                    "countryOfOrigin3" => $request->countryOfOrigin3,
                    "countryOfResidence3" => $request->countryOfResidence3,
                    "residentialAddress3" => $request->residentialAddress3,
                    "typeOfId3" => $request->typeOfId3,
                    "idNumber3" => $request->idNumber3,
                    "placeOfIssue3" => $request->placeOfIssue3,
                    "dateOfIssue3" => $request->dateOfIssue3,
                    "dateOfExpiration3" => $request->dateOfExpiration3,
                    "surname4" => $request->surname4,
                    "name4" => $request->name4,
                    "relationshipApplicant4" => $request->relationshipApplicant4,
                    "contactNumber4" => $request->contactNumber4,
                    "percentageApplicant4" => $request->percentageApplicant4,
                    "maritalStatus4" => $request->maritalStatus4,
                    "dob4" => $request->dob4,
                    "pob4" => $request->pob4,
                    "countryOfOrigin4" => $request->countryOfOrigin4,
                    "countryOfResidence4" => $request->countryOfResidence4,
                    "residentialAddress4" => $request->residentialAddress4,
                    "typeOfId4" => $request->typeOfId4,
                    "idNumber4" => $request->idNumber4,
                    "placeOfIssue4" => $request->placeOfIssue4,
                    "dateOfIssue4" => $request->dateOfIssue4,
                    "dateOfExpiration4" => $request->dateOfExpiration4,

                    
                    "modeOfStatementDelivery" => $request->modeOfStatementDelivery,
                    "statementFrequency" => $request->statementFrequency,
                    "sourceOfFunds" => $request->sourceOfFunds,
                    "initialInvestmentAmount" => $request->initialInvestmentAmount,
                    "topUps" => $request->topUps,
                    "withdrawals" => $request->withdrawals,
                    "anticipatedInvestmentAmount" => $request->anticipatedInvestmentAmount,
                    "regularWithdrawal" => $request->regularWithdrawal,
                    "accountHolderInformation" => $request->accountHolderInformation,
                    "nameOfSignatory1" => $request->nameOfSignatory1,
                    "nameOfSignatory2" => $request->nameOfSignatory2,
                    "nameOfSignatory3" => $request->nameOfSignatory3,
                    "nameOfSignatory4" => $request->nameOfSignatory4,

                    "relationshipManager" => $request->relationshipManager,
                    "processedBy" => $request->processedBy,
                    "position" => $request->position,
                    "comments" => $request->comments,
                    "executiveName" => $request->executiveName,
                    "reviewedApprove" => $request->reviewedApprove,
                    "relationshipManager" => $request->relationshipManager,
                    "headOfState" => $request->headOfState,
                    "citizenOfForeignCountry" => $request->citizenOfForeignCountry,
                    "passportOfForeignCountry" => $request->passportOfForeignCountry,
                    "greencardOfForeignCountry" => $request->greencardOfForeignCountry,
                    "residentOfForeignCountry" => $request->residentOfForeignCountry,
                    "spentDaysOfForeignCountry" => $request->spentDaysOfForeignCountry,
                    "ifYesFullName" => $request->ifYesFullName,

                    "appropriateDisclosure" => $request->appropriateDisclosure,
                    "ifYesFullName" => $request->ifYesFullName,
                    "ifYesFullName" => $request->ifYesFullName,
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
     * Show the form for ediitfName4g the specified resource.
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
