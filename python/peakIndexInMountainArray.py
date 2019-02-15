class Solution:
    def peakIndexInMountainArray(self, A):
        """
        :type A: List[int]
        :rtype: int
        """
        pre = -1
        for i, a in enumerate(A):
            if a < pre:
                return i - 1
            else:
                pre = a                    

if __name__ == '__main__':
    s = Solution()
    x = "LL"
    x = 'UD'
    x = 'URDL'
    x = [0,1,0]
    x = [0,2,1,0]
    x = [0,1,2,3,4,5,6,7,10,8,5,6]
    r = s.peakIndexInMountainArray(x)
    print(r)