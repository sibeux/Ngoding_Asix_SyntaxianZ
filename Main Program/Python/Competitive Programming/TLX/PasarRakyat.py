n = int(input())

result = 0
for x in range(1, n + 1):
    if x == 1:
        numb = int(input())
        result = numb
    else:
        numb = int(input())
        if numb % result == 0:
            result = numb
        else:
            result = numb * result

print(result)
