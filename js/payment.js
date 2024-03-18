function enableButton()
{
if(document.getElementById("check").checked)
{
document.getElementById("btnsub").disabled = false;
}
else{
document.getElementById("btnsub").disabled = true;
}
}