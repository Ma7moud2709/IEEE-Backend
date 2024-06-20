n, k = map(int, input().split(" "))
count = 0;

for _ in range(n):
    ai = input()
    digits = set(str(ai))
    flag = True

    for digit in range(k+1):
        if str(digit) not in digits:
            flag = False
            break
    if flag:
        count += 1

print(count)
