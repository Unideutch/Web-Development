/*не читаем*/

function ArrayOrNot( /*Не знаю, что тут с переменными*/ input ) {
  
  console.log("Why woudn't you die?!")
  return( Array.isArray(input) )

}
    
function NumberOrNot( /*Все еще не в курсе*/ input ) {

  console.log("How it works?")  
  return( Number.isInteger(input) )

}

function HowMuch( /*Не-а, ниче не поменялось*/ input ) {
  
  let number = input.length
  return number

}

function Out( /*Да-да, мне стыдно*/ input ) {

  if ( ArrayOrNot(input) ) {
    
    for ( let i = 0; i < HowMuch(input); i++) {
      console.log(input[i])
    }

  } else if ( NumberOrNot(input) ) {
    console.log("qof")
  } else {
    console.log("Nanomachines, son!")
  }
    
}