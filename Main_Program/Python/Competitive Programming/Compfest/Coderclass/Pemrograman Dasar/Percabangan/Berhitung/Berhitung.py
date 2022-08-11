import math

x,y,z = map(str,input().split())

if y == "+":
    print(int(x)+int(z))
elif y == "-":
    print(int(x)-int(z))
elif y == "*":
    print(int(x)*int(z))
elif y == "/":
    print(math.floor(int(x)/int(z)))
elif y == "%":
    print(int(x)%int(z))