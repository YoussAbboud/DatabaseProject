$(document).ready(function() {
    $('.carousel').carousel({
      interval: 3500
    })
 



  $("#signin_btt").click(function(){
    
    var email = $("#inputemail").val();
    var password = $("#inputpassword").val();

    $.ajax({
      url: "./verification/verification.php",
      data: {
        "email": email,
        "password": password,
      },
      type: "POST",
      success: function(data){ 
      
          console.log(data);
          if(data == "falsepass")
          {
              alert("Wrong password");
          }
          else if(data == "falseemail")
          {
              alert("No email with this");
          }
          else if(data == "true")
          {
              alert("Sucess!");
              window.location.replace("index2.php");
          }
        }
    });       
  });



  $("#signup_btt").click(function(){
    
    var email = $("#inputEmail").val();
    var password = $("#inputPassword").val();
    var firstname = $("#fn").val();
    var lastname = $("#ln").val();
    var date = $("#inputDate").val();
    var address = $("#inputAddress").val();

    $.ajax({
      url: "./verification/signup.php",
      data: {
        "email": email,
        "password": password,
        "firstname": firstname,
        "lastname": lastname,
        "date": date,
        "address":address, 
      },
      type: "POST",
      success: function(data){  
          console.log(data);
          if(data == "already exists")
          {
              alert("email already exists");
          }
          else if(data == "true")
          {
              alert("Sucess!");
              window.location.replace("index2.php");
          }
        }
    });       
  });

});

$("#review_btt").click(function(){
    var id = $("#idD").val()
  var review =  $("#review").val()

  $.ajax({
    url: "./verification/rev.php",
    data: {
      "review": review,
      "id" : id ,
    },
    type: "POST",
    success: function(data){  
        console.log(data);
        
          alert("Sucess!");
            window.location.replace("index2.php");
          
      }
  });       
});




$(".signupform").hover(function(){
  $("#inputemail").attr("disabled","disabled");
}





)


function onSignIn(googleUser) {
  // Useful data for your client-side scripts:
  var profile = googleUser.getBasicProfile();
  console.log("ID: " + profile.getId()); // Don't send this directly to your server!
  console.log('Full Name: ' + profile.getName());
  console.log('Given Name: ' + profile.getGivenName());
  console.log('Family Name: ' + profile.getFamilyName());
  console.log("Image URL: " + profile.getImageUrl());
  console.log("Email: " + profile.getEmail());

  // The ID token you need to pass to your backend:
  var id_token = googleUser.getAuthResponse().id_token;
  console.log("ID Token: " + id_token);
}
gapi.load('auth2' , function()
{
  gapi.auth2.init();
})