function aanschaffen(){
var bevestigen = confirm("Op dit moment is het onmogelijk om Smartpass aan te kopen. U wordt omgeleid naar een pagina waar u zich op de wachtlijst kan zetten.");
if (bevestigen == true) {
    window.location.href='https://smartpass.one/wachtlijst.html';
}}