class Solution:
    def hammingDistance(self, x, y):
        """
        :type x: int
        :type y: int
        :rtype: int
        """
        s = bin(x^y)
        count = s[2:].count('1')
        return count


if __name__ == '__main__':
    s = Solution()
    x = 65536
    y = 65535
    r = s.hammingDistance(x, y)
    print(r)