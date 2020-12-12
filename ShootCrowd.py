import math

def Powerof2(n): 
    p = int(math.log(n, 2))   # math.log(100, 2) = 6.64, int(6.64) = 6
    return int(pow(2, p))   # pow(2, 6) = 64

n = int(input("Enter no. of people standing in circle: "))
k = Powerof2(n)
s = 2 * (n - k) + 1
print("Survivor: ", s)


"""
Let's consider an example where 32 people are standing in a circle, 
as the gun was with 1 first so he will kill 2 and then then gun will be passed to 3 and so on. 
Thus in first round half of the people will be dead 16 will be left, 
and in every round we will be left with half of the people so from 16 to 8 to 4 to to 2 and 
in last we will be left with 1, and there we have our answer i.e 1. 
Thus for all the numbers which are a power of 2 like 32 was, we will end up with answer 1.
Now let's consider a case when number is not a power of 2 i.e 50. 
The closest number to 50 which is power of 2 is 32 and 50-32 = 18, 
thus if firstly 18 people die then 32 people will be left and 
the person which will have gun at that time will survive till end. 
If 18 are killed alternatively thus last person killed would be 36 which will be killed by 35 
and gun will be passed to 37 and which will be the answer.

Considering k is the closest power of 2 and n is the given number.
Answer will be : 2(n - 2^k) + 1
"""