req = [('LEN', '>', 8),('LETTERS', '>', 0),('NUMBERS', '>', 0),('SPECIALS', '>', 0)]
passwd = "sdasdas*"


def checkPasswd(x):
    match x[0]:
        case 'LEN':
            if checkLengh(passwd,x[1],x[2]): 
                return "LEN - PASSOU"
            else: 
                return "LEN - NÃO PASSOU"
        case 'LETTERS':
            if checkLetters(passwd,x[1],x[2]):
                return "LETTERS - PASSOU"
            else: 
                return "LETTERS - NÃO PASSOU"
        case 'NUMBERS':
            if checkNumbers(passwd,x[1],x[2]):
                return "NUMBERS - PASSOU"
            else: 
                return "NUMBERS - NÃO PASSOU"
        case 'SPECIALS':
            if checkSpecials(passwd,x[1],x[2]):
                return "SPECIALS - PASSOU"
            else: 
                return "SPECIALS - NÃO PASSOU"

def checkLengh(passwd,operator,value):
    passSize = len(passwd)
    print(passSize)
    match operator:
        case '=':
            return passSize == value
        case '>':
            return passSize > value
        case '<':
            return passSize < value
    return True

def checkLetters(passwd,operator,value):
    numberOfLetters = list(map(lambda x: x.isalpha(),passwd)).count(True)
    print(numberOfLetters)
    match operator:
        case '=':
            return numberOfLetters == value
        case '>':
            return numberOfLetters > value
        case '<':
            return numberOfLetters < value
    return True

def checkNumbers(passwd,operator,value):
    numberOfNumbers = list(map(lambda x: x.isnumeric(),passwd)).count(True)
    print(numberOfNumbers)
    match operator:
        case '=':
            return numberOfNumbers == value
        case '>':
            return numberOfNumbers > value
        case '<':
            return numberOfNumbers < value
    return True

def checkSpecials(passwd,operator,value):
    numberOfSpecials = list(map(lambda x: not(x.isnumeric() or x.isalpha()),passwd)).count(True)
    print(numberOfSpecials)
    match operator:
        case '=':
            return numberOfSpecials == value
        case '>':
            return numberOfSpecials > value
        case '<':
            return numberOfSpecials < value
    return True

for val in req:
    print(checkPasswd(val))

