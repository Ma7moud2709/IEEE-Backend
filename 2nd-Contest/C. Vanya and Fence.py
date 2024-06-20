n, h = map(int, input().split())
heights = list(map(int, input().split(" ")))

width = 0

for ai in heights:
    if ai > h:
        width += 2
    else:
        width += 1

print(width)