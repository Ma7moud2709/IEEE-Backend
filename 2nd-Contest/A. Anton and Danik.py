n = int(input());
plays = input();

if len(plays) > n:
    print('Allowed plays have been exceeded')
else:
    A = plays.count('A')
    D = plays.count('D')
    if (A > D):
        print("Anton")
    elif (D > A ):
        print("Danik")
    else:
        print("Friendship")