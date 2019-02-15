class Solution:
    def countPrimes(self, n):
        """
        :type n: int
        :rtype: int
        """
        count = 0
        for i in range(2, n):
            if(self.check(i)):
                count = count + 1
        return count        

    def check(self, n):
        for a in range(2, n):
            if n % a == 0:
                return False
        return True
            
        

         
if __name__ == '__main__':
    s = Solution()
    x = 499979
    y = 50
    r = s.countPrimes(x)
    print(r)