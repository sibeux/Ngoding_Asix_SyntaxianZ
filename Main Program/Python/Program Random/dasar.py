#fibonacci
def fibonacci(n):
    if n == 0:
        return 0
    elif n == 1:
        return 1
    else:
        return fibonacci(n-1) + fibonacci(n-2)

print(fibonacci(10))

print('hello world')
print('hello world')
print('sibe')

#fungsi
def fungsi(a,b):
    return a+b

#palindrome
def palindrome(kata):
    if len(kata) <= 1:
        return True
    elif kata[0] != kata[-1]:
        return False
    else:
        return palindrome(kata[1:-1])

print(palindrome('katak'))