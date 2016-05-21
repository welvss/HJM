function printRX(val){

var win = window.open(val);
if(win){
    //Browser has allowed it to be opene
    win.focus();
}else{
    //Broswer has blocked it
    alert('Please allow popups for this site');
}
}