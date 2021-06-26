''' Beware, Fastest solution upcoming! '''
import math

n = int(input("Enter number of people : "))

# math.floor is faster than int conversion in this case. Don't have any fucking clue why...
def findAns(n):
    return 2 * (n - 2**(math.floor(math.log(n, 2)))) + 1
    
print("Index of survived person :", findAns(n))
