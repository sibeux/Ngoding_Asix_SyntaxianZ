num1, num2, num3 = map(int, input().split())
babak = (num1 + num2 + num3) // 7

if num1 == 4*babak or num2 == 4*babak or num3 == 4*babak:
    print("YA")
else:
    print("TIDAK")