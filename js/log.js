//form validation 

				function valid()
				{
				//name
				var n=document.getElementById("name").value;

				
				if(f==""|| l==""){
				alert("Name is empty");
				return false;
				}
				//phone number
				var p=document.getElementById("phone").value;
				if(p.length>11){
				
				alert("phone number is invalid");
				return false;
				}
				if(isNaN(p)){
				
				alert("Enter the valid value for phone filed");
				return false;
				}
				//gender check
				var male= document.getElementById("m").checked;
				var female=document.getElementById("f").checked;
				
				if(male==false && female==false){
				
				alert("select gender");
				return false;
				}
				//password check
				var p=document.getElementById("password").value;
				var re=document.getElementById("password1").value;
				if(p.length<9){
				alert("password should not be less than 8 character");
				return false;
				}
				if(p!=re){
				alert("Password not matching");
				return false;
				}
				
				var check=document.getElementById("statement").checked;
				
				if(check==false){
				alert("Please accept privacy and policy terms and condition");
				return false;
				}
				}
				</script>