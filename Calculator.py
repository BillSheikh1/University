answer = 'y'
print ("Welcome to your calculator.")
while True:
    try:
        n = int(input("Enter initial number: "))
    except ValueError:
        print('Not a number.')
        continue
    else:
        print(n)
        break
while answer == 'y':
    f = input('Enter function: ')
    if f == '+':
        print(f)
        a = int(input('Enter second number: '))
        print(str(n) + str(f) + str(a))
        n = n + a
        print(n)
    elif f == '-':
        print(f)
        a = int(input('Enter second number: '))
        print(str(n) + str(f) + str(a))
        n = n - a
        print(n)
    elif f == '*':
        print(f)
        a = int(input('Enter second number: '))
        print(str(n) + str(f) + str(a))
        n = n * a
        print(n)
    elif f == '/':
        print(f)
        a = int(input('Enter second number: '))
        print(str(n) + str(f) + str(a))
        n = n / a
        print(n)
    else:
        print('Not a valid function.')

    cont = str(input('Would you like to continue (y/n): '))
    if cont == 'y':
        restart = str(input('Would you like to restart (y/n): '))
        if restart == 'y':
            while True:
                try:
                    n = int(input('Enter initial number: '))
                except ValueError:
                    print('Not a number.')
                    continue
                else:
                    print(n)
                    break
        elif restart == 'n':
            print(n)
        else:
            print('Not a valid option.')
    else:
        break


