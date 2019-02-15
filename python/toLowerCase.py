class Solution:
    def toLowerCase(self, str):
        """
        :type str: str
        :rtype: str
        """
        return str.lower()



if __name__ == '__main__':
    s = Solution()
    a = "HellO"
    r = s.toLowerCase(a)

    print(r)