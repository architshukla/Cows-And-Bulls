from random import randrange

def randomword():
    f=open('4letternorepeats.txt','r')
    wordlist=f.read().split()
    wordlistlength = len(wordlist)
    randnum = randrange(0,wordlistlength)
    return wordlist[randnum]
    
print randomword()
