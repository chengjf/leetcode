class Solution:
    def numJewelsInStones(self, J, S):
        """
        :type J: str
        :type S: str
        :rtype: int
        """
        count = 0
        for j in J:
            count +=  S.count(j)
        return count


if __name__ == '__main__':
    print("hello")
    s = Solution()
    J = "aA"
    S = "aAAbbbb"
    J = "z"
    S = "ZZ"
    J = ""
    S = ""
    a = s.numJewelsInStones(J, S)
    print(a)