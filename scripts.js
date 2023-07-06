// function sendMail() {
//     var params = {
//       name: document.getElementById("user_name").value,
//       email: document.getElementById("user_email").value,
//       message: document.getElementById("subject").value,
//       message: document.getElementById("message").value,
//     };
  
//     const serviceID = "service_0snpl6g";
//     const templateID = "template_kr3o558";
  
//       emailjs.send(serviceID, templateID, params)
//       .then(res=>{
//           document.getElementById("user_name").value = "";
//           document.getElementById("user_email").value = "";
          
//           document.getElementById("message").value = "";
//           console.log(res);
//           alert("Your message sent successfully!!")
  
//       })
//       .catch(err=>console.log(err));
  
//   }