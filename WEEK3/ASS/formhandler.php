<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
function getDetails(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = htmlspecialchars($_POST["firstname"]);
        $middlename= htmlspecialchars($_POST["middlename"]);
        $lastname= htmlspecialchars($_POST["lastname"]);
        $gender = isset($_POST['gender'])?htmlspecialchars($_POST["gender"]): '';
        $email = htmlspecialchars($_POST["email"]);
        $phoneno= htmlspecialchars($_POST["phoneno"]);
        $walletbalance= htmlspecialchars($_POST["walletbalance"]);
        if (empty($email) || empty($lastname) || empty($middlename) || empty($firstname) ||empty($phoneno) || empty($walletbalance) || empty($gender)){
            exit("Form not submitted.Please fill in all the fields");
        }
        $arr =  Array();
        $arr['firstName'] = $firstname;  $arr['middleName'] = $middlename;
        $arr['lastName'] = $lastname; $arr['gender'] = $gender;
        $arr['phoneNumber'] = $phoneno; $arr['email'] = $email; $arr['walletBalance'] = $walletbalance ;
        $arr['fullName'] = "$firstname $middlename $lastname";
        return $arr; 
        // return ["firstName"=>$firstname, "middleName"=>$middlename, "lastName"=>$lastname, "Gender"=>$gender,"phoneNumber"=>$phoneno,"Email:"=>$email, "walletBalance"=>$walletbalance];    
    }   
}
$details = getDetails();
print_r($details);
echo "<br>";
function getPersonFullname(){
    $details = getDetails();
    $personFullname = "{$details['firstName']}{$details['middleName']}{$details['lastName']}";
   $count = strlen($personFullname);
   if ($count > 50){
    echo "Full name is too long <br/>";
   }
   else
   echo "Full name is OK <br/>";
            
}
getPersonFullname();
function manipulateWalletBalance (){
    $today = date('j'); //get today from date();
    $details= getDetails();
   // echo $details['walletBalance'];
   if ($today <= 10){
        $walletbalance = $details['walletBalance'] *10;
        $formatedWalletBalance = number_format($walletbalance, 0, '.', ','); // func number_format() is athousand separator in PHP.
        return "Wallet Balance: ₦$formatedWalletBalance";
   }
   else if ($today >10 && $today < 20){
        $walletbalance = $details['walletBalance'] * 11;
        $formatedWalletBalance = number_format($walletbalance, 0, '.', ',');
        return "Wallet Balance: ₦$formatedWalletBalance";
   }
   else 
        $walletbalance = $details['walletBalance'] * 20;
        $formatedWalletBalance = number_format($walletbalance, 0, '.', ',');
    return "Wallet Balance: ₦$formatedWalletBalance";
}
echo manipulateWalletBalance();
?>