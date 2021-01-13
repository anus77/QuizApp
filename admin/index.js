
function login(){
  
    var userEmail= document.getElementById("email_feild").value;
    var userPass = document.getElementById("password_feild").value;

firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error){

    var errorCode= error.code;
    var errorMessage= error.message;

    window.alert("Error:"+ errorMessage);
    

});

}
