/*не читаем*/

function ArrayOrNot(input) {
  /*Определяем, является ли элемент множеством */
  return( Array.isArray(input) )

}
    
function NumberOrNot(input) {
  /*Определяем, является ли элемент числом */
  return( Number.isInteger(input) )

}

function HowMuch(input) {
  /*Определяем длину массива */
  let number = input.length
  return number

}

function Out(input, prime) {

  /*генерация сообщения*/
  if (prime) {
    console.log("Число", input, "простое")
  } else {
    console.log("Число", input, "не простое")
  } 
}

function PrimeDetermination(input) {
  /*Проверяем элемент на простоту, самым топорным методом,
    и загоняем в Out*/
  let prime = true
  for (let i = 2; i < input; i++){
    if (input % i == 0){
      prime = false
    }
  }
  Out(input, prime)
}

function isPrime(input) {
  /*Здесь проверяем на число/массив во входе,
   если да - загоняем в PrimeDetermination*/
  if ( Number.isInteger(input) ) {
    PrimeDetermination(input)
  } else if ( ArrayOrNot(input)) {
    for (let i = 0; i < HowMuch(input); i++) {
      if ( NumberOrNot(input[i]) ){
        PrimeDetermination(input[i])
      } else {
        console.log("У вас тут", input[i], "в массиве застряло")
      }
    }

  } else {
    console.log(input, "не является числом/массивом")
  }

}