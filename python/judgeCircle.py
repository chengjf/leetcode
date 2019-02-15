class Solution:
    def judgeCircle(self, moves):
        """
        :type moves: str
        :rtype: bool
        """
        x = 0
        for m in moves:
            if m == 'R':
                x = x + 1
            elif m == 'L':
                x = x - 1
            elif m == 'U':
                x = x + 10
            elif m == 'D':
                x = x - 10
        return x == 0


if __name__ == '__main__':
    s = Solution()
    x = "LL"
    x = 'UD'
    x = 'URDL'
    x = 'UDUDUDU'
    r = s.judgeCircle(x)
    print(r)