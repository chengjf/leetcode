class Solution:
    def flipAndInvertImage(self, A):
        """
        :type A: List[List[int]]
        :rtype: List[List[int]]
        """
        result = []
        for x in A:
            x.reverse()
            x = [1-i for i in x]
            result.append(x)
        return result   

if __name__ == '__main__':
    s = Solution()
    x = "LL"
    x = 'UD'
    x = 'URDL'
    x = [[1,1,0],[1,0,1],[0,0,0]]
    x = [[1,1,0,0],[1,0,0,1],[0,1,1,1],[1,0,1,0]]
    r = s.flipAndInvertImage(x)
    print(r)