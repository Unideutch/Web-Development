let url = "http://localhost:4001";
let questionnaire = document.forms.questionnaire;
if ( questionnaire != null ) // меняем дефолтный submit для формы регистрации 
    questionnaire.addEventListener( "submit", event => // Вешаем обработчик на событие "submit"
    {
        event.preventDefault();
        console.log("Подписка");
        if ( isValide() ) SendData();
    } );

function SendData() {

    let settings = 
        { 
            body: new FormData(questionnaire),
            method: "post"
        };

    fetch( url + "/answer.php" , settings )
        .then( response => response.json() )
        .then( data =>
        {
            if( data.status < 200 || data.status > 299)
            {
                console.log(data.message);
                console.log("АшиПка");
                TurnOff();
                return;
            }

            console.log("Не АшиПка");
            let popupBg = document.querySelector('.popup__back');
            let popup = document.querySelector('.popup');
            popupBg.classList.remove('active');
            popup.classList.remove('active');
        } );

}

function isValide()
{
    let validName = true;
    let validEmale = true;
    console.log("Ухырбазоданрак")
    let nameRegex = "^[a-zA-Z]+$";
    if ( !TestField( questionnaire.name, nameRegex ) ) {
        validName = false;
    }

    // let emailRegex = "^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+)\.([a-zA-Z0-9]{2,4})+$";
    let emailRegex = '^(?=.{1,64}@)[A-Za-z0-9_-]+(\\.[A-Za-z0-9_-]+)*@[^-][A-Za-z0-9-]+(\\.[A-Za-z0-9-]+)*(\\.[A-Za-z]{2,})$';
    if ( !TestField( questionnaire.email, emailRegex ) ) {
        validEmale = false;
    }

    if (!validName % !validEmale){
        return false;
    } else {
        return true;
    }
    
    function TestField( field, regexStr ) {
        let value = field.value;
        if ( value == null ) 
        {
            return false;
        }

        let regex = new RegExp( regexStr );
        let isValid = regex.test( value );

        if ( isValid ) {
            field.classList.remove( "input__error" );
        } else {
            field.classList.add( "input__error" );
        } 
        return isValid;
    }
}

function TurnOff()
{
    let firstBlock = document.querySelector('.questionnaire__welcome'); 
    let secondBlock = document.querySelector('.form');
    let errorMessage = document.querySelector('.error__message'); 
    firstBlock.classList.add("inactive");
    secondBlock.classList.add("inactive");
    errorMessage.classList.add("active");
}