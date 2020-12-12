import math

def Powerof2(n): 
    p = int(math.log(n, 2))   # math.log(100, 2) = 6.64, int(6.64) = 6
    return int(pow(2, p))   # pow(2, 6) = 64

n = int(input("Enter no. of people standing in circle: "))
k = Powerof2(n)
s = 2 * (n - k) + 1
print("Survivor: ", s)