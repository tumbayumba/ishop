try{
    $("input[name='LoginForm[rememberMe]']").parent().removeClass('bo4')
}
catch(e){
    console.log('ERROR: ',e)
}