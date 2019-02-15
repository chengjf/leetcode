class Solution:
    def sortArrayByParity(self, A):
        """
        :type A: List[int]
        :rtype: List[int]
        """
        even = []
        odd = []
        result = []
        for i in A:
            if i%2 == 0:
                even.append(i)
            else:
                odd.append(i)
        result.extend(even)
        result.extend(odd) 
        return result



if __name__ == '__main__':
    s = Solution()
    a = [3,1,2,4]
    r = s.sortArrayByParity(a)
    print(r)