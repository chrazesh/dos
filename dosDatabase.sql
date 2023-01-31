CREATE database dos;
CREATE TABLE `IntroductionDetails` (
  `id` bigint primary key AUTO_INCREMENT,
  `rName` varchar(200) NOT NULL,
  `rNameCapital` varchar(200) NOT NULL,
  `rDOB` date NOT NULL,
  `eDate` date NOT NULL,
  `rNational` varchar(200) NOT NULL,
  `rEducation` varchar(200) NOT NULL,
  `rProfession` varchar(200) NOT NULL,
  `rGender` varchar(200) NOT NULL,
  `rSpecialAbility` varchar(200) NOT NULL,
  `rMarital` varchar(50) NOT NULL,
  `rMotherToungue` varchar(200) NOT NULL,
  `rCitizenshipNo` varchar(100) NOT NULL,
  `rIssuedDate` date NOT NULL,
  `rIssuedLocation` varchar(200) NOT NULL
);

CREATE TABLE `PermanentAddress` (
  `id` bigint primary key AUTO_INCREMENT,
  `rWard` varchar(200) NOT NULL,
  `rMunici` varchar(200) NOT NULL,
  `rProvince` varchar(200) NOT NULL,
  `rDistrict` varchar(255) NOT NULL,
  `rTelephoneNo` varchar(200) NOT NULL,
  `rMobileNo` varchar(200) NOT NULL,
  `rEmail` varchar(200) NOT NULL
);

 CREATE TABLE `agps`(
  `id` bigint primary key AUTO_INCREMENT,
  `rWard` varchar(200) NOT NULL,
  `rDistrict` varchar(200) NOT NULL,
  `rCenter` varchar(200) NOT NULL,
  `rQualificationYears` varchar(255) NOT NULL,
  `rSmartCardNo` int(200) NOT NULL
 
 );

  CREATE TABLE `LanguageDetails`(
  `id` bigint primary key AUTO_INCREMENT,
  `rFirstLanguage` varchar(200) NOT NULL,
  `rSecondLanguage` varchar(200) NOT NULL,
  `rThirdLanguage` varchar(200) NOT NULL,
  `rForthLanguage` varchar(255) NOT NULL
  );


  CREATE TABLE `HealthDetails`(
  `id` bigint primary key AUTO_INCREMENT,
  `rBloodGroup` varchar(200) NOT NULL,
  `rChecked` varchar(200) NOT NULL,
  `rWrite` varchar(200) NOT NULL
  );

  CREATE TABLE `ServiceTimeDetails`(
  `id` bigint primary key AUTO_INCREMENT,
  `rCertainTime` varchar(200) NOT NULL,
  `rCertainDays` varchar(200) NOT NULL,
  `rCertainArea` varchar (200) NOT NULL,
  `rInvestmentTime` varchar(200) NOT NULL,
  `rInvestmentDays` varchar(200) NOT NULL,
  `rPlace` varchar(255) NOT NULL,
  `rDescription` varchar(5000) NOT NULL
  );

CREATE TABLE `ServiceAttachedDetails`(
  `id` bigint primary key AUTO_INCREMENT,
  `rPublicity` varchar(100) NOT NULL,
  `rKatrine` varchar(100) NOT NULL,
  `rPublicity1` varchar(100) NOT NULL,
  `rKatrine1` varchar(100) NOT NULL,
  `rPublicity2` varchar(100) NOT NULL,
  `rKatrine2` varchar(100) NOT NULL,
  `rPublicity3` varchar(100) NOT NULL,
  `rMc` varchar(100) NOT NULL,
  `rPublication` varchar(100) NOT NULL,
  `rIt` varchar(100) NOT NULL,
  `rMobileTent` varchar(100) NOT NULL,
  `rLoverWelcome` varchar(100) NOT NULL,
  `rMustardCleaning` varchar(100) NOT NULL,
  `rVideoGraphy` varchar(100) NOT NULL,
  `rVijuli` varchar(100) NOT NULL,
  `rSecurity` varchar(100) NOT NULL,
  `rAsring` varchar(100) NOT NULL,
  `rPhotographer` varchar(100) NOT NULL,
  `rCoach` varchar(100) NOT NULL,
  `rMedical` varchar(100) NOT NULL,
  `rRegistration` varchar(100) NOT NULL,
  `rVideoEditor` varchar(100) NOT NULL,
  `rPublicRelations` varchar(100) NOT NULL,
  `rBuyingAndSelling` varchar(100) NOT NULL,
  `rComputerOperator` varchar(100) NOT NULL,
  `rAdiyeEditor` varchar(100) NOT NULL,
  `rTranslation` varchar(100) NOT NULL,
  `rCook` varchar(100) NOT NULL,
  `rTypist` varchar(100) NOT NULL,
  `rAdiyaRecorded` varchar(100) NOT NULL,
  `rDepartmentOfServices` varchar(100) NOT NULL,
  `rKatrinHelper` varchar(100) NOT NULL,
  `rCultural` varchar(100) NOT NULL,
  `rLaw` varchar(100) NOT NULL,   
  `rProduction` varchar(100) NOT NULL,
  `rAccommodation` varchar(100) NOT NULL,
  `rSmartCard` varchar(100) NOT NULL,
  `rConstruction` varchar(100) NOT NULL,
  `rOfficeAssistant` varchar(100) NOT NULL,
  `rAdiya` varchar(100) NOT NULL,
  `rWorkShop` varchar(100) NOT NULL,
  `rGeneralService` varchar(100) NOT NULL
);

CREATE TABLE `CurrentAddress` (
  `id` bigint primary key AUTO_INCREMENT,
  `rWard` varchar(200) NOT NULL,
  `rMunici` varchar(200) NOT NULL,
  `rProvince` varchar(200) NOT NULL,
  `rDistrict` varchar(255) NOT NULL,
  `rTelephoneNo` varchar(200) NOT NULL,
  `rMobileNo` varchar(200) NOT NULL,
  `rEmail` varchar(200) NOT NULL
);



