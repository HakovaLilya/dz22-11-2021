function getCountVowelSymbols() {
    let body = document.querySelector('body').innerText;
    let bodyTextSymbolsAr = body.split('');
    let counter = 0;
    bodyTextSymbolsAr.forEach(function(currentSymbol) {
        if (
            currentSymbol == 'а' ||
            currentSymbol =='е' ||
            currentSymbol =='у' ||
            currentSymbol =='о' ||
            currentSymbol =='э' ||
            currentSymbol =='я' ||
            currentSymbol =='и' ||
            currentSymbol =='ю' ||
            currentSymbol =='ы' ||
            currentSymbol =='ё'
        ) {
            counter++;
        }
    });
    return counter;
}

function getCountWords() {
    let body = document.querySelector('body').innerText;
    let bodyWordsAr = body.split(' ');
    return bodyWordsAr.length;
}

