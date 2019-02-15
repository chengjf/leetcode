class Solution:
    def selfDividingNumbers(self, left, right):
        """
        :type left: int
        :type right: int
        :rtype: List[int]
        """
        result = []
        for i in range(left, right + 1):
            if self.check(i):
                result.append(i)
        return result

    def check(self, n):
        d = 1
        while d <= 10000 and n >= d:
            r = (int(n/d)) % 10
            if r >= 1:
                if n%r != 0:
                    return False      
            if r == 0:
                return False        
            d = d * 10
        return True    
         
if __name__ == '__main__':
    s = Solution()
    x = 30
    y = 50
    r = s.selfDividingNumbers(x, y)
    print(r)