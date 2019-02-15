class Solution:
    data = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."]

    def uniqueMorseRepresentations(self, words):
        """
        :type words: List[str]
        :rtype: int
        """
        a = set()
        for w in words:
            l = ""
            for c in w:
                l = l + self.getCode(c)
            a.add(l)
        return len(a)

    def getCode(self, letter):
        return self.data[ord(letter) - ord('a')]


if __name__ == '__main__':
    s = Solution()
    a = ["gin", "zen", "gig", "msg"]
    r = s.uniqueMorseRepresentations(a)
    print(r)