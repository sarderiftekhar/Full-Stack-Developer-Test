
function validateform(){
    var input = document.jsform.text;
    var invalidInput = document.getElementById('invalid-feedback');
    //May not be empty.
    if(input.value == "")
    {
        alert("empty field!");
        // invalidInput.innerHTML = "empty field!";
        return false;
    }
    //May not be longer 255 characters.
    if(input.value.length > 255)
    {
        alert("characters length must be less than 225!");
        // invalidInput.innerHTML = "characters length must be less than 225!";
        return false;
    }
    //May not contain the word 'palindrome'.
    const lookupValue = "palindrome";
    if(!lookupString(input.value, lookupValue))
    {
        alert("given input contains a word 'Palindrome'");
        // invalidInput.innerHTML = "given input contains a word 'Palindrome'!";
        return false;
        
    }
    //May not be a palindrome.
    if(palindrome(input.value))
    {
        alert("given input is a Palindrome");
        //invalidInput.innerHTML = "given input is a Palindrome!";
        return false;
    }
    return false;
};
//for checking if a certain word contains in a string
function lookupString(testString, lookup){
    return testString.toLowerCase().indexOf(lookup) === -1;
}
//for checking palindrome word
function palindrome(testString){

    /* remove special characters, spaces and make lowercase*/
    var removeChar = testString.replace(/[^A-Z0-9]/ig, "").toLowerCase();

    var checkPalindrome = removeChar.split('').reverse().join('');

    if(removeChar === checkPalindrome){
        return true;
    }else{
        return false;
    }
}