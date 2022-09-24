let url = "http://localhost:4001";
let ask = document.forms.ask;
let anchor = document.getElementById("anchor");
console.log(anchor);
console.log(ask);
if ( ask != null ) // меняем дефолтный submit для формы регистрации 
    ask.addEventListener( "submit", event => // Вешаем обработчик на событие "submit"
    {
        event.preventDefault();
        console.log("Запрос");
        MakeAnswer();
    })

function MakeAnswer() {

    let settings = 
    { 
        method: "post"
    };
    console.log("Оно пытается")

    fetch( url + "/formAgain.php" , settings )
        .then( response => response.json() )
        .then( data =>
        {
            if( data.message == 2 )
            {
                console.log(data.message);
                console.log("В директории нет зарегистрированных пользователей");
            }
            if( data.message == 0)
            {
                let emails = data.emails;
                let names = data.names;
                let works = data.works;
                for( let i = 0; i < emails.length; i++ )
                {
                    ShowBlocks(emails[i], names[i], works[i]);
                }
            }

        } )
        //.catch( error => console.log("Нет formAgain") );

    function ShowBlocks(email, name, work) {
        anchor.innerHTML += 
        `
        <div class = "container">
            <p class = "container_string"> ${email} </p>
            <p class = "container_string"> ${name} </p>
            <p class = "container_string"> ${work} </p>
        </div>
        `
    }
}

