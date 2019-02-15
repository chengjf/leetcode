class Solution:
    d = {}
    def climbStairs(self, n):
        """
        :type n: int
        :rtype: int
        """
        return self.c(n)

    def c(self, n):
        if n == 0:
            return 0
        if n == 1:
            return 1
        if n == 2:
            return 2
        x = self.d.get(n-1)
        y = self.d.get(n-2)
        if not x:
            x = self.c(n-1)
            self.d[n-1] = x
        if not y:
            y = self.c(n-2)
            self.d[n-2] = y    
        return x + y



if __name__ == '__main__':
    print("hello")
    s = Solution()

    for i in range(50):
        a = s.climbStairs(i)
        print(i,a)