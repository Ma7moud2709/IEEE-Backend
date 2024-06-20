x = int(input())

result = 0

while x > 0:
    if x % 2 == 1:
        result += 1
    x //= 2

print(result)
