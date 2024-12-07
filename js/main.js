
function confirm_delete(id){

    let del=confirm('Do You Want Delete This User ?');
    if(del == true){
        window.location.href = 'index.php?action=del&&id='+id;
    }

}
