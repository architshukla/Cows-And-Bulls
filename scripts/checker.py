def checker(word,guess):
    bullscount=0
    cowscount=0
    wordlength=len(word)
    cbchecker=wordlength*[0]
    cbresult=""
    for i in range(0,wordlength):
        if word[i]==guess[i]:
            bullscount+=1
            cbchecker[i]=1
    for i in range(0,wordlength):
        if guess[i] in word and not(cbchecker[i]==1):
            cowscount+=1
    cbresult=str(bullscount)+'B'+str(cowscount)+'C'
    return cbresult

if __name__ == '__main__':
    print checker('word','mine')
    print checker('word','lord')
    print checker('word','road')
    print checker('rape','pear')
